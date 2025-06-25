<?php namespace App\Modules\AdminUser\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\M_website;
use App\Model\User;
use App\Model\M_user_type;
use App\Model\M_type_permission;
use App\Model\M_permission;
use Auth;
use DB;

class RoleController extends Controller {
    public function post_role_new(Request $request){
        $this->authorize('admin_permission_edit');
        $this -> validate($request,
        [
            'name' => 'required|unique:user_type,name',
        ],
        [
            'name.required' => 'Bạn chưa nhập tên thể loại',
            'name.unique' => 'Định dạng đã tồn tại hoặc trùng với keyword của hệ thống',
        ]);
        $user_type = new M_user_type;
        $user_type -> name = $request -> name;
        $user_type -> url = change_title_to_url($request -> name);
        $user_type -> status = 'on';
        $user_type -> type = $request -> type;
        $user_type -> save();
        // them quyen
        if($request -> type == 'domain'){
            $permi = M_permission::where('type','web')->get();
            foreach($permi as $permi_r){
                $role = new M_type_permission;
                $role -> type_id = $user_type->id;
                $role -> permission_id = $permi_r->id;
                $role -> save();
            }
        }   
        
        return redirect()->back()->with('alert','Bạn đã lưu thành công');
    }

    public function post_role_edit(Request $request,$id){
        $this->authorize('admin_permission_edit');
        $this -> validate($request,
        [
            'name' => 'required|unique:user_type,name,'.$id,
        ],
        [
            'name.required' => 'Bạn chưa nhập tên thể loại',
            'name.unique' => 'Định dạng đã tồn tại hoặc trùng với keyword của hệ thống',
        ]);
        $user_type = M_user_type::find($id);
        if($user_type-> url == 'root'){
            return redirect()->back()->with('alert_error','Bạn không có quyền này');
        }
        $user_type -> name = $request -> name;
        $user_type -> url = $request -> url;
        $user_type -> type = $request -> type;
        $user_type -> save();
        
        return redirect()->back()->with('alert','Bạn đã lưu thành công');
    }

    //xoa
    public function get_role_del($id){
        $this->authorize('admin_permission_edit');
        $user_type = M_user_type::find($id);
        if($user_type-> url == 'root'){
            return redirect()->back()->with('alert_error','Bạn không có quyền này');
        }
    // xoa quyen
        M_type_permission::where('type_id',$id)->delete();
        User::where('user_type_id',$id)->delete();
        $user_type ->delete();
        return redirect()->back() -> with('alert','Bạn đã xóa thành công');
    }

     //danh sach quyen
     public function get_role_permission($user_type_id,$type){
        $this->authorize('admin_permission_edit');
        $permission = M_permission::all();
        $title = 'Danh sách quyền của thể loại thành viên'; 
        return view('AdminUser::role_permission',['type'=>$type,'permission'=>$permission,'user_type_id'=>$user_type_id,'title'=>$title]);
    }

    
    //them quyen 
    public function get_role_permission_add($user_type_id,$id,$type_r){
        $this->authorize('admin_permission_edit');
        //check
        if($type_r == 'user'){
            $type_permission = M_type_permission::where('permission_id',$id)->where('user_id',$user_type_id)->first();

            if($type_permission ==  null){
                $type = new M_type_permission;
                if($type_r == 'group'){
                    $type -> type_id = $user_type_id;
                }else{
                    $type -> user_id = $user_type_id;
                }
                $type -> permission_id = $id;
                $type -> type = $type_r;
                $type -> save();
            
            }else{
                $type_permission -> delete(); 
            }
        }else{
            $type_permission = M_type_permission::where('permission_id',$id)->where('type_id',$user_type_id)->first();
            if($type_permission ==  null){
                $type = new M_type_permission;
                if($type_r == 'group'){
                    $type -> type_id = $user_type_id;
                }else{
                    $type -> user_id = $user_type_id;
                }
                $type -> permission_id = $id;
                $type -> type = $type_r;
                $type -> save();
            
            }else{
                $type_permission -> delete(); 
            }
        }
    }

    public function get_role_domain($user_id){
        $this->authorize('admin_permission_edit');
        $permission = M_permission::all();
        $user = User::find($user_id);
        $title = 'Danh sách quyền của thể loại thành viên'; 
        return view('AdminUser::role_domain',['user'=>$user,'user_id'=>$user_id,'title'=>$title]);
       
    }

    public function get_role_domain_permission($user_id,$website_id,$type){
        $this->authorize('admin_permission_edit');
        $permission = M_permission::where('type','web')->get();
        $title = 'Danh sách quyền của thể loại thành viên'; 
        return view('AdminUser::role_domain_permission',['permission'=>$permission,'type'=>$type,'user_id'=>$user_id,'title'=>$title]);
       
    }

   
    public function get_status_domain_permission($user_id,$permission_id){ 
        $this->authorize('admin_permission_edit');
        //check
       $check = M_type_permission::where('user_id',$user_id)->where('permission_id',$permission_id)->first();
        if($check == ''){
            return 'off';
        }else{
            return 'on';
        }
    }



}

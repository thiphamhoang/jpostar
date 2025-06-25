<?php namespace App\Modules\Menu\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\M_menu;
use App\Model\M_menu_type;
use App\Model\M_cat;
use App\Model\M_theme;
use App\Model\M_theme_row;
use Auth;
use DB;

class MenuController extends Controller {
   public function post_menu_ajax(Request $request, $type_id){

      $this->authorize('menu_edit');

      foreach($request -> list as $key => $menu_1){
         M_menu:: where('id',$menu_1['id']) -> update(['orderby' => $key+1,'parent_id' => 0]);
         if(isset($menu_1['children'])){
            foreach($menu_1['children'] as $key_2 => $menu_2){
               M_menu::where('id',$menu_2['id']) -> update(['orderby' => $key_2+1, 'parent_id' => $menu_1['id']]);
               if(isset($menu_2['children'])){
                  foreach($menu_2['children'] as $key_3 => $menu_3){
                     M_menu::where('id',$menu_3['id']) -> update(['orderby' => $key_3+1, 'parent_id' => $menu_2['id']]);
                     if(isset($menu_3['children'])){
                        foreach($menu_3['children'] as $key_4 => $menu_4){
                           M_menu::where('id',$menu_4['id']) -> update(['orderby' => $key_4+1, 'parent_id' => $menu_3['id']]);

                        }
                     }
                  }
               }
            }
         }
      }
   }

   //post menu
   public function post_menu_edit(Request $request,$type_id,$id){
      $this->authorize('menu_edit');
         $this->authorize('menu_edit');
         $this -> validate($request,
            [
                'name' => 'max:100',
            ],
            [
                'name.max' => 'Tên thể danh mục có độ dài từ 1 đến 100 ký tự',
            ]);

            //them moi menu vao bang cat
         $menu  =  M_menu::where('id',$id) ->first();


         M_menu::where('id',$id) -> update([
            'name' =>$request -> name,
            'url' =>$request -> url,
            'type' =>$request -> type,
            'icon' =>$request -> icon,
            'menu_type_id' =>$type_id,
            'status' =>'on',
         ]);

         return redirect()-> back() -> with('alert','Sửa thành công');
   }

   public function index($type_id){
      $this->authorize('menu_view');

      if(!isset(M_menu_type::select('id')->first()->id)){
         M_menu_type::insert(['url'=>'Menu_mac_dinh','name'=>'Menu mặc định','status'=>'on','orderby'=>'1']);
      }
      if($type_id == 0){$type_id = M_menu_type::select('id')->first()->id;}

      $type = M_menu_type::where('id',$type_id)->first();
      $type_list = M_menu_type::all();
      $menu = M_menu:: orderby('orderby','asc')->where('menu_type_id',$type->id)->get();
      $cat_list = M_cat::where('status','on')->get();
      $row_list = M_theme_row::all();

      return view('Menu::index',['row_list'=>$row_list,'cat_list'=> $cat_list, 'menu' => $menu,'type'=>$type,'type_list'=>$type_list,'type_id'=>$type_id,'type'=>$type,'title'=>'Danh sách menu']);
   }

   public function post_menu_new_custome(Request $request, $type_id){
      $this->authorize('menu_edit');
         $this -> validate($request,
            [
                'name' => 'max:100',
            ],
            [
                'name.max' => 'Tên thể danh mục có độ dài từ 1 đến 100 ký tự',
            ]);
      if($request -> parent_id == 0){
         $max = M_menu::where('menu_type_id',$type_id)->where('parent_id',0)->count();
      }else{
         $max = M_menu::where('menu_type_id',$type_id)->where('parent_id',$request -> parent_id)->count();
      }
      //them moi menu vao bang cat
      $menu = new M_menu;
      $menu -> name = $request -> name;
      $menu -> url = $request -> url;

      $menu -> icon = $request -> icon;
      $menu -> type = $request ->type;
      $menu -> parent_id = $request -> parent_id;
      $menu -> menu_type_id = $type_id;
      $menu -> status = 'on';
      $menu -> orderby =  $max+1;

      //them anh muc con
      if($request -> subcat == 'on'){
         $cat = M_cat::where('url',$request -> url)->first();
         if(count($cat->f_child) > 0){
            foreach($cat->f_child as $cat_r){
               // them menu
               M_menu::insert(['status'=>'on','name'=>$cat_r->name, 'url' => $cat_r->url, 'menu_type'=> 'custome', 'parent_id'=> $menu->id,'menu_type_id'=> $type_id] );
            }
         }
      }

      $menu -> save();

         return redirect()->back() -> with('alert','Thêm thành công');
   }

   public function get_menu_del($type_id,$id){

      $this->authorize('menu_edit');
      $connect = M_menu::where('id',$id)->delete();

    	return redirect()->back() -> with('alert','Bạn đã xóa thành công');
   }

   //thay doi status
   public function get_change_status($type_id,$id){
      $this->authorize('menu_edit');
      $menu = M_menu::where('id',$id)->first();

      if($menu -> status == 'on'){
         M_menu::where('id',$id)->update(['status' => 'off']);
      }else{
         M_menu::where('id',$id)->update(['status' => 'on']);
      }
      return redirect() -> back() -> with('alert','Bạn đã thay đổi thành công');
   }//ket thuc doi status
}

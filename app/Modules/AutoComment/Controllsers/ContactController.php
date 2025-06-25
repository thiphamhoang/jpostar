<?php namespace App\Modules\AutoComment\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\M_comment;
use App\Model\M_contact;
use App\Model\M_cat;
use App\Model\M_product;
use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;

class ContactController extends Controller {

    public function get_contact(Request $request){
        $this->authorize('autocomment_edit');         

        $contact =  M_contact::paginate(50);
        return view('AutoComment::contact',['contact' => $contact,'title'=>'Danh sách bài viết']);
  
    }
   
    public function post_contact_new_multi(Request $request) {
        $this->authorize('autocomment_edit');
        $this ->validate($request,[ 'name'=> 'required', ],[ 'name.required'=> 'Bạn chưa nhập tên']);
        $val_array =  array_filter(preg_split('/\r\n|[\r\n]/', $request -> name));
        foreach($val_array as $val){
            $contact = new M_contact;
            $contact -> name = $val;
            $contact -> save();
        }
        return redirect()->back()->with('alert','Bạn đã thêm thành công');
    }

    public function post_contact_edit(Request $request,$id) {
        $this->authorize('autocomment_edit');
        $this ->validate($request,[ 'name'=> 'required', ],[ 'name.required'=> 'Bạn chưa nhập tên']);
      
            $contact =  M_contact::find($id);
            $contact -> name = $request->name;
            $contact -> tel = $request->tel;
            $contact -> email = $request->email;
            $contact -> save();
      
        return redirect()->back()->with('alert','Bạn sửa thành công');
    }

    public function get_contact_del($id){
        $this->authorize('cat_edit');
        
        $contact = M_contact::find($id);
        $contact->delete();

        return redirect()-> back() -> with('alert','Bạn đã xóa thành công');
    }
}

<?php namespace App\Modules\AutoComment\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\M_comment_content;
use App\Model\M_cat;
use App\Model\M_product;
use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;

class CommentContactController extends Controller {

    public function get_commentContent(Request $request){
        $this->authorize('autocomment_edit');         

        $commentContent =  M_comment_content::paginate(50);
        return view('AutoComment::commentContent',['commentContent' => $commentContent,'title'=>'Danh sách bài viết']);
  
    }
   
    public function post_commentContent_new_multi(Request $request) {
        $this->authorize('autocomment_edit');
        $this ->validate($request,[ 'content'=> 'required', ],[ 'content.required'=> 'Bạn chưa nhập tên']);
        $val_array =  array_filter(preg_split('/\r\n|[\r\n]/', $request -> content));
        foreach($val_array as $val){
            $commentContent = new M_comment_content;
            $commentContent -> content = $val;
            $commentContent -> save();
        }
        return redirect()->back()->with('alert','Bạn đã thêm thành công');
    }

    public function post_commentContent_edit(Request $request,$id) {
        $this->authorize('autocomment_edit');
        $this ->validate($request,[ 'content'=> 'required', ],[ 'content.required'=> 'Bạn chưa nhập tên']);
      
            $commentContent =  M_comment_content::find($id);
            $commentContent -> content = $request->content;

            $commentContent -> save();
      
        return redirect()->back()->with('alert','Bạn sửa thành công');
    }

    public function get_commentContent_del($id){
        $this->authorize('cat_edit');
        
        $commentContent = M_comment_content::find($id);
        $commentContent->delete();

        return redirect()-> back() -> with('alert','Bạn đã xóa thành công');
    }
}

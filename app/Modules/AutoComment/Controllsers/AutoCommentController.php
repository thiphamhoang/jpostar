<?php namespace App\Modules\AutoComment\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\M_comment;
use App\Model\M_comment_content;
use App\Model\M_contact;
use App\Model\M_cat;
use App\Model\M_product;
use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;

class AutoCommentController extends Controller {

    public function index(Request $request){
        $this->authorize('autocomment_edit');         
        $cat_list = M_cat::where('type','theme')->get();

        $product =  M_product::orderBy('id','desc');
        if(Auth::user()->user_type_id == 4){
            $product = $product->where('user_id',Auth::user()->id);
        }
        if($request->cat != 'all' and $request->cat != ''){
            $product_cat = M_product_cat::where('cat_id',$request->cat)->pluck('product_id')->toArray();
            $product = $product -> wherein('id',$product_cat);
        }
        if($request->search){
            $product = $product->where('title','like',"%$request->search%");
        }
       
        $product =  $product -> orderBy('id','desc')->paginate(10);
        return view('AutoComment::index',['search'=>$request->search,'cat'=>$request->cat,'display'=>$request->display,'cat_list'=>$cat_list,'product' => $product,'title'=>'Danh sách bài viết']);
  
    }

    public function post_comment_post(Request $request, $product_id){
        $count = $request -> count_commnent;
        $review = $request -> review;
        $review_array =  explode(" ",$review);
        $k = array_rand($review_array);

        for($i=1; $i <= $count; $i++){
            // get random ten 
            $contact = M_contact::inRandomOrder()->first();
            //get random content
            $content = M_comment_content::inRandomOrder()->first();
            
            //add binh luan
            $comment = new M_comment;
            $comment -> name = $contact ->name;
            $comment -> content = $content ->content;
            $comment -> status = 'on';
            $comment -> product_id = $product_id;
            $comment -> review = $review_array[$k];
            $comment -> save();

            $product = M_product::find($product_id);
            //tong diem cu
            $total_review = $product->total_review;
            // diem moi 
            $review = $review_array[$k];
            //tong diem 
            $total_review_new = $review + $total_review;
            // so luong danh gia
            $count_review_new = $product->count_review +1;
            $product-> total_review = $total_review_new;
            $product-> count_review = $count_review_new;
            $product-> save();
        }

        return redirect()-> back() -> with('alert','Bạn đã thêm thành công');
    }
  

}

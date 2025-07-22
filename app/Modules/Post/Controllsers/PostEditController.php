<?php namespace App\Modules\Post\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\M_post;
use App\Model\M_post_cat;
use App\Model\M_post_type;
use App\Model\M_cat;
use App\Model\M_gift_code;
use App\Model\M_slide_img;
use App\Model\M_slide;
use App\Model\M_file;
use Auth;
use DB;
use Carbon\Carbon;
class PostEditController extends Controller {
    public function get_post_edit(Request $request,$post_type_url,$id){
        $this->authorize('post_edit');
        $post = M_post::where('id',$id)->first();
        $cat = M_cat::orderby('created_at','desc')->get();
        $post_type = M_post_type::where('url',$post_type_url)->first();
        $slideList = M_slide::get();

        return view('Post::V_post_edit',['slideList' =>$slideList, 'post_type'=>$post_type,'post'=>$post,'cat' => $cat,'title' => 'Sửa bài viết']);
     }
   //   ajax xoa slide
     public function get_del_slide_img($post_type_url,$img_id){
         M_slide_img::find($img_id)->delete();
     }
   //   ajax xoa file
     public function get_del_file($post_type_url,$file_id){
         M_file::find($file_id)->delete();
     }
     // ajax order
     public function post_post_order(Request $request,$post_type){

      $order = explode('&',$request -> data);
      foreach($order as $order_ex){
         $order_id[] = explode('[]=',$order_ex);
         $ia = 1;
         foreach($order_id as $order_in){
            $slide = M_slide_img::find($order_in[1]);
            $slide -> orderby = $ia;
            $slide -> save();
            $ia++;
         }
      }
   }
   //   ajax xoa san mua mua kem
     public function get_del_product_relate($post_type_url,$post_id,$relate_id){
         $post_relate = M_post::find($post_id);
         foreach(json_decode($post_relate->product_relate) as $post_relate_r){
            if($post_relate_r != $relate_id){
               $id_array[] = $post_relate_r;
            }
         }
         if(isset($id_array)){
            $post_relate -> product_relate = json_encode($id_array);
         }else{
            $post_relate -> product_relate = '';
         }

         $post_relate -> save();
     }

     public function post_post_edit(Request $request,$post_type_url,$id){
         $this->authorize('post_edit');

        $this -> validate($request,
              [
                 'title' => 'required',
                 'url' => 'required',
                 'img' => 'max:2250'
              ],
              [
                 'title.required' => 'Bạn chưa nhập tiêu đề',
                 'url.required' => 'Đường dẫn (URL) bắt buộc phải có',
                 'img.max' => 'Kích ảnh đại diện chỉ bé hơn 2Mb'
              ]);

        if($request -> canon == 'on'){
           $canon = 'on';
        }else{
           $canon = 'off';
        }
        if($request -> pin == 'on'){
           $pin = 'on';
        }else{
           $pin = 'off';
        }
        $post_type = M_post_type::where('url',$post_type_url)->first();
        $post = M_post::find($id);

        if($request -> del_img == 'del_img'){
            $post = M_post::find($id);
            if($post -> img){
               while(file_exists('source/post/'.$post->img)){
                  unlink('source/post/'.$post->img);
               }
            }
            M_post::where('id',$id) -> update(['img'=> '']);
        }

        if($request -> hasFile('img')){
            $img_file = $request -> file('img');
            if($post -> img){
                while(file_exists('source/post/'.$post->img)){
                    unlink('source/post/'.$post->img);
                }
            }

            $exten_img = $img_file -> getClientOriginalExtension();
            if($exten_img != 'webp' && $exten_img != 'svg' && $exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG') {
            return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg (phân biệt viết hoa và viết thường)');
            }
            $img = $img_file -> getClientOriginalName();

            $i=1;
            while(file_exists('source/post/'.$img)){
                if($i == 1){
                    $img = str_replace('.','-'.$i++.'.',$img);
                }else{
                    $a =$i-1;
                    $img = str_replace($a.'.',$i++.'.',$img);
                }
            }
            $img_file->move('source/post/',$img);
            M_post::where('id',$id) -> update(['img'=>$img]);
        }

        

        if($request -> del_img_2 == 'del_img_2'){
            $post = M_post::find($id);
            if($post -> img){
               while(file_exists('source/post/'.$post->lp_img)){
                  unlink('source/post/'.$post->lp_img);
               }
            }
            M_post::where('id',$id) -> update(['lp_img'=> '']);
        }

        if($request -> hasFile('lp_img')){
            $lp_img_file = $request -> file('lp_img');
            $exten_img = $lp_img_file -> getClientOriginalExtension();
            if($exten_img != 'webp' && $exten_img != 'svg' && $exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG') {
            return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg (phân biệt viết hoa và viết thường)');
            }
            $lp_img = $lp_img_file -> getClientOriginalName();
            $i=1;
            while(file_exists('source/post/'.$lp_img)){
                if($i == 1){
                    $lp_img = str_replace('.','-'.$i++.'.',$lp_img);
                }else{
                    $a =$i-1;
                    $lp_img = str_replace($a.'.',$i++.'.',$lp_img);
                }
            }
            $lp_img_file->move('source/post/',$lp_img);
            M_post::where('id',$id) -> update(['lp_img'=>$lp_img]);
        } 


         if($request -> del_img_3 == 'del_img_3'){
            $post = M_post::find($id);
            if($post -> img){
               while(file_exists('source/post/'.$post->lp_img)){
                  unlink('source/post/'.$post->lp_img);
               }
            }
            M_post::where('id',$id) -> update(['lp_img'=> '']);
        }
        if($request -> hasFile('lp_download')){
            $lp_download_file = $request -> file('lp_download');
            $exten_img = $lp_download_file -> getClientOriginalExtension();
            if($exten_img != 'webp' && $exten_img != 'svg' && $exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG') {
            return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg (phân biệt viết hoa và viết thường)');
            }
            $lp_download = $lp_download_file -> getClientOriginalName();
            $i=1;
            while(file_exists('source/post/'.$lp_download)){
                if($i == 1){
                    $lp_download = str_replace('.','-'.$i++.'.',$lp_download);
                }else{
                    $a =$i-1;
                    $lp_download = str_replace($a.'.',$i++.'.',$lp_download);
                }
            }
            $lp_download_file->move('source/post/',$lp_download);
            M_post::where('id',$id) -> update(['lp_download'=>$lp_download]);
        } 


         if($request -> del_img_4 == 'del_img_4'){
            $post = M_post::find($id);
            if($post -> img){
               while(file_exists('source/post/'.$post->lp_growth)){
                  unlink('source/post/'.$post->lp_growth);
               }
            }
            M_post::where('id',$id) -> update(['lp_growth'=> '']);
        }
        
        if($request -> hasFile('lp_growth')){
            $lp_growth_file = $request -> file('lp_growth');
            $exten_img = $lp_growth_file -> getClientOriginalExtension();
            if($exten_img != 'webp' && $exten_img != 'svg' && $exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG') {
            return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg (phân biệt viết hoa và viết thường)');
            }
            $lp_growth = $lp_growth_file -> getClientOriginalName();
            $i=1;
            while(file_exists('source/post/'.$lp_growth)){
                if($i == 1){
                    $lp_growth = str_replace('.','-'.$i++.'.',$lp_growth);
                }else{
                    $a =$i-1;
                    $lp_growth = str_replace($a.'.',$i++.'.',$lp_growth);
                }
            }
            $lp_growth_file->move('source/post/',$lp_growth);
            M_post::where('id',$id) -> update(['lp_growth'=>$lp_growth]);
        } 

         if($request -> del_img_5 == 'del_img_5'){
            $post = M_post::find($id);
            if($post -> img){
               while(file_exists('source/post/'.$post->lp_feature)){
                  unlink('source/post/'.$post->lp_feature);
               }
            }
            M_post::where('id',$id) -> update(['lp_feature'=> '']);
        }
        
        if($request -> hasFile('lp_feature')){
            $lp_feature_file = $request -> file('lp_feature');
            $exten_img = $lp_feature_file -> getClientOriginalExtension();
            if($exten_img != 'webp' && $exten_img != 'svg' && $exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG') {
            return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg (phân biệt viết hoa và viết thường)');
        }
            $lp_feature = $lp_feature_file -> getClientOriginalName();
            $i=1;
            while(file_exists('source/post/'.$lp_feature)){
                if($i == 1){
                    $lp_feature = str_replace('.','-'.$i++.'.',$lp_feature);
                }else{
                    $a =$i-1;
                    $lp_feature = str_replace($a.'.',$i++.'.',$lp_feature);
                }
            }
            $lp_feature_file->move('source/post/',$lp_feature);
            M_post::where('id',$id) -> update(['lp_feature'=>$lp_feature]);
        } 
    
    
        

         $post -> display = json_encode($request -> display);
        $post -> title = $request -> title;
         $post -> title_seo = $request -> title_seo;
         $post -> key_seo = $request -> key_seo;
         $post -> content = $request -> content;
         $post -> des_seo = $request -> des_seo;
         $post -> des = $request -> des;
        $post -> title_3 = $request -> title_3;
        $post -> title_2 = $request -> title_2;
         $post -> content_2 = $request -> content_2;


          $post->lp_title_1 = $request->lp_title_1;
         $post->lp_title_2 = $request->lp_title_2;
         $post->lp_des = $request->lp_des;
        $post->lp_des_2 = $request->lp_des_2;
         $post->lp_slide = $request->lp_slide;

         $post->lp_meet_title_1 = $request->lp_meet_title_1;
         $post->lp_meet_title_2 = $request->lp_meet_title_2;
            $post->lp_meet_texx_1 = $request->lp_meet_texx_1;
         $post->lp_meet_texx_2 = $request->lp_meet_texx_2;
         $post->lp_meet_texx_3 = $request->lp_meet_texx_3;
         $post->lp_meet_block_11 = $request->lp_meet_block_11;
         $post->lp_meet_block_12 = $request->lp_meet_block_12;
         $post->lp_meet_block_13 = $request->lp_meet_block_13;
         $post->lp_meet_block_21 = $request->lp_meet_block_21;
         $post->lp_meet_block_22 = $request->lp_meet_block_22;
         $post->lp_meet_block_23 = $request->lp_meet_block_23;
         $post->lp_meet_block_31 = $request->lp_meet_block_31;
         $post->lp_meet_block_32 = $request->lp_meet_block_32;
         $post->lp_meet_block_33 = $request->lp_meet_block_33;
         $post->lp_meet_block_41 = $request->lp_meet_block_41;
         $post->lp_meet_block_42 = $request->lp_meet_block_42;
         $post->lp_meet_block_43 = $request->lp_meet_block_43;
         $post->lp_meet_block_51 = $request->lp_meet_block_51;
         $post->lp_meet_block_52 = $request->lp_meet_block_52;
         $post->lp_meet_block_53 = $request->lp_meet_block_53;
         $post->lp_meet_block_61 = $request->lp_meet_block_61;
         $post->lp_meet_block_62 = $request->lp_meet_block_62;
         $post->lp_meet_block_63 = $request->lp_meet_block_63;

         $post->lp_why_title_1 = $request->lp_why_title_1;
         $post->lp_why_title_2 = $request->lp_why_title_2;
         $post->lp_why_block_11 = $request->lp_why_block_11;
         $post->lp_why_block_12 = $request->lp_why_block_12;
         $post->lp_why_block_21 = $request->lp_why_block_21;
         $post->lp_why_block_22 = $request->lp_why_block_22;
         $post->lp_why_block_31 = $request->lp_why_block_31;
         $post->lp_why_block_32 = $request->lp_why_block_32;
         $post->lp_why_block_41 = $request->lp_why_block_41;
         $post->lp_why_block_42 = $request->lp_why_block_42;
         $post->lp_why_block_51 = $request->lp_why_block_51;
         $post->lp_why_block_52 = $request->lp_why_block_52;
       
         $post->lp_why_block_61 = $request->lp_why_block_61; // đổi tên tránh đè
         $post->lp_why_block_62 = $request->lp_why_block_62;

         $post->lp_feature_title = $request->lp_feature_title;
         $post->lp_feature_link = $request->lp_feature_link;
         $post->lp_feature_des = $request->lp_feature_des;

         $post->lp_media_title = $request->lp_media_title;
         $post->lp_media_slide = $request->lp_media_slide;

         $post->lp_download_title_1 = $request->lp_download_title_1;
         $post->lp_download_title_2 = $request->lp_download_title_2;
         $post->lp_download_button = $request->lp_download_button;
 
         $post->lp_award_title_1 = $request->lp_award_title_1;
         $post->lp_award_title_2 = $request->lp_award_title_2;
         $post->lp_award_title_3 = $request->lp_award_title_3;
         $post->lp_award_slide = $request->lp_award_slide;

         $post->lp_growth_title_1 = $request->lp_growth_title_1;
         $post->lp_growth_title_2 = $request->lp_growth_title_2;
         $post->lp_growth_title_3 = $request->lp_growth_title_3;
         $post->lp_growth_button = $request->lp_growth_button;
         $post->lp_growth_name = $request->lp_growth_name;
  
         $post->lp_just_title_1 = $request->lp_just_title_1;
         $post->lp_just_title_2 = $request->lp_just_title_2;
         $post->lp_just_slide = $request->lp_just_slide;

         $post->lp_smarter_title_1 = $request->lp_smarter_title_1;
         $post->lp_smarter_title_2 = $request->lp_smarter_title_2;
         $post->lp_smarter_slide = $request->lp_smarter_slide;



         $post -> status = $request -> status;
         $post -> index_meta = $request -> index_meta;
         $post -> user_id = Auth::user()->user_id;
         $post -> canon = $canon;
         $post -> post_type_id = $post_type->id;
         $post -> price = $request -> price;
         $post -> price_km = $request -> price_km;
     
         $post -> view = $request -> view;
         $post -> review = $request -> review;
         $post -> orderby = $request -> orderby;
         $post -> product_relate = json_encode($request->product_relate);
         $post -> comment = $request-> comment;
         $post -> video = $request-> video;
         if($request -> created_at){
            $post_created_at = Carbon::parse($request -> created_at);
            $post_created_at = $post_created_at -> format('Y-m-d');
            $post -> created_at = $post_created_at;
         }

         $post -> save();



        $post_check = M_post::where('url',$request -> url)->first();
        if(isset($post_check -> url )){
           if($post_check -> id == $id){
              $post_url = $request -> url;
           }else{
              $post_url = $request -> url.'-'.$id;
           }
        }else{
           $post_url = $request -> url;
        }
        M_post::where('id',$id)->update(['url' => $post_url]);

        //them danh muc
           if($request-> cat){
              //xoa ban hien tai
              M_post_cat::where('post_id',$id)->delete();
              foreach($request-> cat as $cat_id){
                 M_post_cat::insert([
                    'post_id' => $id,
                    'cat_id' => $cat_id
                 ]);
              }
           }else{
              M_post_cat::where('post_id',$id)->delete();
           }
        if($request-> save_list == 'on'){
           return redirect('admin/post/'.$post_type_url) -> with('alert','Lưu thành công tin tức');
        }elseif($request-> save_new == 'on'){
           return redirect('admin/post/'.$post_type_url.'/new') -> with('alert','Lưu thành công tin tức');
        }elseif($request-> save_edit == 'on'){
           return redirect('admin/post/'.$post_type_url.'/edit/'.$id) -> with('alert','Lưu thành công tin tức');
        }

     }

     public function get_post_del($post_type,$id){
        $this->authorize('post_edit');
        $post = M_post::where('id',$id)->first();

         //   xoa anh
         if($post -> img  != '' or $post -> img != null){
            while(file_exists('source/post/'.$post -> img)){
               unlink('source/post/'.$post -> img) ;
            }
         }
        M_post::where('id',$id) -> delete();
        return redirect()-> back() -> with('alert','Bạn đã xóa thành công');
     }

     public function get_change_status($post_type,$id){
        $this->authorize('post_edit');
        $post = M_post::where('id',$id)->first();

        if($post -> status == 'off'){
           M_post::where('id',$id)->update(['status' => 'on']);
        }
        elseif ($post -> status == 'on'){
           M_post::where('id',$id)->update(['status' => 'off']);
        }
        return redirect() -> back() -> with('alert','Bạn đã thay đổi thành công');
     }
}

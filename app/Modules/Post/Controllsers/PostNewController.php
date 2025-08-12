<?php namespace App\Modules\Post\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\M_post;
use App\Model\M_post_type;
use App\Model\M_post_cat;
use App\Model\M_cat;
use App\Model\M_gift_code;
use App\Model\M_slide_img;
use App\Model\M_slide;
use App\Model\M_file;
use Auth;
use DB;
use Storage;
use Carbon\Carbon;

class PostNewController extends Controller {
    public function get_post_new($post_type){
   
        $this->authorize('post_edit');
         $cat = M_cat::orderby('created_at','desc')->get();
         $post_type = M_post_type::where('url',$post_type)->first();
         $slideList = M_slide::get();

         return view('Post::V_post_new',['slideList' => $slideList, 'post_type'=>$post_type,'cat'=>$cat,'title' => 'Thêm mới bài viết']);
    }
   public function get_post_product(Request $request,$post_type){
      $post_type = M_post_type::where('url','san-pham')->first();
      $product_list = M_post::where('post_type_id',$post_type ->id)->get();
      return view('Post::product_list',['product_list'=>$product_list,'title' => 'Danh sách sản phẩm']);
   }
    public function get_post_import(Request $request,$post_type){
         $this->authorize('post_edit');
         if($request -> file){;
            if($request -> hasFile('file')){
               $file_file = $request -> file('file');
               $exten_file = $file_file -> getClientOriginalExtension();
               if($exten_file != 'xlsx') {
               return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file xlsx)');
               }
               $file = $file_file -> getClientOriginalName();
               $i=1;
               while(file_exists('source/price/'.$file)){
                  if($i == 1){
                     $file = str_replace('.','-'.$i++.'.',$file);
                  }else{
                     $a =$i-1;
                     $file = str_replace($a.'.',$i++.'.',$file);
                  }
               }
               $file_file->move('source/price/',$file);
            }else{
               $file = '';
            }
         }else{
            $file='';
         }

         return view('Post::post_import',['title' => 'Nhập excel']);
    }
    public function post_post_import(Request $request,$post_type){
        $this->authorize('post_edit');

         if($request -> hasFile('file')){
            $file_file = $request -> file('file');
            $exten_file = $file_file -> getClientOriginalExtension();
            if($exten_file != 'xlsx') {
            return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file xlsx)');
            }
            $file = $file_file -> getClientOriginalName();
            $i=1;
            while(file_exists('source/price/'.$file)){
               if($i == 1){
                  $file = str_replace('.','-'.$i++.'.',$file);
               }else{
                  $a =$i-1;
                  $file = str_replace($a.'.',$i++.'.',$file);
               }
            }
            $file_file->move('source/price/',$file);
         }else{
            $file = '';
         }

         // neu dât akhacs rong
         if($request-> data != ''){
            foreach(json_decode($request->data) as $post_id){
               $post = M_post::find($post_id[0]);
               if($post != ''){
                  $post -> price = $post_id[1];
                  $post -> save();
               }
            }
         }

         return redirect('admin/post/san-pham/import?file='.$file)->with('alert','Bạn đã nhập file thành công');
    }


    // them moi
    public function post_post_new(Request $request,$post_type_url){
         $this->authorize('post_edit');

        $this -> validate($request,
           [
              'title' => 'required',
              'url' => 'required',
              'img' => 'max:5250'
           ],
           [
              'title.required' => 'Bạn chưa nhập tiêu đề',
              'url.required' => 'Đường dẫn (URL) bắt buộc phải có',
              'img.max' => 'Kích ảnh đại diện chỉ bé hơn 5Mb'
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
        if($request -> hasFile('img')){
            $img_file = $request -> file('img');
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
        }else{
            $img = '';
        }

         if($request -> hasFile('img')){
            $img_file = $request -> file('img');
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
        }else{
            $img = '';
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
        }else{
            $lp_img = '';
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
        }else{
            $lp_download = '';
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
        }else{
            $lp_growth = '';
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
        }else{
            $lp_feature = '';
        }



        $post_type = M_post_type::where('url',$post_type_url)->first();

         $post = new M_post;
         $post -> display = json_encode($request -> display);
         $post -> title = $request -> title;
         $post -> title_2 = $request -> title_2;
         $post -> title_3 = $request -> title_3;

         $post->lp_title_1 = $request->lp_title_1;
         $post->lp_title_2 = $request->lp_title_2;
         $post->lp_des = $request->lp_des;
         $post->lp_des_2 = $request->lp_des_2;
         $post->lp_img = $lp_img;

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
         $post->lp_feature = $lp_feature;

         $post->lp_media_title = $request->lp_media_title;
         $post->lp_media_slide = $request->lp_media_slide;

         $post->lp_download_title_1 = $request->lp_download_title_1;
         $post->lp_download_title_2 = $request->lp_download_title_2;
         $post->lp_download_button = $request->lp_download_button;
         $post->lp_download = $lp_download;

         $post->lp_award_title_1 = $request->lp_award_title_1;
         $post->lp_award_title_2 = $request->lp_award_title_2;
         $post->lp_award_title_3 = $request->lp_award_title_3;
         $post->lp_award_slide = $request->lp_award_slide;

         $post->lp_growth_title_1 = $request->lp_growth_title_1;
         $post->lp_growth_title_2 = $request->lp_growth_title_2;
         $post->lp_growth_title_3 = $request->lp_growth_title_3;
         $post->lp_growth_button = $request->lp_growth_button;
         $post->lp_growth_name = $request->lp_growth_name;
         // Cảnh báo: dùng chung name `lp_download` ở đây, nên tách ra:
         $post->lp_growth = $lp_growth;

         $post->lp_just_title_1 = $request->lp_just_title_1;
         $post->lp_just_title_2 = $request->lp_just_title_2;
         $post->lp_just_slide = $request->lp_just_slide;

         $post->lp_smarter_title_1 = $request->lp_smarter_title_1;
         $post->lp_smarter_title_2 = $request->lp_smarter_title_2;
         $post->lp_smarter_slide = $request->lp_smarter_slide;


         $post->da_tongQuan = $request->da_tongQuan;
         $post->da_tinhNang = $request->da_tinhNang;
         $post->da_moHinh = $request->da_moHinh;
         $post->da_chiPhi = $request->da_chiPhi;
         $post->da_loTrinh = $request->da_loTrinh;
         $post->da_goiVon = $request->da_goiVon;
         $post->da_address = $request->da_address;
         $post->da_date = $request->da_date;


         $post -> content_2 = $request -> content_2;
         $post -> title_seo = $request -> title_seo;
         $post -> key_seo = $request -> key_seo;
         $post -> content = $request -> content;
         $post -> des_seo = $request -> des_seo;
         $post -> des = $request -> des;

         if($request -> created_at){
            $post_created_at = Carbon::parse($request -> created_at);
            $post_created_at = $post_created_at -> format('Y-m-d');
            $post -> created_at = $post_created_at;
         }
         $post -> status = $request -> status;
         $post -> index_meta = $request -> index_meta;
         $post -> user_id = Auth::user()->user_id;
         $post -> canon = $canon;
         $post -> pin = $pin;
         $post -> img = $img;
         $post -> post_type_id = $post_type->id;
         $post -> price = $request -> price;
         $post -> price_km = $request -> price_km;
          $post -> view = $request -> view;
         $post -> review = $request -> review;
         $post -> orderby = $request -> orderby;
         $post -> product_relate = json_encode($request->product_relate);
         $post -> comment = $request-> comment;
         $post -> video = $request-> video;

         $post -> save();

      //them danh muc
         if($request-> cat){
            foreach($request-> cat as $cat_id){
               M_post_cat::insert([
                  'post_id' => $post->id,
                  'cat_id' => $cat_id
               ]);
            }
         }
         $post_check =M_post::where('url',$request -> url)->first();
         if(isset($post_check -> url )){
            if($post_check -> id == $post->id){
              $post_url = $request -> url;
            }else{
              $post_url = $request -> url.'-'.$post->id;
           }
        }else{
          $post_url = $request -> url;
        }
        M_post::where('id',$post->id)->update(['url' => $post_url]);


       if($request-> save_list == 'on'){
           return redirect('admin/post/'.$post_type_url) -> with('alert','Lưu thành công tin tức');
        }elseif($request-> save_new == 'on'){
           return redirect('admin/post/'.$post_type_url.'/new') -> with('alert','Lưu thành công tin tức');
        }elseif($request-> save_edit == 'on'){
           return redirect('admin/post/'.$post_type_url.'/edit/'.$post->id) -> with('alert','Lưu thành công tin tức');
        }
     }

}

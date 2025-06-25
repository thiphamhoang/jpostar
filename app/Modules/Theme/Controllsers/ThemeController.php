<?php
namespace App\Modules\Theme\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\M_sidebar;
use App\Model\M_theme_row;
use App\Model\M_cat;
use App\Model\M_menu;
use App\Model\M_theme;
use App\Model\M_menu_type;
use App\Model\M_slide;
use App\Model\M_price;
use Illuminate\Support\Facades\Storage;

use Auth;
use DB;

class ThemeController extends Controller{

    
    public function row(Request $request,$theme_id,$row_id){
  
        $theme =  M_theme::find($theme_id);
        $theme_list =  M_theme::select('id','title')->get();
        
        $row_list = M_theme_row::orderby('orderby','asc')->where('theme_id',$theme_id)->get();
        $row = M_theme_row::find($row_id);
        $sidebar_first = M_sidebar::orderby('orderby','asc')->first(); 
        if($sidebar_first != ''){
            $sidebar_first = $sidebar_first->id;
      }else{
            $sidebar_first = 0;
      }
        $slide_list = M_slide::where('status','on')->get();
        $cat_list = M_cat::get();
        $menu_list = M_menu_type::get();
        $cat_list = M_cat::where('status','on')->get();
        $price_list = M_price::where('status','on')->get();

        $row_first = M_theme_row::orderby('orderby','asc')->where('theme_id',$theme_id)->first();
        if($row_first == null){
         $row_first_id = 0;
        }else{
         $row_first_id = $row_first->id;
        }

      return view('Theme::theme_row',['theme_list'=>$theme_list,'price_list'=>$price_list,'theme_id'=>$theme_id,'row_first_id'=>$row_first_id,'sidebar_first_id'=>$sidebar_first,'cat_list'=>$cat_list,'row'=>$row,'row_id'=>$row_id,'menu_list'=>$menu_list,'cat_list'=>$cat_list,'slide_list'=>$slide_list,'row_list'=>$row_list,'title'=>'Cấu hình cơ bản website','theme'=>$theme]);
    }

    public function post_theme_row_new(Request $request,$theme_id){
        $this -> validate($request, [ 'name' => 'required', ], [ 'name.required' => 'Bạn chưa nhập tên row', ]);
      
         $max = M_theme_row::count();
         $theme_row = new M_theme_row;
         $theme_row -> name = $request -> name;
         $theme_row -> orderby = (int)$max + 1;
         $theme_row -> status = 'on';
         $theme_row -> type = $request -> type;
         $theme_row -> posion = $request -> posion;
         $theme_row -> style = $request -> style;
         $theme_row -> title = $request -> title;
         $theme_row -> title_2 = $request -> title_2;
         $theme_row -> theme_id = $theme_id;
         $theme_row -> link_row_id = $request -> link_row_id;
         if($request -> feild != ''){
            $theme_row -> feild = json_encode($request -> feild);
         }else{
            $theme_row -> feild = null;
         }
         $theme_row -> save();
        return redirect('admin/theme/'.$theme_id.'/row/'.$theme_row->id) -> with('alert','Thêm thành công');
     }
  
     // sua row 
     public function post_theme_row_edit(Request $request,$theme_id,$row_id){
  
      //   $this -> validate($request, [ 'name' => 'required', ], [ 'name.required' => 'Bạn chưa nhập tên row', ]);
       
        $theme = M_theme_row::find($row_id);
        if($request -> del_img == 'del_img'){
            
            if($theme ->img){
               while(file_exists('source/theme/'.$theme->img)){
                  unlink('source/theme/'.$theme->img);
               }
            }
            M_theme_row::where('id',$row_id) -> update(['img'=> '']);
        }
        
        if($request -> hasFile('img')){
            if($theme ->img){
                while(file_exists('source/theme/'.$theme->img)){
                   unlink('source/theme/'.$theme->img);
                }
             }

            $img_file = $request -> file('img');
            $exten_img = $img_file -> getClientOriginalExtension();
            
            $img = $img_file -> getClientOriginalName();
            if($exten_img != 'webp' && $exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG') {
                return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg (phân biệt viết hoa và viết thường)');
                }
            
            $i=1;
            while(file_exists('source/theme/'.$img)){
                if($i == 1){$img = str_replace('.','-'.$i++.'.',$img); }else{$a =$i-1;$img = str_replace($a.'.',$i++.'.',$img); }
            }
        
            $img_file->move('source/theme/',$img);
            M_theme_row::where('id',$row_id) -> update(['img'=>$img]);
        }
       

        if($request -> del_img_2 == 'del_img_2'){
            if($theme -> img_2){
               while(file_exists('source/theme/'.$theme->img_2)){
                  unlink('source/theme/'.$theme->img_2);
               }
            }
            M_theme_row::where('id',$row_id) -> update(['img_2'=> '']);
         }
        if($request -> hasFile('img_2')){
            if($theme -> img_2){
                while(file_exists('source/theme/'.$theme->img_2)){
                   unlink('source/theme/'.$theme->img_2);
                }
             }
            $img_file = $request -> file('img_2');
            $exten_img = $img_file -> getClientOriginalExtension();
            if($exten_img != 'webp' && $exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG') {
            return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg (phân biệt viết hoa và viết thường)');
            }
            $img_2 = $img_file -> getClientOriginalName();
        
            $i=1;
            while(file_exists('source/theme/'.$img_2)){
                if($i == 1){$img_2 = str_replace('.','-'.$i++.'.',$img_2); }else{$a =$i-1;$img_2 = str_replace($a.'.',$i++.'.',$img_2); }
            }
            $img_file->move('source/theme/',$img_2);
            M_theme_row::where('id',$row_id) -> update(['img_2'=>$img_2]);
        } 
         

        if($request -> del_img_bg == 'del_img_bg'){
            
               if($theme -> img_bg){
                  while(file_exists('source/theme/'.$theme->img_bg)){
                     unlink('source/theme/'.$theme->img_bg);
                  }
               }
               M_theme_row::where('id',$row_id) -> update(['img_bg'=> '']);
         }
        if($request -> hasFile('img_bg')){
            if($theme -> img_bg){
                while(file_exists('source/theme/'.$theme->img_bg)){
                   unlink('source/theme/'.$theme->img_bg);
                }
             }
            $img_file = $request -> file('img_bg');
            $exten_img = $img_file -> getClientOriginalExtension();
            if($exten_img != 'webp' && $exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG') {
            return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg (phân biệt viết hoa và viết thường)');
            }
            $img_bg = $img_file -> getClientOriginalName();
            
            $i=1;
            while(file_exists('source/theme/'.$img_bg)){
                if($i == 1){$img_bg = str_replace('.','-'.$i++.'.',$img_bg); }else{$a =$i-1;$img_bg = str_replace($a.'.',$i++.'.',$img_bg); }
            }
            $img_file->move('source/theme/',$img_bg);
            M_theme_row::where('id',$row_id) -> update(['img_bg'=>$img_bg]);
        }


        if($request -> del_img_bg_m == 'del_img_bg_m'){
           
               if($theme -> img_bg_m){
                  while(file_exists('source/theme/'.$theme->img_bg_m)){
                     unlink('source/theme/'.$theme->img_bg_m);
                  }
               }
               M_theme_row::where('id',$row_id) -> update(['img_bg'=> '']);
         }
        if($request -> hasFile('img_bg_m')){
            if($theme -> img_bg_m){
                while(file_exists('source/theme/'.$theme->img_bg_m)){
                   unlink('source/theme/'.$theme->img_bg_m);
                }
             }
            $img_file = $request -> file('img_bg_m');
            $exten_img = $img_file -> getClientOriginalExtension();
            if($exten_img != 'webp' && $exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG') {
            return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg (phân biệt viết hoa và viết thường)');
            }
            $img_bg_m = $img_file -> getClientOriginalName();
            
            $i=1;
            while(file_exists('source/theme/'.$img_bg_m)){
                if($i == 1){$img_bg_m = str_replace('.','-'.$i++.'.',$img_bg_m); }else{$a =$i-1;$img_bg_m = str_replace($a.'.',$i++.'.',$img_bg_m); }
            }
            $img_file->move('source/theme/',$img_bg_m);
            M_theme_row::where('id',$row_id) -> update(['img_bg_m'=>$img_bg_m]);
        }
      

      $theme_row = M_theme_row::find($row_id);
      $theme_row -> name = $request -> name;
      $theme_row -> status = 'on' ;
      $theme_row -> bg_color = $request -> bg_color;
      $theme_row -> bg_color_2 = $request -> bg_color_2;
      $theme_row -> type = $request -> type;
      $theme_row -> link_img = $request -> link_img;
      $theme_row -> style = $request -> style;
      $theme_row -> link_img_2 = $request -> link_img_2;
      $theme_row -> title = $request -> title;
      $theme_row -> title_2 = $request -> title_2;
      $theme_row -> des = $request -> des;
      $theme_row -> des_2 = $request -> des_2;
      $theme_row -> link = $request -> link;
      $theme_row -> button = $request -> button;
      $theme_row -> content = $request -> content;
      $theme_row -> content_2 = $request -> content_2;
      $theme_row -> slide_id = $request -> slide_id;
      $theme_row -> slide_id_2 = $request -> slide_id_2;
      $theme_row -> slide_id_3 = $request -> slide_id_3;
      $theme_row -> theme_id = $theme_id;
    
      $theme_row -> menu_id = $request -> menu_id;
      $theme_row -> menu_id_2 = $request -> menu_id_2;
      $theme_row -> price_id = $request -> price_id;
      $theme_row -> price_id_2 = $request -> price_id_2;
      $theme_row -> video_youtube = $request -> video_youtube;
      $theme_row -> cat_id = $request -> cat_id;
      $theme_row -> cat_id_2 = $request -> cat_id_2;
      $theme_row -> cat_id_3 = $request -> cat_id_3;
      $theme_row -> cat_id_4 = $request -> cat_id_4;
      $theme_row -> link_row_id = $request -> link_row_id;

      $theme_row -> post_id = $request -> post_id;
      $theme_row -> post_id_2 = $request -> post_id_2;
      $theme_row -> post_id_3 = $request -> post_id_3;
      $theme_row -> post_id_4 = $request -> post_id_4;
      $theme_row -> posion = $request -> posion;
      $theme_row -> display = $request -> display;
      $theme_row -> map_code = $request -> map_code;
      $theme_row -> map_code_2 = $request -> map_code_2;
      $theme_row -> facebook_fanpage = $request -> facebook_fanpage;
      $theme_row -> cat_product_id = $request -> cat_product_id;
      $theme_row -> cat_product_id_2 = $request -> cat_product_id_2;
      $theme_row -> cat_post_id_count = $request -> cat_post_id_count;
      $theme_row -> cat_post_id_2_count = $request -> cat_post_id_2_count;

      $theme_row -> cat_product_id_count = $request -> cat_product_id_count;
      $theme_row -> cat_product_id_2_count = $request -> cat_product_id_2_count;
      $theme_row -> cat_list_id_2 = $request -> cat_list_id_2;
      $theme_row -> cat_list_id = $request -> cat_list_id;
      $theme_row -> cat_post_sub_id = $request -> cat_post_sub_id;
      $theme_row -> cat_post_sub_id_2 = $request -> cat_post_sub_id_2;
      $theme_row -> cat_post_id = $request -> cat_post_id;
      $theme_row -> cat_post_id_2 = $request -> cat_post_id_2;
      if($request -> feild != ''){
         $theme_row -> feild = json_encode($request -> feild);
      }else{
         $theme_row -> feild = null;
      }
      $theme_row -> icon_text = json_encode($request -> icon_text);
      $theme_row -> icon_text_2 = json_encode($request -> icon_text_2);
      $theme_row -> text_multi = json_encode($request -> text_multi);
      $theme_row -> text_multi_2 = json_encode($request -> text_multi_2);
      $theme_row -> three_text = json_encode($request -> three_text);

      $theme_row -> save();
  
        return redirect('admin/theme/'.$theme_id.'/row/'.$row_id) -> with('alert','Thêm thành công');
     }
  
     public function post_theme_row_order(Request $request,$theme_id){
        $order = explode('&',$request -> data);
        foreach($order as $order_ex){
           $order_id[] = explode('[]=',$order_ex);
           $i = 1;
           foreach($order_id as $order_in){
              $row = M_theme_row::where('id',$order_in[1])->update(['orderby'=>$i]);
              $i++;
           }
        }
     }
  
     public function get_theme_row_del(Request $request,$theme_id,$row_id){
        $row = M_theme_row::where('id',$row_id)->first();
        // xoa anh 
        if($row -> img  != '' or $row -> img != null){
            while(file_exists('source/theme/'.$row -> img)){
               unlink('source/theme/'.$row -> img) ;
            }
         }
        if($row -> img_2  != '' or $row -> img_2 != null){
            while(file_exists('source/theme/'.$row -> img_2)){
               unlink('source/theme/'.$row -> img_2) ;
            }
         }
         if($row -> img_bg  != '' or $row -> img_bg != null){
            while(file_exists('source/theme/'.$row -> img_bg)){
               unlink('source/theme/'.$row -> img_bg) ;
            }
         }

         M_theme_row::where('id',$row_id)->delete();
        $row_first = M_theme_row::orderby('orderby','asc')->first(); 
        return redirect('admin/theme/'.$theme_id.'/row/'.$row_first->id) -> with('alert','Bạn đã xóa thành công');
     }
  
  
     public function get_change_status($theme_id,$row_id){
        $row = M_theme_row::where('id', $row_id) -> first();
        if($row -> status == 'off'){
           M_theme_row::where('id', $row_id) -> update(['status' => 'on']);
           return redirect() ->back() -> with('alert','Bạn đã thay đổi thành công');
        }
        elseif ($row -> status == 'on'){
           M_theme_row::where('id', $row_id) -> update(['status' => 'off']);
           return redirect() ->back() -> with('alert','Bạn đã thay đổi thành công');
        }
      }//ket thuc doi status

}

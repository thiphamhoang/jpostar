<?php
namespace App\Modules\Theme\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\M_theme;
use App\Model\M_sidebar;

use App\Model\M_theme_row;
use Auth;
use DB;

class InfoController extends Controller{
 
   public function info(Request $request,$theme_id){     
      
        $theme = M_theme::where('id',$theme_id)->first();
        $row_list = M_theme_row::orderby('orderby','asc')->where('theme_id',$theme_id)->get();
        $row_first = M_theme_row::orderby('orderby','asc')->where('theme_id',$theme_id)->first();
        if($row_first == null){
         $row_first_id = 0;
        }else{
         $row_first_id = $row_first->id;
        }

        return view('Theme::theme_info',['theme_id'=>$theme_id,'row_first_id'=>$row_first_id,'row_list'=>$row_list, 'title'=>'Cấu hình cơ bản website','theme'=>$theme]);
   }

   public function info_edit(Request $request,$theme_id){
        $theme =M_theme::find($theme_id);
        if($request -> del_img == 'del_img'){
            if($theme -> favicon){
                while(file_exists('source/theme/'.$theme->favicon)){
                    unlink('source/theme/'.$theme->favicon);
                }
            }
        }
        M_theme::where('type',$theme->type)-> update(['favicon'=> '']);
       
        if($request -> hasFile('favicon')){
            if($theme -> favicon){
                while(file_exists('source/theme/'.$theme->favicon)){
                    unlink('source/theme/'.$theme->favicon);
                }
            }
            $img_file = $request -> file('favicon');
            $exten_img = $img_file -> getClientOriginalExtension();
            
            $img = $img_file -> getClientOriginalName();
            if($exten_img != 'webp' && $exten_img != 'ico' && $exten_img != 'ICO' && $exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG') {
            return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg (phân biệt viết hoa và viết thường)');
            }
            
            $i=1;
            while(file_exists('source/theme/'.$img)){
                if($i == 1){$img = str_replace('.','-'.$i++.'.',$img); }else{$a =$i-1;$img = str_replace($a.'.',$i++.'.',$img); }
            }
        
            $img_file->move('source/theme/',$img);
            M_theme::where('type',$theme->type)-> update(['favicon'=>$img]);
        }
         

        if($request -> del_img_2 == 'del_img_2'){
            if($theme -> og_image){
                while(file_exists('source/theme/'.$theme->og_image)){
                   unlink('source/theme/'.$theme->og_image);
                }
            }
         }
         M_theme::where('type',$theme->type)-> update(['og_image'=> '']);
     
          
            if($request -> hasFile('og_image')){
                if($theme -> favicon){
                    while(file_exists('source/theme/'.$theme->favicon)){
                       unlink('source/theme/'.$theme->favicon);
                    }
                }
                $img_file = $request -> file('og_image');
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
                M_theme::where('type',$theme->type)-> update(['og_image'=>$img]);
            }
        
    
       
       M_theme::where('type',$theme->type)->update([
           'title_seo'=> $request->title_seo,
           'des_seo'=> $request->des_seo,
           'key_seo'=> $request->key_seo,
           'index_meta'=> $request->index_meta,
           'head'=> $request->head,
        ]);
        return redirect()->back()->with('alert','Lưu thành công');
    }
}
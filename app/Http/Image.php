<?php

namespace App\Http;

use Illuminate\Http\Request;
use App\Http\Requests;

trait Image {
    
    public function upload_image(Request $request,$value,$folder,$table){
        // upload anh len server 
        $this ->validate($request,
            ['img'=> 'max:5250'],
            ['img.max'=> 'Kích ảnh đại diện chỉ bé hơn 5Mb']);

            if($request -> hasFile('img')){
                $img_file = $request -> file('img');
                if($value != ''){
                    while(file_exists('source/'.$folder.'/'.$table.'/'.$value)){
                        unlink('source/'.$folder.'/'.$table.'/'.$value);
                    }
                }
                $exten_img = $img_file -> getClientOriginalExtension();
                $img = $img_file -> getClientOriginalName();
                if($exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG') {
                    return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg (phân biệt viết hoa và viết thường)');
                    }
                
                $i=1;
                while(file_exists('source/'.$folder.'/'.$table.'/'.$img)){
                    if($i == 1){$img = str_replace('.','-'.$i++.'.',$img); }else{$a =$i-1;$img = str_replace($a.'.',$i++.'.',$img); }
                }
            
                $img_file->move('source/'.$folder.'/'.$table.'/',$img);
                return $img;
            }
        
    }
    public function del_image(Request $request,$value,$folder,$table){ 

        if($value != ''){
            while(file_exists('source/'.$folder.'/'.$table.'/'.$value)){
                unlink('source/'.$folder.'/'.$table.'/'.$value);
            }
        }
        return true;
       
    }
}
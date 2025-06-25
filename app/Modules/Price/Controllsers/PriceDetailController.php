<?php namespace App\Modules\Price\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\M_price;
use App\Model\M_price_detail;
use Auth;
use DB;

class PriceDetailController extends Controller {
    public function get_price_detail_list($price_id){
        $this->authorize('price_view');

        $price_detail = M_price_detail::where('price_id',$price_id)->orderby('orderby','asc')->paginate(30);
        return view('Price::price_detail',['title'=>'Danh sách price','price_detail'=>$price_detail,'price_id'=>$price_id]);
     }
  
        // them 
     public function post_price_detail_new(Request $request,$price_id){
        $this->authorize('price_edit');
        $this -> validate($request,['title' => 'required',],['title.required' => 'Bạn chưa nhập tiêu đề',]);
         
        if($request -> hasFile('img')){
               $img_file = $request -> file('img');
               $exten_img = $img_file -> getClientOriginalExtension();
               if($exten_img != 'webp' && $exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG') {
               return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg (phân biệt viết hoa và viết thường)');
               }
               $img = $img_file -> getClientOriginalName();
       
               
               $i=1;
               while(file_exists('source/price/'.$img)){
                  if($i == 1){
                     $img = str_replace('.','-'.$i++.'.',$img);
                  }else{
                     $a =$i-1;
                     $img = str_replace($a.'.',$i++.'.',$img);
                  }
               }
               $img_file->move('source/price/',$img);
             
        }else{
            $img = '';
        }
        $max = M_price_detail::where('price_id',$price_id)->get()->count();
        $orderby = $max+1;
        M_price_detail:: insert([
           'title' => $request -> title,
            'title_2' => $request -> title_2,
            'price' => $request -> price,
            'price_km' => $request -> price_km,
            'price_percent' => $request ->price_percent,
            'status' => 'on',
            'img' => $img,
            'des' => $request -> des,
            'button' => $request -> button,
            'des_2' => $request -> des_2,
            'link' => $request -> link,
            'unit' => $request -> unit,
            'orderby' => $orderby,
            'price_id' => $price_id,
            'service' => json_encode($request -> service),
        ]);
  
           return redirect() -> back() -> with('alert','Thêm thành công ảnh');
     }


     public function post_price_detail_new_fast(Request $request, $price_id){
        $this->authorize('price_edit');
         if($request -> img_fast !=''){
            foreach($request-> img_fast as $key_img => $img_file){
               if($request -> hasFile('img_fast.'.$key_img)){
                  $exten_img = $img_file -> getClientOriginalExtension();
                  if($exten_img != 'webp' && $exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG'){return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg');}
                  $img = $img_file -> getClientOriginalName();
                  $i=1;
                  while(file_exists('source/price/'.$img)){
                     if($i == 1){
                        $img = str_replace('.','-'.$i++.'.',$img);
                     }else{
                        $a = $i-1;
                        $img = str_replace($a.'.',$i++.'.',$img);
                     }
                  }
                  $img_file->move('source/price/',$img);
               }
               M_price_detail:: insert([
                'title' => $request -> title,
                'title_2' => $request -> title_2,
                'price' => $request -> price,
                'price_km' => $request -> price_km,
                'price_percent' => $request ->price_percent,
                'status' => 'on',
                'img' => $img,
                'des' => $request -> des,
                'button' => $request -> button,
                'des_2' => $request -> des_2,
                'link' => $request -> link,
                'unit' => $request -> unit,
                'orderby' => $orderby,
                'price_id' => $price_id,
                'service' => json_encode($request -> service),
                
               ]);
            }
         }
         return redirect() -> back() -> with('alert','Thêm thành công ảnh');
     }
     
     // sua 
     public function post_price_detail_edit(Request $request,$price_id,$id){
        $this->authorize('price_edit');
        $this -> validate($request,['title' => 'required',],['title.required' => 'Bạn chưa nhập tiêu đề',]);

        if($request -> del_img == 'del_img'){
               $price = M_price_detail::find($id);
               if($price -> img){
                  while(file_exists('source/price/'.$price->img)){
                     unlink('source/price/'.$price->img);
                  }
               }
               M_price_detail::where('id',$id) -> update(['img'=> '']);
         }else{
               if($request -> hasFile('img')){
                  $img_file = $request -> file('img');
                  $exten_img = $img_file -> getClientOriginalExtension();
                  if($exten_img != 'webp' && $exten_img != 'jpg' && $exten_img != 'png' && $exten_img != 'jpeg' && $exten_img != 'JPEG' && $exten_img != 'PNG' && $exten_img != 'JPG') {
                  return redirect()->back() -> with('alert','Lỗi, Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jpeg (phân biệt viết hoa và viết thường)');
                  }
                  $img = $img_file -> getClientOriginalName();
                  
                  $i=1;
                  while(file_exists('source/price/'.$img)){
                     if($i == 1){
                           $img = str_replace('.','-'.$i++.'.',$img);
                     }else{
                           $a =$i-1;
                           $img = str_replace($a.'.',$i++.'.',$img);
                     }
                  }
                  $img_file->move('source/price/',$img);
                  M_price_detail::where('id',$id) -> update(['img'=> $img]);
               }
         }
    
        M_price_detail::where('id',$id)-> update([
            'title' => $request -> title,
            'title_2' => $request -> title_2,
            'price' => $request -> price,
            'price_km' => $request -> price_km,
            'price_percent' => $request ->price_percent,
            'status' => 'on',
            'des' => $request -> des,
            'button' => $request -> button,
            'des_2' => $request -> des_2,
            'link' => $request -> link,
            'unit' => $request -> unit,
            'price_id' => $price_id,
            'service' => json_encode($request -> service),
        ]);
  
        return redirect() -> back() -> with('alert','Sửa thành công price');
     }
  
     // xoa 
     public function get_price_detail_del(Request $request,$price_id,$id){
        $this->authorize('price_edit');
       
        $price_detail = M_price_detail::where('id',$id)->delete();
        return redirect() -> back() -> with('alert','Xóa thành công hình ảnh');
     }
  
      //thay doi status
      public function get_change_img_status($price_id,$id){
        $this->authorize('price_edit');

        $price_detail = M_price_detail::where('id',$id)->first();
        if($price_detail -> status == 'on'){
           $price_detail = M_price_detail::where('id',$id)->update(['status'=>'off']);
           return redirect()-> back() -> with('alert','Bạn đã thay đổi thành công');
        }else{
           $price_detail = M_price_detail::where('id',$id)->update(['status'=>'on']);
           return redirect()-> back() -> with('alert','Bạn đã thay đổi thành công');
        }
     }
}

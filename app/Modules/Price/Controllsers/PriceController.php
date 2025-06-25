<?php namespace App\Modules\Price\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\M_price;
use App\Model\M_price_img;
use Auth;
use DB;

class PriceController extends Controller {
    public function index(){
        $this->authorize('price_view');
        $price = M_price::all();
  
        return view('Price::index',['title'=>'Danh sách price','price'=>$price]);
     }
  
        // them 
     public function post_price_new(Request $request){
        $this -> validate($request,['name' => 'required',],['name.required' => 'Bạn chưa nhập tiêu đề',]);
        $this->authorize('price_edit');
        M_price::insert([
           'name' => $request -> name,
              'status' => 'on',
           'des' => $request -> des,
           'type' => $request -> type,
        ]);
           return redirect() -> back() -> with('alert','Thêm thành công price');
     }
     
     // sua 
     public function post_price_edit(Request $request,$price_id){
        $this -> validate($request,['name' => 'required',],['name.required' => 'Bạn chưa nhập tiêu đề',]);
        $this->authorize('price_edit');
  
        M_price::where('id',$price_id)->update([
           'name' => $request -> name,
            'status' => 'on',
           'des' => $request -> des,
           'type' => $request -> type,
        ]);
        return redirect() -> back() -> with('alert','Sửa thành công price');
     }
  
     // xoa 
     public function get_price_del(Request $request,$price_id){
         $this->authorize('price_edit');
  
         M_price::where('id',$price_id) -> delete();
        
        return redirect() -> back() -> with('alert','Xóa thành công price');
     }
  
      //thay doi status
      public function get_change_status($id){
         $this->authorize('price_edit');
         $price = M_price::where('id',$id)->first();
         if($price -> status == 'on'){
           M_price::where('id',$id)->update(['status'=> 'off']);
            return redirect()-> back() -> with('alert','Bạn đã thay đổi thành công');
         }else{
           M_price::where('id',$id)->update(['status'=> 'on']);
            return redirect()-> back() -> with('alert','Bạn đã thay đổi thành công');
         }
     }
}

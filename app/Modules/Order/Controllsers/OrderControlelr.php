<?php namespace App\Modules\Order\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\M_order;

use Auth;
use DB;

class OrderController extends Controller {
   public function index(){
      $this->authorize('order_view');
      $order = M_order::orderby('id','desc')->paginate(25);

		return view('Order::index',[ 'title'=>'Danh sách đơn hàng','order'=>$order]);
   }

   public function post_order_new(Request $request){
      $this->authorize('order_edit');
      $this -> validate($request,['name' => 'required',],['name.required' => 'Bạn chưa nhập tiêu đề',]);
      $order ->save();

      return redirect() -> back() -> with('alert','Thêm thành công order');
   }

   public function get_export(Request $request){
      $this->authorize('order_edit');
      $order_list = M_order::all();
      foreach($order_list  as $key => $row){

         if($row->product_id != ''){
            if(is_array(json_decode($row->product_id))){
               foreach(json_decode($row->product_id) as $prod_id){
                  $productGet =  M_post::where('id',$prod_id)->first();
                  if(isset( $productGet ->title )){
                     $product[$key][] = html_entity_decode($productGet ->title.' | ');
                  }else{
                     $product[$key][] = '';
                  }
                  $urlget = M_post::where('id',$prod_id)->first();
                  if(isset($urlget->url)){
                     $link[$key][] = 'https:://vankyo.vn/'.$urlget->url.'.html | ';
                  }else{
                     $link[$key][] = '';
                  }


               }
              $product_s = implode(" ", $product[$key]);
               $link_s = implode(" ", $link[$key]);
            }else{
               $product_s = '';
               $link_s = '';
            }
         }else{
            $product_s = '';
            $link_s = '';
         }

         $data[] = array(
            "id"=>$row->id,
            "Mã đơn hàng"=>$row->code,
            "Họ tên"=>html_entity_decode($row->name),
            "Điện thoại"=>$row->tel,
            "Email"=>html_entity_decode($row->email),
            "Tỉnh"=>html_entity_decode($row->tinh),
            "Huyện"=>html_entity_decode($row->huyen),
            "Địa chỉ"=>html_entity_decode($row->add),
            "Thanh toán"=>html_entity_decode($row->pay),

            "Mã thanh toán"=>html_entity_decode($row->vpc_MerchTxnRef),
            "Sản phẩm"=>html_entity_decode($product_s),
            "link"=>html_entity_decode($link_s),
            "Giá giảm"=>$row->giam_gia,
            "Tổng tiền"=>$row->tong_tien,
            "Ngày"=>$row->created_at,
            "Trạng thái thanh toán"=>html_entity_decode($row->pay_status),
            "Trạng thái"=>html_entity_decode($row->status),
            "Hóa đơn"=>html_entity_decode($row->bill),
            "Mã khuyến mại"=>$row->code_km,
            "Ghi chú"=>html_entity_decode($row->note),
         );
      }

      // return $data;

     return view('Order::export',['order_list'=>$order_list,'data'=>$data]);
   }

   // sua
   public function post_order_edit(Request $request,$order_id){
      $this->authorize('order_edit');
      $this -> validate($request,['name' => 'required',],['name.required' => 'Bạn chưa nhập tiêu đề',]);

      $order = M_order::find($order_id);
      $order -> name = $request -> name;
      $order -> tel = $request -> tel;
      $order -> email = $request -> email;
      $order -> content = $request ->content;
      $order -> note = $request ->note;


      $order ->save();

      return redirect() -> back() -> with('alert','Sửa thành công order');
   }

   // xoa
   public function get_order_del(Request $request,$order_id){
      $this->authorize('order_edit');
      M_order::where('id',$order_id)->delete();

      return redirect() -> back() -> with('alert','Xóa thành công order');
   }
}

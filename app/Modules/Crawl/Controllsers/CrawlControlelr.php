<?php namespace App\Modules\Crawl\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\M_product;
use App\Model\M_product_type;
use App\Model\M_product_cat;
use App\Model\M_cat;
use Auth, Storage;
use Sunra\PhpSimple\HtmlDomParser;


class CrawlController extends Controller {
   public function index(Request $request){
      $this->authorize('crawl_view');
      $cat_list = M_cat::get();
      if($request ->link){
         $link = $request -> link;
      }else{
         $link = '';
      }

       // nha cung cap 
       $ncc_cat = M_cat::where('url','nha-cung-cap')->first();
       $ncc_list_cat = M_cat::where('parent_id',$ncc_cat->id)->orderby('created_at','desc')->get();
       //nganh nghe
       $nn_cat = M_cat::where('url','nganh-nghe')->first();
       $nn_list_cat = M_cat::where('parent_id',$nn_cat->id)->orderby('created_at','desc')->get();
		return view('Crawl::index',['nn_cat'=>$nn_cat,'nn_list_cat'=>$nn_list_cat,'ncc_cat'=>$ncc_cat,'ncc_list_cat'=>$ncc_list_cat,'link'=>$link,'cat_list'=>$cat_list,'title'=>'Danh sách thể loại']);
   }

   public function new_post(Request $request){
    $this->authorize('crawl_view'); 
      //   if($request -> img){
      //       $url = $request -> img;
      //       $contents = file_get_contents($url);
      //       $name_img = substr($url, strrpos($url, '/') + 1);
      //       Storage::disk('public_uploads_375')->put($name_img, $contents);
      //   }else{
      //    $name_img = '';
      //   }
         $name_img = $request -> img;
        
        if($request->user_id ){
            $user_id = $request->user_id;
        }else{
            $user_id = Auth::user()->id;
        }
  
        $product = new M_product;
        $product -> title = $request -> title;
      
        $product -> content = $request -> content;
        $product -> des = $request -> des;
        $product -> public = 'on';

        $product -> img = $name_img;
        $product -> status = 'on';
        $product -> user_id = $user_id;
        $product -> price = $request -> price;
        $product -> price_km = $request -> price_km;

        $product -> demo_link = $request -> demo_link;
        $product -> demo_link_1 = $request -> demo_link_1;
        $product -> demo_link_2 = $request -> demo_link_2;
        $product -> demo_link_3 = $request -> demo_link_3;
        $product -> demo_link_4 = $request -> demo_link_4;

        $product -> demo_img_1 = $request -> demo_img_1;
        $product -> demo_img_2 = $request -> demo_img_2;
        $product -> demo_img_3 = $request -> demo_img_3;
        $product -> demo_img_4 = $request -> demo_img_4;

        $product -> demo_link = $request -> demo_link;
        $product -> file = $request -> file;
        $product -> browsers = $request -> browsers;
        $product -> platform = $request -> platform;
        $product -> device = json_encode($request ->device);

        $product -> color = $request -> color;
        $product -> view = $request -> view;

        $product -> save();
   
      //them danh muc
         if($request-> cat){
            foreach($request-> cat as $cat_id){
               M_product_cat::insert([
                  'product_id' => $product->id,
                  'cat_id' => $cat_id
               ]);
            }
         }
         $product_check =M_product::where('url',$request -> url)->first();
         if(isset($product_check -> url )){
            if($product_check -> id == $product->id){
              $product_url = $request -> url;
            }else{
              $product_url = $request -> url.'-'.$product->id;
           }
        }else{
          $product_url = $request -> url;
        }
        M_product::where('id',$product->id)->update(['url' => $product_url]);

    
     return redirect()->back()->with('alert', 'Lưu thành công');
   }
}

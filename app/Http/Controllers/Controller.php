<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Model\M_order;
use App\Model\M_menu;
use App\Model\M_menu_type;
use App\Model\M_config;
use App\Model\M_cat;
use App\Model\M_comment;
use App\Model\M_post;
use App\Model\M_post_cat;
use App\Model\M_theme;
use App\Model\M_theme_row;
use App\Model\M_sidebar;
use App\Http\PayTrait;
use Auth, Http, Session;
use Jenssegers\Agent\Agent as Agent;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    use PayTrait;
    function __construct(){
        $row_head = M_theme_row::orderby('orderby','asc')->where('posion','head')->where('status','on')->get();
        $row_footer = M_theme_row::orderby('orderby','asc')->where('posion','footer')->where('status','on')->get();
        $sidebar = M_sidebar::orderby('orderby','asc')->where('status','on')->get();
        view()->share('row_head',$row_head);
        view()->share('row_footer',$row_footer);
        view()->share('sidebar',$sidebar);
        $_post_news = M_post::where('post_type_id',1)->where('status','on')->limit(20)->get();
        view()->share('_post_news',$_post_news);
        $theme_list = M_theme::get();
        view()->share('_theme_list_',$theme_list);

        $Agent = new Agent();
        // agent detection influences the view storage path
        if ($Agent->isMobile()) {
            view()->share('device','mobile');
        } else {
            view()->share('device','desktop');
        }
        $theme_home = M_theme::where('type','home')->first();
        view()->share('favicon',$theme_home->favicon);
    }

    public function get_home(){
        $theme = M_theme::where('type','home')->first();
        $row_body = M_theme_row::orderby('orderby','asc')->where('posion','body')->where('theme_id',$theme ->id)->where('status','on')->get();
        $title = $theme-> title_seo;
        $des = $theme-> des_seo;
        $key = $theme-> key_seo;
        $index_meta = 'INDEX, FOLLOW';

        return view('fontend/home',['page'=>'home','row_body'=>$row_body, 'page_type'=>'home','theme'=>$theme, 'index_meta'=>$index_meta,'title'=>$title,'key'=>$key,'des'=>$des]);
    }

    public function get_page($url){
        if(!$url){return redirect('');}

        $theme = M_theme::where('url',$url)->first();
        $row_body = M_theme_row::orderby('orderby','asc')->where('posion','body')->where('theme_id',$theme ->id)->where('status','on')->get();
        $title = $theme-> title_seo;
        $des = $theme-> des_seo;
        $key = $theme-> key_seo;
        $index_meta = 'INDEX, FOLLOW';

        return view('fontend/'.$url,['row_body'=>$row_body,'theme'=>$theme,'page_type'=> $theme->type, 'index_meta'=>$index_meta,'title'=>$title,'key'=>$key,'des'=>$des]);
    }

    public function get_cat($url){
        $cat = M_cat::where('url',$url)->first();
        if($cat == ''){
            return redirect('');
        }
        $post_list = M_post::whereHas('f_cat', function($q_cat) use ($cat){$q_cat->where('cat_id', $cat ->id);})->where('post.status','on')->orderby('id','desc')->paginate(24);

         if($cat->title_seo == ''){
            $title = $cat->title;
         }else{
            $title = $cat->title_seo;
         }

         $key = $cat->key;
         if($cat->des_seo == ''){
            $des = $cat->des;
         }else{
            $des = $cat->des_seo;
         }
         $index_meta = $cat -> index_meta;

        
         return view('fontend/cat_'.$cat->type,['page_type'=>'cat', 'url'=>$url,'index_meta'=>$index_meta,'des'=>$des,'key'=>$key,'title'=>$title,'post_list'=>$post_list,'cat'=>$cat]);
    }

    public function get_post($url){
       $post = M_post::where('url',$url)->first();
        if($post == ''){return 'Link không tồn tại';}

        $post_cat = M_post_cat::where('post_id',$post->id)->first();
       $cat = M_cat::find($post_cat->cat_id);
        // $comment_list = M_comment::where('post_id',$post->id)->paginate(10);

        $post_relate = M_post::whereHas('f_cat', function($q_cat) use ($cat){$q_cat->where('cat_id', $cat->id);})->where('post.status','on')->orderby('created_at','desc')->limit(30)->get();
 
        if($post->title_seo == ''){
           $title = $post->title;
        }else{
           $title = $post->title_seo;
        }
        if($post->des_seo == ''){
           $des = $post->title;
        }else{
           $des = $post->des_seo;
        }
        //key
        $key = $post->key_seo;
        $post_type = $post->F_post_type->url;

        return view('fontend/post_news',['page_type'=>'post',  'post_relate'=>$post_relate,'title'=>$title,'key'=>$key,'des'=>$des,'post' =>$post]);
    }

    

    public function get_service($type, $url){
     
        $post = M_post::where('url',$url)->first();
        if($post == ''){return 'Link không tồn tại';}

        $post_cat = M_post_cat::where('post_id',$post->id)->first();
       $cat = M_cat::find($post_cat->cat_id);
        // $comment_list = M_comment::where('post_id',$post->id)->paginate(10);

        $post_relate = M_post::whereHas('f_cat', function($q_cat) use ($cat){$q_cat->where('cat_id', $cat->id);})->where('post.status','on')->orderby('created_at','desc')->limit(30)->get();
 
        if($post->title_seo == ''){
           $title = $post->title;
        }else{
           $title = $post->title_seo;
        }
        if($post->des_seo == ''){
           $des = $post->title;
        }else{
           $des = $post->des_seo;
        }
        //key
        $key = $post->key_seo;
        $post_type = $post->F_post_type->url;

        return view('fontend/post_service',['page_type'=>'post',  'post_relate'=>$post_relate,'title'=>$title,'key'=>$key,'des'=>$des,'post' =>$post]);
    }


    // ajax comment
    public function post_comment(Request $request){
        $comment = new M_comment;
        $comment -> name = $request ->name;
        $comment -> tel = $request ->tel;
        $comment -> email = $request ->email;
        $comment -> content = $request ->content;
        $comment -> status = 'off';
        $comment -> product_id = $request -> product_id;
        $comment -> review = $request -> review;
        $comment -> save();
    }


    public function post_regis(Request $request){
        $order = new M_order;
        $order -> name = $request ->name;
        $order -> tel = $request ->tel;
        $order -> email = $request ->email;
        $order -> content = $request ->content;
        $order -> note = $request ->note;
        $order -> status = 'off';
        $order -> save();
        return redirect()->back()->with('alert','Đăng ký thành công');
    }
}

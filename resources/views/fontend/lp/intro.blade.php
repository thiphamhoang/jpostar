
<div class="container" id="lp-intro">
    <div class="hero-section__column">
 
        <div class="hero-section__column-left">
            <h1 class="hero-section__title  wow fadeInUp" data-wow-delay=".2s"
                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
             
                <span class="gradient-txt_pink">{{$post->lp_title_2}}</span>
            </h1>
            <div class="hero-section__txt wow fadeInUp" data-wow-delay=".3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">{{$post->lp_des}}</div>
            <div class="websubscr-hero_btn-group wow fadeInUp" data-wow-delay=".4s"
                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <a href="#contactsform" class="btn fill-btn_gradient fill-btn_gradient-pink">Liên hệ</a>
                <div class="websubscr-hero_btn-txt">{{$post->lp_des_2}}</div>
            </div>
        </div>

        <div class="hero-section__column-right wow fadeInUp" data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <div class="websubscr-hero_images">
                <img class="websubscr-hero_image_big lazyloaded"
                    data-src="{{asset('source/post/'.$post->lp_img)}}" alt=""
                    src="{{asset('source/post/'.$post->lp_img)}}"
                    style="--smush-placeholder-width: 616px; --smush-placeholder-aspect-ratio: 616/616;">
               
            </div>
        </div>
    </div>
</div>
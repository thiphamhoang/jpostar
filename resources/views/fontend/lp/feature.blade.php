<section class="newarticle-section newarticle-section_nd" id="Highlights_2">
    <div class="container">
        <h2 class="webgtm__title text-left wow fadeInUp" data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">{{$post->lp_feature_title}} </h2>
        <div class="newarticle__item_hot">
            <div class="newarticle__item_hot-img">
                <img data-src="{{asset('source/post/'.$post->lp_feature)}}" alt=""
                    src="{{asset('source/post/'.$post->lp_feature)}}" class=" lazyloaded">
            </div>
            <div class="newarticle__item_hot-info">
                <div class="newarticle__item_hot-txt">{{$post->lp_feature_des}}
                </div>
                <div class="newarticle-slider__btn">
                    <a href="{{$post->lp_feature_link}}"
                        class="btn-base btn-base_border btn-base_border-wh" rel="noindex nofollow">
                        <span>Read the article</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="article-slidebtn">
            <h3 class="newarticle-slider__title text-left wow fadeInUp"
                style="visibility: visible; animation-name: fadeInUp;">{{$post->lp_media_title}}</h3>
            <div class="plus-section_slider-arrows wow fadeInUp"
                style="visibility: visible; animation-name: fadeInUp;">
                <button class="plus-section_slider-btn prev" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                        fill="none">
                        <path d="M31 34L27 30L31 26" stroke="#808080" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </button>
                <button class="plus-section_slider-btn next" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                        fill="none">
                        <path d="M29 34L33 30L29 26" stroke="#808080" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
        </div>
        
        <?php 
            $slide_media = App\Model\M_slide_img::where('slide_id',$post->lp_media_slide)->get();
        ?>

        <div class="newarticle-awards__list owl-carousel wow fadeInUp owl-loaded owl-drag"
            style="visibility: visible; animation-name: fadeInUp;">

            <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all; width: 2340px;">
                    @foreach($slide_media as $key => $slide_m)
                        <div class="owl-item @if($key <=3)active @endif" style="width: 360px; margin-right: 30px;">
                            <div class="newarticle-awards__item">
                                <div class="newarticle-awards__icon"><img
                                        data-src="{{asset('source/slide/'.$slide_m->img)}}"
                                        alt=""
                                        src="{{asset('source/slide/'.$slide_m->img)}}"
                                        class=" lazyloaded"></div>
                                <div class="newarticle-awards__name">{{$slide_m->des}}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><span
                        aria-label="Previous">‹</span></button><button type="button" role="presentation"
                    class="owl-next"><span aria-label="Next">›</span></button></div>
            <div class="owl-dots disabled"></div>
        </div>
    </div>
</section>
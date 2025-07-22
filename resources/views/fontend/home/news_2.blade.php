<section class="newarticle-section newarticle-section_nd" id="news_2">
    <div class="container">
        <h2 class="webgtm__title text-left wow fadeInUp" data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">{{$row->title}} </h2>
        <div class="newarticle__item_hot">
            <div class="newarticle__item_hot-img">
                <a href="{{$row->link}}">
                <img data-src="{{asset('source/theme/'.$row->img)}}" alt="" src="{{asset('source/theme/'.$row->img)}}" class=" lazyloaded">
                </a>
            </div>
            <div class="newarticle__item_hot-info">
                <div class="newarticle__item_hot-txt">{{$row->des}}
                </div>
                <div class="newarticle-slider__btn">
                    <a href="{{$row->link}}" class="btn-base btn-base_border btn-base_border-wh" rel="noindex nofollow">
                        <span> {{$row->button}}</span>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="article-slidebtn">
            <h3 class="newarticle-slider__title text-left wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">{{$row->title_2}}</h3>
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
            $cat_news_id = $row->cat_post_id;
            $count = $row->cat_post_id_count;
            $post_news_list = [];
            $post_news_list = App\Model\M_post::whereHas('f_cat', function($q_cat) use ($cat_news_id){$q_cat->where('cat_id', $cat_news_id);})->where('post.status','on')->orderby('id','desc')->limit($count)->get();
        ?>

        <div class="newarticle-awards__list owl-carousel wow fadeInUp owl-loaded owl-drag"
            style="visibility: visible; animation-name: fadeInUp;">

            <div class="owl-stage-outer">
                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all; width: 2340px;">
                    @foreach($post_news_list as $key_pr => $post_r)
                        <div class="owl-item @if($key <=3)active @endif" style="width: 360px; margin-right: 30px;">
                            <div class="newarticle-awards__item">
                               
                                    <div class="">
                                         <a href="{{asset($post_r->url.'.html')}}" style="color:#fff">
                                        <img data-src="{{asset('source/post/'.$post_r->img)}}" alt="" src="{{asset('source/post/'.$post_r->img)}}" class=" lazyloaded w-100" style="height: 150px; width:100%"> 
                                        </a>
                                    </div>
                                    <div class="newservices-section__name"><a href="{{asset($post_r->url.'.html')}}" style="color:#fff">{{$post_r->title}}</a></div>
                                    <div class="newarticle-awards__name"><a href="{{asset($post_r->url.'.html')}}" style="color:#fff">{{$post_r->des}}</a></div>
                              
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
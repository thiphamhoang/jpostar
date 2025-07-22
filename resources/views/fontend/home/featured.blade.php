  <section class="newarticle-section newarticle-section_nd" id="Highlights">
            <div class="container">
                <h2 class="webgtm__title text-left wow fadeInUp" data-wow-delay=".2s">{{$row->title}} </h2>
                <div class="newarticle__item_hot">
                    <div class="newarticle__item_hot-img">
                       <a href="{{$row->link_img}}">
                         <img data-src="{{asset('/source/theme/'.$row->img)}}" alt=""
                            src="{{asset('/source/theme/'.$row->img)}}"
                            class="lazyload" />
                       </a>
                    </div>
                    <div class="newarticle__item_hot-info">
                        <div class="newarticle__item_hot-txt">{{$row->des}}</div>
                        <!-- <div class="newarticle-slider__btn">
                            <a href="{{$row->link}}"
                                class="btn-base btn-base_border btn-base_border-wh" rel="noindex nofollow">
                                <span>Read the article</span>
                            </a>
                        </div> -->
                    </div>
                </div>
           
            </div>
        </section>
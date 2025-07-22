 
<?php 
    $slide_just = App\Model\M_slide_img::where('slide_id',$post->lp_just_slide)->get();
?>
 <section class="web3subscribe-section">
    <div class="container">
        <h2 class="websubscr__title web3subscribe-section__title wow fadeInUp" data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"><span
                class="gradient-txt_pink">{{$post->lp_just_title_1}} </span><br>{{$post->lp_just_title_2}}
        </h2>
        <div class="web3subscribe-section__list wow fadeInUp"
            style="visibility: visible; animation-name: fadeInUp;">
              @foreach($slide_just as $key => $slide_j)
                <div class="web3subscribe-section__item">
                    <div class="web3subscribe-section__info">
                        <div class="web3subscribe-section__head">{{$slide_j->title}}</div>
                        <div class="web3subscribe-section__txt">{{$slide_j->des}}</div>
                    </div>
                    <div class="web3subscribe-section__right">
                        <img class="web3subscribe-section__img lazyloaded"
                            data-src="{{asset('source/slide/'.$slide_j->img)}}" alt=""
                            src="{{asset('source/slide/'.$slide_j->img)}}"
                            style="--smush-placeholder-width: 860px; --smush-placeholder-aspect-ratio: 860/500;">
                    </div>
                </div>
             @endforeach
        </div>
    </div>
</section>

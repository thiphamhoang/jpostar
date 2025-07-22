
<?php 
    $slide_award = App\Model\M_slide_img::where('slide_id',$post->lp_award_slide)->get();
?>

<section class="gtmpartner-section gtmpartner-section_web3sbscr" id="Awards">
    <div class="container">
        <h2 class="websubscr__title text-center wow fadeInUp" data-wow-delay=".2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">{{$post->lp_award_title_1}} <span
                class="gradient-txt_pink">{{$post->lp_award_title_2}}</span> {{$post->lp_award_title_3}}</h2>
        <div class="gtmpartner-section__list wow fadeInUp"
            style="visibility: visible; animation-name: fadeInUp;">
            @foreach($slide_award as $key => $slide_a)
                <div class="gtmpartner-section__item">
                    {{-- <img class="gtmpartner-section__img lazyloaded"
                        data-src="{{asset('source/slide/'.$slide_a->img)}}" alt=""
                        src="{{asset('source/slide/'.$slide_a->img)}}"
                        style="--smush-placeholder-width: 281px; --smush-placeholder-aspect-ratio: 281/80;"> --}}
                        <div class="web3preference-count_subtitle  text-center" style="display:block;    width: 100%;">{{$slide_a->title}}</div>
                    <div class="gtmpartner-section__head gtmpartner-section__head-nobold">{{$slide_a->des}}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

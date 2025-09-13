 
<?php 
    $slide_sList = App\Model\M_slide_img::where('slide_id',$post->lp_just_slide)->get();
?>
<section class="newservices-section" id="just">
    <div class="container">
        <h2 class="webgtm__title text-center "><span class="gradient-txt_pink">{{$post->lp_just_title_1}}</span></h2>
        <div class="webgtm__descr text-center  ">{{$post->lp_just_title_2}}</div>
        
        <div class="newservices-section__list">
            @foreach($slide_sList as $key => $slide_s)
                    <span class="newservices-section__item  ">
                        <span class="newservices-section__icon">
                            @if($slide_s->img)
                                <span class="newservices-section__iconimg"><img
                                    data-src="{{asset('/source/slide/'.$slide_s->img)}}"
                                    alt="{{$slide_s->title}}" width="102px"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    class="lazyload"
                                    style="--smush-placeholder-width: 131px; --smush-placeholder-aspect-ratio: 131/130;" /></span>
                            @endif

                            <span class="newservices-section__namebox">
                                    <span class="newservices-section__name">{{$slide_s->title}}</span>
                                </span>
                        </span>
                        <span class="newservices-section__txt">{{$slide_s->des}}</span>
                        <div class="mob-only">
                            <span class="btn btn-link_long">
                                <span>Xem thêm</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="8" viewBox="0 0 51 8"
                                    fill="none">
                                    <path
                                        d="M50.3536 4.35355C50.5488 4.15829 50.5488 3.84171 50.3536 3.64645L47.1716 0.464466C46.9763 0.269204 46.6597 0.269204 46.4645 0.464466C46.2692 0.659728 46.2692 0.976311 46.4645 1.17157L49.2929 4L46.4645 6.82843C46.2692 7.02369 46.2692 7.34027 46.4645 7.53553C46.6597 7.7308 46.9763 7.7308 47.1716 7.53553L50.3536 4.35355ZM0 4.5H50V3.5L0 3.5L0 4.5Z"
                                        fill="#9257FE" /></svg>
                            </span>
                        </div>
                    </span>
            @endforeach      
        </div>
    </div>
</section>
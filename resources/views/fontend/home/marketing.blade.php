<?php 
    $slide_mList = App\Model\M_slide_img::where('slide_id',$row->slide_id)->get();
?>
<section class="newindustry-section">
    <div class="container">
        <h2 class="webgtm__title text-center  ">{{$row->title}}</h2>
        <div class="webgtm__descr text-center  ">{{$row->des}}</div>

        <div class="newindustry-section__list">
            @foreach($slide_mList as $key => $slide_m)
                <a href="{{$slide_m->link}}" class="newindustry-section__item  ">
                    <span class="newindustry-section__top">
                        <span class="newindustry-section__icon">
                            @if($slide_m->img)
                            <img
                                data-src="{{asset('/source/slide/'.$slide_m->img)}}"
                                alt="{{$slide_m->title}}" width="40px"
                                src="{{asset('/source/slide/'.$slide_m->img)}}"
                                class="lazyload" />
                            @endif
                        </span>
                    </span>
                    <span class="newindustry-section__name">{{$slide_m->title}}</span>
                   
                    <span class="newindustry-section__txt">{{$slide_m->des}}</span>
                    <div class="mob-only">
                        <span class="btn btn-link_long">
                            <span>Read more</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="8" viewBox="0 0 51 8" fill="none">
                                <path
                                    d="M50.3536 4.35355C50.5488 4.15829 50.5488 3.84171 50.3536 3.64645L47.1716 0.464466C46.9763 0.269204 46.6597 0.269204 46.4645 0.464466C46.2692 0.659728 46.2692 0.976311 46.4645 1.17157L49.2929 4L46.4645 6.82843C46.2692 7.02369 46.2692 7.34027 46.4645 7.53553C46.6597 7.7308 46.9763 7.7308 47.1716 7.53553L50.3536 4.35355ZM0 4.5H50V3.5L0 3.5L0 4.5Z"
                                    fill="#9257FE" /></svg>
                        </span>
                    </div>
                </a>
           @endforeach     
        </div>

    </div>
</section>

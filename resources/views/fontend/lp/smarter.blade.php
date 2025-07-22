  
<?php 
    $slide_smar = App\Model\M_slide_img::where('slide_id',$post->lp_smarter_slide)->get();
?>
 

   <section class="newarticle-section newarticle-section_nd" id="Highlights">
        <div class="container">
              
            <div class="article-slidebtn">
                <h3 class="newarticle-slider__title text-left wow fadeInUp">{{$post->lp_smarter_title_1}}</h3>
                <div class="plus-section_slider-arrows wow fadeInUp">
                    <button class="plus-section_slider-btn prev" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                            fill="none">
                            <path d="M31 34L27 30L31 26" stroke="#808080" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" /></svg>
                    </button>
                    <button class="plus-section_slider-btn next" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                            fill="none">
                            <path d="M29 34L33 30L29 26" stroke="#808080" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" /></svg>
                    </button>
                </div>
            </div>
            <div class="newarticle-awards__list owl-carousel wow fadeInUp">
                 @foreach($slide_smar  as $key => $slide_s)
                    <div class="newarticle-awards__item">
                        <div class="web3option-section__subtitle">{{$slide_s->title}}</div>
                        <div class="newarticle-awards__name">{{$slide_s->des}}</div>
                    </div>
                 @endforeach
            </div>
        </div>
    </section>

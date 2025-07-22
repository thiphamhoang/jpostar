  
<?php 
    $slide_smar = App\Model\M_slide_img::where('slide_id',$post->lp_smarter_slide)->get();
?>

<section class="faq-section faq-section_grad why-section" id="faq">
        <div class="container">
            <div class="websubscr__title text-center">
                {{$post->lp_smarter_title_1}}  <span class="gradient-txt_pink">{{$post->lp_smarter_title_2}}</span> </div>
            <div class="faq-section__items js-faq">
                 @foreach($slide_smar  as $key => $slide_s)
                    <div class="faq-section__item js-faq-item">
                        <button class="btn faq-btn js-faq-btn" type="button">{{$slide_s->title}}</button>

                        <div class="faq-section__answer">
                            <div class="faq-section__answer-inner">
                                {{$slide_s->des}}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</section>
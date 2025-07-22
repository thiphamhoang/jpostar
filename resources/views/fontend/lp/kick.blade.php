 <section class="web3cta-section web3cta-section_large web3cta-section_largebg" id="lp-kick">
    <div class="container">
        <div class="web3cta-section__box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

            <div class="web3cta-section__quote">
                <div class="web3cta-section__info">
                    <div class="web3cta-section__title"><span class="gradient-txt_pink">{{$post->lp_growth_title_1}}</span>
                        {{$post->lp_growth_title_2}}</div>
                    <a href="#contactsform" class="btn fill-btn_gradient fill-btn_gradient-pink">{{$post->lp_growth_button}}</a>
                </div>
            </div>

            <div class="web3cta-section__border"></div>

            <div class="web3cta-section__img">
                <img class="web3cta-section__image lazyloaded"
                    data-src="{{asset('source/post/'.$post->lp_growth)}}" alt=""
                    src="{{asset('source/post/'.$post->lp_growth)}}"
                    style="--smush-placeholder-width: 244px; --smush-placeholder-aspect-ratio: 244/244;">
                <div class="web3cta-section__img-txt">
                    <div class="web3cta-section__name">{{$post->lp_growth_name}}</div>
                 </div>
            </div>
        </div>
    </div>
</section>
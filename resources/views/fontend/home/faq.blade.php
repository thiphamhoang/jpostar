     <section class="faq-section faq-section-line faq-section_gradient">
            <div class="container" itemscope="" itemtype="https://schema.org/FAQPage">
                <div class="faq-section__title text-left"> {{$row->title}} </div>
                <div class="faq-section__items js-faq">
                    <?php 
                        $slide_faqList = App\Model\M_slide_img::where('slide_id',$row->slide_id)->get();
                    ?>
                     @foreach($slide_faqList as $key => $slide_faq)
                            <div class="faq-section__item js-faq-item" itemscope itemprop="mainEntity" >
                                <button class="btn faq-btn js-faq-btn" type="button" itemprop="name"> {{$slide_faq->title}}</button>

                                <div class="faq-section__answer" itemscope itemprop="acceptedAnswer"
                                    itemtype="https://schema.org/Answer">
                                    <div class="faq-section__answer-inner" itemprop="text">{{$slide_faq->des}}</p>
                                    </div>
                                </div>
                            </div>
                     @endforeach   
                </div>
            </div>
        </section>
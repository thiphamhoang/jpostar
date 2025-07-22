        <section class="web3testimon-section newtestimonials-section newtestimonials-section_white" id="Reviews">
            <div class="container">
                <div class="web3testimon-section__head">
                    <h2 class="websubscr__title web3testimon-section__title text-center wow fadeInUp"
                        data-wow-delay=".2s">{{$row->title}}<span class="gradient-txt_pink"> {{$row->title_2}}</span></h2>
                   
                </div>
                <div class="newtestimonials-section__box wow fadeInUp">
                    <div class="newtestimonials-section__clutch">
                        <div class="newtestimonials-section__rait">
                            <div class="newtestimonials-section__rait-txt">5.0</div>
                            <svg width="196" height="32" viewBox="0 0 196 32" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.8026 0L20.7692 12.2229H33.6053L23.2207 19.7771L27.1872 32L16.8026 24.4458L6.41804 32L10.3846 19.7771L0 12.2229H12.8361L16.8026 0ZM57.0403 0L61.0069 12.2229H73.8429L63.4583 19.7771L67.4249 32L57.0403 24.4458L46.6557 32L50.6222 19.7771L40.2376 12.2229H53.0737L57.0403 0ZM102.399 12.2229L98.4324 0L94.4658 12.2229H81.6297L92.0143 19.7771L88.0477 32L98.4324 24.4458L108.817 32L104.85 19.7771L115.235 12.2229H102.399ZM138.815 0L142.781 12.2229H155.617L145.233 19.7771L149.199 32L138.815 24.4458L128.43 32L132.397 19.7771L122.012 12.2229H134.848L138.815 0ZM183.164 12.2229L179.197 0L175.231 12.2229H162.395L172.779 19.7771L168.813 32L179.197 24.4458L189.582 32L185.615 19.7771L196 12.2229H183.164Z"
                                    fill="#E62415" /></svg>
                        </div>
                        <div class="newtestimonials-section__clucth-list">
                            <div class="newtestimonials-section__clucth-item">
                                <div class="newtestimonials-section__clucth-name">Quality</div>
                                <div class="newtestimonials-section__clucth-count">5.0</div>
                            </div>
                            <div class="newtestimonials-section__clucth-item">
                                <div class="newtestimonials-section__clucth-name">Schedule</div>
                                <div class="newtestimonials-section__clucth-count">5.0</div>
                            </div>
                            <div class="newtestimonials-section__clucth-item">
                                <div class="newtestimonials-section__clucth-name">Cost</div>
                                <div class="newtestimonials-section__clucth-count">5.0</div>
                            </div>
                            <div class="newtestimonials-section__clucth-item">
                                <div class="newtestimonials-section__clucth-name">Willing to Ref</div>
                                <div class="newtestimonials-section__clucth-count">5.0</div>
                            </div>
                        </div>
                    </div>
                    <div class="newtestimonials-section__line"></div>
                    <div class="web3testimon-section__list owl-carousel">
                        <?php 
                            $slide_rList = App\Model\M_slide_img::where('slide_id',$row->slide_id)->get();
                        ?>
                        @foreach($slide_rList as $key => $slide_r)
                            <div class="web3testimon-section__item">
                                <div class="web3testimon-section__txt">{{$slide_r->title}}</div>
                                <div>{{$slide_r->des}}</div>
                                <div class="web3testimon-section__logo">
                                    <img class="web3testimon-section__img lazyload"
                                        data-src="{{asset('/source/slide/'.$slide_r->img)}}" alt=""
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" />
                                    <div class="web3testimon-section__team">
                                        <div class="web3testimon-section__name">{{$slide_r->title_2}}</div>
                                        
                                    </div>
                                </div>
                            </div>
                    @endforeach       
                    </div>
                </div>
            </div>
        </section>
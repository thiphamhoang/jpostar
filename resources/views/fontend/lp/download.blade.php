   <section class="web3cta-section web3cta-section_large web3cta-section_largebg" id="lp-download">
            <div class="container">
                <div class="web3cta-section__box wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

                    <div class="web3cta-section__quote">
                        <div class="web3cta-section__info">
                            <div class="web3cta-section__title">{{$post->lp_download_title_1}}
                            </div>
                            <div class="web3cta-section__formb">
                                <div class="wpcf7 js" id="wpcf7-f98771-p82074-o1" lang="en-US" dir="ltr"
                                    data-wpcf7-id="98771">
                                    <div class="screen-reader-response">
                                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                                        <ul></ul>
                                    </div>
                                    <form action="{{asset('/_form_/regis')}}" method="POST" class="wpcf7-form init" aria-label="Contact form" id="form-download">
                                        @csrf
                                        <input type="hidden" name="back" value="{{url()->current()}}#wpcf7-f98771-p82074-o1" required>
                                        <div class="form-blueprint">
                                            <p>
                                                <span class="wpcf7-form-control-wrap" data-name="email-885">
                                                    <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form-control"  placeholder="Email" id="down-loadload-email" type="email" name="email-885">
                                                    </span>
                                            </p>
                                            <div class="fhelp-section__btn text-center wow fadeInUp wow fadeInUp"
                                                data-wow-delay=".4s"
                                                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                                <p><input class="wpcf7-form-control wpcf7-submit has-spinner btn-base"
                                                        type="submit" value="{{$post->lp_download_button}}"><span
                                                        class="wpcf7-spinner"></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                                    </form>
                                    <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        const form = document.getElementById('form-download');
                                        const emailInput = document.getElementById('down-loadload-email');

                                        form.addEventListener('submit', function (e) {
                                            e.preventDefault(); // Chặn submit mặc định

                                            // Kiểm tra nếu ô email trống
                                            if (!emailInput.value.trim()) {
                                                alert('Please enter your email address.');
                                                return; // Không tiếp tục submit nếu trống
                                            }

                                            // Hiện alert xong mới submit
                                            alert("Thank you for subscribing! You're now on the list to receive our latest updates, insights, and exclusive offers. Stay tuned — great things are coming.");

                                            // Sau khi bấm OK thì tiếp tục submit
                                            form.submit();
                                        }, { once: true }); // chỉ chạy 1 lần
                                    });
                                </script>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="web3cta-section__img">
                        <img class="web3cta-section__image lazyloaded"
                            data-src="{{asset('source/post/'.$post->lp_download)}}" alt=""
                            src="{{asset('source/post/'.$post->lp_download)}}"
                            style="--smush-placeholder-width: 635px; --smush-placeholder-aspect-ratio: 635/635;">
                    </div>
                </div>
            </div>
        </section>
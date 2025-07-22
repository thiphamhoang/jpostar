<section class="web3cta-section web3cta-section_large web3cta-section_largebg" style="padding-top: 0;">
    <div class="container">
        <div class="web3cta-section__box wow fadeInUp">

            <div class="web3cta-section__quote">
                <div class="web3cta-section__info">
                    <div class="web3cta-section__title">{{$row->title}}
                    </div>
                    <div class="web3cta-section__formb">
                        <div class="wpcf7 no-js" id="wpcf7-f98771-p67771-o1" lang="en-US" >
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                            </div>
                            <form action="{{asset('/_form_/regis')}}" method="POST" class="wpcf7-form init" id="form-download">
                              
                                @csrf
                                 <input type="hidden" name="back" value="{{asset('/#wpcf7-f98771-p67771-o1')}}" required>
                                <div class="form-blueprint">
                                    <p><span class="wpcf7-form-control-wrap" data-name="email-885">
                                        <input size="40" maxlength="400" class=" form-control" id="down-loadload-email"  placeholder="Email"   type="email" name="email" />
                                        </span>
                                    </p>
                                    <div class="fhelp-section__btn text-center wow fadeInUp wow fadeInUp" data-wow-delay=".4s">
                                        <p>
                                            <input class="wpcf7-form-control wpcf7-submit has-spinner btn-base btn-submit" type="submit" value="{{$row->title_2}}" />
                                        </p>
                                    </div>
                                </div>
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

                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>

             <div class="web3cta-section__img">
                <img class="web3cta-section__image lazyload"
                    data-src="{{asset('source/theme/'.$row->img)}}" alt=""
                    src="{{asset('source/theme/'.$row->img)}}"
                    style="--smush-placeholder-width: 635px; --smush-placeholder-aspect-ratio: 635/635;" />
            </div>
        </div>
    </div>
</section>
   <section class="dmscontact-section contacts-section dark-contacts_bg" id="contactsform"
            style="background: #121212;">
            <div class="container contacts-section__container">
                <div class="contacts-section__info">
                    <div class="contacts-section__title wow fadeInUp" data-wow-delay=".2s">{{$row->title}}</div>
                    <div class="contacts-section__subtitle">{{$row->des}}</div>
                    <?php 
    echo html_entity_decode($row->content);
                    ?>
                    
                </div>

                <div class="contacts-section__form contacts-form js-contacts-form">
                    <div class="wpcf7 no-js" id="wpcf7-f1698-p67771-o2" lang="en-US" dir="ltr" data-wpcf7-id="1698">
                        <div class="screen-reader-response">
                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                            <ul></ul>
                        </div>
                        <form action="{{asset('/_form_/regis')}}" method="POST" id="form-contact" class="wpcf7-form init"
                            id="contact-form-1698" aria-label="Contact form" novalidate="novalidate" data-status="init">
                            @csrf
                                 <input type="hidden" name="back" value="{{asset('/#contact-form-1698')}}">

                            <h3 style="font-size: 1.875rem;text-align:center;">{{$row->title_2}}
                            </h3>
                            <div class="text-center contacts-form__subtitle">
                                <p>{{$row->des_2}}
                                </p>
                            </div>
                            <p>
                            
                            <span class="wpcf7-form-control-wrap" >
                                <input size="40" maxlength="400" id="form-contact-name" class="wpcf7-form-control wpcf7-text" placeholder="Full Name" type="text" name="name" required />
                            </span>
                            <span class="wpcf7-form-control-wrap" >
                                <input size="40" maxlength="400" id="form-contact-email" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"  placeholder="Work Email*"  name="email" required />
                            </span>
                            <span class="wpcf7-form-control-wrap" >
                                <input size="40" maxlength="400" id="form-contact-tel" class="wpcf7-form-control wpcf7-tel wpcf7-text wpcf7-validates-as-tel form-phone_mask"  placeholder="Phone Number*" name="tel" required />
                            </span>
                            <span class="wpcf7-form-control-wrap">
                                <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text textarea-field"  placeholder="What tasks would you like to solve?"  type="text" name="content" />
                            </span>
                            <input class="wpcf7-form-control wpcf7-submit has-spinner btn contacts-form__btn" type="submit" value="{{$row->button}}" />
                            </p>
                            
                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                        </form>
                        <script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('form-contact');
        const nameInput = document.getElementById('form-contact-name');
        const emailInput = document.getElementById('form-contact-email');
        const telInput = document.getElementById('form-contact-tel');

        form.addEventListener('submit', function (e) {
            e.preventDefault(); // Chặn submit mặc định

            // Kiểm tra nếu bất kỳ trường nào bị trống
            if (!nameInput.value.trim()) {
                alert('Please enter your full name.');
                return;
            }

            if (!emailInput.value.trim()) {
                alert('Please enter your email address.');
                return;
            }

            if (!telInput.value.trim()) {
                alert('Please enter your phone number.');
                return;
            }

            // Tất cả đều hợp lệ, hiển thị thông báo và tiếp tục submit
            alert('You have successfully registered.');

            form.submit();
        }, { once: true });
    });
</script>


                    </div>
                </div>
            </div>
        </section>
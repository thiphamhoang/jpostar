

    <header class="header">
        <div class="container header__container">
            <a href="<?php echo e(asset('')); ?>" class="header__logo logo">
                <img data-src="<?php echo e(asset('wp-content/themes/ninjapromo/assets/img/logo-ninja.svg')); ?>"
                    alt="NinjaPromo logo" width="130" height="46"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload"
                    style="--smush-placeholder-width: 130px; --smush-placeholder-aspect-ratio: 130/46;">
            </a>

            <nav class="menu" id="descktopmenu">
                <ul id="menu-main-menu" class="menu__list">
                    <?php echo e(FF_nav_multi_level($row->f_menu)); ?>


                    
                </ul>
            </nav>

            <a href="#contactsform" class="btn menu-cta">Book Intro Call</a>
            <a href="#menumobile" id="btnmenumobile" class="btn menu-btn"></a>
            <div class="menumobile" id="menumobile">
                <div class="menumob-wrap">
                    <ul id="menu-main-menu-1" class="mob__menu">
                         <?php echo e(FF_nav_multi_level($row->f_menu)); ?>

 
                    </ul>
                    <a href="https://ninjapromo.io/contacts" class="btn menu-cta menu-cta_mobile">Book
                        Intro Call</a>
                </div>
            </div>
        </div>
    </header>
 <?php /**PATH E:\xampp\htdocs\jpostar\resources\views/fontend/layout/head.blade.php ENDPATH**/ ?>
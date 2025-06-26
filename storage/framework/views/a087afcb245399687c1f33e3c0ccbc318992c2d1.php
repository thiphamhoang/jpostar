
    <style>
        .mm-listitem>a, .mm-listitem>span {
               font-size: 1rem !important;
        }
        .mm-listitem, .mm-listitem .mm-btn_next, .mm-listitem .mm-btn_next:before, .mm-listitem:after, .mm-listview {
            border-width: 1px !important;
        }
        .mm-listitem {
            padding:0px !important;
        }
        .mm-sub-menu li a {
             font-size: .9rem !important;
        }
    </style>
    <header class="header">
        <div class="container header__container">
            <a href="<?php echo e(asset('')); ?>" class="header__logo logo">
                <img data-src="<?php echo e(asset('/source/theme/'.$row->img)); ?>"
                    alt="NinjaPromo logo" width="130" height="46"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload"
                    style="--smush-placeholder-width: 130px; --smush-placeholder-aspect-ratio: 130/46;">
            </a>

            <nav class="menu" id="descktopmenu">
                <ul id="menu-main-menu" class="menu__list">
                    <?php echo e(FF_nav_multi_level($row->f_menu)); ?>


                    
                </ul>
            </nav>

            <a href="<?php echo e(asset('#contactsform')); ?>" class="btn menu-cta">Contact Us</a>
            <a href="#menumobile" id="btnmenumobile" class="btn menu-btn" style="z-index: 99999999;"></a>
            <div class="menumobile menumobile mm-menu mm-menu_offcanvas mm-menu_selected-hover mm-menu_selected-parent mm-menu_theme-dark" id="menumobile">
                <div class="menumob-wrap">
                    <ul id="mob__menu mm-listview" class="mob__menu" style="padding: 0px 20px">
                         <?php echo e(FF_nav_multi_level_mobile($row->f_menu)); ?>

 
                    </ul>
                    <a href="<?php echo e(asset('#contactsform')); ?>" class="btn menu-cta menu-cta_mobile">Contact Us</a>
                 </div>
            </div>
        </div>
    </header>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const btnMenu = document.getElementById("btnmenumobile");
    const menu = document.getElementById("menumobile");

    btnMenu.addEventListener("click", function () {
        menu.classList.toggle("mm-menu_opened");
    });
});
</script><?php /**PATH D:\xampp\htdocs\jpostar\resources\views/fontend/layout/head.blade.php ENDPATH**/ ?>
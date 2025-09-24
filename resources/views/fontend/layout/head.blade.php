<style>
    .mm-listitem>a,
    .mm-listitem>span {
        font-size: 1rem !important;
    }

    .mm-listitem,
    .mm-listitem .mm-btn_next,
    .mm-listitem .mm-btn_next:before,
    .mm-listitem:after,
    .mm-listview {
        border-width: 1px !important;
    }

    .mm-listitem {
        padding: 0px !important;
    }

    .mm-sub-menu li a {
        font-size: .9rem !important;
    }
</style>
<style>
    .language-dropdown {
        position: relative;
        display: inline-block;
    }

    .language-btn {
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 6px 10px;
        border: 1px solid #ccc;
        border-radius: 6px;

        cursor: pointer;
     }

    .language-btn img {
        width: 20px;
        height: 14px;
        object-fit: cover;
    }

    .language-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background: white;
        border: 1px solid #ccc;
        border-radius: 6px;
  
        z-index: 100;
    }

    .language-menu a {
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 6px 10px;
        text-decoration: none;
        color: #333;
    }

    .language-menu a:hover {
        background: #f0f0f0;
    }

    .language-dropdown:hover .language-menu {
        display: block;
    }
</style>
<header class="header">
    <div class="container header__container">
        <a href="{{ asset('') }}" class="header__logo logo">
            <img data-src="{{ asset('/source/theme/' . $row->img) }}" alt="NinjaPromo logo" width="130" height="46"
                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload"
                style="--smush-placeholder-width: 130px; --smush-placeholder-aspect-ratio: 130/46;">
        </a>

        <nav class="menu" id="descktopmenu">
            <ul id="menu-main-menu" class="menu__list">
                {{ FF_nav_multi_level($row->f_menu) }}


            </ul>
        </nav>

        <a href="{{ asset('#contactsform') }}" class="btn menu-cta" style="padding: 1.0625rem 1rem !important">Contact
            Us</a>
        <a href="#menumobile" id="btnmenumobile" class="btn menu-btn" style="z-index: 99999999;"></a>
        <div class="menumobile menumobile mm-menu mm-menu_offcanvas mm-menu_selected-hover mm-menu_selected-parent mm-menu_theme-dark"
            id="menumobile">
            <div class="menumob-wrap">
                <ul id="mob__menu mm-listview" class="mob__menu " style="padding: 0px 20px;margin-bottom: 20px">
                    {{ FF_nav_multi_level_mobile($row->f_menu) }}

                </ul>
                <a href="{{ asset('#contactsform') }}" class="btn menu-cta menu-cta_mobile ">Contact Us</a>
            </div>
        </div>

        <div class="language-dropdown">
            <div class="language-btn">
                <img src="{{ asset('upload/theme/vn.png') }}" alt="vn" height="20px" width="30px">
            </div>
            <div class="language-menu">
                <a href="https://vi.jpostar.finance/"> 
                    <img src="{{ asset('upload/theme/vn.png') }}" alt="vn" height="20px" width="30px"> 
                </a>
                <a href="https://jpostar.finance/">
                    <img src="{{ asset('upload/theme/en.png') }}" alt="en" height="20px" width="30px">
                </a>
            </div>
        </div>
       
    </div>
</header>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const btnMenu = document.getElementById("btnmenumobile");
        const menu = document.getElementById("menumobile");

        btnMenu.addEventListener("click", function() {
            menu.classList.toggle("mm-menu_opened");
        });
    });
</script>

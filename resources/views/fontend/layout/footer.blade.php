

   <style>
    .info-contact a {
        text-decoration: none; color: #fff;
    }
        .info-contact {
        text-decoration: none; color: #fff;
    }
    .footer__subtitle_2{
            font-size: 1.25rem;    line-height: 1.01; font-weight: 700; color: #fff; text-transform: capitalize;
    }
    .contact-footer {
        margin-top: 50px
    }
    @media screen and (max-width:768px) {
        .footer__subtitle_2 {
            border-bottom: 2px solid #fff;
            padding-bottom: 11px;
        }
         .contact-footer {
            margin-top: 30px
        }
    }

</style>
  <footer class="footer">
        <div class="container footer__container js-footer">
            <div class="footer__nav">
                <div class="footer__logo-wrapper">
                    <a href="" class="footer__logo">
                        <img data-src="{{asset('/source/theme/'.$row->img)}}"
                            alt="NinjaPromo logo" width="130" height="46"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            class="lazyload"
                            style="--smush-placeholder-width: 130px; --smush-placeholder-aspect-ratio: 130/46;">
                    </a>
                     <div class=" contact-footer" >
                        <p class="footer__subtitle_2 footer__subtitle_mb">
                        Liên hệ
                    </p>
                    <div class="info-contact">
                            <?php echo html_entity_decode($row->content) ?>
                        </div>
                    </div>
                    <div style="margin: 10px 0px">
                        <?php 
                           $address = json_decode($row->icon_text);
                        ?>
                        @if($row->icon_text != '' or $row->icon_text != null)
                            
                            @if(json_decode($row->icon_text))
                                @foreach(json_decode($row->icon_text) as $key_it => $it)
                                    <div class="footer__address {{$key_it}}">
                                         
                                        <p class="footer__address-title">{{$it->icon}}</p>
                        
                                        <p class="footer__address-main">
                                            {{$it->text}}
                                            <br>{{$it->icon}}
                                        </p>
                                    </div>
                                @endforeach
                            @endif
                        @endif
                      
                        <div class="footer__address">
                             <p class="footer__address-main"> {{$row->des_2}}</p>
                        </div>
                        
                       
                    </div>
                </div>

                <div class="footer__nav-block js-footer-spoiler">
                    <p class="footer__subtitle">
                       {{$_footer_1_type->name}} 
                    </p>

                    <button class="btn footer__nav-btn js-footer-spoiler-btn" type="button">
                       {{$_footer_1_type->name}} 
                    </button>

                    <div class="footer-menu__list">
                        <ul id="menu-services-menu-1" class="footer-menu__list-inner">
                          {{FF_nav_list($_footer_1)}}
                        </ul>
                    </div>
                </div>

                <div class="footer__nav-block footer__nav-block_desktop js-footer-spoiler">
                    <p class="footer__subtitle_2" style="margin-bottom: 20px">
                   
                        @foreach($_footer_2 as $menu_f2 )
                            <a href="{{$menu_f2->url}}" class="text-white" style="text-decoration: none; color: #fff">
                                {{$menu_f2->name}}
                            </a>

                        @endforeach
                    </p>
                    
                   
                        <button class="btn footer__nav-btn js-footer-spoiler-btn" type="button">
                        {{$_footer_6_type->name}} 
                        </button>
                        <div class="footer-menu__list footer-menu__list-company">
                        <p class="footer__subtitle">
                            {{$_footer_6_type->name}} 
                        </p>
                        <ul id="menu-about" class="footer-menu__list-inner">
                              {{FF_nav_list($_footer_6)}}
                        </ul>
                   
                    </div>
                    
                </div>

                <div class="footer__nav-block  js-footer-spoiler">

                    <button class="btn footer__nav-btn js-footer-spoiler-btn" type="button">
                        {{$_footer_3_type->name}} 
                    </button>

                    <div class="footer-menu__list footer-menu__list-company">
                        <p class="footer__subtitle">
                            {{$_footer_3_type->name}} 
                        </p>
                        <ul id="menu-about" class="footer-menu__list-inner">
                              {{FF_nav_list($_footer_3)}}
                        </ul>
                    </div>
                    
                </div>
                <div class="footer__nav-block  js-footer-spoiler">

                    <button class="btn footer__nav-btn js-footer-spoiler-btn" type="button">
                        {{$_footer_4_type->name}} 
                    </button>

                    <div class="footer-menu__list">
                        <p class="footer__subtitle">
                            {{$_footer_4_type->name}} 
                        </p>
                        <ul id="menu-industries" class="footer-menu__list-inner">
                             {{FF_nav_list($_footer_4)}}
                        </ul>
                    </div>
                    
                </div>

                
            </div>
 
 
            <div class="footer__copy">
 
                <ul id="menu-footer-copy-menu" class="">
                     @if(isset($_footer_5))
                        @foreach($_footer_5 as $menu)
                        <li id="menu-item-5266"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5266"><a
                                href="{{$menu->url}}">{{$menu->name}}</a></li>
                        @endforeach

                    @endif
                 
                </ul>
             </div>
        </div>
    </footer>

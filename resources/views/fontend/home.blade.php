@extends('fontend.index')
@section('content')
    <div class="main wide-page paidmedia digital-page wide-page_dark-sticky webstrategy-page b2b-ndpage home_page">

        <div class="hero-section hero-section_wide hero-section_webstrategy hero-section_b2b hero-section_home">
            
           
             @foreach($row_head as $row)
                @include('fontend/layout/'.$row->style)
            @endforeach
            
            <div class="container">

                <div class="hero-section__column">

                    <div class="hero-section__column-left">
                        <div class="dk-only_large">
                            <h2 class="hero-section__title"><span class="gradient-txt_pink">{{$row->title}}</span>
                                {{$row->title_2}}</h2>
                            <div class="websubscr-hero_btn-group">
                                <svg width="901" height="16" viewBox="0 0 901 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M900.707 8.70711C901.098 8.31658 901.098 7.68342 900.707 7.29289L894.343 0.928932C893.953 0.538408 893.319 0.538408 892.929 0.928932C892.538 1.31946 892.538 1.95262 892.929 2.34315L898.586 8L892.929 13.6569C892.538 14.0474 892.538 14.6805 892.929 15.0711C893.319 15.4616 893.953 15.4616 894.343 15.0711L900.707 8.70711ZM0 9H900V7H0V9Z"
                                        fill="white" /></svg>
                                <div class="websubscr-hero_btn-col">
                                    <div class="websubscr-hero_btn-txt">{{$row->des}}</div>
                                    <a href="#contactsform" class="btn fill-btn_gradient fill-btn_gradient-pink">Contact Us</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="hero-section__column-right">
                        <div class="websubscr-hero_images">
                            <img class="websubscr-hero_image_big lazyload"
                                data-src="https://ninjapromo.io/wp-content/uploads/2024/02/hero_home_img.png"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                style="--smush-placeholder-width: 1247px; --smush-placeholder-aspect-ratio: 1247/1208;" />
                        </div>
                        <div class="mob-only_large">
                            <h1 class="hero-section__title"><span class="gradient-txt_pink">Subscription-based</span>
                                marketing for unstoppable growth</h1>
                            <div class="websubscr-hero_btn-txt">Design, development, content, ads and all you need in
                                one package from a leading digital marketing company worldwide</div>
                            <div class="websubscr-hero_btn-group">
                                <svg width="61" height="16" viewBox="0 0 61 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M60.7071 8.70711C61.0976 8.31658 61.0976 7.68342 60.7071 7.29289L54.3432 0.928932C53.9526 0.538408 53.3195 0.538408 52.9289 0.928932C52.5384 1.31946 52.5384 1.95262 52.9289 2.34315L58.5858 8L52.9289 13.6569C52.5384 14.0474 52.5384 14.6805 52.9289 15.0711C53.3195 15.4616 53.9526 15.4616 54.3432 15.0711L60.7071 8.70711ZM0 9H60V7H0L0 9Z"
                                        fill="white" /></svg>
                                <a href="#contactsform" class="btn fill-btn_gradient fill-btn_gradient-pink">Book a
                                    demo</a> </div>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
    
         @foreach($row_body as $row)
            @include('fontend/home/'.$row->style)
        @endforeach
      
    
@endsection('content')

@extends('fontend.index')
@section('content')
 
    <div id="mm-0" class="mm-page mm-slideout">
        <div class="main paidmedia vd-page">

            <div class="hero-section hero-section_seo">

                @foreach($row_head as $row)
                    @include('fontend/layout/'.$row->style)
                @endforeach
                


                <div class="container hero-section__container">
                    <h1 class="hero-section__title"> {{$post->title_2}}</h1>


                    <p class="hero-section__desc">{{$post->des}} </p>
 
 
                </div>
            </div>

            <section class="paidmain-section">
                <div class="container" style="padding-top:0;">
                    <div class="article-hero__breadcrumbs breadcrumbs-services">
                        <a href="/">Homepage</a> &gt;
                        <a href="/">Services</a> &gt;
                        <span>{{$post->title}}</span>
                    </div>
                </div>
                <div class="container">
                    <h2 class="paidmain-section__title">{{$post->title_3}}
                    </h2>
                    <div class="paidmain-content">
                        <div class="paidmain-descr">
                              <?php echo html_entity_decode($post->content) ?>
                        </div>
                        @if($post->img)
                            <div class="paidmain-content-img wow fadeInUp"
                                style="visibility: visible; animation-name: fadeInUp;">
                                <img width="150" height="150"
                                    data-src="{{asset('source/post/'.$post->img)}}"
                                    class="attachment-thumbnail size-thumbnail ls-is-cached lazyloaded"
                                    alt="Crypto Community Management" decoding="async"
                                    src="{{asset('source/post/'.$post->img)}}"
                                    style="--smush-placeholder-width: 150px; --smush-placeholder-aspect-ratio: 150/150;">
                            </div>
                        @endif
                    </div>
                </div>
            </section>

            <section class="msolutions-section">
                <div class="container">
                     <div class="msolutions-descr">  <?php echo html_entity_decode($post->content_2) ?></div>
                    
                </div>
            </section>
 

        </div>
         
    </div>



 @endsection('content')

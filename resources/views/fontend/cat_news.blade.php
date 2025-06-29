@extends('fontend.index')
@section('content')

<body class=" ">
    
      

    <div id="mm-0" class=" main wide-page mm-page mm-slideout">
        <div class="main">


            <section class="blog-hero">
                <canvas id="gradient-canvas" class="hero-section__bg blog js-hero"></canvas>

                 @foreach($row_head as $row)
                    @include('fontend/layout/'.$row->style)
                @endforeach

                <div class="container blog-hero__container">
                    <div class="blog-hero__main">
                        <h1 class="blog-hero__title"> {{$cat -> name}} </h1>

                        <p class="blog-hero__desc">{{$cat -> des}}</p>
                    </div>
              
                </div>
            </section>

            <div class="container layout layout_blog " style="margin-top: 50px">
              
                <main class="layout__main">
                    <div class="layout__items js-blog-items" data-cat="all" itemscope="itemscope" itemtype="https://schema.org/Blog">
                        @foreach($post_list as $post)
                            <a href="{{asset($post->url.'.html')}}" class="blog-item">
                                <span class="blog-item__img" itemprop="image" itemscope=""
                                    itemtype="https://schema.org/ImageObject">
                                    <img data-src="{{asset('source/post/'.$post->img)}}"
                                        style="--smush-placeholder-width: 423px; --smush-placeholder-aspect-ratio: 423/234;width:100%;"
                                        alt="{{$post->title}}" itemprop="url contentUrl"
                                        width="423" height="234"
                                        data-srcset="{{asset('source/post/'.$post->img)}}"
                                        src="{{asset('source/post/'.$post->img)}}"
                                        class=" ls-is-cached lazyloaded"
                                        srcset="{{asset('source/post/'.$post->img)}}">
                                </span>

                                <span class="blog-item__info">
                                    <time class="published" datetime="2025-06-19 12:30:32" itemprop="datePublished"> <?php 
                                        $date = date_create($post -> created_at);
                                        echo date_format($date,'d/m/Y') ;
                                    ?></time>

                                 </span>

                                <span class="blog-item__title" itemprop="headline">
                                   <?php echo nl2br($post->title) ?>
                                </span>
                                <span class="blog-item__desc" itemprop="description">   <?php echo nl2br($post->des) ?></span>
                            </a>
                        @endforeach
                        
                    </div>

                    <div class="layout__navigation">
                           {{$post_list->appends(request()->input()) ->links()}}
                    </div>
                </main>
            </div>


 
        </div>
       
    </div>


 

@endsection('content')

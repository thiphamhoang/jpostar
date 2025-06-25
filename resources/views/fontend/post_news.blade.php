@extends('fontend.index')
@section('content')

   
    <div id="mm-0" class="mm-page mm-slideout">
        <div class="main article-page">
            <section class="article-hero" id="top">

                        @foreach($row_head as $row)
                            @include('fontend/layout/'.$row->style)
                        @endforeach
            </section>
            <div class="container">
                <div class="article-layout">
                    <main class="article-main">
                        <div class="article-hero__breadcrumbs">
                            <a href="/">Homepage</a> &gt;
                            <a href="/News">News</a> &gt; <span>{{$post->title}}</span>
                        </div>
                        <h1 class="article-hero__title">
                            {{$post->title}} </h1>
                        <div class="article-hero__info-box">
                            <div class="article-hero__info">
                               
                                <div class="article-hero__autors-date">Last Updated: <time ><?php 
                                        $date = date_create($post -> created_at);
                                        echo date_format($date,'d/m/Y') ;
                                    ?></time>
                                </div>
                             </div>
                        </div>

                        <img width="2560" height="1440"
                            src="{{asset('source/post/'.$post->img)}}"
                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                            alt="Fake Influencers_ Who They Are, How to Spot and Avoid Them" decoding="async"
                            fetchpriority="high"
                            sizes="(max-width: 2560px) 100vw, 2560px">
                        <div class="article-top--cta">
                             
                            <p style="margin-top: 0;"><?php echo nl2br($post->des) ?></p>
                        </div>

                        <div class="article-maincontent">
                               <?php echo html_entity_decode($post->content) ?>
                        </div>
 
                    </main>

                    <aside class="article-sidebar">
                       
                        <div class="articleright-item articleright-item-lastp">
                            <div class="articleright-title">Latest Posts</div>
                            <ul class="popularposts">
                                @foreach($post_relate as $item)
                                    <li>
                                        <a href="{{asset($post->url.'.html')}}"
                                            title="Top 8 Boutique Web Design Agencies in 2025">{{ $item->title}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
 
                    </aside>
                </div>
            </div>
 
         

        </div>
         
    </div>

 
@endsection('content')

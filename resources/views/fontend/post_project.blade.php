@extends('fontend.index')
@section('content')
<style>
    .msolutions-descr table {
        border-collapse: collapse;
        width: 100%;
    }

    .msolutions-descr table,
    th,
    td {
        border: 1px solid rgb(96, 96, 96);
        padding: 10px;
    }
    .msolutions-descr ul ul {
        margin-bottom: 20px
    }

</style>

<div id="mm-0" class="mm-page mm-slideout">
    <div class="main article-page">
        <section class="article-hero" id="top">

            @foreach($row_head as $row)
            @include('fontend/layout/'.$row->style)
            @endforeach
        </section>
        <section class="paidmain-section">
            <div class="container" style="padding-top:0;">
                <div class="article-hero__breadcrumbs breadcrumbs-services">
                    <a href="/">Homepage</a> &gt; <a href="#">Project</a> &gt; <span>{{$post->title}}</span>
                </div>
            </div>
            <div class="container">
                <h2 class="paidmain-section__title">{{$post->title}}</h2>
                <div class="paidmain-content">
                    <div class="paidmain-descr">
                        <?php echo html_entity_decode($post->da_tongQuan); ?>
                        <div class="msolutions-icon-title wow fadeInUp">Key Features</div>
                        <div class="msolutions-descr"> <?php echo html_entity_decode($post->da_tinhNang); ?></div>
                    </div>

                    <div class="paidmain-content-img  wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; text-align: center;     position: unset !important;">
                        @if($post->img)


                        <img width="150" height="150" data-src="{{asset('source/post/'.$post->img)}}"
                            class="attachment-thumbnail size-thumbnail lazyloaded" alt="{{$post->title}}"
                            decoding="async" src="{{asset('source/post/'.$post->img)}}"
                            style="--smush-placeholder-width: 150px; --smush-placeholder-aspect-ratio: 150/150;">
                        @endif


                    </div>
                </div>
            </div>

            <div class="container">
                <div class="paidmain-section__title">Estimated Revenue Model</div>
                <div class="msolutions-descr"> <?php echo html_entity_decode($post->da_moHinh); ?></div>
            </div>

            <div class="container">
                <div class="paidmain-section__title">Development & Marketing Budget</div>
                <div class="msolutions-descr"> <?php echo html_entity_decode($post->da_chiPhi); ?></div>
            </div>

            <div style="background: #eee; padding: 30px 0px">
            <div class="container" >
                <div style="display: flex; justify-content: space-between">
                    <div>
                        <div class="paidmain-section__title">Roadmap</div>
                        <div class="msolutions-descr"> <?php echo html_entity_decode($post->da_loTrinh); ?></div>
                    </div>

                    <div>
                        <div class="paidmain-section__title">Funding Plan</div>
                        <div class="msolutions-descr"> <?php echo html_entity_decode($post->da_goiVon); ?></div>
                    </div>
                </div>
            </div>
            </div>

            
        
            <div class="seo-tactics-section pb-large  pt-large" style="margin-top: 20px; color: #121212;">
                <div class="container">
                    <h2 class="paidmain-section__title">Project Introduction
                    </h2>
                    <div class="seo-tactics-subtitle" style="max-width: 95%;"></div>
                </div>
                <div class="container seo-tactics-inner">
                    <div class="seo-tactics-descr" style="padding: 40px 20px !important; font-size: 16px">
                        <?php echo html_entity_decode($post->content); ?>
                    </div>
                </div>
            </div>
        </section>


    </div>

</div>


@endsection('content')

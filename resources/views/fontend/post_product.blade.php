@extends('fontend.index')
@section('content')
    <!-- Main Wrapper -->
    <div class="main" role="main">



        <div class="container">
            <!-- UI Blog -->
            <div class="ui-blog">

                <!-- Blog Body / Left Block -->
                <div class="blog-body">
                    <div class="ui-blog-list">
                        <div class="post-body">
                            <div>
                                <h1 class="">
                                    {{$post->title}}
                                </h1>
                            </div>

                        </div>


                        <div class="py-2">
                            <?php echo html_entity_decode($post->content) ?>
                        </div>

                    </div>
                </div><!-- .blog-body -->
                <hr>
                <!-- Blog Sidebar -->
                <div class="blog-sidebar">

                    <!-- Blog Search -->
                    <div class="ui-widget">
                        <h4>Bài viết liên quan</h4>
                        <ul>
                            @if($post_relate)
                                @foreach($post_relate as $relate)
                                    <li>
                                        <a href="{{asset($relate->url.'.html')}}">{{$relate->title}}</a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div><!-- .ui-widget -->


                </div><!-- .blog-sidebar -->
            </div><!-- .ui-blog -->
        </div><!-- .container -->


    </div><!-- .main -->
@endsection

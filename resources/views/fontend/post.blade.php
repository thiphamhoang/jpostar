@extends('fontend.index')
@section('content') 
    <!-- Main Wrapper -->
    <div class="main mt-5">

        
       
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="post-body">
                        <div>
                            <h1 class="">
                                {{$post->title}}
                            </h1>
                        </div>
                         
                        <div class="py-2">
                            <?php echo html_entity_decode($post->content) ?>
                        </div>
                    </div>
                   
                   
    
                </div>
                <div class="col-md-4">
                    <div class="ui-widget">
                        <div class="sidebar-post">
                            <h4>Tin tức</h4>
                            <div class="sidebar-post-list">
                                @if($_post_news)
                                    @foreach($_post_news as $relate)
                                        <div class="row mb-3">
                                            <div class="col-4">
                                                <a href="{{asset($relate->url.'.html')}}"><img src="{{asset('source/post/'.$relate->img)}}" class="w-100"> </a>
                                            </div>
                                            <div class="col-8">
                                                <a href="{{asset($relate->url.'.html')}}">{{$relate->title}}</a>
                                            </div>
                                        </div>
                                            
                                        
                                    @endforeach
                                @endif
                            </div>
                        </div>
                           
                         
                    </div><!-- .ui-widget -->
                </div>
            </div>
        </div><!-- .container -->

     
    </div><!-- .main -->
@endsection
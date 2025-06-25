@extends('fontend.index')
@section('content') 
    <!-- Main Wrapper -->
    <div class="main mt-5">

        
       
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h1 class="text-center">
                            {{$cat->name}}
                        </h1>
                    </div>
    
                </div>
                <div class="col-md-12">
                    <div class="cat_lb">
                        <?php 
                            $cat_list_field = App\Model\M_cat::where('parent_id',$cat->id)->get();    
                        ?>
                        @if($cat->url == 'linh-vuc')
                            <div class="row">
                                @if(isset($cat_list_field))
                                    @foreach($cat_list_field as $key_pr => $cat_r)
                                        <div class="col-md-4">
                                            {{-- <a href="{{asset($cat_r->url)}}"> --}}
                                                <div class="field_mod pr">
                                                    <div class="field_mod_name py-2 text-uppercase">{{$cat_r->name}}</div>
                                                    <div class="field_sub">
                                                        <?php echo nl2br($cat_r -> des) ?>
                                                    </div>
                                                    {{-- <div class="field_mod_img">
                                                        <img src="{{asset('source/cat/'.$cat_r->img)}}" class="w-100">
                                                    </div> --}}
                                                </div>
                                            {{-- </a> --}}
                                        </div>
                                            
                                    @endforeach
                                @endif
                            </div>
                        @endif
                    </div>
                    <div class="cat-list">
                        @if($post_list)
                            <div class="row mb-3">
                                <!-- @foreach($post_list as $relate)
                                     <div class="col-md-3 mb-3">
                                        <div class="cat_mod">
                                            <div class="cat_mod_img">
                                                <a href="{{asset($relate->url.'.html')}}"><img src="{{asset('source/post/'.$relate->img)}}" class="w-100"> </a>
                                            </div>
                                            <div class="cat_mod-text">
                                                <a href="{{asset($relate->url.'.html')}}">{{$relate->title}}</a>
                                            </div>
                                        </div>
                                    </div> 
                                @endforeach -->

                                <div>
                                    <div class="bd-example">
                                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="height: 550px;overflow: hidden;">
                                            
                                            <div class="carousel-inner">
                                            @if($post_list)
                                                @foreach($post_list  as $key => $img)
                                                    @if($key == 0)
                                                 
                                                        <div class="carousel-item  @if($key == 0) active @endif">
                                                            <div class="row">
                                                    @endif
                                                   
                                                  
                                                            <div class="col-md-3">
                                                                <div class="cat_mod">
                                                                    <div class="cat_mod_img">
                                                                        <a href="{{asset($relate->url.'.html')}}"><img src="{{asset('source/post/'.$relate->img)}}" class="w-100"> </a>
                                                                    </div>
                                                                    <div class="cat_mod-text">
                                                                        <a href="{{asset($relate->url.'.html')}}">{{$relate->title}}</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    @if($key == 7 or $key == 15)
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item  @if($key == 0) active @endif">
                                                            <div class="row">
                                                  
                                                        @endif
                                                        @if($key == count($post_list))
                                                    
                                                            </div>
                                                                </div>
                                                        @endif
                                                @endforeach
                                            @endif

                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <script>
                                    <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('.carousel').carousel({
                                        interval: 1200
                                        })
                                    });
                                    </script>
                                </script>
                            </div>
                        @endif
                    </div>
 
                </div>
            </div>
        </div><!-- .container -->

     
    </div><!-- .main -->
@endsection
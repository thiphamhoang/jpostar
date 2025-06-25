<div>
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="height: 550px;overflow: hidden;">
            <ol class="carousel-indicators">
            @if($row->F_slide_img != '' )
                @foreach($row->F_slide_img  as $key => $dot)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="@if($key == 0) active @endif"></li>
                @endforeach
            @endif
            </ol>
            <div class="carousel-inner">
            @if($row->F_slide_img  != '' )
                @foreach($row->F_slide_img  as $keyi => $img)

                    <div class="carousel-item  @if($keyi == 0) active @endif">
                        <img src="{{asset('source/slide/'.$img->img)}}" class="d-block w-100" height="550px" >
                        <div class="carousel-caption  ">
                            <h3 class="text-white slide-title">{{$img->title}}</h3>
                            <p>{{$img->des}}</p>
                        </div>
                    </div>
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
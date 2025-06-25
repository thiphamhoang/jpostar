<div class="">
    @if($row->F_slide_img  != '' )
        @foreach($row->F_slide_img  as $keyi => $img)
            <div class="row">
                <div class="col-md-2">
                    <img src="{{asset('source/slide/'.$img->img)}}" class="w-100" >
                </div>
                <div class="col-md-10">
                    <div class="miss-mod-title">
                        <h5>{{$img->title}}</h5>
                    </div>
                    <div class="miss-mod-des">
                        {{$img->des}}
                    </div>

                </div>
            </div>

        @endforeach
    @endif
</div>

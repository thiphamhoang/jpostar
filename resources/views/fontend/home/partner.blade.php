<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center titleLag">
                <span  class="">{{$row->title}}</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="partner">
                <div class="row justify-content-center">
                    @if($row->F_slide_img  != '' )
                        @foreach($row->F_slide_img  as $keyi => $img)
        
                            <div class="col-md-2 col-6">
                                <div class="text-center partner_mod">
                                    <img src="{{asset('source/slide/'.$img->img)}}"  >
                                </div>
                                
                            </div>
                        @endforeach
                    @endif
                </div>
    
            </div>
        </div>
    </div>
</div>
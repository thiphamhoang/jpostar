<div class="row">
    <div class="col-md-6">
        <?php echo html_entity_decode($row->content); ?>
    </div>
    <div class="col-md-6">
        <div class="text-center">
            <img src="{{asset('source/theme/'.$row->img)}}" class="w-100" >
        </div>
    </div>
</div>
{{-- <div class="" style="background-image: url('{{asset('upload/theme/bg2.png')}}')"> --}}
<div class="" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h4>{{$row ->title_2}}</h4>
                </div>
                <div>
                    <img src="{{asset('source/theme/'.$row->img_2)}}" class="w-100" >
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="intro-row">
                <div class="intro-title titleLag-2">
                    {{$row->title}}
                </div>
           
                <div class="intro-content">
                    <?php echo html_entity_decode($row->content) ?>
                </div>
            </div>
        </div>
        <div class="col-md-6">
           <div class="px-4">
                <div class="intro-img">
                    <img src="{{asset('source/theme/'.$row->img)}}" class="w-100">
                </div>
                <div class="intro-img">
                    <img src="{{asset('source/theme/'.$row->img_2)}}" class="w-100">
                </div>
           </div>
        </div>
    </div>
</div>
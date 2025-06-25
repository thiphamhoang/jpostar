<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center titleLag">
                <span  class="">{{$row->title}}</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="post-column">
                <div class="row">
                    <div class="col-md-6">
                        <div class="intro-img">
                            <img src="{{asset('source/theme/'.$row->img)}}" class="w-100">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="intro-row">
                            <div class="intro-content">
                                <?php echo html_entity_decode($row->content) ?>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div><!-- End .post-column -->
        </div><!-- End .col-md-4 -->
    </div><!-- End .row -->
     
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center titleLag">
                <span >{{$row->title}}</span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="post-column">
                <?php 
                    $cat_list_field = App\Model\M_cat::where('parent_id',$row->cat_list_id)->get();    
                ?>
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
     
            </div><!-- End .post-column -->
        </div><!-- End .col-md-4 -->
    </div><!-- End .row -->
     
</div>
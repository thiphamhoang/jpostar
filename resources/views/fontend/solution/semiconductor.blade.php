<?php
    $cat_id_parent = $row->cat_product_id;
    $cat_list = App\Model\M_cat::where('parent_id',$cat_id_parent)->get();
?>

<div class="mt-5">
    @foreach($cat_list as $cat)
        <div class="solu-cat-name">
            <h4>{{$cat->name}}</h4>
        </div>
        <?php
            $post_list = App\Model\M_post::whereHas('f_cat', function($q_cat) use ($cat){$q_cat->where('cat_id', $cat ->id);})->where('post.status','on')->orderby('id','desc')->get();
        ?>
        <div>
            @foreach($post_list as $post)
                <div class="row my-3">
                    <div class="col-md-2">
                        <img src="{{asset('source/post/'.$post->img)}}" class="max-width-100">
                    </div>
                    <div class="col-md-8">
                        <div>
                            {{$post->des}}
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="text-right">
                            <a class="btn btn-primary" href="{{asset($post->url.'.html')}}">Xem thêm</a>
                        </div>
                    </div>
                    <div class="col-md-12"><hr></div>
                </div>

            @endforeach
        </div>

    @endforeach
</div>

<div class="sidebar">
   @foreach($sidebar as $sidebar_r)
        <div class="sidebar{{$sidebar_r->id}}" style="margin-bottom: 10px">
            <div class="sidebar_content sidebar-khoa-hoc">
                @include('fontend/sidebar/'.$sidebar_r->type)
            </div>
        </div>
    @endforeach
</div>

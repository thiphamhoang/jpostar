<ul class="list-group" id="sortable">
    @if(count($row_list) > 0)
    @foreach($row_list as $val)
    <li id="item_{{$val->id}}" class="ui-state-default list-group-item d-flex justify-content-between align-items-center @if(isset($row_id))@if($val -> id == $row_id) {{'list-group-item-primary'}} @endif @endif">
        <a class="@if($val -> status != 'on') text-danger @endif"
            href="{{asset('admin/theme/'.$theme_id.'/row/'.$val->id)}}">
            {{$val->name}}
        </a>
    </li>
    @endforeach
    @endif
</ul>
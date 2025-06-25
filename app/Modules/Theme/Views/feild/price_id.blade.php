<div class="form-group">
    <label><i class="fa fa-columns"></i> Chọn bảng giá<a target="_blank" href="{{asset('admin/price')}}"><i class="fa fa-chevron-circle-right"></i></a></label>
       <select class="form-control" name="price_id">
          <option value="0">Trống</option>
          @foreach($price_list as $price_r)
             <option value="{{$price_r -> id}}" @if($price_r->id == $row->price_id ) selected @endif>{{$price_r -> name}}</option>   
          @endforeach
       </select>
</div>
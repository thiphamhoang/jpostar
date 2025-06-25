<div class="form-group">
    <label><i class="fa fa-columns"></i> Chọn slide 2<a target="_blank" href="{{asset('admin/slide')}}"><i class="fa fa-chevron-circle-right"></i></a></label>
       <select class="form-control" name="slide_id_2">
          <option value="0">Trống</option>
          @foreach($slide_list as $slide_2)
             <option value="{{$slide_2 -> id}}" @if($row->slide_id_2 == $slide_2->id) selected @endif>{{$slide_2 -> name}}</option>   
          @endforeach
       </select>
 </div>
<div class="form-group">
    <label><i class="fa fa-columns"></i> Chọn slide 3<a target="_blank" href="{{asset('admin/slide')}}"><i class="fa fa-chevron-circle-right"></i></a></label>
       <select class="form-control" name="slide_id_3">
          <option value="0">Trống</option>
          @foreach($slide_list as $slide_3)
             <option value="{{$slide_3 -> id}}" @if($row->slide_id_3 == $slide_3->id) selected @endif>{{$slide_3 -> name}}</option>   
          @endforeach
       </select>
 </div>
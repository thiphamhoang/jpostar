<div class="form-group">
    <label><i class="fa fa-columns"></i> Chọn hàng</label>
        <select class="form-control" name="link_row_id" id="select_link_row">
            <option value="0">Trống</option>
            @foreach($theme_list as $theme)
                <optgroup label="{{$theme->title}}">
                    @foreach($theme->f_theme_row as $row_l)
                        <option value="{{$row_l->id}}" @if($row->link_row_id == $row_l->id) data-themeParent="{{$theme->id}}" selected @endif>{{$row_l->name}} ({{$row_l->id}})</option>
                    @endforeach
                </optgroup>
               
            @endforeach
        </select>
        
        <div class="mt-3">
            <a href="" id="link_source" target="_blank">Điều chỉnh nội dung</a>
        </div>
        <script>
            var row_id_val = $('#select_link_row').val();
            var theme_id_val = $('#select_link_row').find(':selected').attr('data-themeParent');
            var link = "{{asset('')}}"+'admin/theme/'+theme_id_val+'/row/'+row_id_val;
            $('#link_source').attr('href',link);
        </script>
 </div>
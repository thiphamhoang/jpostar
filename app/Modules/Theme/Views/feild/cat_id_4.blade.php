<div class="form-group">
    <label><i class="fa fa-columns"></i> Chọn danh mục 4 <a target="_blank" href="{{asset('admin/cat')}}"><i class="fa fa-chevron-circle-right"></i></a></label>
       <select class="form-control" name="cat_id_4">
          <option value="0">Trống</option>
          <?php F_select_cat_edit_in_row($cat_list,$row->cat_id_4) ?> 
          Hiển thị thông tin danh mục hiện tại 
       </select>
 </div>
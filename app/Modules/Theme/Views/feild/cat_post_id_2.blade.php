<div class="form-group row">
   <div class="col-md-8">
        <label><i class="fa fa-columns"></i> Chọn danh mục <a target="_blank" href="{{asset('admin/cat')}}"><i class="fa fa-chevron-circle-right"></i></a></label>
       <select class="form-control" name="cat_post_id_2">
          <option value="0">Trống</option>
          <?php F_select_cat_edit_in_row($cat_list,$row->cat_post_id_2) ?> 
       </select>
       Hiển thị bài viết theo danh mục 2
   </div>
    <div class="col-md-4">
         <label class="font-weight-bold">Số lượng</label>
         <input type="number" class="form-control" name="cat_post_id_2_count" value="{{$row->cat_post_id_2_count}}">
 
     </div>
 </div>
<div class="form-group row">
    <div class="col-md-8">
        <label><i class="fa fa-columns"></i> Chọn danh mục <a target="_blank" href="<?php echo e(asset('admin/cat')); ?>"><i class="fa fa-chevron-circle-right"></i></a></label>
        <select class="form-control" name="cat_post_id">
            <option value="0">Trống</option>
            <?php F_select_cat_edit_in_row($cat_list,$row->cat_post_id) ?> 
        </select>
        Hiển thị bài viết theo danh mục
    </div>
    <div class="col-md-4">
        <label class="font-weight-bold">Số lượng</label>
        <input type="number" class="form-control" name="cat_post_id_count" value="<?php echo e($row->cat_post_id_count); ?>">

    </div>
 </div><?php /**PATH D:\xampp\htdocs\jpostar\app\Modules/Theme/Views/feild/cat_post_id.blade.php ENDPATH**/ ?>
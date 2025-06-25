<div class="form-group">
    <label class="font-weight-bold"><i class="fa fa-id-card"></i> Tên hàng (được thay đổi)</label>
    <input type="text" class="form-control" name="name" value="<?php echo e($row->name); ?>" required>
 </div>
<div class="form-group">
    <label class="font-weight-bold"> Tên file (style - không thay đổi)</label>
    <input type="text" class="form-control" name="style" value="<?php echo e($row->style); ?>" required>
 </div>
 <div class="form-group">
    <label><i class="fa fa-sliders-h"></i> Kiểu (không thay đổi)</label>
    <select class="form-control" name="type">
        <option value="custome"  <?php if($row->type == 'custome'): ?> selected <?php endif; ?>>Trống</option>
        <option value="link" <?php if($row->type == 'link'): ?> selected <?php endif; ?>>Liên kết</option>
    </select>
</div>
<div class="form-group">
    <label> Vị trí (không thay đổi)</label>
    <select class="form-control" name="posion">
        <option value="head" <?php if($row->posion == 'head'): ?> selected <?php endif; ?>>Đầu website</option>
        <option value="body" <?php if($row->posion == 'body'): ?> selected <?php endif; ?>>Giữa website</option>
        <option value="footer" <?php if($row->posion == 'footer'): ?> selected <?php endif; ?>>Chân website</option>
    </select>
</div>

<p>
<?php if($row->type == 'custome'): ?>
        <button class="btn btn-primary btn-sm" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Nâng cao (không thay đổi)
        </button>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <?php
            $feild_f2 = array(
                'title' => 'Tiêu đề',
                'title_2' => 'Tiêu đề 2',
                'des' => 'Mô tả',
                'des_2' => 'Mô tả 2',
                'img' => 'Hình ảnh',
                'img_2' => 'Hình ảnh 2',
                'bg_color' => 'Màu nền',
                'bg_color_2' => 'Màu nền 2',
                'img_bg' => 'Hình nền',
                'link_img' => 'Link hình ảnh',
                'link_img_2' => 'Link hình ảnh 2',
                'link_row_id' => 'Liên kết nội dung',
                'link' => 'Link',
                'content' => 'Nội dung',
                'content_2' => 'Nội dung 2',
                'map_code' => 'Google Map',
                'map_code_2' => 'Google Map 2',
                'facebook_fanpage' => 'Facebook fanpage',
                'price_id' => 'Bảng giá',
                'price_id_2' => 'Bảng giá 2',
                'post_id' => 'ID bài viết',
                'post_id_2' => 'ID bài viết 2',
                'post_id_3' => 'ID bài viết 3',
                'post_id_4' => 'ID bài viết 4',
                'video_youtube' => 'Video youtube',
                'menu_id' => 'Menu',
                'menu_id_2' => 'Menu 2',
                'slide_id' => 'Slide',
                'slide_id_2' => 'Slide 2',
                'text_multi' => 'Nhiều text',
                'text_multi_2' => 'Nhiều text 2',
                'icon_text' => 'Hai text',
                'icon_text_2' => 'Hai text 2',
                'three_text' => 'Ba text',
                'slide_id_2' => 'Slide 2',
                'cat_id' => 'Danh mục',
                'cat_id_2' => 'Danh mục 2',
                'cat_id_3' => 'Danh mục 3',
                'cat_id_4' => 'Danh mục 4',
                'cat_post_id' => 'Bài viết theo danh mục',
                'cat_post_id_2' => 'Bài viết theo danh mục 2',
                'cat_product_id' => 'Bài viết theo danh mục sản phẩm',
                'cat_product_id_2' => 'Bài viết theo danh mục sản phẩm 2',
                'cat_post_sub_id' => 'Bài viết theo danh mục con',
                'cat_post_sub_id_2' => 'Bài viết theo danh mục con 2',
                'cat_list_id' => 'Danh sách danh mục con',
                'cat_list_id' => 'Danh sách danh mục con',
                'cat_list_id_2' => 'Danh sách danh mục con 2',
            );
            foreach($feild_f2 as $key_2 => $feild_r){
                ?>
                    <div class="form-check">
                        <input class="form-check-input" name="feild[]" type="checkbox" id="fe_<?php echo e($key_2); ?>" value="<?php echo e($key_2); ?>" <?php if(is_array(json_decode($row->feild))): ?>  <?php if(in_array($key_2,json_decode($row->feild))): ?> checked <?php endif; ?> <?php endif; ?>>
                        <label class="form-check-label" for="fe_<?php echo e($key_2); ?>"><?php echo e($feild_r); ?></label>
                    </div>
                <?php
            }
        ?>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH E:\xampp\htdocs\jpostar\app\Modules/Theme/Views/inc/inc_row_input_right.blade.php ENDPATH**/ ?>
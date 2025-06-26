
<?php $__env->startSection('content'); ?>
<div class="content-wrapper" style="background-color: #ecf0f5;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        
        <h3 class="m-3">Sửa thông tin trang: <?php echo e($theme->title); ?></h3>
        <a href="<?php echo e(asset('admin/dashboard')); ?>" class="btn btn-primary btn-sm">Quay lại</a>
        <a href="<?php echo e(asset('admin/theme/'.$theme_id.'/info')); ?>" class="btn btn-primary btn-sm"><i class="fa fa-cog"></i> Cấu hình SEO</a>
        <a href="<?php echo e(asset('admin/theme/'.$theme_id.'/row/'.$row_first_id)); ?>" class="btn btn-primary btn-sm"><i class="fa fa-palette"></i>  Sửa giao diện</a>

        <?php echo $__env->make('backend/alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-2">
                <?php echo $__env->make('Theme::inc/inc_row', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-md-5">
                <form action="<?php echo e(asset('admin/theme/'.$theme->id.'/info')); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <div class="box-title">
                                Tối ưu SEO
                            </div>
                        </div>
                        <!-- widget group meta  -->
                        <div class="box-body">
                            <!-- toi uu seo -->
                            <!-- tieu de bài viết  -->
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Tiêu đề SEO <title></title>"
                                    name="title_seo" value="<?php echo e($theme -> title_seo); ?>">
                            </div>
                            <!-- mô tả bài viết  -->
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="des_seo"
                                    placeholder="Mô tả SEO (meta description)"><?php echo e($theme -> des_seo); ?></textarea>
                            </div>
                            <!-- meta keyword bài viết  -->
                            <div class="form-group">
                                <input type="text" class="form-control" rows="3" name="key_seo"
                                    placeholder="Từ khóa SEO, cách nhau dấu phẩy (meta keyword)"
                                    value="<?php echo e($theme -> key_seo); ?>">
                            </div>
                            <!-- index-->
                            <div class="form-group">
                                <select class="form-control" name="index_meta">
                                    <option value="INDEX, FOLLOW" <?php if($theme -> index_meta == 'INDEX, FOLLOW'): ?>
                                        <?php echo e('selected'); ?> <?php endif; ?>>INDEX, FOLLOW</option>
                                    <option value="NOINDEX, FOLLOW" <?php if($theme -> index_meta == 'NOINDEX, FOLLOW'): ?>
                                        <?php echo e('selected'); ?> <?php endif; ?>>NOINDEX, FOLLOW</option>
                                    <option value="INDEX, NOFOLLOW" <?php if($theme -> index_meta == 'INDEX, NOFOLLOW'): ?>
                                        <?php echo e('selected'); ?> <?php endif; ?>>INDEX, NOFOLLOW</option>
                                    <option value="NOINDEX, NOFOLLOW" <?php if($theme -> index_meta == 'NOINDEX, NOFOLLOW'): ?>
                                        <?php echo e('selected'); ?> <?php endif; ?>>NOINDEX, NOFOLLOW</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <?php if($theme->type == 'home'): ?>
                        
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <div class="box-title">
                                    Cài đặt head
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="form-group">
                                    <label><i class="fa fa-image"></i> Ảnh favicon (kích thước tối đa 100pixel x
                                        100pixel)</label>
                                    <?php echo e(F_input_image($theme->favicon,'favicon','edit_favicon',asset('/source/theme/'))); ?>

                                </div>
                                <div class="form-group">
                                    <label><i class="fa fa-image"></i> Ảnh hiển thị mạng xã hội cho trang chủ (facebook,
                                        zalo)</label>
                                    <?php echo e(F_input_image_2($theme->og_image,'og_image','edit_og_image',asset('/source/theme/'))); ?>

                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold"><i class="fa fa-book-reader"></i> Code head</label>
                                    <textarea name="head" class="form-control" id="" cols="30"
                                        rows="10"><?php echo e($theme->head); ?></textarea>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    
                    <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                </form>
            </div>
            <!-- ket thuc danh sach  -->
        </div>

    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\jpostar\app\Modules/Theme/Views/theme_info.blade.php ENDPATH**/ ?>
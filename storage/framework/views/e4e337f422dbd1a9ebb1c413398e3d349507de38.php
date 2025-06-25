
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
            <!-- danh sach widget -->
            <div class="col-md-2">
                <?php echo $__env->make('Theme::inc/inc_row', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <button class="btn btn-primary btn-sm mt-2" href="#" data-toggle="modal" data-target="#new_row_custome">
                    <i class="fa fa-plus text-sm"></i> Thêm hàng
                </button>

                <?php echo $__env->make('Theme::inc/row_custome_new', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <script>
                    $(function () {
                        $("#sortable").sortable({
                            update: function (event, ui) {
                                var data = $(this).sortable('serialize');
                                var token = '<?php echo e(csrf_token()); ?>';
                                // ajax 
                                $.ajax({
                                    type: "POST",
                                    url: '<?php echo e(asset('')); ?>admin/theme/<?php echo e($theme_id); ?>/row_order',
                                    dataType: "json",
                                    data: {
                                        data: data,
                                        _token: token
                                    },
                                });
                            }
                        });
                        $("#sortable").disableSelection();
                    });

                </script>
            </div>
            <?php if(isset($row->name)): ?>
            <div class="col-md-10">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <div class="box-title">
                            <?php echo e($row->name); ?>

                            <!-- status -->
                            <a href="<?php echo e(asset('admin/theme/'.$theme_id.'/row/status/'.$row_id)); ?>">
                                <i
                                    class="fa fa-chevron-circle-down <?php if($row->status == 'on'): ?> <?php echo e('text-success'); ?> <?php else: ?> <?php echo e('text-danger'); ?> <?php endif; ?>"></i>
                            </a>
                            <!-- xoa widget -->
                            <a href="#" data-toggle="modal" data-target="#del_row">
                                <i class="fa fa-trash text-danger"></i>
                            </a>
                            <div class="modal fade" id="del_row" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <div class="modal-dialog modal-dialog-centered" role="document">

                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalCenterTitle"><i
                                                    class="text-danger fa fa-trash"></i> Xóa hàng</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <div>
                                                    <i class="fa fa-caret-right"></i> Tên: <?php echo e($row -> name); ?>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary"
                                                    data-dismiss="modal">Đóng</button>
                                                <a href="<?php echo e(asset('admin/theme/'.$theme_id.'/row/del/'.$row_id)); ?>"
                                                    class="btn btn-sm btn-danger">Ok Xóa</a>
                                            </div>
                                        </div> <!-- dong the modal -body -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- widget group meta  -->
                    <div class="box-body">
                        <form method="post" action="<?php echo e(asset('admin/theme/'.$theme_id.'/row/'.$row_id)); ?>" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <input type="hidden" name="type" value="<?php echo e($row->type); ?>">
                                <?php echo $__env->make('Theme::inc/row_custome_edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            </div>
                                 
                         
                            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                            
                        </form>

                    </div>
                </div>
            </div>
            <?php else: ?>
            Hàng không tồn tại
            <?php endif; ?>
            <!-- ket thuc danh sach  -->
        </div>

    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\jpostar\app\Modules/Theme/Views/theme_row.blade.php ENDPATH**/ ?>
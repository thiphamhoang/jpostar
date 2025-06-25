
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Danh sách menu
        </h1>
    </section>
    <?php echo $__env->make('backend/alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Main content -->
    <section class="content">

        <div class="row">
            <!-- danh sach widget -->
            <div class="col-md-3">
                <ul class="list-group">
                    <?php if(count($type_list) != 0): ?>
                    <?php $__currentLoopData = $type_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li
                        class="list-group-item d-flex justify-content-between align-items-center <?php if($val -> id == $type_id): ?> <?php echo e('list-group-item-primary'); ?> <?php endif; ?>">
                        <a href="<?php echo e(asset('admin/menu/'.$val -> id)); ?>">
                            <?php echo e($val -> name); ?>

                        </a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <li class="text-center">
                        <a href="#" class="btn btn-primary btn-sm mt-2" data-toggle="modal"
                            data-target="#new_type_menu">Thêm mới vị trí menu</a>
                    </li>
                </ul>

                <!-- Modal them moi widget -->
                <?php echo $__env->make('Menu::IV_Modal_menu_type_new', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <!-- ket thuc danh sach widget -->
            <!-- danh sach widget -->
            <div class="col-md-9">
                <div class="box box-primary">
                    <?php if($type_id != 0): ?>
                    <div class="box-header with-border">
                        <div class="box-title">
                            <button class="btn btn-sm btn-light" data-toggle="modal" data-target="#new_menu_custome">
                                Thêm menu
                            </button>

                        </div>
                        <?php echo $__env->make('Menu::IV_Modal_menu_new_custome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="box-body">
                        <div class="text-center">
                            <h5>
                                <?php echo e($type -> name); ?>

                                <!-- sua widget -->
                                <a href="#" data-toggle="modal" data-target="#edit_widget">
                                    <i class="fa fa-edit text-primary small"></i>
                                </a>
                                <!-- xoa widget -->
                                <a href="#" data-toggle="modal" data-target="#del_widget">
                                    <i class="fa fa-trash text-danger small"></i>
                                </a>
                                <!-- status -->
                                <a href="<?php echo e(asset('admin/menu/type/status/'.$type->id)); ?>">
                                    <i
                                        class="fa fa-chevron-circle-down small <?php if($type->status == 'on'): ?> <?php echo e('text-success'); ?> <?php else: ?> <?php echo e('text-danger'); ?> <?php endif; ?>"></i>
                                </a>
                                <?php if($type-> def == 'on'): ?> <i class="fa fa-shield-alt text-primary"></i> <?php endif; ?>
                            </h5>
                            <!-- xoa wigdet  -->
                            <div>
                                <i><?php echo e($type->des); ?></i>
                            </div>
                        </div>
                        <!-- MOdel widget edit  -->
                        <?php echo $__env->make('Menu::IV_Modal_menu_type_edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <!-- xoa widget -->
                        <?php echo $__env->make('Menu::IV_Modal_menu_type_del', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>

                    
                    <div class="cf nestable-lists">
                        <div class="dd" id="nestable3">
                            <ol class="dd-list">
                                <?php F_menu_multi_level_ui($menu,$type_id,$row_list,$cat_list); ?>
                            </ol>
                        </div>
                    </div>

                    <script>
                        // sap sep thu tu 
                        $(document).ready(function () {
                            var updateOutput = function (e) {
                                var list = e.length ? e : $(e.target),
                                    output = list.data('output');
                                var token = '<?php echo e(csrf_token()); ?>';
                                var type_id = '<?php echo e($type -> id); ?>';
                                $.ajax({
                                    method: "POST",
                                    url: '<?php echo e(asset('')); ?>admin/menu/' + type_id + '/edit_ajax',
                                    data: {
                                        list: list.nestable('serialize'),
                                        _token: token
                                    }
                                }).fail(function (jqXHR, textStatus, errorThrown) {
                                    alert("Unable to save new list order: " + errorThrown);
                                });
                            };

                            $('.dd').nestable({
                                group: 1,
                                maxDepth: 7,
                            }).on('change', updateOutput);
                        });

                    </script>

                </div>
                <?php else: ?>
                Bạn menu trống
                <?php endif; ?>
            </div>
        </div>
        <!-- ket thuc danh sach  -->
</div>

</section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\jpostar\app\Modules/Menu/Views/index.blade.php ENDPATH**/ ?>
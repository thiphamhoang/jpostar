<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <!-- trang chu -->

            <li class="<?php if(Request::segment(2) == 'dashboard'){echo 'active';} ?>">
                <a data-project="no" href="<?php echo e(asset('admin/dashboard')); ?>">
                    <i class="fa fa-home"></i> <span>Trang chủ</span>
                </a>
            </li>


            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('post_view')): ?>
                <li class="<?php if(Request::segment(5) == 'bai-viet'){echo 'active';} ?>">
                    <a href="<?php echo e(asset('admin/post/bai-viet')); ?>">
                        <i class="fas fa-edit"></i> <span>Bài viết</span>
                    </a>
                </li>
                <li class="<?php if(Request::segment(5) == 'service'){echo 'active';} ?>">
                    <a href="<?php echo e(asset('admin/post/service')); ?>">
                        <i class="fas fa-edit"></i> <span>Dịch vụ</span>
                    </a>
                </li>
 
            <?php endif; ?>


            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('form_view')): ?>
            <li class="<?php if(Request::segment(4) == 'order'){echo 'active';} ?>">
                <a href="<?php echo e(asset('admin/order')); ?>">
                    <i class="fab fa-wpforms"></i> <span>Liên hệ</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('cat_view')): ?>
            <li class="<?php if(Request::segment(4) == 'cat'){echo 'active';} ?>">
                <a href="<?php echo e(asset('admin/cat')); ?>">
                    <i class="fab fa-buffer"></i> <span>Danh mục</span>
                </a>
            </li>
            <?php endif; ?>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('menu_view')): ?>
            <li class="<?php if(Request::segment(4) == 'menu'){echo 'active';} ?>">
                <a href="<?php echo e(asset('admin/menu/0')); ?>">
                    <i class="fa fa-list"></i> <span>Menu</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_user_view')): ?>
            <li class="<?php if(Request::segment(4) == 'user'){echo 'active';} ?>">
                <a href="<?php echo e(asset('admin/user')); ?>">
                    <i class="fa fa-user"></i> <span>Tài khoản</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('slide_view')): ?>
            <li class="<?php if(Request::segment(4) == 'slide'){echo 'active';} ?>">
                <a href="<?php echo e(asset('admin/slide')); ?>">
                    <i class="fa fa-photo-video"></i> <span>Slide</span>
                </a>
            </li>
            <?php endif; ?>
            <li class="treeview <?php if( Request::segment(4) == 'them'){echo 'active';} ?>">
                <a href="#">
                    <i class="fa fa-palette"></i> <span>Cài đặt website</span>
                    <span class="pull-right-container"><i class="fa fa-arrow-circle-down pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('theme_view')): ?>
                        <?php $__currentLoopData = $_theme_list_; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme_m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="<?php if(Request::segment(5) == 'info'){echo 'active';} ?>">
                                <a href="<?php echo e(asset('admin/theme/'.$theme_m->id.'/info')); ?>">
                                    <i class="fa fa-cog"></i> <span><?php echo e($theme_m->title); ?></span>
                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php endif; ?>

                </ul>
            </li>


        </ul>
    </section>
</aside>
<?php /**PATH E:\xampp\htdocs\jpostar\resources\views/backend/menu.blade.php ENDPATH**/ ?>
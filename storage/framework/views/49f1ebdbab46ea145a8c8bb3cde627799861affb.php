<header class="main-header">
    <!-- Logo -->
    <a href="<?php echo e(asset('')); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
            <img src="<?php echo e(asset('upload/theme/icon.png')); ?>" height="30px">
        </span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">
            <img src="https://webux.vn/assets/images/logo.png" height="30px">
        </span>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            Mở rộng menu
            <span class="sr-only">Toggle navigation</span>
        </a>

        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <nav class="my-2 my-md-0 mr-md-3">
                <div class="dropdown">
                    <button class="btn btn-secondary  btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo e(auth::user()-> email); ?>

                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
           
                      
                        <a href="<?php echo e(asset('admin/logout')); ?>" class="dropdown-item">
                            <i class="fa fa-sign-out-alt"></i> Thoát 
                        </a>
                      
                    
                    </div>
                </div>
            </nav>
        </div>
    </nav>
</header>
<?php /**PATH /home/ntechco/domains/ntechco.com.vn/public_html/resources/views/backend/top.blade.php ENDPATH**/ ?>
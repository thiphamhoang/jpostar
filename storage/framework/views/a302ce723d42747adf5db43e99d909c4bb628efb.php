<!doctype html>
<html lang="en" style="height: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Đăng nhập</title>
    <link rel="stylesheet" href="<?php echo e(asset('style/backend/css/style_login.css')); ?>">
    <script src="<?php echo e(asset('style/fontend/js/jquery-3.3.1.min.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('style/backend/bootstrap-4-3-1/css/bootstrap.min.css')); ?>">
    <script src="<?php echo e(asset('style/fontend/bootstrap-4-3-1/js/popper.min.js')); ?>"></script>

</head>

<body
    style="height: 100%;display: flex;-ms-flex-align: center;align-items: center;padding-bottom: 40px; background-color: #f5f5f5;">
    <form class="form-signin" action="<?php echo e(asset('admin/login')); ?>" method="POST">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

        <div class="text-center">
            <img width="250px" class="mb-3" src="https://webux.vn/assets/images/logo.png" alt="">
        </div>
        <?php echo $__env->make('backend/alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="form-group">
            <label>Địa chỉ Email</label>
            <input name="email" type="text" class="form-control" value="<?php if(isset($_GET['email'])): ?><?php echo e($_GET['email']); ?><?php endif; ?>">
        </div>

        <div class="form-group">
            <label>Mật khẩu</label>
            <input name="password" type="password" class="form-control">
        </div>
        <div class="checkbox mb-3">
            
            <div class="">
                <a href="<?php echo e(asset('admin/regis')); ?>">
                    Đăng ký tài khoản mới
                </a>
            </div>
        </div>

        <button class="btn btn-primary btn-block" type="submit">Đăng nhập</button>
        <p class="mt-3 mb-3 text-muted text-center">© 2018 Công ty TNHH WebUX<br>MST 0108181640</p>
    </form>
    <form action="<?php echo e(asset('tool/reset_password')); ?>" method="POST">
        <div class="modal fade" id="reset_pass" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <div class="modal-dialog modal-dialog-centered" role="document">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle"> Khôi phục tài khoản</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <label> Điền email của bạn</label>
                            <input class="form-control" name="email">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-sm btn-danger">Gửi</button>
                        </div>
                    </div> <!-- dong the modal -body -->
                </div>

            </div>
        </div>

    </form>
    <script src="<?php echo e(asset('style/backend/bootstrap-4-3-1/js/bootstrap.min.js')); ?>"></script>
</body>

</html>
<?php /**PATH E:\xampp\htdocs\jpostar\resources\views/login.blade.php ENDPATH**/ ?>
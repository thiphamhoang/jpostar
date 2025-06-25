<!DOCTYPE html>
<html lang=vi_VN class=no-js>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <title><?php echo e($title); ?></title>
   <meta name="description" content="<?php echo e($des); ?>" />
   <meta name="keywords" content="<?php echo e($key); ?>" />

   <meta property="og:title" content="<?php echo e($title); ?>" />
   <meta property="og:description" content="<?php echo e($des); ?>" />

   <meta property="og:image:width" content="630"/>
    <meta property="og:image:height" content="315"/>
   <meta name="robots" content="index,follow">
   <meta name="copyright" content="" />
   <meta name="author" content="" />
   <meta http-equiv="audience" content="General" />
   <meta name="resource-type" content="Document" />
   <meta name="distribution" content="Global" />
   <meta name="revisit-after" content="1 days" />
   <meta name="generator" content="" />
   <meta property="og:site_name" content="<?php echo e($title); ?>" />
   <meta property="og:type" content="website" />
   <meta property="og:locale" content="vi_VN" />
    <?php if($favicon): ?>
        <link rel="shortcut icon" href="<?php echo e(asset('source/theme/'.$favicon)); ?>">
    <?php endif; ?>

    <!-- <script src="<?php echo e(asset('style/fontend/js/jquery-3.3.1.min.js')); ?>"></script> -->
    <script src="<?php echo e(asset('style/fontend/slick/jquery-2.2.0.min.js')); ?>" type="text/javascript"></script>
    <link rel="stylesheet" href="<?php echo e(asset('style/fontend/slick/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/fontend/slick/slick-theme.css')); ?>">

    <script src="<?php echo e(asset('style/fontend/bootstrap-4-3-1/js/popper.min.js')); ?>"></script>


    <link rel="stylesheet" href="<?php echo e(asset('style/fontend/bootstrap-4-3-1/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style/fontend/style.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body class="home">

        <?php $__currentLoopData = $row_head; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('fontend/layout/'.$row->style, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <main class="main">
  
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <?php $__currentLoopData = $row_footer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('fontend/layout/'.$row->style, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <script src="<?php echo e(asset('style/fontend/slick/slick.js')); ?>"></script>
        <script>
             $(document).on('ready', function() {
                $(".regular_2").slick({
                    dots: true,
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    autoplay: true,
                    arrows: true,
                    responsive: [
                        {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 2,
                                centerMode: false, /* set centerMode to false to show complete slide instead of 3 */
                                slidesToScroll: 2
                            }
                        }
                    ]
                });
            });
        </script>

        <script src="<?php echo e(asset('style/backend/bootstrap-4-3-1/js/bootstrap.min.js')); ?>"></script>

</body>
</html>
<?php /**PATH /home/ntechco/domains/ntechco.com.vn/public_html/resources/views/fontend/index.blade.php ENDPATH**/ ?>
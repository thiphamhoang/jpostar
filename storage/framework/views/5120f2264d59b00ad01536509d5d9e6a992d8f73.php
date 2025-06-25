<div>
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="height: 550px;overflow: hidden;">
            <ol class="carousel-indicators">
            <?php if($row->F_slide_img != '' ): ?>
                <?php $__currentLoopData = $row->F_slide_img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $dot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo e($key); ?>" class="<?php if($key == 0): ?> active <?php endif; ?>"></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            </ol>
            <div class="carousel-inner">
            <?php if($row->F_slide_img  != '' ): ?>
                <?php $__currentLoopData = $row->F_slide_img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyi => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="carousel-item  <?php if($keyi == 0): ?> active <?php endif; ?>">
                        <img src="<?php echo e(asset('source/slide/'.$img->img)); ?>" class="d-block w-100" height="550px" >
                        <div class="carousel-caption  ">
                            <h3 class="text-white slide-title"><?php echo e($img->title); ?></h3>
                            <p><?php echo e($img->des); ?></p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div>
<script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.carousel').carousel({
        interval: 1200
        })
    });
    </script>
</script><?php /**PATH D:\xampp\htdocs\jpostar\resources\views/fontend/home/slide.blade.php ENDPATH**/ ?>
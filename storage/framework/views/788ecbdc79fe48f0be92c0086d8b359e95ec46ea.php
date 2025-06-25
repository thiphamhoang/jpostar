<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center titleLag">
                <span  class=""><?php echo e($row->title); ?></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="partner">
                <div class="row justify-content-center">
                    <?php if($row->F_slide_img  != '' ): ?>
                        <?php $__currentLoopData = $row->F_slide_img; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyi => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
                            <div class="col-md-2 col-6">
                                <div class="text-center partner_mod">
                                    <img src="<?php echo e(asset('source/slide/'.$img->img)); ?>"  >
                                </div>
                                
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
    
            </div>
        </div>
    </div>
</div><?php /**PATH D:\xampp\htdocs\jpostar\resources\views/fontend/home/partner.blade.php ENDPATH**/ ?>
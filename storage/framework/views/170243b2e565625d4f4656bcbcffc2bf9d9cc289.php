<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="">
                   <span class="footer-img"> <img src="<?php echo e(asset('source/theme/'.$row->img)); ?>" height="66px" width="auto"></span>
                </div>
                <div class="mt-3">
                    <h4 class="title"><?php echo e($row->title); ?></h4>
                </div>
    
                <div class="footer-title">
                    <h4><?php echo e($row->des); ?></h4>
                    <div class="mt-3">
                        <?php if($row->icon_text): ?>
                            <?php $__currentLoopData = json_decode($row->icon_text); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="mb-2">
                                    <?php echo html_entity_decode($item->icon) ?>   <?php echo e($item->text); ?>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </div>
                </div>

            </div>
            
            <div class="col-md-6">
                <div class="map">
                    <?php echo html_entity_decode($row->map_code) ?>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                        <?php echo e($row->title_2); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php /**PATH /home/ntechco/domains/ntechco.com.vn/public_html/resources/views/fontend/layout/footer.blade.php ENDPATH**/ ?>
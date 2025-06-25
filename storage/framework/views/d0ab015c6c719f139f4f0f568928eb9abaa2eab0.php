<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $row_body; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="section">
        <?php echo $__env->make('fontend/'.$theme->type.'/'.$row->style, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('fontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ntechco/domains/ntechco.com.vn/public_html/resources/views/fontend/home.blade.php ENDPATH**/ ?>
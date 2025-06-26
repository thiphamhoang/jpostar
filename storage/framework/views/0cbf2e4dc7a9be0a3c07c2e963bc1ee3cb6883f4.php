<ul class="list-group" id="sortable">
    <?php if(count($row_list) > 0): ?>
    <?php $__currentLoopData = $row_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li id="item_<?php echo e($val->id); ?>" class="ui-state-default list-group-item d-flex justify-content-between align-items-center <?php if(isset($row_id)): ?><?php if($val -> id == $row_id): ?> <?php echo e('list-group-item-primary'); ?> <?php endif; ?> <?php endif; ?>">
        <a class="<?php if($val -> status != 'on'): ?> text-danger <?php endif; ?>"
            href="<?php echo e(asset('admin/theme/'.$theme_id.'/row/'.$val->id)); ?>">
            <?php echo e($val->name); ?>

        </a>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</ul><?php /**PATH D:\xampp\htdocs\jpostar\app\Modules/Theme/Views/inc/inc_row.blade.php ENDPATH**/ ?>
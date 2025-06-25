<?php $__env->startSection('content'); ?>

<div class="page-head">
    <div class="text-center mt-4">
         <h3 class="page-title">Liên hệ</h3>
    </div>
</div>

<div class="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-4">
                    <?php $__currentLoopData = $row_body; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyc => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     
                        <div class="row">
                            <div class="col-md-6">
                                <?php echo html_entity_decode($row->content) ?>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <?php echo $__env->make('backend/alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                                <div class="">
                                    <form action="<?php echo e(asset('_form_/regis')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Họ tên">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="tel" placeholder="Số điện thoại">
                                        </div>
                                        <div class="form-group">
                                            <textarea type="textarea" class="form-control" name="note" placeholder="Nội dung"></textarea>
                                        </div>
                                        <div class="form-group">
                                             <button class="btn btn-primary">Gửi</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('fontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ntechco/domains/ntechco.com.vn/public_html/resources/views/fontend/lien-he.blade.php ENDPATH**/ ?>
<div class="head py-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="<?php echo e(asset('')); ?>">
                    <img src="<?php echo e(asset('source/theme/'.$row->img)); ?>" height="60px">
                </a>
            </div>
            <div class="col-md-3  col-6">
                <div class="row justify-content-end">
                    <div class="col-3">
                        <div class="head-hotline-icon text-danger">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-9">  
                        <div class="head-hotline-text">
                            <?php echo e($row->title); ?>

                        </div>
                        <div class="head-hotline-number color-1 font-weight-bold">
                            <?php echo e($row->title_2); ?>

                        </div>
                    </div>
                </div>
            </div>
 
            <!-- download profile  -->
            <div class="col-md-3 col-6">
                <div class="head-download text-center">
                    <a href="<?php echo e($row->link); ?>" class="btn btn-lg btn-primary rounded-pill" width="200px"><?php echo e($row->button); ?></a>
                </div>
            </div>
            
        </div>
    </div>
</div><?php /**PATH /home/ntechco/domains/ntechco.com.vn/public_html/resources/views/fontend/layout/head.blade.php ENDPATH**/ ?>
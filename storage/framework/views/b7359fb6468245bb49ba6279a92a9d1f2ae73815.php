<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center titleLag">
                <span ><?php echo e($row->title); ?></span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="post-column">
                <?php 
                    $cat_list_field = App\Model\M_cat::where('parent_id',$row->cat_list_id)->get();    
                ?>
                <div class="row">
                    <?php if(isset($cat_list_field)): ?>
                        <?php $__currentLoopData = $cat_list_field; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key_pr => $cat_r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4">
                                
                                    <div class="field_mod pr">
                                        <div class="field_mod_name py-2 text-uppercase"><?php echo e($cat_r->name); ?></div>
                                        <div class="field_sub">
                                            <?php echo nl2br($cat_r -> des) ?>
                                        </div>
                                        
                                    </div>
                                
                            </div>
                                
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
     
            </div><!-- End .post-column -->
        </div><!-- End .col-md-4 -->
    </div><!-- End .row -->
     
</div><?php /**PATH /home/ntechco/domains/ntechco.com.vn/public_html/resources/views/fontend/home/field.blade.php ENDPATH**/ ?>
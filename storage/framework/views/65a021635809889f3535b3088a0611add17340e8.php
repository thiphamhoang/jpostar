<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center titleLag">
                <span  class=""><?php echo e($row->title); ?></span>
            </div>
        </div>
        <div class="col-md-12">
            <div class="post-column">
                <?php 
                    $cat_post_id = $row->cat_post_id;
                    $post_list = App\Model\M_post::whereHas('f_cat', function($q_cat) use ($cat_post_id){$q_cat->where('cat_id', $cat_post_id);})->where('post.status','on')->orderby('id','desc')->limit(8)->get();
                ?>
                <div class="row">
                    <?php if(isset($post_list)): ?>
                        <?php $__currentLoopData = $post_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key_pr => $post_r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-3 padding-left-5 padding-right-5">
                               <a href="<?php echo e(asset($post_r->url.'.html')); ?>" class="text-dark font-weight-bold">
                                    <div class="project_mod">
                                        
                                        <div class="project_mod_img">
                                            <img src="<?php echo e(asset('source/post/'.$post_r->img)); ?>" class="w-100">
                                        </div>
                                        <div class="project_mod_name p-2"><?php echo e($post_r->title); ?></div>
                                    </div>
                               </a>
                            </div>
                            
                                
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                                <a href="<?php echo e(asset('du-an')); ?>" class="readmore btn btn-primary rounded-pill">Xem tất cả</a>
                        </div>
                    </div>
                </div>
     
            </div><!-- End .post-column -->
        </div><!-- End .col-md-4 -->
    </div><!-- End .row -->
     
</div><?php /**PATH /home/ntechco/domains/ntechco.com.vn/public_html/resources/views/fontend/home/project.blade.php ENDPATH**/ ?>
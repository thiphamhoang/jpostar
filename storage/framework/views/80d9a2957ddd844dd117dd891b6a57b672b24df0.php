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
                    $cat_news_id = $row->cat_post_id;
                    $post_news_list = App\Model\M_post::whereHas('f_cat', function($q_cat) use ($cat_news_id){$q_cat->where('cat_id', $cat_news_id);})->where('post.status','on')->orderby('id','desc')->limit(3)->get();
                ?>
                <div class="row">
                    <?php if(isset($post_news_list)): ?>
                        <?php $__currentLoopData = $post_news_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key_pr => $post_r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4">
                                <a href="<?php echo e(asset($post_r->url.'.html')); ?>">
                                    <div class="news_mod">
                                    
                                        <div class="news_mod_img">
                                            <img src="<?php echo e(asset('source/post/'.$post_r->img)); ?>" class="w-100">
                                        </div>
                                        <div class="news_mod_name mt-1"><?php echo e($post_r->title); ?></div>
                                    </div>
                                </a>
                            </div>
                            
                                
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
     
            </div><!-- End .post-column -->
        </div><!-- End .col-md-4 -->
    </div><!-- End .row -->
     
</div><?php /**PATH /home/ntechco/domains/ntechco.com.vn/public_html/resources/views/fontend/home/news.blade.php ENDPATH**/ ?>
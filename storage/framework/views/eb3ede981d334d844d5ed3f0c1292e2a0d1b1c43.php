
<?php $__env->startSection('content'); ?> 
    <!-- Main Wrapper -->
    <div class="main mt-5">

        
       
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="post-body">
                        <div>
                            <h1 class="">
                                <?php echo e($post->title); ?>

                            </h1>
                        </div>
                         
                        <div class="py-2">
                            <?php echo html_entity_decode($post->content) ?>
                        </div>
                    </div>
                   
                   
    
                </div>
                <div class="col-md-4">
                    <div class="ui-widget">
                        <div class="sidebar-post">
                            <h4>Tin tức</h4>
                            <div class="sidebar-post-list">
                                <?php if($_post_news): ?>
                                    <?php $__currentLoopData = $_post_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="row mb-3">
                                            <div class="col-4">
                                                <a href="<?php echo e(asset($relate->url.'.html')); ?>"><img src="<?php echo e(asset('source/post/'.$relate->img)); ?>" class="w-100"> </a>
                                            </div>
                                            <div class="col-8">
                                                <a href="<?php echo e(asset($relate->url.'.html')); ?>"><?php echo e($relate->title); ?></a>
                                            </div>
                                        </div>
                                            
                                        
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                           
                         
                    </div><!-- .ui-widget -->
                </div>
            </div>
        </div><!-- .container -->

     
    </div><!-- .main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('fontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\jpostar\resources\views/fontend/post.blade.php ENDPATH**/ ?>
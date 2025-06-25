<?php $__env->startSection('content'); ?> 
    <!-- Main Wrapper -->
    <div class="main mt-5">

        
       
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h1 class="text-center">
                            <?php echo e($cat->name); ?>

                        </h1>
                    </div>
    
                </div>
                <div class="col-md-12">
                    <div class="cat_lb">
                        <?php 
                            $cat_list_field = App\Model\M_cat::where('parent_id',$cat->id)->get();    
                        ?>
                        <?php if($cat->url == 'linh-vuc'): ?>
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
                        <?php endif; ?>
                    </div>
                    <div class="cat-list">
                        <?php if($post_list): ?>
                            <div class="row mb-3">
                                <!-- <?php $__currentLoopData = $post_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <div class="col-md-3 mb-3">
                                        <div class="cat_mod">
                                            <div class="cat_mod_img">
                                                <a href="<?php echo e(asset($relate->url.'.html')); ?>"><img src="<?php echo e(asset('source/post/'.$relate->img)); ?>" class="w-100"> </a>
                                            </div>
                                            <div class="cat_mod-text">
                                                <a href="<?php echo e(asset($relate->url.'.html')); ?>"><?php echo e($relate->title); ?></a>
                                            </div>
                                        </div>
                                    </div> 
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->

                                <div>
                                    <div class="bd-example">
                                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="height: 550px;overflow: hidden;">
                                            
                                            <div class="carousel-inner">
                                            <?php if($post_list): ?>
                                                <?php $__currentLoopData = $post_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($key == 0): ?>
                                                 
                                                        <div class="carousel-item  <?php if($key == 0): ?> active <?php endif; ?>">
                                                            <div class="row">
                                                    <?php endif; ?>
                                                   
                                                  
                                                            <div class="col-md-3">
                                                                <div class="cat_mod">
                                                                    <div class="cat_mod_img">
                                                                        <a href="<?php echo e(asset($relate->url.'.html')); ?>"><img src="<?php echo e(asset('source/post/'.$relate->img)); ?>" class="w-100"> </a>
                                                                    </div>
                                                                    <div class="cat_mod-text">
                                                                        <a href="<?php echo e(asset($relate->url.'.html')); ?>"><?php echo e($relate->title); ?></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    <?php if($key == 7 or $key == 15): ?>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item  <?php if($key == 0): ?> active <?php endif; ?>">
                                                            <div class="row">
                                                  
                                                        <?php endif; ?>
                                                        <?php if($key == count($post_list)): ?>
                                                    
                                                            </div>
                                                                </div>
                                                        <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>

                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                                <script>
                                    <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('.carousel').carousel({
                                        interval: 1200
                                        })
                                    });
                                    </script>
                                </script>
                            </div>
                        <?php endif; ?>
                    </div>
 
                </div>
            </div>
        </div><!-- .container -->

     
    </div><!-- .main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('fontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ntechco/domains/ntechco.com.vn/public_html/resources/views/fontend/cat.blade.php ENDPATH**/ ?>
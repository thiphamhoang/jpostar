
<?php $__env->startSection('content'); ?>
 
    <div id="mm-0" class="mm-page mm-slideout">
        <div class="main paidmedia vd-page">

            <div class="hero-section hero-section_seo">

                <?php $__currentLoopData = $row_head; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('fontend/layout/'.$row->style, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                


                <div class="container hero-section__container">
                    <h1 class="hero-section__title"> <?php echo e($post->title_2); ?></h1>


                    <p class="hero-section__desc"><?php echo e($post->des); ?> </p>
 
 
                </div>
            </div>

            <section class="paidmain-section">
                <div class="container" style="padding-top:0;">
                    <div class="article-hero__breadcrumbs breadcrumbs-services">
                        <a href="/">Homepage</a> &gt;
                        <a href="/">Services</a> &gt;
                        <span><?php echo e($post->title); ?></span>
                    </div>
                </div>
                <div class="container">
                    <h2 class="paidmain-section__title"><?php echo e($post->title_3); ?>

                    </h2>
                    <div class="paidmain-content">
                        <div class="paidmain-descr">
                              <?php echo html_entity_decode($post->content) ?>
                        </div>
                        <?php if($post->img): ?>
                            <div class="paidmain-content-img wow fadeInUp"
                                style="visibility: visible; animation-name: fadeInUp;">
                                <img width="150" height="150"
                                    data-src="<?php echo e(asset('source/post/'.$post->img)); ?>"
                                    class="attachment-thumbnail size-thumbnail ls-is-cached lazyloaded"
                                    alt="Crypto Community Management" decoding="async"
                                    src="<?php echo e(asset('source/post/'.$post->img)); ?>"
                                    style="--smush-placeholder-width: 150px; --smush-placeholder-aspect-ratio: 150/150;">
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>

            <section class="msolutions-section">
                <div class="container">
                     <div class="msolutions-descr">  <?php echo html_entity_decode($post->content_2) ?></div>
                    
                </div>
            </section>
 

        </div>
         
    </div>



 <?php $__env->stopSection(); ?>

<?php echo $__env->make('fontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\jpostar\resources\views/fontend/post_service.blade.php ENDPATH**/ ?>
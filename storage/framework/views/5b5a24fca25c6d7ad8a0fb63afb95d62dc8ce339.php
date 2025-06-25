
<?php $__env->startSection('content'); ?>

<body class=" ">
    
      

    <div id="mm-0" class="mm-page mm-slideout">
        <div class="main">


            <section class="blog-hero">
                <canvas id="gradient-canvas" class="hero-section__bg blog js-hero"></canvas>

                 <?php $__currentLoopData = $row_head; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('fontend/layout/'.$row->style, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="container blog-hero__container">
                    <div class="blog-hero__main">
                        <h1 class="blog-hero__title"> <?php echo e($cat -> name); ?> </h1>

                        <p class="blog-hero__desc"><?php echo e($cat -> des); ?></p>
                    </div>
              
                </div>
            </section>

            <div class="container layout layout_blog">
              
                <main class="layout__main">
                    <div class="layout__items js-blog-items" data-cat="all" itemscope="itemscope" itemtype="https://schema.org/Blog">
                        <?php $__currentLoopData = $post_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(asset($post->url.'.html')); ?>" class="blog-item">
                                <span class="blog-item__img" itemprop="image" itemscope=""
                                    itemtype="https://schema.org/ImageObject">
                                    <img data-src="<?php echo e(asset('source/post/'.$post->img)); ?>"
                                        style="--smush-placeholder-width: 423px; --smush-placeholder-aspect-ratio: 423/234;width:100%;"
                                        alt="<?php echo e($post->title); ?>" itemprop="url contentUrl"
                                        width="423" height="234"
                                        data-srcset="<?php echo e(asset('source/post/'.$post->img)); ?>"
                                        src="<?php echo e(asset('source/post/'.$post->img)); ?>"
                                        class=" ls-is-cached lazyloaded"
                                        srcset="<?php echo e(asset('source/post/'.$post->img)); ?>">
                                </span>

                                <span class="blog-item__info">
                                    <time class="published" datetime="2025-06-19 12:30:32" itemprop="datePublished"> <?php 
                                        $date = date_create($post -> created_at);
                                        echo date_format($date,'d/m/Y') ;
                                    ?></time>

                                 </span>

                                <span class="blog-item__title" itemprop="headline">
                                   <?php echo nl2br($post->title) ?>
                                </span>
                                <span class="blog-item__desc" itemprop="description">   <?php echo nl2br($post->des) ?></span>
                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </div>

                    <div class="layout__navigation">
                           <?php echo e($post_list->appends(request()->input()) ->links()); ?>

                    </div>
                </main>
            </div>


 
        </div>
       
    </div>


 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('fontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\jpostar\resources\views/fontend/cat_news.blade.php ENDPATH**/ ?>
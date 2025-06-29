
<?php $__env->startSection('content'); ?>

   
    <div id="mm-0" class="main wide-page mm-page mm-slideout">
        <div class="main article-page">
            <section class="article-hero" id="top">

                        <?php $__currentLoopData = $row_head; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $__env->make('fontend/layout/'.$row->style, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </section>
            <div class="container">
                <div class="article-layout">
                    <main class="article-main">
                        <div class="article-hero__breadcrumbs">
                            <a href="/">Homepage</a> &gt;
                            <a href="/News">News</a> &gt; <span><?php echo e($post->title); ?></span>
                        </div>
                        <h1 class="article-hero__title">
                            <?php echo e($post->title); ?> </h1>
                        <div class="article-hero__info-box">
                            <div class="article-hero__info">
                               
                                <div class="article-hero__autors-date">Last Updated: <time ><?php 
                                        $date = date_create($post -> created_at);
                                        echo date_format($date,'d/m/Y') ;
                                    ?></time>
                                </div>
                             </div>
                        </div>

                        <img width="2560" height="1440"
                            src="<?php echo e(asset('source/post/'.$post->img)); ?>"
                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                            alt="Fake Influencers_ Who They Are, How to Spot and Avoid Them" decoding="async"
                            fetchpriority="high"
                            sizes="(max-width: 2560px) 100vw, 2560px">
                        <div class="article-top--cta">
                             
                            <p style="margin-top: 0;"><?php echo nl2br($post->des) ?></p>
                        </div>

                        <div class="article-maincontent">
                               <?php echo html_entity_decode($post->content) ?>
                        </div>
 
                    </main>

                    <aside class="article-sidebar">
                       
                        <div class="articleright-item articleright-item-lastp">
                            <div class="articleright-title">Latest Posts</div>
                            <ul class="popularposts">
                                <?php $__currentLoopData = $post_relate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(asset($post->url.'.html')); ?>"
                                            title="Top 8 Boutique Web Design Agencies in 2025"><?php echo e($item->title); ?></a>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
 
                    </aside>
                </div>
            </div>
 
         

        </div>
         
    </div>

 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('fontend.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\jpostar\resources\views/fontend/post_news.blade.php ENDPATH**/ ?>
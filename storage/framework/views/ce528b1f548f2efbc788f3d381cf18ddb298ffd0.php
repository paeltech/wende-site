<?php $__env->startSection('title', '<?php echo e($post->title); ?>'); ?>
<?php $__env->startSection('content'); ?>
<section id="blog" class="uk-section" style="padding-top: 40px;">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-2-3@m">
                <div class="uk-margin-large-bottom">
                    <img src="<?php echo e(Voyager::image( $post->image )); ?>" alt="">
                <h1 class="uk-text-bold uk-margin-top"><a href="#"><?php echo e($post->title); ?></a></h1>
                <p class="uk-text-small uk-text-muted">Posted <b><?php echo e($post->created_at->diffForHumans()); ?></b></p>
                    <div>
                        <?php echo $post->body; ?>

                    </div>
                    <p><a href="/blog"><span uk-icon="arrow-left"></span> Back to all posts</a></p>
                </div>
            </div>
            <div class="uk-width-1-3@m">
                <div>
                    <h2>Categories</h2>
                    <ul class="uk-list">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><span class="uk-label"><?php echo e($category->name); ?></span></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/Paul/Desktop/Dev/PHP/wendeluvinga.com/resources/views/blog-single.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title', 'Blog'); ?>
<?php $__env->startSection('content'); ?>
<section id="blog" class="uk-section" style="padding-top: 40px;">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-2-3@m">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="uk-margin-large-bottom">
                        
                        <h1 class="uk-text-bold"><a href="/blog/<?php echo e($post->slug); ?>"><?php echo e($post->title); ?></a></h1>
                        <div>
                        <p class="excerpt uk-margin-large-right"><?php echo e($post->excerpt); ?></p>
                            <a href="/blog/<?php echo e($post->slug); ?>">Read more...</a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/Paul/Desktop/Dev/PHP/wendeluvinga.com/resources/views/blog.blade.php ENDPATH**/ ?>
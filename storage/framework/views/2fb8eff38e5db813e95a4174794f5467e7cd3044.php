<?php $__env->startSection('title', 'Home'); ?>
<?php $__env->startSection('content'); ?>
<section class="uk-section" style="padding-top: 40px;">
    <div class="uk-container">
        <div uk-grid>
            <div class="uk-width-1-3@m">
                <div class="uk-card">
                    <img src="img/wende.jpg" alt="Wende Luvinga">
                    <div class="about-caption">
                        <h4 class="uk-text-bold">WENDE LUVINGA</h4>
                        <p class="uk-text-uppercase">Author</p>
                    </div>
                </div>
            </div>

            <div class="uk-width-2-3@m">
                <div class="border-top"></div>
                <h3>About me</h3>
                <div class="about-content">
                    <?php echo $content->body; ?>

                </div>
            </div>
            <hr>
            <?php $__currentLoopData = $audio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $audio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><span class="uk-label"><?php echo e($audio->title); ?></span></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/Paul/Desktop/Dev/PHP/wendeluvinga.com/resources/views/about.blade.php ENDPATH**/ ?>
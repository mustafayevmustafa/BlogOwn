

<?php $__env->startSection('content'); ?>
<!-- Header-Area-Start -->
<?php echo $__env->make('frontend.sections.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Header-Area-End -->

<!-- Service-Area-Start -->
<?php echo $__env->make('frontend.sections.service', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Service-Area-End -->

<!-- About-Area-Start -->
<?php echo $__env->make('frontend.sections.about', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- About-Area-End -->

<!-- Portfolio-Area-Start -->
<?php echo $__env->make('frontend.sections.portfolio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Portfolio-Area-End -->

<!-- Skills-Area-Start -->
<?php echo $__env->make('frontend.sections.skill', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Skills-Area-End -->

<!-- Experience-Area-Start -->
<?php echo $__env->make('frontend.sections.experience', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Experience-Area-End -->

<!-- Testimonial-Area-Start -->
<?php echo $__env->make('frontend.sections.testimonial', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Testimonial-Area-End -->

<!-- Blog-Area-Start -->
<?php echo $__env->make('frontend.sections.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Blog-Area-End -->

<!-- Contact-Area-Start -->
<?php echo $__env->make('frontend.sections.contact', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- Contact-Area-End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\OwnBlog\resources\views/frontend/home.blade.php ENDPATH**/ ?>
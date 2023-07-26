

<?php $__env->startSection('content'); ?>

<header class="site-header parallax-bg">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-8">
                <h2 class="title">Blog Details</h2>
            </div>
            <div class="col-sm-4">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Portfolio-Area-Start -->
<section class="blog-details section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="head-title"><?php echo e($blog->title); ?></h2>
                <div class="blog-meta">
                    <div class="single-meta">
                        <div class="meta-title">Published</div>
                        <h4 class="meta-value"><a href="javascript:void(0)"><?php echo e(date('d M, Y', strtotime($blog->created_at))); ?></a></h4>
                    </div>
                    <div class="single-meta">
                        <div class="meta-title">Category</div>
                        <h4 class="meta-value"><a href="javascript:void(0)"><?php echo e($blog->getCategory->name); ?></a></h4>
                    </div>

                </div>
                <figure class="image-block">
                    <img class="img-fix" src="<?php echo e(asset($blog->image)); ?>" alt="">
                </figure>
                <div class="description">
                   <?php echo $blog->description; ?>

                </div>
                <div class="single-navigation">
                    <?php if($previousPost): ?>
                    <a href="<?php echo e(route('show.blog', $previousPost->id)); ?>" class="nav-link"><span class="icon"><i
                        class="fal fa-angle-left"></i></span><span class="text"><?php echo e($previousPost->title); ?></span></a>
                    <?php endif; ?>

                    <?php if($nextPost): ?>
                    <a href="<?php echo e(route('show.blog', $nextPost->id)); ?>" class="nav-link"><span class="text"><?php echo e($nextPost->title); ?></span><span
                            class="icon"><i class="fal fa-angle-right"></i></span></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio-Area-End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\OwnBlog\resources\views/frontend/blog-details.blade.php ENDPATH**/ ?>
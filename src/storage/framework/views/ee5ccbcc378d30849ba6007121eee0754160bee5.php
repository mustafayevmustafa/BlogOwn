

<?php $__env->startSection('content'); ?>
<header class="site-header parallax-bg">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-7">
                <h2 class="title">Blog</h2>
            </div>
            <div class="col-sm-5">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Portfolio-Area-Start -->
<section class="blog-area section-padding">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-4 col-md-6">
                <div class="single-blog">
                    <figure class="blog-image">
                        <img src="<?php echo e(asset($blog->image)); ?>" alt="">
                    </figure>
                    <div class="blog-content">
                        <h3 class="title"><a href="<?php echo e(route('show.blog', $blog->id)); ?>"><?php echo e($blog->title); ?></a></h3>
                        <div class="desc">
                            <p><?php echo Str::limit($blog->description, 150, '...'); ?></p>
                        </div>
                        <a href="<?php echo e(route('show.blog',$blog->id)); ?>" class="button-primary-trans mouse-dir">Read More <span
                                class="dir-part"></span> <i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">

                <nav class="navigation pagination ">
                    <div class="nav-links d-flex justify-content-center">
                        <?php echo e($blogs->links()); ?>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio-Area-End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\OwnBlog\resources\views/frontend/blog.blade.php ENDPATH**/ ?>
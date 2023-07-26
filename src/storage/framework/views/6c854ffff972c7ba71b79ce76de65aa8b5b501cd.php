
<nav class="navbar navbar-expand-lg main_menu" id="main_menu_area">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <img src="<?php echo e(asset($generalSetting->logo)); ?>" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="far fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo e(Route::currentRouteName() == 'home' ? '#home-page' : url('/')); ?>">Home</a>
                </li>
                <?php if(Route::currentRouteName() == 'home'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-page">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#skills-page">Skills</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact-page">Contact</a>
                    </li>
                <?php endif; ?>


                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('blog')); ?>">Blogs</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<?php /**PATH C:\laragon\www\OwnBlog\resources\views/frontend/layouts/navbar.blade.php ENDPATH**/ ?>
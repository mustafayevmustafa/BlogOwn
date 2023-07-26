<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
  <div class="form-inline mr-auto"></div>
  <ul class="navbar-nav navbar-right">
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
      <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
      <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-title">Logged in 5 min ago</div>
        <a href="<?php echo e(route('profile.edit')); ?>" class="dropdown-item has-icon">
          <i class="far fa-user"></i> Profile
        </a>
        <a href="features-settings.html" class="dropdown-item has-icon">
          <i class="fas fa-cog"></i> Settings
        </a>
        <div class="dropdown-divider"></div>
        <form method="POST" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>

            <a href="#" onclick="event.preventDefault();
            this.closest('form').submit();" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </form>

      </div>
    </li>
  </ul>
</nav>
<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Backend</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="nav-item <?php echo e(setSidebarActive(['dashboard'])); ?>">
          <a href="<?php echo e(route('dashboard')); ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">Sections</li>
        <li class="nav-item dropdown <?php echo e(setSidebarActive([
            'admin.typer-title.*',
            'admin.hero.*',
            ])); ?>">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Hero</span></a>
            <ul class="dropdown-menu" style="display: none;">
              <li class="<?php echo e(setSidebarActive(['admin.typer-title.*'])); ?>"><a class="nav-link" href="<?php echo e(route('admin.typer-title.index')); ?>">Typer Title</a></li>
              <li class="<?php echo e(setSidebarActive(['admin.hero.*'])); ?>"><a class="nav-link" href="<?php echo e(route('admin.hero.index')); ?>">Hero section</a></li>

            </ul>
        </li>

        <li class="<?php echo e(setSidebarActive(['admin.service.*'])); ?>"><a class="nav-link" href="<?php echo e(route('admin.service.index')); ?>"><i class="far fa-square"></i> <span>Services</span></a></li>
        <li class="<?php echo e(setSidebarActive(['admin.about.*'])); ?>"><a class="nav-link" href="<?php echo e(route('admin.about.index')); ?>"><i class="far fa-square"></i> <span>About</span></a></li>

        <li class="nav-item dropdown <?php echo e(setSidebarActive([
            'admin.category.*',
            'admin.portfolio-item.*',
            'admin.portfolio-section-setting.*'
            ])); ?>">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Portfolio</span></a>
            <ul class="dropdown-menu" style="display: none;">
              <li class="<?php echo e(setSidebarActive(['admin.category.*'])); ?>"><a class="nav-link" href="<?php echo e(route('admin.category.index')); ?>">Category</a></li>
              <li class="<?php echo e(setSidebarActive(['admin.portfolio-item.*'])); ?>"><a class="nav-link" href="<?php echo e(route('admin.portfolio-item.index')); ?>">Protfolio Item</a></li>
              <li class="<?php echo e(setSidebarActive(['admin.portfolio-section-setting.*'])); ?>"><a class="nav-link" href="<?php echo e(route('admin.portfolio-section-setting.index')); ?>">Section Setting</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown <?php echo e(setSidebarActive([
            'admin.skill-item.*',
            'admin.skill-section-setting.*',
            ])); ?>">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Skill</span></a>
            <ul class="dropdown-menu" style="display: none;">
              <li class="<?php echo e(setSidebarActive(['admin.skill-item.*'])); ?>"><a class="nav-link" href="<?php echo e(route('admin.skill-item.index')); ?>">Skill Items</a></li>
              <li class="<?php echo e(setSidebarActive(['admin.skill-section-setting.*'])); ?>"><a class="nav-link" href="<?php echo e(route('admin.skill-section-setting.index')); ?>">Section Setting</a></li>
            </ul>
        </li>

        <li class="<?php echo e(setSidebarActive(['admin.experience.*'])); ?>"><a class="nav-link" href="<?php echo e(route('admin.experience.index')); ?>"><i class="far fa-square"></i> <span>Experience</span></a></li>

        <li class="nav-item dropdown <?php echo e(setSidebarActive([
            'admin.feedback.*',
            'admin.feedback-section-setting.*',
            ])); ?>" >
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Feedback</span></a>
            <ul class="dropdown-menu" style="display: none;">
              <li class="<?php echo e(setSidebarActive(['admin.feedback.*'])); ?>"><a class="nav-link" href="<?php echo e(route('admin.feedback.index')); ?>">Feedbacks</a></li>
              <li class="<?php echo e(setSidebarActive(['admin.feedback-section-setting.*'])); ?>"><a class="nav-link" href="<?php echo e(route('admin.feedback-section-setting.index')); ?>">Section Setting</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown <?php echo e(setSidebarActive([
            'admin.blog-category.*',
            'admin.blog.*',
            'admin.blog-section-setting.*'
            ])); ?>">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Blog</span></a>
            <ul class="dropdown-menu" style="display: none;">
              <li class="<?php echo e(setSidebarActive(['admin.blog-category.*'])); ?>"><a class="nav-link" href="<?php echo e(route('admin.blog-category.index')); ?>">Category</a></li>
              <li class="<?php echo e(setSidebarActive(['admin.blog.*'])); ?>"><a class="nav-link" href="<?php echo e(route('admin.blog.index')); ?>">Blog List</a></li>
              <li class="<?php echo e(setSidebarActive(['admin.blog-section-setting.*'])); ?>"><a class="nav-link" href="<?php echo e(route('admin.blog-section-setting.index')); ?>">Section Setting</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown <?php echo e(setSidebarActive(['admin.contact-section-setting.*'])); ?>">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Contact</span></a>
            <ul class="dropdown-menu" style="display: none;">
              <li class="<?php echo e(setSidebarActive(['admin.contact-section-setting.*'])); ?>"><a class="nav-link" href="<?php echo e(route('admin.contact-section-setting.index')); ?>">Section Setting</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown <?php echo e(setSidebarActive([
         'admin.footer-social.*',
         'admin.footer-info.*',
         'admin.footer-contact-info.*',
         'admin.footer-useful-links.*',
         'admin.footer-help-links.*'
         ])); ?>">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Footer</span></a>
            <ul class="dropdown-menu" style="display: none;">
              <li class="<?php echo e(setSidebarActive(['admin.footer-social.*'])); ?>"><a class="nav-link" href="<?php echo e(route('admin.footer-social.index')); ?>">Social Links</a></li>
              <li class="<?php echo e(setSidebarActive(['admin.footer-info.*'])); ?>"><a class="nav-link" href="<?php echo e(route('admin.footer-info.index')); ?>">Footer Information</a></li>
              <li class="<?php echo e(setSidebarActive(['admin.footer-contact-info.*'])); ?>"><a class="nav-link" href="<?php echo e(route('admin.footer-contact-info.index')); ?>">Footer Contact Info</a></li>
              <li class="<?php echo e(setSidebarActive(['admin.footer-useful-links.*'])); ?>"><a class="nav-link" href="<?php echo e(route('admin.footer-useful-links.index')); ?>">Footer Useful Links</a></li>
              <li class="<?php echo e(setSidebarActive(['admin.footer-help-links.*'])); ?>"><a class="nav-link" href="<?php echo e(route('admin.footer-help-links.index')); ?>">Footer Help Links</a></li>
            </ul>
        </li>
        <li class="menu-header">Settings</li>
        <li class="<?php echo e(setSidebarActive(['admin.settings.*'])); ?>"><a class="nav-link" href="<?php echo e(route('admin.settings.index')); ?>"><i class="far fa-square"></i> <span>Settings</span></a></li>
        


      </ul>
  </aside>
</div>
<?php /**PATH C:\laragon\www\OwnBlog\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>
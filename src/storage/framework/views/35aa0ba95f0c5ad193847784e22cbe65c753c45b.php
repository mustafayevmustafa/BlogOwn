

<?php $__env->startSection('content'); ?>
<section class="section">
    <div class="section-header">
      <div class="section-header-back">
        <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
      </div>
      <h1>Skill Item</h1>

    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>All Skill Items</h4>
              <div class="card-header-action">
                <a href="<?php echo e(route('admin.skill-item.create')); ?>" class="btn btn-success">Create New <i class="fas fa-plus"></i></a>
              </div>
            </div>
            <div class="card-body">
                <?php echo e($dataTable->table()); ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo e($dataTable->scripts(attributes: ['type' => 'module'])); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\OwnBlog\resources\views/admin/skill-item/index.blade.php ENDPATH**/ ?>
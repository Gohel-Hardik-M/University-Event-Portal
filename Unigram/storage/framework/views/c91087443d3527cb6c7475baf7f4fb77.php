
<?php $__env->startSection('content'); ?>

<main class="ranking-container">
  <h1 class="ranking-title">Actions</h1>
  <div class="ranking-grid">
    
    <div class="ranking-card">
     <a href="<?php echo e(URL::to('/')); ?>/admin_register"> <i class="fas fa-plus icon"></i> </a> 
      <a href="<?php echo e(URL::to('/')); ?>/admin_register"><h2>Register</h2></a>
    </div>

    <div class="ranking-card">
      <a href="<?php echo e(URL::to('/')); ?>/admin_university"><i class="fas fa-laptop-code icon"></i></a>
      <a href="<?php echo e(URL::to('/')); ?>/admin_university"><h2>University</h2></a>
    </div>

    <div class="ranking-card">
      <i class="fas fa-users icon"></i>
      <h2>Students</h2>
    </div>

  </div>
</main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel Projects\unigram\resources\views/admin_create.blade.php ENDPATH**/ ?>
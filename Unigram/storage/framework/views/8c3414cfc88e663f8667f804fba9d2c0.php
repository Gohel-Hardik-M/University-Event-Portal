
<?php $__env->startSection('content'); ?>
  <main class="profile-container">
    <div class="profile-box">
      <!-- Profile Picture -->
      <div class="profile-img">
        <img src="<?php echo e(asset('images/profile_img.jpg')); ?>" alt="Profile Picture">
      </div>

      <!-- User Name and Type -->
      <div class="profile-info">
        <h2><?php echo e(Session::get('user')->username); ?></h2> <!-- Display User's Username -->
        <p class="user-type"><?php echo e(Session::get('user')->usertype); ?></p>
        <p><a href="<?php echo e(URL::to('/')); ?>/logout">Logut</a></p>
      
      </div>
    </div>

      <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <img style="height: 250px; width:100%"  src="/images/posts/<?php echo e($post->photos); ?>/">
            
 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel Projects\unigram\resources\views/profile.blade.php ENDPATH**/ ?>
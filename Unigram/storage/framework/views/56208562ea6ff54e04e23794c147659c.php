
<?php $__env->startSection('content'); ?>

<div class="login-container">
    <div class="login-box">
        <h1>Login</h1>
        <form action="<?php echo e(URL::to('/')); ?>/login_action" method="POST">
            <?php echo csrf_field(); ?>
            <input type="text" placeholder="Username or Email" name="username" >
            <input type="password" placeholder="Password"  autocomplete="new-password" name="password" >
            <button type="submit">Log In</button>
        </form>
        <div class="divider"></div>
        <p>Don't have an account? <a href="<?php echo e(URL::to('/')); ?>/register">Sign up</a></p>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.guest', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel Projects\unigram\resources\views/login.blade.php ENDPATH**/ ?>
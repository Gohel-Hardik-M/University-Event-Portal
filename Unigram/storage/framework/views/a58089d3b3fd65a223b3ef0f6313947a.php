<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>UniGram</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="logo">UNIGram</div>
        <div class="auth-links">
           
            <?php if(Session::has('user')): ?>
                <a href="<?php echo e(URL::to('/')); ?>/profile"><i class="fas fa-user" ></i></a>
                <a href=""><i class="fas fa-gear" ></i></a>
                <a href="<?php echo e(URL::to('/')); ?>/logout">Logout</a>
              <?php else: ?>
                  <a href="<?php echo e(URL::to('/')); ?>/login">Login</a>
                  <a href="<?php echo e(URL::to('/')); ?>/register">Register</a>
                
            <?php endif; ?>
        </div>
    </header><br><br>
    <aside class="sidebar">
        <ul>
            <li><i class="fas fa-home"></i></li>
            <li><a href=""><i class="fas fa-search"></i></a></li>
            <?php if(Session::has('user') && Session::get('user')->usertype === 'admin'): ?>
             <li><a href="<?php echo e(URL::to('/')); ?>/admin_create"><i class="fas fa-plus"></i></a></li>
            <?php endif; ?>        
          
        </ul>
    </aside>
    <br><br>
    <main>
     
        
    </main>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel Projects\unigram\resources\views/layouts/admin.blade.php ENDPATH**/ ?>
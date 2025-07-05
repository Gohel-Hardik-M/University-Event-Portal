
<?php $__env->startSection('content'); ?>
  <main class="register-container">
    <div class="register-box">
      <h1>Register</h1>
      <form action="<?php echo e(URL::to('/')); ?>/admin_register_action" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" placeholder="Username or University Name" name="username"  />
        <select name="usertype" id="usertype"  onchange="toggleFields()">
            <option value="">-- Select Type --</option>
            <option value="university">University</option>
            <option value="student">Student</option>
            <option value="admin">admin</option>
          </select>
        <input type="email" placeholder="Email" name="email"  />
        
        <input type="tel" placeholder="Mobile Number" name="mobile"  />
        
        <div id="universityAddress" class="hidden">
            <input type="text" placeholder="University Address" name="university_address" />
        </div>
        
        <div id="DOB" class="show">
            <input type="date" name="dob"/>
        </div>
        
        <input type="password" placeholder="Password" name="password" autocomplete="new-password" >
        
        <input type="password" id="confirm-password" placeholder="Confirm Password" name="confirm-password">

        <button type="submit">Sign Up</button>
      </form>

      <div class="divider"></div>
      <?php if(session('success')): ?>
          <p><a> <?php echo e(session('success')); ?></a></p>
      <?php endif; ?>

      <?php if(session('error')): ?>
         <p><a> <?php echo e(session('error')); ?></a></p>  
      <?php endif; ?>
           
      
    </div>
  </main>

  <script>
    function toggleFields() {
      const userType = document.getElementById('usertype').value;
      const addressDiv = document.getElementById('universityAddress');
      const dobDiv = document.getElementById('DOB');
      
      // Toggle the visibility of University Address and DOB fields
      if (userType === 'university') {
        addressDiv.classList.remove('hidden');
        dobDiv.classList.add('hidden');
      } else {
        addressDiv.classList.add('hidden');
        dobDiv.classList.remove('hidden');
      }
    }
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel Projects\unigram\resources\views/admin_register.blade.php ENDPATH**/ ?>
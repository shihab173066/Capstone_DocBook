<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="<?php echo asset('css/login.css')?>" rel="stylesheet" id="bootstrap-css">

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="<?php echo asset('icons/logofin.png') ?>" id="icon" alt="DocBook Icon" />
    </div>

    <!-- Login Form -->
    <form action="user" method="POST">
     
      <?php echo csrf_field(); ?>
      <input type="email" name="email" id="email" class="fadeIn second" placeholder="Email">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <label for="userType">User Type : </label>
      <select name="userType" id="userType">
        <option value="doctor">Doctor</option>
        <option value="patient">Patient</option>
        <option value="specialist">Specialist Doctor</option>
        <option value="admin">Admin</option>
        <option value="hospital_admin">Hospital Admin</option>
      </select> <br/>
      <input type="submit" class="fadeIn fourth" value="Log In">
      
    </form>
    <?php if($errors->any()): ?>
    <div class="alert alert-danger">
              <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
      </div>
  <?php endif; ?>

    <button onclick="window.location='<?php echo e(url("/register")); ?>'" name="registerBtn" class="fadeIn fourth">Register</button>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div><?php /**PATH /opt/lampp/htdocs/docbook - final2/resources/views/login.blade.php ENDPATH**/ ?>
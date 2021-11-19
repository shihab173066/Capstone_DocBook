<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>DocBook : Tests</title>
</head>
<body>
   
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Doctor Email</th>
            <th scope="col">Patient Email</th>
            <th scope="col">Test Name</th>
            <th scope="col">Time</th>
            <th scope="col">Hospital</th>
            <th scope="col">Send to Hospital?</th>


          </tr>
        </thead>
        <tbody>

    <?php $__currentLoopData = $tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <th scope="row"><?php echo e($t['id']); ?></th>
        <td><?php echo e($t['doctor_email']); ?></td>
        <td><?php echo e($t['patient_email']); ?></td>
        <td><?php echo e($t['test_name']); ?></td>
        <td><?php echo e($t['test_time']); ?></td>
        <td><?php echo e($t['hospital']); ?></td>
        <td><a href="<?php echo e(route('send_test', ['test' => ['id' => $t['id'], 'doctor_email' => $t['doctor_email'], 'patient_email' => $t['patient_email'], 'test_name' => $t['test_name'], 'test_time' => $t['test_time'], 'hospital' => $t['hospital']]])); ?>" class="btn-primary">Send to Hospital</a></td>




      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
         
        </tbody>
      </table>


    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -['
      <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>\    
</body>
</html><?php /**PATH C:\xampp\htdocs\docbook - final2\resources\views/test_admin.blade.php ENDPATH**/ ?>
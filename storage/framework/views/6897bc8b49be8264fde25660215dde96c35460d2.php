<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">


<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
<!--    -------font awesome kit link------->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/ae163c3f97.js" crossorigin="anonymous"></script>
</head>


<style>

table, th, td {
  border: 1px solid black;
}
</style>
<body>
<?php
$dt = new DateTime();
$dt->format('Y-m-d H:i:s');

 


    
?>

Status : 
<?php if(session('message')): ?>
<div class="alert alert-success" role="alert"><?php echo e(session('message')); ?></div><strong>
<?php endif; ?>

<table>
  
<tr>
    <th>ID</th>
    <th>Patient_Email</th>
    <th>problem_type</th>
    <th>Created At</th>
    <th>Prescription Count</th>
    <th>Time since last post </th>
    <th>Actions</th>
   

   

  </tr>
<?php $__currentLoopData = $ALL; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
$postTime = $all->created_at;

$totalDuration=Carbon::parse($postTime)->diffForHumans();

?>
<tr>
  <?php
  $patientID=$all->id;
  if($all->prescription_count<2){

    ?>
    <th><?php echo e($all->id); ?></th>
    <th><?php echo e($all->patient_email); ?></th>
    <th><?php echo e($all->problem_type); ?></th>
    <th><?php echo e($all->created_at); ?></th>
    <th><?php echo e($all->prescription_count); ?></th>
    <th><?php echo $totalDuration?></th>
    
    

    <th> <a href='/Notify/<?php echo e($all->patient_email); ?>/<?php echo e($all->problem_type); ?>'>Notify</a> || <a href='Delete/<?php echo e($all->id); ?>'>Delete </a> </th>
    <?php
  }

?>
    
    
 





  </tr>



<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<script src="js/bootstrap.min.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\docbook\resources\views/pending.blade.php ENDPATH**/ ?>
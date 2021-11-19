<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View PDF</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
<!--    -------font awesome kit link------->
    <script src="https://kit.fontawesome.com/ae163c3f97.js" crossorigin="anonymous"></script>

    <style>
@media  print {
  #printBtn {
    display: none;
  }
}
    </style>
</head>
<body>
    <div id="prescription">
    <?php if($id2 == $chosen_ids[0]): ?>
    <table>
        <thead> 
          <th> Medicine Name</th>
          <th> Time</th>
          <th> Continuation Days</th>
          <th> Intake Amount</th>
          <th> Description</th>
        </thead>

        <tbody>
       
         


          <?php $__currentLoopData = $detail1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
          $index = 0
          ?>
           <tr>
          <?php $__currentLoopData = $d1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         
          <?php if($index <= 4): ?>
         
          <td> <?php echo e($d); ?></td>
        
          <?php
          $index += 1
          ?>
          <?php else: ?>
        </tr>
            
        
        
          <?php endif; ?>
         
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
      
         

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
        </tbody>

      </table>

      <table>
        <thead> 
          <th> Test Name</th>
          <th> Time</th>
          <th> Hospital</th>
        </thead>

        <tbody>
       
         

        <?php
        $index2 = 0;

        ?>

          <?php $__currentLoopData = $detail1_t; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($index2 == count($detail1_t) - 1): ?>
          <?php break; ?>
          <?php endif; ?>
          <?php
          $index = 0;
          ?>
           <tr>
          <?php $__currentLoopData = $d1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         
          <?php if($index <= 2): ?>
         
          <td> <?php echo e($d); ?></td>
        
          <?php
          $index += 1
          ?>
          <?php else: ?>
        </tr>
            
        
        
          <?php endif; ?>
         
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
      
         <?php
         $index2 += 1
         ?>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
        </tbody>

      </table>


      Tips: <?php echo e(end($detail1_t)[0]); ?>

      Advice: <?php echo e(end($detail1_t)[1]); ?>


      <?php elseif($id2 == $chosen_ids[1]): ?>
      <table>
        <thead> 
          <th> Medicine Name</th>
          <th> Time</th>
          <th> Continuation Days</th>
          <th> Intake Amount</th>
          <th> Description</th>
        </thead>

        <tbody>
       
         


          <?php $__currentLoopData = $detail2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
          $index = 0
          ?>
           <tr>
          <?php $__currentLoopData = $d1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         
          <?php if($index <= 4): ?>
         
          <td> <?php echo e($d); ?></td>
        
          <?php
          $index += 1
          ?>
          <?php else: ?>
        </tr>
            
        
        
          <?php endif; ?>
         
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
      
         

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
        </tbody>

      </table>

      <table>
        <thead> 
          <th> Test Name</th>
          <th> Time</th>
          <th> Hospital</th>
        </thead>

        <tbody>
       
         

        <?php
        $index2 = 0;

        ?>

          <?php $__currentLoopData = $detail2_t; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($index2 == count($detail1_t) - 1): ?>
          <?php break; ?>
          <?php endif; ?>
          <?php
          $index = 0;
          ?>
           <tr>
          <?php $__currentLoopData = $d1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         
          <?php if($index <= 2): ?>
         
          <td> <?php echo e($d); ?></td>
        
          <?php
          $index += 1
          ?>
          <?php else: ?>
        </tr>
            
        
        
          <?php endif; ?>
         
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
      
         <?php
         $index2 += 1
         ?>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
        </tbody>

      </table>


      Tips: <?php echo e(end($detail2_t)[0]); ?>

      Advice: <?php echo e(end($detail2_t)[1]); ?>



      <?php elseif($id2 == $chosen_ids[2]): ?>
      <table>
        <thead> 
          <th> Medicine Name</th>
          <th> Time</th>
          <th> Continuation Days</th>
          <th> Intake Amount</th>
          <th> Description</th>
        </thead>

        <tbody>
       
         


          <?php $__currentLoopData = $detail3; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
          $index = 0
          ?>
           <tr>
          <?php $__currentLoopData = $d1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         
          <?php if($index <= 4): ?>
         
          <td> <?php echo e($d); ?></td>
        
          <?php
          $index += 1
          ?>
          <?php else: ?>
        </tr>
            
        
        
          <?php endif; ?>
         
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
      
         

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
        </tbody>

      </table>

      <table>
        <thead> 
          <th> Test Name</th>
          <th> Time</th>
          <th> Hospital</th>
        </thead>

        <tbody>
       
         

        <?php
        $index2 = 0;

        ?>

          <?php $__currentLoopData = $detail3_t; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($index2 == count($detail3_t) - 1): ?>
          <?php break; ?>
          <?php endif; ?>
          <?php
          $index = 0;
          ?>
           <tr>
          <?php $__currentLoopData = $d1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         
          <?php if($index <= 2): ?>
         
          <td> <?php echo e($d); ?></td>
        
          <?php
          $index += 1
          ?>
          <?php else: ?>
        </tr>
            
        
        
          <?php endif; ?>
         
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
      
         <?php
         $index2 += 1
         ?>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       
        </tbody>

      </table>


      Tips: <?php echo e(end($detail3_t)[0]); ?>

      Advice: <?php echo e(end($detail3_t)[1]); ?>



      <?php endif; ?>
    </div>
      <br/><br/>

      <div><button id="printBtn" class="btn btn-primary" onClick="window.print()">Print this Prescription
    </button></div>

      <script src="/js/bootstrap.min.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\docbook\resources\views/viewPDF.blade.php ENDPATH**/ ?>
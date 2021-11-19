<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocBook : Smart Attestation</title>
<!--    ------css link---------->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/consul.css">
<!--    -------font awesome kit link------->
    <script src="https://kit.fontawesome.com/ae163c3f97.js" crossorigin="anonymous"></script>
    
    
    
    
</head>

<div class="container">
  <div class="logo">
      <img src="/images/logofin.png" alt="LOGO" width="160px" height="60px">

  </div>

  <div class="right_container">
      
      <div class="bottom">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-top">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-lg-flex align-items-center">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="<?php echo e(route('view_prescriptions')); ?>">View Prescriptions</a>
                </li>
       
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('view_profile')); ?>">Doctors</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('consul')); ?>">Get Consultation</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('followups')); ?>">Follow-up</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
<li>
  
  

<div class="profile-wrap">
  
  <div class="photoD">
<?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<a href="#"><img class='photo' width='100px' height='80px' src=/<?php echo e($i->propic); ?> alt="profile pic"></a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>


<div class="container">
  <div class="name">
  <a href="#">
   
    <p><?php echo e(session('patient')); ?></p>
    <a href="/logout">Log Out </a>

  </a>
</div>
  
</div>

</div>
</li>

<li>
  
</li>
              </ul>


            </div>
          </div>
        </nav>

      </div>
  </div>
</div>


              <div class="pres_container"
        
              <?php $__currentLoopData = $post_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="card">
                <?php if($recommend == "YES"): ?>
                 <h4> Doctors prescriptions similarity was not good enough.</h4>
                
                <?php if($post_status == "assigned"): ?>
                    <h3> Waiting for Specialist to give feedback . . .
                <?php elseif($post_status == "done"): ?>
                  <h3> Specialist Feedback recieved: </h3>
  
                  <?php $__currentLoopData = $chosen_ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <a class="btn btn-primary" href="/home/viewPDF/<?php echo e($id_p); ?>/<?php echo e($id); ?>">View Prescription <?php echo e($id); ?> </a>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <hr>
                  <h4>Choose This Prescription : Prescription <?php echo e(App\Models\S_Prescription::where('post_id', $i->id)->first()->prescription_id); ?></h4> <br>
                 <h4> Suggestion from Specialist:</h4> <br>
  
                 <h5> <?php echo e(App\Models\S_Prescription::where('post_id', $i->id)->first()->comment); ?> <br></h5>
  
                  <br>
                <?php else: ?>
                <h3> Recommend Specialist?</h3>
                    <a class="btn btn-primary btn-lg" href="/home/recommend_s/<?php echo e($i->id); ?>">Agree!</a>
                <?php endif; ?>
               
      
                <?php else: ?>
                <?php $__currentLoopData = $string; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h4><?php echo e($s); ?></h4>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $chosen_ids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="btn btn-primary" href="/home/viewPDF/<?php echo e($id_p); ?>/<?php echo e($id); ?>">View Prescription <?php echo e($id); ?> </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                   
                     
                
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  






              </div>










<!--------section-5-footer----->
<div class="container-fluid p-0">
    <div class="footer">
        <div class="container">
            <div class="row text-center" style="padding: 18px 18px;">
                <div class="col-md-3">
                    <p>Emergency Chat With </p>
                    <p><strong>Hospitals</strong></p>
                </div>
                <div class="col-md-3">
                    <p>Emergency Chat With</p>
                    <p><strong>Doctors</strong></p>
                </div>
                <div class="col-md-3">
                    <p>Top Article of the</p>
                    <p><strong>Doctors</strong></p>
                </div>
                <div class="col-md-3">
                    <p>Suggesition for</p>
                    <p><strong>Covid-19</strong></p>
                </div>
                
                
                
            </div>
            
            
        </div>
    </div>
</div>


















<!-----------bootstrap js link------------->
<script src="/js/bootstrap.min.js"></script>

</body>

</html><?php /**PATH C:\xampp\htdocs\docbook - final2\resources\views/smart_attestation.blade.php ENDPATH**/ ?>
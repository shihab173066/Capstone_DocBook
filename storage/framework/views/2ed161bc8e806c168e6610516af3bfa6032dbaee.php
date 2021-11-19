<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocBook</title>
<!--    ------css link---------->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/follow2.css">
<!--    -------font awesome kit link------->
    <script src="https://kit.fontawesome.com/ae163c3f97.js" crossorigin="anonymous"></script>
    
    
    
    
</head>


<body>

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
                  <?php if(session('patient')): ?>
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
                    <a class="nav-link" href="<?php echo e(route('followups')); ?>">FOLLOW UPS</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('about')); ?>">About</a>
                  </li>
                  <?php else: ?>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo e(route('doctorhome')); ?>">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo e(route('blog')); ?>">Write Blog</a>
                  </li>
         
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Notifications
                    </a>
          
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                 
                     
                        <?php $__empty_1 = true; $__currentLoopData = $users->notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php if($notification->data['category'] != "FOLLOW UP"): ?>
                        <li><a href="<?php echo e(url('doctorhome/deletenotification/'.$notification->id)); ?>" class="dropdown-item" href="#"><?php echo e("Patient With ID ".$notification->data['id'].$notification->data['message']); ?><?php echo e(" on category "); ?><?php echo e($notification->data['category']); ?></a></li>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <li><a class="dropdown-item" href="#">No Notifications :(</a></li>
                       
                        <?php endif; ?>
                      
                     
                    </ul>
                  </li>
  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Follow Up Notifications
                    </a>
          
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                 
                     
                        <?php $__empty_1 = true; $__currentLoopData = $users->notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php if($notification->data['category'] == "FOLLOW UP"): ?>
                        <li><a href="<?php echo e(url('doctorhome/deletenotification/'.$notification->id)); ?>" class="dropdown-item" href="#"><?php echo e("Patient With ID ".$notification->data['id'].$notification->data['message']); ?><?php echo e(" on category "); ?><?php echo e($notification->data['category']); ?></a></li>
                        <?php endif; ?>
                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <li><a class="dropdown-item" href="#">No Notifications :(</a></li>
                       
                        <?php endif; ?>
                      
                     
                    </ul>
                  </li>
                  <li class="nav-item">
  
                    <a class="nav-link" href="">View Prescribed Posts</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('followups')); ?>">Follow Ups</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('about')); ?>">About</a>
                  </li>
                  <?php endif; ?>
  <li>
    
    
  
  <div class="profile-wrap">
    
    <div class="photoD">
      <?php if(session('doctor')): ?>
      <?php $__currentLoopData = $doc_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a href="#"><img class='photo' width='100px' height='80px' src=/<?php echo e($i->propic); ?> alt="profile pic"></a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php else: ?>
      <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a href="#"><img class='photo' width='100px' height='80px' src=/<?php echo e($i->propic); ?> alt="profile pic"></a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
  
  
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
  


    
    


<div class="container col d-flex justify-content-center" name="followdisplay" id="followdisplay">
 

   
  
      <div class="card">
     
        <h5 class="card-header">Follow Up Form</h5>
        <div class="card-body">
  
       
          

    
  
           <div class="commentbox col d-flex justify-content-center">
          
              <form action="post_message" method="POST" enctype="multipart/form-data" >
               <?php echo csrf_field(); ?>

               <?php $__currentLoopData = $follows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <input name="p_email" type="hidden" value=<?php echo e($f->p_email); ?>>
                 <input name="d_email" type="hidden" value=<?php echo e($f->d_email); ?>>
                 <input name="id" type="hidden" value=<?php echo e($f->id); ?>>
                 <?php if(session()->has('patient')): ?>
                 <input name="type" type="hidden" value="P">
                 <?php else: ?>
                 <input name="type" type="hidden" value="D">


                 <?php endif; ?>
                 

                 



               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

               <span style="color: darkblue">Write Message: </span><br>
               
                <textarea name="msg" rows="5" cols="40"></textarea><br><br>
                <label>Upload Image:</label><br>
                <input class="form-control" name="image" type="file" id="image"> <br> <br>
                <input type="submit" class="btn-primary btn-lg" value="Send"><br><br>
    
  
              </form>
              </div>
          
              <div id="display_follows" class="display_follows">
  
                  <?php $__currentLoopData = $follows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="com">
                  
                  <span>Day, Date and Time: <?php echo e(\Carbon\Carbon::parse($m->created_at)->toDayDateTimeString()); ?></span> <br>
                  <?php if($m->type == "D"): ?>
                  <span>User Email: <?php echo e($m->d_email); ?></span> <br>
                  <?php elseif($m->type ==  "P"): ?>
                  <span>User Email: <?php echo e($m->p_email); ?></span> <br>
                  <?php endif; ?>
                 
                  
                  <span>Message: <?php echo e($m->message); ?></span> <br>
                  <?php if($m->image != ""): ?>
                    <img style="width: 100%; height: 30%;" src="/<?php echo e($m->image); ?>" alt="image pic"><br/>
<?php endif; ?>
                  
                  
                  </div><br><br>
  
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
  
              <br>
           
  
     
       
         
       </div>
      
  </div>
  <br><br>
  <br>

  
  
  
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

</html><?php /**PATH C:\xampp\htdocs\docbook - final2\resources\views/view_followup.blade.php ENDPATH**/ ?>
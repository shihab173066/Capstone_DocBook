<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocBook : Doctor Homepage</title>
<!--    ------css link---------->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/viewpost.css">
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
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo e(route('doctorhome')); ?>">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('view_blog')); ?>">View Blogs</a>
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
                    <a class="nav-link" href="<?php echo e(route('followups')); ?>">Follow Ups</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                   
    
    
  
  <div class="profile-wrap">
    
    <div class="photoD">
  <?php $__currentLoopData = $doc_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <a href="#"><img class='photo' width='100px' height='80px' src=/<?php echo e($i->propic); ?> alt="profile pic"></a>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
    </div>
  
  
  <div class="container">
    <div class="name">
    <a href="#">
     
      <p><?php echo e(session('doctor')); ?></p>
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
  
  
  
  
  
          
<div class="container">

<?php if(session()->has('msg')): ?>
<h4 style="color: green"><?php echo e(session()->get('msg')); ?></h4>
<?php endif; ?>
              
        
   
  
    <?php $id = $post_info[0]->id; ?>
    <?php $email = $post_info[0]->patient_email; ?>

    <div class="card">
        <?php $__currentLoopData = $patient_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($p->email == $email): ?>
        <?php if($post_info[0]->post_type == "Post Anonymously"): ?>
        <h5 class="card-header">User <?php echo e($p->userid); ?></h5>
        <?php else: ?>
        <h5 class="card-header">Name: <?php echo e($p->fname.' '.$p->lname); ?>, User <?php echo e($p->userid); ?></h5>
        <?php endif; ?>
        
       
        <h6 class="card-header">Date and Time: <?php echo e(\Carbon\Carbon::parse($post_info[0]->created_at)->toDayDateTimeString()); ?></h6>
        <h6 class="card-header">Gender: <?php echo e(ucwords($p->gender)); ?></h6>
        <div class="card-body">
         <h5 class="card-title">Category: <?php echo e($post_info[0]->problem_type); ?></h5>
         <p class="card-text"><?php echo e($post_info[0]->details); ?></p><br>
         
         <?php if($post_info[0]->prescription_count == 0): ?>
         
         <div class="container2">
          <h6>Prescriptions Given:</h6>
          <span>&#10006; &#10006; &#10006;</span><br>
          <h6>Specialist Recommendation: </h6>
          <?php if($post_info[0]->specialist_count == 0): ?>
          <span>&#10006;</span>
          <?php else: ?>
          <span>&#9989;</span>
          <?php endif; ?>
         </div>
         <div class="text-center">
         
         
                <a href="give/<?php echo e($post_info[0]->id); ?>" class="btn btn-primary">Give Prescription</a>
           
          
         
        </div>
         <?php elseif($post_info[0]->prescription_count == 1): ?>
         
         <div class="container2">
          <h6>Prescriptions Given:</h6>
             <span> &#9989; &#10006; &#10006;</span><br>
             <h6>Specialist Recommendation: </h6>
             <?php if($post_info[0]->specialist_count == 0): ?>
             <span>&#10006;</span>
             <?php else: ?>
             <span>&#9989;</span>
             <?php endif; ?>
          </div>


          <div class="text-center">

              <a href="give/<?php echo e($post_info[0]->id); ?>" class="btn btn-primary">Give Prescription</a>

           
          </div>

         <?php elseif($post_info[0]->prescription_count == 2): ?>
       
         <div class="container2">
          <h6 >Prescriptions Given:</h6>
          <span> &#9989; &#9989; &#10006;</span><br>
          <h6>Specialist Recommendation: </h6>
          <?php if($post_info[0]->specialist_count == 0): ?>
          <span>&#10006;</span>
          <?php else: ?>
          <span>&#9989;</span>
          <?php endif; ?>
        </div>
<div class="text-center">
 
  <a href="give/<?php echo e($post_info[0]->id); ?>" class="btn btn-primary">Give Prescription</a>


</div>
         <?php elseif($post_info[0]->prescription_count == 3): ?>
         
         <div class="container2">
          <h6>Prescriptions Given:</h6>
          <span> &#9989; &#9989;  &#9989;</span><br>
          <h6>Specialist Recommendation: </h6>
          <?php if($post_info[0]->specialist_count == 0): ?>
          <span>&#10006;</span>
          <?php else: ?>
          <span>&#9989;</span>
          <?php endif; ?>
         </div>
         <div class="text-center">
          <a href="give/<?php echo e($post_info[0]->id); ?>" class="btn btn-secondary disabled">Give Prescription</a>
          

         
        </div>
         <?php else: ?>

         <?php endif; ?>

          <br><br>
       </div>
 </div>
 <br>
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

</html><?php /**PATH C:\xampp\htdocs\docbook - final2\resources\views/viewpost.blade.php ENDPATH**/ ?>
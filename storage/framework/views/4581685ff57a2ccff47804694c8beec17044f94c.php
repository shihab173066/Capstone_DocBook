<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocBook : Patient Homepage</title>
<!--    ------css link---------->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/blog.css">
<!--    -------font awesome kit link------->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/ae163c3f97.js" crossorigin="anonymous"></script>

    <script>
        function flick(){
            if($('#display_comments').is(':visible')){
                $('#display_comments').hide();

            }else{
                $('#display_comments').show();
            }

        }
        </script>
    
    
    
    
</head>

<body>


<!---------bottom heading-------->
<!---------Navigation-bar----------->
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
                  <a class="nav-link" href="<?php echo e(route('followups')); ?>">Follow-up</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <?php else: ?>

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
                  <a class="nav-link" href="<?php echo e(route('followups')); ?>">Follow-up</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                 
                <?php endif; ?>
<li>
  
  

<div class="profile-wrap">
  
  <div class="photoD">
    <?php if(session('patient')): ?>
<?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<a href="#"><img class='photo' width='100px' height='80px' src=/<?php echo e($i->propic); ?> alt="profile pic"></a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php else: ?>
<?php $__currentLoopData = $doc_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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


<div class="container-fluid p-0">
  <div class="all-body-wrap" style="background: #f3f1f1;
    padding: 50px 0px;">
      <div class="container">
          <div class="body-wrap">
              <div class="catagory-location">
                 <div class="row justify-content-start">
                     <div class="col-md-6">
                  <form action="">
                                        <div class="catagory-search">
                                  <div class="row">
                           <div class="col-md-6">
                            
                            <input type="text" name="search_blog" id="search_blog" class="form-control" placeholder="Search Blogs" />
                          
                           </div>
                           
                      
                           
                           
                           
                           
                           
                       </div>
                         
                           
                               
                     </div>
                  </form>
                     
                     
                     
                  </div>
                 </div>
              </div>
              
        
   
  

<div class="container" name="blogdisplay" id="blogdisplay">
 

  <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="card">
   
      <h5 class="card-header">Blog Form : </h5>
      <div class="card-body">

     
           <h4><b>Created At: </b> <?php echo e(\Carbon\Carbon::parse($b->created_at)->toDayDateTimeString()); ?></h4>
           <label><b>Doctor Email:&nbsp</b> </label><?php echo e($b->doctor_email); ?> <br>
           <label for="title"><b> Blog Title:</b> </label><br><p><?php echo e($b->title); ?></p> <br>
           <label for="content" style="align-items: center;"><b>Blog Content: </b></label><br><span><?php echo e($b->content); ?></span>
         <br><br>

         <div class="commentbox">
        
            <form action="/post_comment" method="POST" enctype="multipart/form-data" >
             <?php echo csrf_field(); ?>
             <span style="color: darkblue">Write Comment: </span><br>
              <textarea name="content" rows="5" cols="40"></textarea><br><br>
              <input type="submit" class="btn-primary btn-lg" value="Post"><br><br>
              <a class="btn-secondary btn-lg" href="javascript:flick()">SHOW / HIDE Comment</a><br><br>

              <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <input name="email" value=<?php echo e($u->email); ?> type="hidden"/>
              <input name="blog_id" value=<?php echo e($b->id); ?> type="hidden"/>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </form>
            </div>
        
            <div id="display_comments" class="displaycomments">

                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="com">
                
                <span><b>Day, Date and Time: </b> <?php echo e(\Carbon\Carbon::parse($c->created_at)->toDayDateTimeString()); ?></span> <br>
                <span><b>User Email: </b> <?php echo e($c->user_email); ?></span> <br>
                <span><b>Comment: </b><?php echo e($c->content); ?></span> <br>
                
                </div><br><br>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <br>
         

   
     
       
     </div>
    
</div>
<br><br>
<br>

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


</html><?php /**PATH C:\xampp\htdocs\docbook - final2\resources\views/comment.blade.php ENDPATH**/ ?>
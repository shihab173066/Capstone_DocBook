<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocBook : Patient Homepage</title>
<!--    ------css link---------->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
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

<?php if(Session::has('patient')): ?>
<body>
<!---------section-1---------->
<!------top-heading------>
<div class="container-fluid p-0">
    <div class="section-1">
  <div class="container">
            <div class="row justify-content-end align-items-center">
            
            <div class="col-md-6 offset-3">
                <p style="margin: 0px;">Patient's Page</p>
            </div>
            
            
            
        </div>
  </div>
    </div>
</div>

<!---------bottom heading-------->
<!---------Navigation-bar----------->
<div class="container-fluid p-0">
    <div class="bottom-heading">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container logo-relation">
  <div class="row align-items-center" style="width: 100%;">
        <div class="col-md-2">
              <div class="logo-wrap">
                  <a class="navbar-brand" href="#">
                  <img src="icons/logofin.png" alt="">
              </a>
              </div>
          </div>
         
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    
<div class="col-md-12">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex">
      </form>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo e(route('view_prescriptions')); ?>">View Prescriptions</a>
        </li>
        
        
        
        <li class="nav-item">
          <a class="nav-link" href="#">News Feed</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('view_profile')); ?>">Doctors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('consul')); ?>">Get Consultation</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        
       
      </ul>
      <!-- --------profile section--------   -->

    
              <div class="profile-wrap">
                  <div class="name">
                  <a href="#">
                   
                    <p><?php echo e(session('patient')); ?></p>
                
                  </a>
            </div>
  
              <div class="profile-photo">
                
           
             
            
             
                
          </div>

            </div>
              <a href="/logout">Log Out </a>
            </div>
              </div>

              
     
  
   
      
      
      
      
      
      
      
     </div> 
    
</div>

   
   
   
   
   
    
    
  </div>
    
  
  </div>
</nav> 
     
     
     
     
       
    </div>
</div>


<!--------bottom heading-2------->

<div class="container-fluid p-0">
    <div class="bottom-heading2" style="background: #d2d2d2">
    <nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
  <div class="row align-items-center" style="width: 100%;">
          <div class="col-md-3">
             <form class="d-flex">
       
        
        
        
      </form>
      
          </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    
<div class="col-md-9">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
<!--
        <select class="form-select" aria-label="Default select example" style="width: 15%;border-radius: 20px 10px 20px 10px;
    margin-right: 15px;">
       <option selected>Set location</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
       </select>
      
-->
      
      
      
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Hospital</a>
        </li>
  
        <li class="nav-item">
          <a class="nav-link" href="#">Doctor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ambulance</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Drugs and suppliments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Saved service</a>
        </li>
        
       
      </ul>
      <!-- --------profile section--------   -->

    
              <div class="profile-wrap">
                  <div class="messenger">
                  <a href="#">
                      <i class="fab fa-facebook-messenger"></i>
                  </a>
            </div>
  
              <div class="notification">
                  <i class="fas fa-bell"></i>
          </div>
              </div>
     
  
   
      
      
      
      
      
      
      
     </div> 
    
</div>

   
   
   
   
   
    
    
  </div>
    
  
  </div>
</nav> 
     
     
     
     
       
    </div>
</div>


















<!--------------section--2---------->

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

     
           <h4>Created At:  <?php echo e(\Carbon\Carbon::parse($b->created_at)->toDayDateTimeString()); ?></h4>
           <label>Doctor Email: </label><?php echo e($b->doctor_email); ?> <br>
           <label for="title">Blog Title: </label><p><?php echo e($b->title); ?></p> <br>
           <label for="content" style="align-items: center;">Blog Content: </label><span><?php echo e($b->content); ?></span>
         <br><br>

         <div class="commentbox">
        
            <form action="post_comment" method="POST" enctype="multipart/form-data" >
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
                
                <span>Day, Date and Time: <?php echo e(\Carbon\Carbon::parse($c->created_at)->toDayDateTimeString()); ?></span> <br>
                <span>User Email: <?php echo e($c->user_email); ?></span> <br>
                <span>Comment: <?php echo e($c->content); ?></span> <br>
                
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

<?php elseif(Session::has('doctor')): ?>
<h2>Doctor page</h2>  </div>
<a href="/logout">Log Out </a>
</div>
<?php elseif(Session::has('specialist')): ?>
<h2>Specialist page</h2>  </div>
<a href="/logout">Log Out </a>
</div>
<?php elseif(Session::has('admin')): ?>
<h2>Admin page</h2>  </div>
<a href="/logout">Log Out </a>
</div>
<?php else: ?>

<?php endif; ?>
</html><?php /**PATH C:\xampp\htdocs\docbook\resources\views/comment.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocBook : Doctor Homepage</title>
<!--    ------css link---------->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
<!--    -------font awesome kit link------->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/ae163c3f97.js" crossorigin="anonymous"></script>

    
    
    
    
</head>

<?php if(Session::has('doctor')): ?>
<body>
<!---------section-1---------->
<!------top-heading------>
<div class="container-fluid p-0">
    <div class="section-1">
  <div class="container">
            <div class="row justify-content-end align-items-center">
            
            <div class="col-md-6 offset-3">
                <p style="margin: 0px;">Doctor's Page</p>
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
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      </form>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        
        <li class="nav-item">
          <a class="nav-link" href="#">News Feed</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('view_blog')); ?>">View Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('blog')); ?>">Write Blog</a>
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
         <!-- 
          <li>

          <a class="nav-link" href="">View Prescribed Posts</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(route('followups')); ?>">Follow Ups</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        
       
      </ul>
      <!-- --------profile section--------   -->

    
              <div class="profile-wrap">
                  <div class="name">
                  <a href="#">
                   
                    <p><?php echo e(session('doctor')); ?></p>
                
                  </a>
            </div>
  
              <div class="profile-photo">
                
            <?php $__currentLoopData = $doc_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="#"><img width='100px' height='80px' src=<?php echo e($i->propic); ?> alt="profile pic"></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             
            
             
                
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
       
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <input type="submit" value="Find" style="background: #9ba2fd;
    border: 1px solid #6c6cff;
    color: white;
    border-radius: 10px;
    padding: 0px 33px;
    font-weight: 500;">
        
        
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
              
<div class="container" id="postdisplay" name="postdisplay">
<?php $__currentLoopData = $post_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card">
    <?php if($i->post_type == "Post With Name"): ?>
    <?php $email = $i->patient_email; ?>
    <?php $__currentLoopData = $patient_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php if($p->email == $email): ?>
       <h5 class="card-header">Name: <?php echo e($p->fname.' '.$p->lname); ?>, User <?php echo e($p->userid); ?></h5>
       <h7 class="card-header">Date and Time: <?php echo e(\Carbon\Carbon::parse($i->created_at)->toDayDateTimeString()); ?></h7>
       <h7 class="card-header">Gender: <?php echo e($p->gender); ?></h7>
       <div class="card-body">
        <h5 class="card-title">Category: <?php echo e($i->problem_type); ?></h5>
        <p class="card-text ellipsis"><?php echo e($i->details); ?></p>
        <a href="home/viewpost/<?php echo e($i->id); ?>" class="btn btn-primary">View Post</a>
         <br><br>
      </div>
</div>
<br>
       <?php endif; ?>
       
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    <?php else: ?>
    <?php $email = $i->patient_email; ?>
    <?php $__currentLoopData = $patient_info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <?php if($p->email == $email): ?>
       <h5 class="card-header">User <?php echo e($p->userid); ?></h5>
       <h7 class="card-header">Date and Time: <?php echo e(\Carbon\Carbon::parse($i->created_at)->toDayDateTimeString()); ?></h7>    
        <h7 class="card-header">Gender: <?php echo e($p->gender); ?></h7>
        <div class="card-body">
        <h5 class="card-title">Category: <?php echo e($i->problem_type); ?></h5>
        <p class="card-text ellipsis"><?php echo e($i->details); ?></p>
        <a href="home/viewpost/<?php echo e($i->id); ?>" class="btn btn-primary">View Post</a>
        <br><br>
      </div>
    </div>
    <br>

       <?php endif; ?>
       
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
<script src="<?php echo e(URL::asset('js/bootstrap.min.js')); ?>"></script>
<script>
  $(document).ready(function(){
  
   fetch_post_data();
  
   function fetch_post_data(query = '')
   {
    $.ajax({
     url:"<?php echo e(route('postsearch')); ?>",
     method:'GET',
     data:{query:query},
     dataType:'json',
     success:function(data)
     {
      $('#postdisplay').html(data.table_data);
      $('#total_records').text(data.total_data);
     }
    })
   }
  
   $(document).on('keyup', '#search_blog', function(){
    var query = $(this).val();
    fetch_post_data(query);
   });
  });
  </script>
  
</body>
<?php endif; ?>
</html><?php /**PATH C:\xampp\htdocs\docbook\resources\views/doctorhome.blade.php ENDPATH**/ ?>
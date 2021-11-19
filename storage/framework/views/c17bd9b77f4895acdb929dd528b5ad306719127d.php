<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocBook : Patient Homepage</title>
<!--    ------css link---------->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/profile.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">



<!--    -------font awesome kit link------->
    <script src="https://kit.fontawesome.com/ae163c3f97.js" crossorigin="anonymous"></script>
    
    
    
    
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
                
            <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="#"><img width='100px' height='80px' src="/<?php echo e($i->propic); ?>" alt="profile pic"></a>
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
                 <div class="row justify-content-end">
                     <div class="col-md-6">
                  <form action="">
                                        <div class="catagory-search">
                                  <div class="row">
                           <div class="col-md-6">
                               <select class="form-select" aria-label="Default select example">
  <option selected>Search by categories</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
                           </div>
                           
                           <div class="col-md-6">
                               <select class="form-select" aria-label="Default select example">
  <option selected>Search by location</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
                           </div>
                           
                           
                           
                           
                           
                       </div>
                         
                           
                               
                     </div>
                  </form>
                     
                     
                     
                  </div>
                 </div>
              </div>

                
        
        
              <div class="infoMain">
                <?php $__currentLoopData = $docs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="info">
                <img class="profile_pic" src="/<?php echo e($d->propic); ?>" alt="profile pic">
                  <span class="text">Name: <?php echo e($d->fname); ?> <?php echo e($d->lname); ?></span>

                 
    


              </div>

              <div class="blank">

                <div class="rating">
                    <span class="text">Rate Doctor -> </span>
    
                    <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="rate/<?php echo e($p->id); ?>/<?php echo e($d->id); ?>/1" ><i class="bi bi-star-fill" style="color:gray;"></i></a>
                    <a href="rate/<?php echo e($p->id); ?>/<?php echo e($d->id); ?>/2" ><i class="bi bi-star-fill" style="color:gray;"></i></a>
                    <a href="rate/<?php echo e($p->id); ?>/<?php echo e($d->id); ?>/3" ><i class="bi bi-star-fill" style="color:gray;"></i></a>
                    <a href="rate/<?php echo e($p->id); ?>/<?php echo e($d->id); ?>/4" ><i class="bi bi-star-fill" style="color:gray;"></i></a>
                    <a href="rate/<?php echo e($p->id); ?>/<?php echo e($d->id); ?>/5" ><i class="bi bi-star-fill" style="color:gray;"></i></a>
    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    
                </div>
                
                  <?php $__currentLoopData = $docs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($d->rating == 0.0): ?>
                <div class="rate">
                  <span>Rating:  </span> 
              <i class="bi bi-star-fill" style="color:gray;"></i>
              <i class="bi bi-star-fill" style="color:gray;"></i>
              <i class="bi bi-star-fill" style="color:gray;"></i>
              <i class="bi bi-star-fill" style="color:gray;"></i>
              <i class="bi bi-star-fill" style="color:gray;"></i>
              <span> (<?php echo e($d->rating); ?>)</span>
              </div>
              <?php elseif($d->rating == 1.0): ?>
              <div class="rate">
                  <span>Rating:  </span> 
                 <i class="bi bi-star-fill" style="color:yellow;"></i>
                 <i class="bi bi-star-fill" style="color:gray;"></i>
                 <i class="bi bi-star-fill" style="color:gray;"></i>
                 <i class="bi bi-star-fill" style="color:gray;"></i>
                 <i class="bi bi-star-fill" style="color:gray;"></i>
                 <span> (<?php echo e($d->rating); ?>)</span>
              </div>

              <?php elseif($d->rating == 2.0): ?>
              <div class="rate">
                  <span>Rating:  </span> 
                 <i class="bi bi-star-fill" style="color:yellow;"></i>
                 <i class="bi bi-star-fill" style="color:yellow;"></i>
                 <i class="bi bi-star-fill" style="color:gray;"></i>
                 <i class="bi bi-star-fill" style="color:gray;"></i>
                 <i class="bi bi-star-fill" style="color:gray;"></i>
                 <span> (<?php echo e($d->rating); ?>)</span>
              </div>

              <?php elseif($d->rating == 3.0): ?>
              <div class="rate">
                  <span>Rating:  </span> 
                 <i class="bi bi-star-fill" style="color:yellow;"></i>
                 <i class="bi bi-star-fill" style="color:yellow;"></i>
                 <i class="bi bi-star-fill" style="color:yellow;"></i>
                 <i class="bi bi-star-fill" style="color:gray;"></i>
                 <i class="bi bi-star-fill" style="color:gray;"></i>
                 <span> (<?php echo e($d->rating); ?>)</span>
              </div>

              <?php elseif($d->rating == 4.0): ?>
              <div class="rate">
                  <span>Rating:  </span> 
                 <i class="bi bi-star-fill" style="color:yellow"></i>
                 <i class="bi bi-star-fill" style="color:yellow"></i>
                 <i class="bi bi-star-fill" style="color:yellow"></i>
                 <i class="bi bi-star-fill" style="color:yellow"></i>
                 <i class="bi bi-star-fill" style="color:gray;"></i>
                 <span> (<?php echo e($d->rating); ?>)</span>
              </div>

              <?php elseif($d->rating == 5.0): ?>
              <div class="rate">
                  <span>Rating:  </span> 
                 <i class="bi bi-star-fill" style="color:yellow"></i>
                 <i class="bi bi-star-fill" style="color:yellow"></i>
                 <i class="bi bi-star-fill" style="color:yellow"></i>
                 <i class="bi bi-star-fill" style="color:yellow"></i>
                 <i class="bi bi-star-fill" style="color:yellow"></i>
                 <span> (<?php echo e($d->rating); ?>)</span>
              </div>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             
              <div class="info">
                <span class="text">Speciality In: <?php echo e($d->speciality); ?></span>

            </div>
            
            <div class="info">
                <span class="text">Gender: <?php echo e($d->gender); ?></span>
              

            </div>
           
              <div class="info">
                  <span class="text">Email: <?php echo e($d->email); ?></span>
<div class="blank">

              </div>

              </div>
              

              <div class="info">
                <span class="text">Chamber Address: <?php echo e($d->chamberaddress); ?></span>


            </div>
           

            <div class="info">
                <span class="text">Hospital: <?php echo e($d->hospital); ?></span>


            </div>
           
            <div class="info">
                <span class="text">Experience: <?php echo e($d->experience); ?> years</span>


            </div>

            <div class="info">
              <span class="text">BMDC Number: <?php echo e($d->bmdc); ?></span>
            

          </div>
          

            <div class="info">
                <span class="text">Degree: <?php echo e($d->degree); ?></span>


            </div>
           

            <div class="info">
                <span class="text">Contact Number: <?php echo e($d->phone); ?></span>


            </div>

        </div>

           


              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <a class="btn btn-primary" href="javascript:history.back()">Go Back</a>
        
    
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
</html>

    <!-- 
    <div class="container">

        <div class="container_tab">
        <div class="tabs">

            <span class="tab_t">
               <a href=""> Home</a>
            </span>

            <span class="tab_t">
                <a href=""> News Feed</a>
            </span>

            <span class="tab_t">
                <a href=""> Get Consultation</a>
            </span>

            <div class="mid">
                

            </div>


          


        </div>

        <div class="prof">
                
            <?php $__currentLoopData = $info; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="#"><img class="pic" width='100px' height='80px' src="/<?php echo e($i->propic); ?>" alt="profile pic"></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <span class="title"><?php echo e(session('patient')); ?></span>
            

        </div>


           
          


            

        </div>


        <div class="doctors">

            <?php $__currentLoopData = $docs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="doc_info">

                 <div class="pic_d">

                    <img class="doc_pic" width='100px' height='80px' src="/<?php echo e($d->propic); ?>" alt="profile pic">



                 </div>

                 <div class="details">
                     <span><?php echo e($d->fname); ?> <?php echo e($d->lname); ?></span>
                     <span>Rating: * * * * * </span>
                     <span>Hospital: <?php echo e($d->hospital); ?></span>
                     <span>Email: <?php echo e($d->email); ?></span>


                     




                </div>

               <div class="buttons">
                <button class="ui green button">View Profile</button>
               </div>

               </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>

        <div class="footer">

    <span>DOCCBOOK - FOOTER</span>

        </div>

    </div>

-->
<?php /**PATH C:\xampp\htdocs\docbook\resources\views/doc_profile.blade.php ENDPATH**/ ?>
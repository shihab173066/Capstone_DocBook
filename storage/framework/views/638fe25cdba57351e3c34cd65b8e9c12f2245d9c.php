<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocBook : Patient Homepage</title>
<!--    ------css link---------->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/profile.css')); ?>">
    <link rel="stylesheet" href="/css/consul.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">



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

  <div class="container">
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
                <span class="text"><b>Speciality In:</b> <?php echo e($d->speciality); ?></span>

            </div>
            
            <div class="info">
                <span class="text"><b>Gender:</b> <?php echo e(ucwords($d->gender)); ?></span>
              

            </div>
           
              <div class="info">
                  <span class="text"><b>Email:</b> <?php echo e($d->email); ?></span>
<div class="blank">

              </div>

              </div>
              

              <div class="info">
                <span class="text"><b>Chamber Address:</b> <?php echo e($d->chamberaddress); ?></span>


            </div>
           

            <div class="info">
                <span class="text"><b>Hospital:</b> <?php echo e($d->hospital); ?></span>


            </div>
           
            <div class="info">
                <span class="text"><b>Experience:</b> <?php echo e($d->experience); ?> years</span>


            </div>

            <div class="info">
              <span class="text"><b>BMDC Number:</b> <?php echo e($d->bmdc); ?></span>
            

          </div>
          

            <div class="info">
                <span class="text"><b>Degree:</b> <?php echo e($d->degree); ?></span>


            </div>
           

            <div class="info">
                <span class="text"><b>Contact Number:</b> <?php echo e($d->phone); ?></span>


            </div>

        </div>

           


              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <a class="btn btn-primary" href="javascript:history.back()">Go Back</a>
        
    
    </div>


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
<?php /**PATH C:\xampp\htdocs\docbook - final2\resources\views/doc_profile.blade.php ENDPATH**/ ?>
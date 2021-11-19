<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DocBook : Hospital Admin Homepage</title>
<!--    ------css link---------->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
<!--    -------font awesome kit link------->
    <script src="https://kit.fontawesome.com/ae163c3f97.js" crossorigin="anonymous"></script>
    
    
    
    
</head>

<?php if(Session::has('hospital_admin')): ?>
<body>
<?php echo $__env->yieldContent('main'); ?>
</body>
<?php endif; ?>
</html><?php /**PATH C:\xampp\htdocs\docbook - final2\resources\views/layout.blade.php ENDPATH**/ ?>
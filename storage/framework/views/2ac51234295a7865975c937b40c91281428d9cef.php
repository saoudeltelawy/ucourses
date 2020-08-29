<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index - Laravel& Bootstrap 4</title>
    
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.css'/>
    <link rel="stylesheet" href="/css/app.css">
    
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
</head>
<body>
    <!-- Navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">UCourses</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Our Services
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Conatct Us</a>
            </li>
          
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search UCourses" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit">Search</button>
          </form>

          

      <ul class="navbar-nav ">
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Membership
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo e(route('login')); ?>">Login</a>
                
                </a>
                            <a class="dropdown-item" href="<?php echo e(route('register')); ?>">Register</a>

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Contact Us</a>
              </div>
            </li>
           
            

             
        

          

              <div class="flex-center position-ref full-height d-none">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        
        </div>
      </ul>
           
      </nav>
    <!-- End of Navbar  -->
  


<?php echo $__env->yieldContent('main_content'); ?>






 
 <footer>
    
</footer>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html><?php /**PATH /Applications/MAMP/htdocs/Laravel/courses/resources/views/layout/master_layout.blade.php ENDPATH**/ ?>
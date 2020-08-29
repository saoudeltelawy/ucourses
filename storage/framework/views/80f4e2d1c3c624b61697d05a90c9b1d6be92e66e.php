<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index - Laravel& Bootstrap 4</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
    

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<!-- if using RTL (Right-To-Left) orientation, load the RTL CSS file after fileinput.css by uncommenting below -->
<!-- link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/css/fileinput-rtl.min.css" media="all" rel="stylesheet" type="text/css" /-->
<!-- the font awesome icon library if using with `fas` theme (or Bootstrap 4.x). Note that default icons used in the plugin are glyphicons that are bundled only with Bootstrap 3.x. -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
<!-- piexif.min.js is needed for auto orienting image files OR when restoring exif data in resized images and when you
    wish to resize images before upload. This must be loaded before fileinput.min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/plugins/piexif.min.js" type="text/javascript"></script>
<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview. 
    This must be loaded before fileinput.min.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/plugins/sortable.min.js" type="text/javascript"></script>
<!-- purify.min.js is only needed if you wish to purify HTML content in your preview for 
    HTML files. This must be loaded before fileinput.min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/plugins/purify.min.js" type="text/javascript"></script>
<!-- popper.min.js below is needed if you use bootstrap 4.x (for popover and tooltips). You can also use the bootstrap js 
   3.3.x versions without popper.min.js. -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- bootstrap.min.js below is needed if you wish to zoom and preview file content in a detail modal
    dialog. bootstrap 4.x is supported. You can also use the bootstrap js 3.3.x versions. -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<!-- the main fileinput plugin file -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/fileinput.min.js"></script>

<!-- following theme script is needed to use the Font Awesome 5.x theme (`fas`) -->


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
<!-- optionally if you need translation for your language then include the locale file as mentioned below (replace LANG.js with your language locale) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/js/locales/LANG.js"></script>


</head>
<body>

    <!-- Navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">U Courses</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      
<!-- End of Navbar  -->


<h1 class="text-center pt-2 display-4">Add New Course</h1>

<div class="container">
    <div class="row">
    <div class="col">
    
      
      


<form method="POST" action="<?php echo e(route("dashboard.storeToDB")); ?>" class="mt-3 md-form" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Course Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="courseName" value="<?php echo e(old('courseName')); ?>">

    
      <?php if($errors ->has('courseName')): ?>

        <?php $__currentLoopData = $errors->get('courseName'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              

              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo e($message); ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
      <?php endif; ?>

    

  </div>
  <div class="form-group">
    <label for="exampleInputCat">Category:</label>
    <input type="text" class="form-control" id="exampleInputCat" name="Category" value="<?php echo e(old('Category')); ?>">
  </div>

  <?php if($errors ->has('Category')): ?>

  <?php $__currentLoopData = $errors->get('Category'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
<?php endif; ?>


    <div class="form-group">
    <label for="exampleInputPassword1">Course Duration (Hours)</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="hours" required value="<?php echo e(old('hours')); ?>">
  </div>

  <?php if($errors ->has('hours')): ?>

  <?php $__currentLoopData = $errors->get('hours'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
<?php endif; ?>

  
  <div class="form-group">
    <label for="exampleInputCat">Course Image:</label>
    
    <input id="input-b1" name="MyImage" type="file" class="file" data-browse-on-zone-click="true">

  </div>
 
  
  <button type="submit" class="btn btn-primary">Add</button>
</form>
</div>
    </div>   
</div>





        <!--  -->
      <footer>
      </footer>

   
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>

    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    <script>
    // Photo Upload Plugin 

// initialize with defaults
$("#input-b1").fileinput();
 
// with plugin options
$("#input-b1").fileinput({'showUpload':false, 'previewFileType':'any'});

    </script>

    
</body>
</html><?php /**PATH /Applications/MAMP/htdocs/Laravel/courses/resources/views/dashboard/create.blade.php ENDPATH**/ ?>
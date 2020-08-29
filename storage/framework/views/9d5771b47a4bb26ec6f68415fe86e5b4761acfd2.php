<?php $__env->startSection('main_content'); ?>



<h1 class="bg-info text-white p-2 m-0 text-center">
<img src="<?php echo e(url('/imgs/uletter1.png')); ?>" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
Courses &lt; <?php echo e($adminMessage ?? ''); ?>

    &gt;</h1>


<?php echo e($data ?? ''); ?>





<div class="container">
    

    
    


</div>


<div id="bs_slider" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#bs_slider" data-slide-to="0" class="active"></li>
        <li data-target="#bs_slider" data-slide-to="1"></li>
        <li data-target="#bs_slider" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo e(url('/imgs/u1.jpg')); ?>"
                alt="Los Angeles" width="100%" height="577">
                
                <div class="black-overlay">
                  <h1 class="text-capitalize ls-1">
                  U Courses <br>Your best choice for Coding Bootcampes <br> Online & in-office <br> courses </h1>
                </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo e(url('/imgs/u4.jpg')); ?>"
                alt="Chicago" width="100%" height="577">
                <div class="black-overlay"></div>

        </div>
        <div class="carousel-item">
            <img src="<?php echo e(url('/imgs/u5.jpg')); ?>" alt="New York" width="100%"
                height="577">
                <div class="black-overlay"></div>

        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#bs_slider" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#bs_slider" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>




<div id="banner">
    <h2 class="ml-2 lg-heading">Current Available courses:</h2>
    <p class="lead ml-3 text-muted">
        Reserve now and ask for your offer!
    </p>
</div>


<?php if(Session::has('message')): ?>

    

    <div class="alert alert-success alert-dismissible m-0 fade show" role="alert">
        <strong> <?php echo e(session('message')); ?> </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>

<table class="table text-center bg-dark table-s table-hover ">
    <thead class="text-info">
        <tr>
            <th scope="col" class="font-italic font-weight-bold text-monospace d-none">ID</th>
            <th scope="col" class="font-italic font-weight-bold text-monospace">Course Name</th>
            <th scope="col" class="font-italic font-weight-bold text-monospace">Category</th>
            <th scope="col" class="font-italic font-weight-bold text-monospace">Course Duration(Hours)</th>

            <th scope="col" class="font-italic font-weight-bold text-monospace">Modify</th>

            <th scope="col" class="font-italic font-weight-bold text-monospace">Remove</th>
            <th scope="col" class="font-italic font-weight-bold text-monospace">Image</th>

        </tr>
    </thead>
    <tbody class="text-white">


        <?php $__currentLoopData = $allCourses ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="d-none"> <?php echo e($course->id); ?> </td>
                <td> <?php echo e($course->CourseName); ?> </td>
                <td> <?php echo e($course->CourseCategory); ?> </td>
                <td> <?php echo e($course->CourseDuration); ?> Hours</td>


                <td>
                    <a href="/dashboard/course-details/<?php echo e($course->id); ?>">
                        <i class="fas fa-edit" title="Show Details" style="color: rgba(17, 14, 14, 0.685)"></i>
                    </a>

                </td>

                <td>
                    <a href="/dashboard/delete/<?php echo e($course->id); ?>"
                        onclick="return confirm('Are you sure want to delete <?php echo e($course->CourseName); ?> Course?')">
                        <i class="fas fa-trash-alt" title="Delete" style="color: rgba(223, 54, 54, 0.561)"></i>
                    </a>

                </td>


                
                <td>
                
        <img src="/uploads/courses/<?php echo e($course->ImagePath); ?>" alt="Girl in a jacket" width="100" height="85">
   
        

       

                  </td>


            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    </tbody>
</table>


<?php echo e($allCourses ?? ''->links()); ?>


<div class="numbers bg-dark p-2 d-inline-block text-light m-2 borderd rounded">
    <strong>Number Of Available Courses</strong>
    <h3>
        <small></small> <span class="text-success text-center d-block"> <?php echo e($countOfCourses); ?></span>
    </h3>

</div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/Laravel/courses/resources/views/courses/index.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index - Laravel& Bootstrap 4</title>
    <link rel="stylesheet" href="/css/app.css">
    <style>
    img.card-img-top{
      position: relative;
    }
     span {
      
        font-size: 1rem;
        padding: 0.6rem;
        background-color: transparent;
        border: 1px solid green;
       position: absolute;
       top: 410px;
       right: 450px;
       text-decoration: none;
      }
      span a{
        color: #fff;
        font-weight: bolder:
      }

      span:hover{
        background: white;
        color: black;
      }

      span:hover a {
        color: black;
       text-decoration: none;

      }


  .edit {
        font-size: 1rem;
        padding: 0.6rem;
        background-color: transparent;
        border: 1px solid green;
         position: absolute;
       top: 410px;
       right: 940px;
         /* left: 450px; */
       text-decoration: none;
      }
    </style>
</head>
<body>

    <!-- Navbar  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/courses">U Courses</a>
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
            <input class="form-control mr-sm-2" type="search" placeholder="Search Courses" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    <!-- End of Navbar  -->

        <div class="container">
            <div class="row">
                <div class="col-12 pt-2">
                    <div class="card mx-auto" style="width: 50%">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1104&q=80" class="card-img-top" alt="..." width="300px" height="400px">
                        <div class="card-body">
                          <h1 class="card-title text-info text-center display-4"><?php echo e($details->CourseName); ?> </h1> 
                          <h4 class="card-text ">Course Category:</h4>
                            <p class="text-center lead"><?php echo e($details->CourseCategory); ?></p>

                            <h4 class="card-text">Course Duration:</h4>
                            <p class="text-center lead"><?php echo e($details->CourseDuration); ?> Hours</p>

                          <a href="#" class="btn btn-success mx-auto d-block mt-5">Reserve Now</a>

                        </div>
                      </div>
                </div>
               
            </div>
        </div>

<span> 
                            <a href="/courses">Back</a>  
                          </span>


<span class="edit"> 
                                <a href="/dashboard/course/edit/<?php echo e($details->id); ?>">Edit</a>
                          </span>


                   
         

        <!--  -->
      <footer>
      </footer>
    <script src="/js/app.js"></script>
</body>
</html><?php /**PATH /Applications/MAMP/htdocs/Laravel/courses/resources/views/dashboard/course_details.blade.php ENDPATH**/ ?>
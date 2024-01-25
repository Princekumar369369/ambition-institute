<!doctype html>
<html class="no-js" lang="en">

<?php include "./assets/components/header.php";
include "./php-ajax/config.php"; ?>


<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <!-- <div id="preloader">
        <div class="loader"></div>
    </div> -->
    <!-- prealoader area end -->
    <!-- header area start -->
    <?php include "./assets/components/navbar.php" ?>

    <!-- header area end -->
    <!-- offset search area start -->
    <div class="offset-search">
        <form action="#">
            <input type="text" name="search" placeholder="Sarch here...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- offset search area end -->
    <!-- body overlay area start -->
    <div class="body_overlay"></div>
    <!-- body overlay area end -->
    <!-- crumbs area start -->
    <div class="crumbs-area">
        <div class="container">
            <div class="crumb-content">
                <h4 class="crumb-title"><span>Our</span> Courses</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->
    <!-- course area start -->
    <div class="course-area  pt--120 pb--70">
        <div class="container">
            <div class="row">  
                <!-- course single start -->
                <?php 
                    $sql ="SELECT * FROM `course`";
                    $result = mysqli_query($conn,$sql);
                    while($rows= mysqli_fetch_assoc($result)){
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-5">
                        <div class="course-thumb">
                            <img src="./NiceAdmin/upload-img/<?php echo $rows['course_img'] ?>" alt="image">
                            <span class="cs-price primary-bg">$150</span>
                        </div>
                        <div class="card-body  p-25"> 
                            <div class="course-meta-title mb-4">
                                <div class="course-meta-text">
                                    <h4><a href="course-details.html"><?php echo $rows['course_name'] ?></a></h4>
                                   
                                </div> 
                                
                            </div>
                            <p><?php echo $rows['text'] ?></p> 
                            <ul class="course-meta-details list-inline  w-100">
                                <li> 
                                 <p>Duration</p>
                                 <span><?php echo $rows['duration'] ?> Year</span>
                                </li>
                                <li>
                                 <p>Exam</p>
                                  <span><?php echo $rows['exam'] ?></span>
                                </li> 
                                <li>
                                 <a href="./admission.php" class='btn btn-sm btn-primary'>Roll In</a>
                                </li>      
                            </ul>  
                      </div><!-- card-body -->
                    </div><!-- card -->
                </div>
                    <?php } ?>
                
              
            </div>
        </div>
    </div>
    <!-- course area end --> 

    <!-- cta area start -->
    <div class="cta-area  secondary-bg has-color ptb--50"> 
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <div class="cta-content">
                        <p class="mb-2">Click to Join the Advance Workshop</p>
                        <h2>Training in advance Computer</h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="cta-btn">
                        <a class="btn btn-light btn-round" href="./admission.php">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cta area end --> 

    <?php include "./assets/components/footer.php"; ?>
</body>

</html>
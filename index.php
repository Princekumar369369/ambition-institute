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

    <!-- slider area start -->
    <div class="slider-area owl-carousel has-color">
        <div class="slider_item" style="background: url(assets/images/bg/bg-1.jpg) center/cover no-repeat;">
            <div class="container">
                <div class="row">
                    <div class=" col-md-9">
                        <div class="slider-content">
                            <h3>admission ‘ 24</h3>
                            <h1><span class="primary-color">Your bright future</span> is Our Mission</h1>
                            <p><q>Empowering dreams, shaping success. Our computer institute is dedicated to
                                    illuminating your path towards a brighter and promising future.</q></p>
                            <a class="btn btn-primary btn-round btn-lg mt-5" href="./admission.php">Start Learning
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider_item" style="background: url(assets/images/bg/bg-2.jpg) center/cover no-repeat;">
            <div class="container">
                <div class="row">
                    <div class=" col-md-9">
                        <div class="slider-content">
                            <h3>admission ‘ 20</h3>
                            <h1><span class="primary-color">Mastering in Computer</span>By Expert Teachers</h1>
                            <p><q>Excel in computing with our expert-led program. Master the intricacies of computers
                                    guided by experienced instructors for unparalleled expertise.</q></p>
                            <a class="btn btn-primary btn-round btn-lg mt-5" href="#teacher-section">Meet Our
                                Teachers</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider_item" style="background: url(assets/images/bg/bg-3.jpg) center/cover no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="slider-content">
                            <h3>admission ‘ 20</h3>
                            <h1><span class="primary-color">Grow With New Techology</span> Offer by Our Course</h1>
                            <p><q>Unlock limitless possibilities, grow with cutting-edge technology in our course.
                                    Embrace innovation and thrive in the digital era</q></p>
                            <a class="btn btn-primary btn-round btn-lg mt-5" href="#courses">View Our Courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider area end -->

    <!-- about area start -->
    <div class="about-area ptb--120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-left-content">
                        <div class="section-title">
                            <span class="text-uppercase">about us</span>
                            <h2>Welcome to</h2>
                            <h2><span>Our </span> <span class="primary-color">institute </span></h2>
                        </div>
                        <p>
                            Welcome to <b>Ambition Computer Institute</b>! Our institute is your gateway to excellence in
                            computer science. With cutting-edge facilities, experienced faculty, and a passion for
                            innovation, we're committed to fueling your ambitions. Join us on an exciting journey of
                            learning and growth. Welcome to a world of endless possibilities and provide fa-search</p>
                            
                    </div>
                    <ul class="row">
                        <li class=" my-2 col-md-6 fw-bolder   text-dark" >- Courses and Training Programs</li>
                        <li class=" col-md-6 fw-bolder text-dark" >- Experienced Faculty</li>
                    </ul>
                    <ul class="row pt-2">
                        <li class=" col-md-6 fw-bolder   text-dark" >- Career Counseling</li>
                        <li class="mt-2 col-md-6 fw-bolder  text-dark">- Flexible Learning Options</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="abt-right-thumb">
                        <div class="abt-rt-inner">
                            <a class="expand-video" href="https://www.youtube.com/watch?v=cdfMgotGKIM"><i
                                    class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- course area start -->
    <div class="course-area  pt--120 pb--70">
        <div class="container" id='courses'>
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title">
                        <span class="text-uppercase">Build your career</span>
                        <h2>Featured Courses </h2>
                    </div>
                </div>
            </div>

            <div class="commn-carousel owl-carousel card-deck">
                <?php 
                    $sql ="SELECT * FROM `course`";
                    $result = mysqli_query($conn,$sql);
                    while($rows= mysqli_fetch_assoc($result)){
                ?>
                <div class="card mb-5 mx-2">
                    <div class="course-thumb">
                        <img src="./NiceAdmin/upload-img/<?php echo $rows['course_img'] ?>" alt="image">
                        <span class="cs-price primary-bg">₹<?php echo $rows['price'] ?></span>
                    </div>
                    <div class="card-body  p-25">
                        <div class="course-meta-title mb-4">
                            <div class="course-meta-text">
                                <h4><a href="course-details.html">
                                        <?php echo $rows['course_name'] ?>
                                    </a></h4>

                            </div>

                        </div>
                        <p>
                            <?php echo $rows['text'] ?>
                        </p>
                        <ul class="course-meta-details list-inline  w-100">
                            <li>
                                <p>Duration</p>
                                <span>
                                    <?php echo $rows['duration'] ?> Month
                                </span>
                            </li>
                            <li>
                                <p>Exam</p>
                                <span>
                                    <?php echo $rows['exam'] ?>
                                </span>
                            </li>
                            <li>
                                <a href="./admission.php" class='btn btn-sm btn-primary'>Roll In</a>
                            </li>
                        </ul>
                    </div><!-- card-body -->
                </div><!-- card -->

                <?php } ?>
            </div>
        </div>
    </div>
     <!-- cta area start --> 
     <div class="container pb--120">
        <div class="cta-area primary-bg has-color ptb--50 pl-5 pr-5">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <div class="cta-content">
                        <p class="mb-2">Click to Join the Advance Workshop</p>
                        <h2>Training in advance In Computer</h2>
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
    <!-- course area end -->

    <!-- take toure area start -->
    <!-- <div class="take-toure-area ptb--120">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="section-title sec-style-two">
                        <img class="title-top-shape" src="assets/images/icon/title-top-shape.png" alt="image">
                        <span class="text-uppercase">Take A Tour</span>
                        <h2>Video tour on Edification</h2>
                    </div>
                </div>
            </div>
            <div class="video-area">
                <a class="expand-video" href="https://www.youtube.com/watch?v=cdfMgotGKIM"><i class="fa fa-play"></i></a>
            </div>
        </div>
    </div> -->
    <!-- take toure area end -->

    <!-- teacher area start -->
    <div class="teacher-area pb--70">
        <div class="container" id='teacher-section'>
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="section-title">
                        <span class="text-uppercase">Learn from best</span>
                        <h2>Our Teachers</h2>
                    </div>
                </div>
            </div>
            <div class="commn-carousel owl-carousel card-deck mx-1 mx-md-0">
                <?php 
                    $sql ="SELECT * FROM `teacher`";
                    $result = mysqli_query($conn,$sql);
                    while($rows= mysqli_fetch_assoc($result)){
                ?>
                <div class="card mb-5 ">
                    <img src="./NiceAdmin/upload-img/<?php echo $rows['teacher_img'] ?>" alt="image"
                        class='teacher-img'>
                    <div class="card-body teacher-content p-25">
                        <h4 class="card-title mb-4"><a href="teacher-details.html">
                                <?php echo $rows['teacher_name'] ?>
                            </a></h4>
                        <span class="primary-color font-italic d-block mb-3">
                            <?php echo $rows['subject'] ?>
                        </span>

                    </div>
                </div><!-- card -->

                <?php }?>
            </div>
        </div>
    </div>
    <!-- teacher area end -->

    <!-- events area start -->

    <!-- event-area -->
    <!-- events area end -->

    <!-- testimonial area start -->
    <div class="testimonial-area ptb--120">
        <img class="tst-bg" src="assets/images/bg/tst-bg-shape.png" alt="image">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <div class="tst-carousel owl-carousel">
                        <div class="testimonial-content pb--40">
                            <div class="section-title sec-style-two">
                                <span class="text-uppercase primary-color mb-0">happy students</span>
                                <h2>Testimonial </h2>
                            </div>
                            <h3>‘‘ Vous devez profiter de la vie. Toujours aimez, les personnespositives penser. ‘‘</h3>
                            <h4>Kawsar Ahhamed</h4>
                            <span>App Developer</span>
                        </div>
                        <div class="testimonial-content pb--40">
                            <div class="section-title sec-style-two">
                                <span class="text-uppercase primary-color mb-0">happy students</span>
                                <h2>Testimonial</h2>
                            </div>
                            <h3>‘‘ Vous devez profiter de la vie. Toujours aimez, les personnespositives penser. ‘‘</h3>
                            <h4>Kawsar Ahhamed</h4>
                            <span>App Developer</span>
                        </div>
                        <div class="testimonial-content pb--40">
                            <div class="section-title sec-style-two">
                                <span class="text-uppercase primary-color mb-0">happy students</span>
                                <h2>Testimonial</h2>
                            </div>
                            <h3>‘‘ Vous devez profiter de la vie. Toujours aimez, les personnespositives penser. ‘‘</h3>
                            <h4>Kawsar Ahhamed</h4>
                            <span>App Developer</span>
                        </div>
                    </div>
                </div><!-- row -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- testimonial-area -->



    <!-- footer area start -->
    <?php include "./assets/components/footer.php"; ?>
</body>

</html>
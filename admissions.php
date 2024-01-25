<!doctype html>
<html class="no-js" lang="en">

<?php include "./assets/components/header.php" ?>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
   
    <!-- prealoader area end -->
    <!-- header area start -->
    <?php include "./assets/components/navbar.php" ?>

    <!-- header area end -->
  
    <!-- body overlay area start -->
    <div class="body_overlay"></div>
    <!-- body overlay area end -->
    <!-- crumbs area start -->
    <div class="crumbs-area">
        <div class="container">
            <div class="crumb-content">
                <h4 class="crumb-title"><span>Admission</span></h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->
    <!-- contact info area start -->
    <div class="contact-info ptb--120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="cnt-info">
                        <h4>Contact Info</h4>
                        <p>PO Box CT16133 Collins Street West, Victoria 8007, Australia.</p>
                        <ul class="address">
                            <li><i class="fa fa-phone"></i>+1 (2) 345 6789</li>
                            <li><i class="fa fa-phone"></i>+1 (2) 345 6789</li>
                            <li><i class="fa fa-envelope"></i>contact@yourdomain.com</li>
                        </ul>
                        <ul class="social list-inline mt-5">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div id="google-map"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact info area end -->
    <!-- contact form area start -->
    <div class="contact-form-area pb--120">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="cnt-title">
                        <h4>Get in touch <span>with us</span></h4>
                        <p>Quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut </p>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <form id="contact_form">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="user_name" placeholder="Enter your name">
                        </div>
                        <div class="col-md-4">
                            <input type="email" name="user_email" placeholder="Your Email">
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="user_subject" placeholder="Subject">
                        </div>
                        <div class="col-12">
                            <textarea name="user_msg" id="msg" placeholder="Your message here"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" id="contact_form_btn">SEND TO US</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- contact form area end --> 
 <!-- teacher area end -->
            <section class="show-message position-fixed w-100 h-100 " id="popup-box">
                    <div class="container w-100 h-100 d-flex justify-content-center align-items-center">
                        <div class="row justify-content-center">
                            <div class="card col-12 position-relative">
                                <figure class="success-gif position-absolute">
                                    <img src="./assets/images/icon/Animation - 1702138652342.gif" alt="">
                                </figure>
                                <h2 class="p-5 text-center my-3">Succesfully Saved</h2>
                            </div>
                        </div>
                    </div>
                </section>
    <!-- footer area start -->
    <!-- footer area start -->
    <?php include "./assets/components/footer.php"; ?>
    <script>
      $("#contact_form").validate({
        rules:{
            user_name: {
                  required: true,
                  maxlength: 20,
                  minlength: 3,
            },
            user_email: {
                required: true,
                email: true,
            },
            user_msg: {
                required: true,
                  maxlength: 1000,
                  minlength: 6,
            },
            user_subject: {
                required: true,
                  maxlength: 30,
                  minlength: 6,
            }
        },
        messages:{
           user_name:{
            required: "*Please Enter Student",
            maxlength: "*Enter 3 to 20 length charector",
            minlength: "*Enter 3 to 20 length charector",
           }, 
           user_email: {
                required: "*Please Enter Email",
                email: "Enter Valid Email",
            },
            user_msg:{
            required: "*Please Enter Massage",
            maxlength: "*Enter 6 to 100 length charector",
            minlength: "*Enter 6 to 100 length charector",
           },
           user_subject: {
                required: "*Please Enter Inter School Name",
                  maxlength: "*Enter 6 to 20 length charector",
                  minlength: "*Enter 6 to 20 length charector",
            },
           
           
        }
     });
    </script>

        

       
    </script>


</body>

</html>
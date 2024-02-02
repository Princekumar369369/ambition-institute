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
                <h4 class="crumb-title"><span>Contact </span>Us</h4>
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
                    </div>
                </div>
                <div class="col-lg-8">
                    <div id="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3553.897908488902!2d80.14976447536067!3d27.03339175489414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399e89a93dd1d435%3A0x2de7d79971177d61!2sAmbition%20Computer%20Institute!5e0!3m2!1sen!2sin!4v1706030243804!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class='w-100 h-100'></iframe>
                    </div>
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
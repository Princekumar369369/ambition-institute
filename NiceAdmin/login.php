<!DOCTYPE html>
<html lang="en">

<head>
    
<?php  session_start();

include "./php-ajax/config.php";
if(isset($_SESSION['user_name'])){
  header('Location: http://localhost/ambition-institute/NiceAdmin/index.php');
} 
include "./component/head.php"; ?>

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form class="row g-3 needs-validation" method='POST' action=<?php $_SERVER['PHP_SELF']; ?>>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <!-- <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div> -->
                    <div class="col-12">
                      <button class="btn btn-primary w-100" name='login-btn' type="submit">Login</button>
                      <a href="http://localhost/ambition-institute/">go back</a>
                    </div>
                    <div class="col-12">
                      <!-- <p class="small mb-0">Don't have account? <a href="pages-register.html">Create an account</a></p> -->
                    </div>
                  </form>

                </div>
              </div>

             

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- Template Main JS File -->
  <script src='assets/js/jquery.js'></script>
  <!-- <script src="assets/js/main.js"></script> -->
  <script src="assets/js/custom.js"></script>
<?php
  if(isset($_POST['login-btn'])){
    include "./php-ajax/config.php";
    $userName = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `user` WHERE user_name = '{$userName}' AND user_password = '{$password}'";
echo $sql;
    $result = mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_assoc($result)){
      $_SESSION['user_name'] = $row['user_name'];
      $_SESSION['role'] = 1;
      echo "<script>location.assign('http://localhost/ambition-institute/NiceAdmin/index.php')</script>";
    }
  }
  }

?>
</body>

</html>
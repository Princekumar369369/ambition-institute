<!DOCTYPE html>
<html lang="en">

<head>
<?php include "./component/head.php"; ?>

</head>

<body>

  <!-- ======= Header ======= -->
  <?php include "./component/header.php"; ?>
<!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include './component/aside.php' ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

  <div class="pagetitle">
      <h1>Student</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">student</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div class="modal fade" id="delModalStudent" tabindex="-1" aria-labelledby="delModalStudent"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <form id='del-student-form'>
                                    <input type="number" id='student_id' hidden  name='student-id'>
                                    <input type="text" id='student_img' hidden  name='student-img'>
                                </form>
                                <i class="bi bi-exclamation-triangle h3 text-danger"></i>
                                    Are you sure to delete?
                               
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-sm del-btn  mx-auto text-white"
                                      id="del-student">Delete</button> 
                                  </div>
                            </div>
                           
                        
                        </div>
                    </div>
                </div>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
            <h3 class="card-title fw-bold">All Admission</h3>
              <!-- Table with stripped rows -->
              <table class="table datatable display" id="admission-table">
                <thead>
                  <tr>
                    <th>
                      Sn
                    </th>
                    <th><b>N</b>ame</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Course</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class='student-table-body'>
                 
                      

                   
                      
                      
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
 <!-- notification section  -->
 <div class="notification position-fixed" id="notification">

</div>
  </main><!-- End #main --><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include "./component/footer.php" ?>
  <!-- <script>$(document).ready(function(){alert();})</script> -->
  

</body>

</html>
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
      <h1>Admission</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">admission</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

         
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <!-- Table with stripped rows -->
              <table class="table datatable display" id="admission-table-fresh">
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
                <tbody>
                <?php
                      include "./php-ajax/config.php";
                      $sql = "SELECT * FROM `student_admissions` JOIN `course` on student_admissions.course = course.cid WHERE student_admissions.status = 0 ";
                      $result = mysqli_query($conn,$sql);
                      $numRows = mysqli_num_rows($result);
                      $count = 0;
                      if($numRows > 0){
                        while($rows = mysqli_fetch_assoc($result)){
                          $count++;
                      ?>

                      <tr>
                        <td>
                          <?php echo $count; ?>
                        </td>
                        <td>
                          <?php echo $rows['student_name']   ?>
                        </td>
                        <td>
                          <?php echo $rows['email']   ?>
                        </td>
                        <td>
                         +91 <?php echo $rows['phone']   ?>
                        </td>
                        <td>
                        <?php echo $rows['course_name']   ?>
                        </td>
                        <td><a href="./student-details.php?sid=<?php echo $rows['sid'] ?>"
                            class="btn btn-outline-primary btn-sm edit-btn"><?php if($rows['status'] == 0){
                            echo "<i class='bi bi-pencil-square'></i>";
                          }else{
                            echo '<i class="bi bi-binoculars-fill"></i>';
                          }
                          ?></a>
                          <!-- <a href="./student-details.php?sid=<?php echo $rows['sid'] ?>" class=" text-white btn btn-sm  del-btn"><i class="bi bi-trash3-fill"></i></a> -->
                        </td>
                      </tr>
                      
                      <?php }}?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include "./component/footer.php" ?>


</body>

</html>
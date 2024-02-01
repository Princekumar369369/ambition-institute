
<!DOCTYPE html>
<html lang="en">

<head>
<?php include "./component/head.php"; ?>

</head>

<body>

  <!-- ======= Header ======= -->
  <?php include "./component/header.php";
  include "./php-ajax/config.php"; ?>
<!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include './component/aside.php' ?><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
  
      <section class="section dashboard">
        <div class="row">
  
          <!-- Left side columns -->
          <div class="col-lg-12">
            <div class="row">
  
              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
  
  
  
                  <div class="card-body">
                    <h5 class="card-title">Total <span>| Student</span></h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-person-add"></i>
                      </div>
                      <div class="ps-3">
                        <h6>
                       <?php $sql = "SELECT * FROM `student_admissions`";
                        $result = mysqli_query($conn,$sql);
                        $numRows = mysqli_num_rows($result);
                        echo $numRows;?>
                        </h6>
  
  
                      </div>
                    </div>
                  </div>
  
                </div>
              </div><!-- End Sales Card -->
  
              <!-- Revenue Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">
  
                  <div class="card-body">
                    <h5 class="card-title">Total <span>| Teachers</span></h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                      </div>
                      <div class="ps-3">
                        <h6> <?php $sql = "SELECT * FROM `teacher`";
                        $result = mysqli_query($conn,$sql);
                        $numRows = mysqli_num_rows($result);
                        echo $numRows;?></h6>
  
  
                      </div>
                    </div>
                  </div>
  
                </div>
              </div><!-- End Revenue Card -->
  
              <!-- Customers Card -->
              <div class="col-xxl-4 col-xl-12">
  
                <div class="card info-card customers-card">
  
  
  
                  <div class="card-body">
                    <h5 class="card-title">Total <span>| Courses</span></h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-journal-code"></i>
                      </div>
                      <div class="ps-3">
                        <h6><?php $sql = "SELECT * FROM `course`";
                        $result = mysqli_query($conn,$sql);
                        $numRows = mysqli_num_rows($result);
                        echo $numRows;?></h6>
  
  
                      </div>
                    </div>
  
                  </div>
                </div>
  
              </div><!-- End Customers Card -->
  
  
            </div>
          </div><!-- End Left side columns -->
  
        
        </div>
      </section>
      <section class="section">
        <div class="row">
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
              <h3 class="card-title fw-bold">Total Students</h3>
                <!-- Table with stripped rows -->
                <table class="table datatable display" id="admission-table-dashboard">
                  <thead>
                    <tr>
                      <th>
                        <b>N</b>ame
                      </th>
                      <th>Ext.</th>
                      <th>City</th>
                      <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                      <th>Completion</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                        
                        $sql = "SELECT * FROM `student_admissions` JOIN `course` on student_admissions.course = course.cid";
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
                            <?php echo $rows['course']   ?>
                          </td>
                          <td>
                            <?php echo $rows['phone']   ?>
                          </td>
                          <td>
                          <span class='badge  bg-warning <?php
                            if($rows['status'] == 0){
                              echo "d-inline";
                            }else{
                              echo "d-none";
                            }
                            ?>'>
                            <?php
                            if($rows['status'] == 0){
                              echo "Pending";
                            }
                            ?>
                            </span>
                            <span class='badge bg-success <?php if($rows['status'] == 1){
                              echo "d-inline";
                            }else{
                              echo "d-none";
                            } ?>'>
                            <?php if($rows['status'] == 1){
                              echo "Approved";
                            } ?>
                            </span>
                          </td>
                          <td><a href="./student-details.php?sid=<?php echo $rows['sid'] ?>"
                              class="btn btn-outline-primary btn-sm edit-btn"><?php if($rows['status'] == 0){
                              echo "<i class='bi bi-pencil-square'></i>";
                            }else{
                              echo '<i class="bi bi-binoculars-fill"></i>';
                            }
                            ?></a>
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
  
    </main><!-- End #main --><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include "./component/footer.php" ?>


</body>

</html>
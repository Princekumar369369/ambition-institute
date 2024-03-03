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
                         +91  <?php echo $rows['phone']   ?>
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
                          <button data-id="<?php echo $rows['sid'] ?>" data-img='<?= $rows['studentImage'] ?>' id="del-addmission" data-bs-toggle='modal' data-bs-target='#delModalAddmission' class=" text-white btn btn-sm  del-btn"><i class="bi bi-trash3-fill"></i></a>
                        </td>
                      </tr>
                      
                      <?php }}?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
              <div class="modal fade" id="delModalAddmission" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <form id='del-course-modal'>
                                    <input type="number" id='addmission_id' hidden  name='addmission-id'>
                                    <input type="text" id='addmission_img' hidden  name='addmission-img'>
                                </form>
                                <i class="bi bi-exclamation-triangle h3 text-danger"></i>
                                <div>
                                    Are you sure to delete?
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm del-btn  mx-auto text-white"
                                    id="del-admission">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include "./component/footer.php" ?>
<script>
  $(document).ready(function(){
    $(document).on('click','#del-addmission',function(){
      let id = $(this).data('id'); 
      let img = $(this).data('img');
      $("#addmission_id").val(id);
      $("#addmission_img").val(img);
    })

    $("#del-admission").click(function(){
      let formId = document.getElementById('del-course-modal');
      let formData = new FormData(formId);
      formData.append('enterId', 4);
      $.ajax({
        url: './php-ajax/delete.php',
        type: 'post',
        data: formData,
        contentType: false,
        processData: false,
        success: function(data){
          if(data == 1){
           location.reload();       
          }else{
            alert('have some mistake');   
          }
        }
      })
    })
  })
</script>

</body>

</html>
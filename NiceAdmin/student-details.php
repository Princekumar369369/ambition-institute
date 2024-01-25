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
      <h1>Student Details/h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Student Details</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body p-4">
              <h3 class='fw-bold'>Student Detaills</h3>
              <div class="conatiner">
                <?php
                  include "./php-ajax/config.php";
                  $id = $_GET['sid'];
                  
                  $sql = "SELECT * FROM `student_admissions` join `course` on student_admissions.course = course.cid where student_admissions.sid = $id";
                  $result = mysqli_query($conn,$sql);
                  $rows = mysqli_fetch_assoc($result);
                ?>
                <div class="row py-3">
                  <div class="col-md-3">
                    <figure style="width: 200px; hight: 200px">
                      <img src="./../upload-img/<?php echo $rows['studentImage'] ?>" class="border w-100 h-100" alt="">
                    </figure>
                  </div>
                  <div class="col-md-5">
                    <div class="row">
                      <div class="col-4">
                        <span class="fw-bold">Name</span>
                      </div>
                      <div class="col-auto">
                        <?php echo $rows['student_name']; ?>
                      </div>
                    </div>

                    <div class="row mt-2">
                      <div class="col-4">
                        <span class="fw-bold">Fahter Name</span>
                      </div>
                      <div class="col-auto">
                        <?php echo $rows['father_name']; ?>
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-4">
                        <span class="fw-bold">Mother Name</span>
                      </div>
                      <div class="col-auto">
                        <?php echo $rows['mother_name']; ?>
                      </div>
                    </div>
                     <!-- mobile -->
                    <div class="row mt-2">
                      <div class="col-4">
                        <span class="fw-bold">Mobile</span>
                      </div>
                      <div class="col-auto">
                        <?php echo $rows['phone']; ?>
                      </div>

                    </div>
                    <!-- email  -->
                    <div class="row mt-2">
                      <div class="col-4">
                        <span class="fw-bold">Email</span>
                      </div>
                      <div class="col-auto">
                        <?php echo $rows['email']; ?>
                      </div>
                      
                    </div>

                    <!-- address  -->
                    <div class="row mt-2">
                      <div class="col-4">
                        <span class="fw-bold">Address</span>
                      </div>
                      <div class="col-auto">
                        <?php echo $rows['address']; ?>
                      </div>
                      
                    </div>
                  </div>

                  <div class="col-md-4">
                    <!-- course  -->
                    <div class="row mt-2">
                      <div class="col-4">
                        <span class="fw-bold">Course</span>
                      </div>
                      <div class="col-auto">
                        <?php echo $rows['course_name']; ?>
                      </div>
                    </div>
                     <!-- Duration  -->
                     <div class="row mt-2">
                      <div class="col-4">
                        <span class="fw-bold">Duration</span>
                      </div>
                      <div class="col-auto">
                        <?php $course = $rows['course_duration'];
                                   $course = str_replace( 'Duration','', $course);
                                   echo $course;
                       ?> Years
                      </div>
                    </div>
                    <!-- semester  -->
                    <div class="row mt-2">
                      <div class="col-4">
                        <span class="fw-bold">Exam</span>
                      </div>
                      <div class="col-auto">
                        <?php echo $rows['exam']; ?> 
                      </div>
                    </div>
                   
                  </div>

                  <div class="col-12 my-3">
                    <div class="row">
                      <h5 class='fw-bold'>Qualifiaction</h5> <div class="col-md-3">
                         <div class="row">
                                <div class="col-6">
                                   <span class="fw-bold">Class</span>
                                 </div>
                                <div class="col-6">
                                     <?php echo $rows['qualifiaction']; ?>
                                 </div>
                        </div>
                      </div>
                      
                      <div class="col-md-3 <?php if($rows['roll_num'] == 0 ){echo 'd-none';} ?>">
                         <div class="row">
                                <div class="col-6">
                                   <span class="fw-bold">Roll Number</span>
                                 </div>
                                <div class="col-6">
                                     <?php echo $rows['roll_num']; ?>
                                 </div>
                        </div>
                      </div>

                      <div class="col-md-4">
                         <div class="row">
                                <div class="col-6">
                                   <span class="fw-bold">School/ University Name</span>
                                 </div>
                                <div class="col-6">
                                     <?php echo $rows['educational_institution']; ?>
                                 </div>
                        </div>
                      </div>

                      <div class="col-md-3 <?php if($rows['mark'] == 0 ){echo 'd-none';} ?>">
                         <div class="row">
                                <div class="col-auto">
                                   <span class="fw-bold">Marks</span>
                                 </div>
                                <div class="col-auto">
                                     <?php echo $rows['mark']; ?>
                                 </div>
                        </div>
                      </div>

                      <div class="col-md-3 <?php if($rows['subject'] == 'Select' ){echo 'd-none';} ?>">
                         <div class="row">
                                <div class="col-6">
                                   <span class="fw-bold">Subject</span>
                                 </div>
                                <div class="col-6">
                                     <?php echo $rows['subject']; ?>
                                 </div>
                        </div>
                      </div>
                    </div>
                  </div>

                
                </div>

                <div class="row ">
                  <div class="col-12 text-center ">
                 
                    <button class="btn btn-success  <?php if($rows['status'] == 0){
                            echo "d-blog";
                          }else{
                            echo "d-none";
                          }
                          ?>" data-id="<?php echo $rows['sid'] ?>" id="accept-btn">Accept</button>
                    <!-- <button class="btn btn-warning ms-3 <?php if($rows['status'] == 1){echo "d-blog";}else{
                            echo "d-none";
                          } ?> "   data-bs-toggle="modal" data-bs-target="#exampleModal">Update</button> -->
                    

                    <button class="btn btn-secondary ms-3" id='goback'>Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        
      </div>
    </section>


<!-- Modal -->
<div class="modal fade modal-xl" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Form</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="container" id="admission-form">
                    <div class="card">
                       
                        <div class="card-body mx-5">
                            <!-- Personal info  -->
                            <div class="row my-4">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="text" class="admission-input mb-3" name="stu_name"
                                                placeholder="Enter your name">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="admission-input mb-3" name="father_name"
                                                placeholder="Father Name">
                                        </div>
                                        <div class="col-6">
                                            <input type="text" class="admission-input mb-3" name="mother_name"
                                                placeholder="Mother Name">
                                        </div>
                                        <div class="col-6">
                                            <input type="number" name="add_phone" class="admission-input mb-3"
                                                placeholder="+91 1234567890">
                                        </div>
                                        <div class="col-6">
                                            <input type="email" name="add_email" class="admission-input mb-3"
                                                placeholder="abc@123.gmail.com">
                                        </div>
                                        <div class="col-6">
                                            <input type="number" name="aadhar_num" class="admission-input mb-3"
                                                placeholder="Enter Your Aadhar Number">
                                        </div>
                                        <div class="col-12">
                                            <textarea name="address" class="admission-input mb-3" id="msg"
                                                placeholder="Your Address"></textarea>
                                        </div>



                                    </div>
                                </div>

                                <div class="col-md-4 ">
                                    <div class="drop-zone">
                                        <span class="drop-zone__prompt">Drop file here or click to upload</span>
                                        <input type="file" class="form-input drop-zone__input" name="myFile"
                                            id="myfile">
                                    </div>
                                </div>
                            </div>
                            <!-- Qualification info  -->
                            <div id="exTab1">
                                <h4 class="pb-4">Qualification</h4>
                                <ul class="nav nav-pills">
                                    <li>
                                        <a href="#1a" data-toggle="tab" class="active  tab-value py-2 px-3">Below 10 <sup>th</sup></a>
                                    </li>
                                    <li class=""><a href="#2a" data-toggle="tab" class="py-2 tab-value px-3">High School</a>
                                    </li>
                                    <li><a href="#3a" data-toggle="tab" class="py-2 tab-value px-3">Inter</a>
                                    </li>
                                    <li><a href="#4a" data-toggle="tab" class="py-2 tab-value px-3">Higher Study</a>
                                    </li>
                                </ul>

                                <div class="tab-content clearfix">
                                    <div class="tab-pane active" id="1a">
                                        <div class="row my-4 align-items-center">

                                            <div class="mb-0 col-md-3 ms-1 col-3">
                                                <select class="form-select form-select-sm admission-input"
                                                    aria-label=".form-select-sm example" name="class" value="0">
                                                    <option selected>Open this select menu</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div>

                                            <div class="col-md-8 mb-0 ms-1 col-12">
                                                <input type="text" class="admission-input school-input"
                                                    placeholder="Enter School or College name">
                                            </div>


                                        </div>
                                    </div>
                                    <div class="tab-pane" id="2a">
                                        <div class="row my-4 align-items-center">


                                            <div class="mb-0 col-md-3 ms-1 col-3">
                                                <input type="number" class="admission-input roll-num-input"
                                                    placeholder="High School Roll Number">
                                            </div>

                                            <div class="col-md-6 mb-0 ms-1 col-12">
                                                <input type="text" class="admission-input school-input "
                                                    placeholder="Enter School or College name">
                                            </div>

                                            <div class="col-md-2  col-3 ms-1 mb-0">
                                                <input type="number"  placeholder="marks %"
                                                    class=" admission-input marks">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="3a">
                                        <div class="row my-4 align-items-center">


                                            <div class="mb-0 col-md-3 ms-1 col-3">
                                                <input type="number" class="admission-input roll-num-input"
                                                    placeholder="Inter Roll Number">
                                            </div>

                                            <div class="col-md-6 mb-0 ms-1 col-12">
                                                <input type="text" class="admission-input school-input "
                                                    placeholder="Enter School or College name">
                                            </div>

                                            <div class="col-md-2  col-3 ms-1 mb-0">
                                                <input type="number"  placeholder="marks %"
                                                    class=" admission-input marks">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="4a">
                                        <div class="row my-4 align-items-center">


                                            <div class="mb-0 col-md-2 ms-1 col-3">
                                                <input type="number" class="admission-input roll-num-input"
                                                    placeholder="Roll Number">
                                            </div>

                                            <div class="col-md-6 mb-0 ms-1 col-12">
                                                <input type="text" class="admission-input school-input "
                                                    placeholder="Enter College or University name">
                                            </div>

                                            <div class="col-md-3  col-3 ms-1 mb-0">
                                                <select class="form-select form-select-sm admission-input"
                                                    aria-label=".form-select-sm example" name="subject" value="0">
                                                    <option selected>Select</option>
                                                    <option value="PCM">PCM</option>
                                                    <option value="Biology">Biology</option>
                                                    <option value="Commerce">Commerce</option>
                                                    <option value="IT/tech">IT/tech</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="row my-4 pt-4">
                                <div class="col-md-5">
                                    <select class="select-course-input admission-input" name="course">
                                        <option value="" class="select-course-input">Select Course Name</option>
                                        <?php 
                                        include "./php-ajax/config.php";
                                         $sql = "SELECT * FROM `course`";
                                         $result = mysqli_query($conn,$sql);
                                         
                                         while($rows = mysqli_fetch_assoc($result)){
                                        ?>
                                        <option value="<?php echo $rows['cid'] ?>" data-sem="<?php echo $rows['sem'] ?>"
                                            data-duration="<?php echo $rows['duration'] ?>" class="">
                                            <?php echo $rows['course_name'] ?>
                                        </option>
                                        <?php }?>
                                    </select>
                                </div>
                                <input type="text" readonly value="" name='exam' placeholder="exam"
                                    class="admission-input col-md-3" id="sem">
                                <input type="text" readonly value="" name="course_duration"
                                    class="admission-input ms-1 col-md-3" id="duration" placeholder="Duration">
                            </div>

                           


                        </div>
                    </div>
                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary " type="submit" id="admission-btn">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include "./component/footer.php" ?>

    <script>
  $(document).ready(function(){
    $(document).on("click","#accept-btn",function(){
      let id = $(this).data("id");
      $.ajax({
        url: "./php-ajax/update.php",
        type: "POST",
        data: {id: id, enterId: 1},
        success: function(data){
          if(data == 1){
            window.location.assign("http://localhost/ambition-institute/NiceAdmin/index.php");

          }
        }
      });
    })
  })
</script>
</body>

</html>
<?php
include "./config.php";
 if($_POST["checkId"] == 1){
    $studentName = mysqli_real_escape_string($conn,$_POST["stu_name"]);
    $fatherName = mysqli_real_escape_string($conn,$_POST["father_name"]);
    $motherName = mysqli_real_escape_string($conn,$_POST["mother_name"]);
    $mobile = mysqli_real_escape_string($conn,$_POST["add_phone"]);
    $email = mysqli_real_escape_string($conn,$_POST["add_email"]);
    $address = mysqli_real_escape_string($conn,$_POST["address"]);
    $aadhar_num = mysqli_real_escape_string($conn,$_POST["aadhar_num"]);
    $qualification = mysqli_real_escape_string($conn,$_POST['qualification']);
    $class = mysqli_real_escape_string($conn,$_POST["class"]);
    $subject = mysqli_real_escape_string($conn,$_POST["subject"]);
    $mark= mysqli_real_escape_string($conn,$_POST["mark"]);
    $roll_num = mysqli_real_escape_string($conn,$_POST["roll-num"]);
    $school_name = mysqli_real_escape_string($conn,$_POST['school-name']);
   //  $i_school_name = $_POST["i_school_name"];
   //  $i_mark_percent = $_POST["i_mark_percent"];
    $course = mysqli_real_escape_string($conn,$_POST["course"]);
    $exam = mysqli_real_escape_string($conn,$_POST["exam"]);
    $course_duration = mysqli_real_escape_string($conn,$_POST["course_duration"]);



    $studentImage = $_FILES["myFile"]["name"];
    $studentImageTmp = $_FILES["myFile"]["tmp_name"];

    move_uploaded_file($studentImageTmp,"./../upload-img/".$studentImage);
   $sql = "INSERT INTO `student_admissions`( `student_name`, `father_name`, `mother_name`, `phone`, `email`, `addhar_num`, `address`, `qualifiaction`, `class`, `subject`, `educational_institution`, `course`, `exam`, `course_duration`, `status`, `studentImage`, `roll_num`, `mark`) VALUES ('$studentName','$fatherName','$motherName','$mobile','$email', '$aadhar_num','$address','$qualification','$class','$subject', '$school_name', '$course','$exam', '$course_duration','0','$studentImage','$roll_num','$mark')";
    
   $result = mysqli_query($conn,$sql);
   if($result){
      echo 1;
   }
 

    
    
 }

 if($_POST["checkId"] == 2){
    $user_name = mysqli_real_escape_string($conn,$_POST['user_name']);
    $user_email = mysqli_real_escape_string($conn,$_POST['user_email']);
    $user_subject = mysqli_real_escape_string($conn,$_POST['user_subject']);
    $user_msg = mysqli_real_escape_string($conn,$_POST['user_msg']);
   
    $sql = "INSERT INTO `coutact_us`( `user_name`, `user_email`, `user_subject`, `user_massage`) VALUES ('$user_name','$user_email','$user_subject','$user_msg')";

    $result = mysqli_query($conn, $sql);
    if($result){
        echo 1;
    }
 }

?>
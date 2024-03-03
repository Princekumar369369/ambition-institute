<?php
include "config.php";
if($_POST['enterId'] == 1){
   
    $course_name =  mysqli_real_escape_string($conn,$_POST['course_name']);
    $course_price =  mysqli_real_escape_string($conn,$_POST['course_price']);
    $course_exam =  mysqli_real_escape_string($conn,$_POST['course_exam']);
    $course_duration =  mysqli_real_escape_string($conn,$_POST['course_duration']);
    $course_para =  mysqli_real_escape_string($conn,$_POST['course_para']);
    $courseImage =  mysqli_real_escape_string($conn,$_FILES["image_file"]["name"]);
    $courseImageTmp =  mysqli_real_escape_string($conn,$_FILES["image_file"]["tmp_name"]);

    move_uploaded_file($courseImageTmp,"./../upload-img/".$courseImage);
    $sql = "INSERT INTO `course`(`course_name`, `exam`, `duration`, `price`, `text`, `course_img`) VALUES ('$course_name','$course_exam','$course_duration','$course_price','$course_para','$courseImage')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo 1;
    }

}
if($_POST['enterId'] == 2){
   
    $teacher_name =  mysqli_real_escape_string($conn,$_POST['teacher_name']);
    $subject =  mysqli_real_escape_string($conn,$_POST['subject']);

    $teacherImage = $_FILES["image_file_teacher"]["name"];
    $teacherImageTmp = $_FILES["image_file_teacher"]["tmp_name"];

    move_uploaded_file($teacherImageTmp,"./../upload-img/".$teacherImage);
    $sql = "INSERT INTO `teacher`(`teacher_name`, `subject`, `teacher_img`) VALUES ('$teacher_name','$subject','$teacherImage')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo 1;
    }

}
?>
<?php
include "config.php";
if($_POST['enterId'] == 1){
   
    $course_name = $_POST['course_name'];
    $course_price = $_POST['course_price'];
    $course_exam = $_POST['course_exam'];
    $course_duration = $_POST['course_duration'];
    $course_para = $_POST['course_para'];
    $courseImage = $_FILES["image_file"]["name"];
    $courseImageTmp = $_FILES["image_file"]["tmp_name"];

    move_uploaded_file($courseImageTmp,"./../upload-img/".$courseImage);
    $sql = "INSERT INTO `course`(`course_name`, `exam`, `duration`, `price`, `text`, `course_img`) VALUES ('$course_name','$course_exam','$course_duration','$course_price','$course_para','$courseImage')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo 1;
    }

}
if($_POST['enterId'] == 2){
   
    $teacher_name = $_POST['teacher_name'];
    $subject = $_POST['subject'];

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
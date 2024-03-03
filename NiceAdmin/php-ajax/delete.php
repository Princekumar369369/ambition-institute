<?php
include "config.php";

if($_POST['enterId'] == 1){
    $img = mysqli_real_escape_string($conn,$_POST['course-img']);
    unlink("./../upload-img/".$img);
    $id = mysqli_real_escape_string($conn,$_POST['course-id']);
    $sql = "DELETE FROM `course` WHERE cid = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo 1;
    }

}
if($_POST['enterId'] == 2){
    $img = mysqli_real_escape_string($conn,$_POST['teacher-img']);
    unlink("./../upload-img/".$img);
    $id = mysqli_real_escape_string($conn,$_POST['teacher-id']);
    
    $sql = "DELETE FROM `teacher` WHERE tid = $id";
    $result = mysqli_query($conn, $sql);
  
    if($result){
        echo 1;
    }

}
if($_POST['enterId'] == 3){
    $img = mysqli_real_escape_string($conn,$_POST['student-img']);
    unlink("./../../upload-img/".$img);
    $id = mysqli_real_escape_string($conn,$_POST['student-id']);
    
    $sql = "DELETE FROM `student_admissions` WHERE `sid` = $id";
    $result = mysqli_query($conn, $sql);
  
    if($result){
        echo 1;
    }

}

if($_POST['enterId'] == 4){
    $img =  mysqli_real_escape_string($conn,$_POST['addmission-img']);
    unlink("./../../upload-img/".$img);
    $id = mysqli_real_escape_string($conn,$_POST['addmission-id']);
    $sql = "DELETE FROM `student_admissions` WHERE `sid` = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo 1;
    }

}
?>
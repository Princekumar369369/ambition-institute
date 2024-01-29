<?php
include "config.php";

if($_POST['enterId'] == 1){
    $img = $_POST['course-img'];
    unlink("./../upload-img/".$img);
    $id = $_POST['course-id'];
    $sql = "DELETE FROM `course` WHERE cid = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo 1;
    }

}
if($_POST['enterId'] == 2){
    $img = $_POST['teacher-img'];
    unlink("./../upload-img/".$img);
    $id = $_POST['teacher-id'];
    
    $sql = "DELETE FROM `teacher` WHERE tid = $id";
    $result = mysqli_query($conn, $sql);
  
    if($result){
        echo 1;
    }

}
if($_POST['enterId'] == 3){
    $img = $_POST['student-img'];
    unlink("./../../upload-img/".$img);
    $id = $_POST['student-id'];
    
    $sql = "DELETE FROM `student_admissions` WHERE `sid` = $id";
    $result = mysqli_query($conn, $sql);
  
    if($result){
        echo 1;
    }

}
?>
<?php
include "config.php";
$id = $_POST['id'];
if($_POST['enterId'] == 1){
    $sql = "UPDATE `student_admissions` SET `status`= 1 WHERE `sid` = $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo 1;
    }

}
if($_POST['enterId'] == 2){  
    $course_name_update = $_POST['course_name_update'];
    $course_update_price = $_POST['course_update_price'];
    $course_exam_update = $_POST['course_exam_update'];
    $course_duration_update = $_POST['course_duration_update'];
    $course_para_update = $_POST['course_para_update'];
    $old_image = $_POST['old_image_course'];
    $courseImage = $_FILES["image_file_course_update"]["name"];
    if($courseImage == ""){
        $sql = "UPDATE `course` SET `course_name`='$course_name_update',`exam`='$course_exam_update',`duration`='$course_duration_update',`price`='$course_update_price',`text`='$course_para_update',`course_img`='$old_image' WHERE cid = $id";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo 1;
        }
    }else{
        $courseImageTmp = $_FILES["image_file_course_update"]["tmp_name"];
        move_uploaded_file($courseImageTmp,"./../upload-img/".$courseImage);
        unlink("./../upload-img/".$old_image);
        $sql = "UPDATE `course` SET `course_name`='$course_name_update',`exam`='$course_exam_update',`duration`='$course_duration_update',`price`='$course_update_price',`text`='$course_para_update',`course_img`='$courseImage' WHERE cid = $id";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo 1;
        }
    }
}

if($_POST['enterId'] == 3){  
    $teacher_name = $_POST['teacher_name'];
    $subject = $_POST['subject'];
    $old_image = $_POST['old_image_teacher'];
    $teacherImage = $_FILES["image_file_teacher"]["name"];
    if($teacherImage == ""){
        $sql = "UPDATE `teacher` SET `teacher_name`= '$teacher_name',`subject`='$subject',`teacher_img`='$old_image' WHERE tid=$id";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo 1;
        }
    }else{
        $teacherImageTmp = $_FILES["image_file_teacher"]["tmp_name"];
        move_uploaded_file($teacherImageTmp,"./../upload-img/".$teacherImage);
        unlink("./../upload-img/".$old_image);
        $sql = "UPDATE `teacher` SET `teacher_name`='$teacher_name',`subject`='$subject',`teacher_img`='$teacherImage' WHERE tid=$id";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo 1;
        }
    }
}
?>
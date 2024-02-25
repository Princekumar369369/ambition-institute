<?php
include "./config.php";
if($_POST['enterId'] == 1){
    $sql = "SELECT * FROM `course`";
    $result = mysqli_query($conn,$sql);
    $output = "";
    while($rows = mysqli_fetch_assoc($result)){
     $output .= "<div class='tableItem col-lg-4 col-md-6 '>
                    <div class='card course-card border-1 ' style='border: 1px solid'>
                        <div class='course-thumb w-100'>
                            <img src='./upload-img/{$rows['course_img']}' class='img-fluid w-100 h-100' alt='image'>
                            <span class='cs-price primary-bg'>₹ {$rows['price']}</span>
                        </div>
                        <div class='card-body course-body position-relative p-3  p-25'> 
                            <div class='course-meta-title '>
                                <div class='course-meta-text'>
                                    <h4><a href='course-details.html' class='mb-0'>{$rows['course_name']}</a></h4>
                                </div> 
                            </div>
                            <p class='mb-1 course-para'>{$rows['text']}</p> 
                            <ul class='course-meta-details list-inline p-0 position-absolute bottom-0   w-100'>
                                <li> 
                                  <p>Duration</p>
                                  <span>{$rows['duration']}</span>
                                </li>
                                <li>
                                  <p>Exam</p>
                                  <span>{$rows['exam']}</span>
                                </li> 
                                <li class='text-end pe-3'>
                                  <button  data-bs-toggle='modal'
                                  data-bs-target='#courseModalupdate' class='edit-btn btn btn-sm btn-primary course-edit-btn' data-cid='{$rows['cid']}'><i class='bi bi-pencil-square'></i></button> <br>
                                  <button data-bs-toggle='modal' data-bs-target='#delModal' class='mt-2 text-white btn btn-sm  del-btn del-btn-course' data-cid='{$rows['cid']}' data-img='{$rows['course_img']}'><i class='bi bi-trash3-fill'></i></button>
                                </li>      
                            </ul>  
                      </div>
                    </div>
         </div>";
    }
    
    echo $output;
}

if($_POST['enterId'] == 2){
$id = $_POST['id'];

    $sql = "SELECT * FROM `course` WHERE cid = $id";
    $result = mysqli_query($conn,$sql);
    $output = "";
    while($rows = mysqli_fetch_assoc($result)){
        $output .= "<div class='mb-2'>
        <input type='file' class='form-control'  name='image_file_course_update'>
        <input type='text' value='{$rows['course_img']}'  name='old_image_course' hidden>

      </div>
      <div class='mb-2'>
        <input type='text' value='{$rows['course_name']}' class='form-control' placeholder='Enter Course Name' name='course_name_update'>
      </div>
      <div class='mb-2'>
        <input type='number' value='{$rows['price']}' class='form-control' placeholder='Enter Course Price' name='course_update_price'>
      </div>
      <div class='mb-2 d-flex'>
        <input type='number' class='form-control' placeholder='Enter Total Exam' name='course_exam_update' value='{$rows['exam']}'>
        <input type='number' class='form-control' placeholder='Enter Course Duration in Months'
          name='course_duration_update' value='{$rows['duration']}'>
      </div>
      <div class='mb-2'>
        <textarea maxlength='120' name='course_para_update' class='w-100 form-control'
          placeholder='Enter About Course' id='' cols='30' rows='3'>{$rows['text']}</textarea>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-bs-dismiss='modal' >Close</button>
        <button type='button' class='btn btn-primary' id='save_course_update' data-cid='{$rows['cid']}'>Save changes</button>
      </div>";
    }
    echo $output;
}

  if($_POST['enterId'] == 3){
      $sql = "SELECT * FROM `teacher`";
      $result = mysqli_query($conn,$sql);
      $output = "";
      while($rows = mysqli_fetch_assoc($result)){
       $output .= "<div class='col-md-4 tableItem'>
       <div class='card mb-5'>
         <img src='./upload-img/{$rows['teacher_img']}' alt='teacher-image'>
         <div class='card-body teacher-content justify-content-between align-items-center row p-25'>
           <div class='col-8'><h4 class='card-title mb-4'><a href='teacher-details.html'>{$rows['teacher_name']}</a></h4>
           <span class='primary-color font-italic d-block mb-3'>{$rows['subject']}</span></div>
           <div class='text-end pe-3 col-auto'>
                   <button  data-bs-toggle='modal'
                   data-bs-target='#teacherModalupdate' class='edit-btn btn btn-sm btn-primary teacher-edit-btn' data-tid='{$rows['tid']}' ><i class='bi bi-pencil-square'></i></button> <br>
                   <button data-bs-toggle='modal' data-bs-target='#delModal' class='mt-2 text-white btn btn-sm  del-btn del-btn-teacher' data-tid='{$rows['tid']}' data-img='{$rows['teacher_img']}'><i class='bi bi-trash3-fill'></i></button>
           </div>   
         </div>
       </div>
     </div>";
      }
      echo $output;
  }  


  if($_POST['enterId'] == 4){
    $id = $_POST['id'];
    
    $sql = "SELECT * FROM `teacher` WHERE tid = $id";
    $result = mysqli_query($conn,$sql);
    $output = "";
    while($rows = mysqli_fetch_assoc($result)){
      $another = "<div id='sub' class='d-none'>{$rows['subject']}</div>";
        $output .= "<form id='teacher_submit'>
        <div class='mb-2'>
          <input type='file' class='form-control' name='image_file_teacher'>
          <input type='text' value='{$rows['teacher_img']}' name='old_image_teacher' hidden>
        </div>
        <div class='mb-2'>
          <input type='text' class='form-control' value='{$rows['teacher_name']}' placeholder='Enter Course Name' name='teacher_name'>
        </div>
        <div class='m-2 d-flex'>
          <label class='form-check-label text-black fw-bold' for='flexCheckDefault'>
            Subjects:
          </label>
        <div class='row'>
          <div class='col-auto d-flex mx-1'>
            <input class='form-check-input bg-success  w-25 m-0 form-check-input-update' type='checkbox' value='Excel' id='flexCheckDefault1'>
          <label class='form-check-label ms-1' for='flexCheckDefault1'>
            Excel
          </label>
          </div>
          <div class='col-auto d-flex mx-1'>
            <input class='form-check-input bg-success w-25 m-0 form-check-input-update' type='checkbox' value='Tally' id='flexCheckDefault'>
          <label class='form-check-label ms-1' for='flexCheckDefault'>
            Tally
          </label>
          </div>
          <div class='col-auto d-flex mx-1'>
            <input class='form-check-input bg-success w-25 m-0 form-check-input-update' type='checkbox' value='Ms Office' id='flexCheckDefault'>
          <label class='form-check-label ms-1' for='flexCheckDefault'>
            Ms Office
          </label>
          </div>
          <div class='col-auto d-flex mx-1'>
            <input class='form-check-input bg-success w-25 m-0 form-check-input-update' type='checkbox' value='Photoshop' id='flexCheckDefault'>
          <label class='form-check-label ms-1' for='flexCheckDefault'>
            Photoshop
          </label>
          </div>
          <div class='col-auto d-flex mx-1'>
            <input class='form-check-input bg-success w-25 m-0 form-check-input-update' type='checkbox' value='Corel Drow' id='flexCheckDefault'>
          <label class='form-check-label ms-1' for='flexCheckDefault'>
            Corel Drow
          </label>
          </div>
    
        </div>
        </div>
    
        <div class='modal-footer'>
          <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
          <button type='button' class='btn btn-primary' data-tid='{$rows['tid']}' data-img='{$rows['teacher_img']}'  id='save_teacher_update'>Save changes</button>
        </div>
      </form>";
    }
    echo $output.$another;
    
  }

  if($_POST['enterId'] == 5){
   $query = 'SELECT * FROM `student_admissions` INNER JOIN `course` ON student_admissions.course = course.cid WHERE student_admissions.status = 1';
   $query_run = mysqli_query($conn, $query);
   $result_array = [];

   if(mysqli_num_rows($query_run) > 0){
    foreach($query_run as $row){
      array_push($result_array,$row);
    }
    header('Content-type: application/json');
    echo json_encode($result_array);
   }else{
    echo 1;
   }
   
  }
 
?>
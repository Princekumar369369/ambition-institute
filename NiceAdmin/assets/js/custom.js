$(document).ready(function () {
  $(document).on("click", '#save_course', function () {
    let courseFormId = document.getElementById('course_submit');
    let formData = new FormData(courseFormId);
    formData.append('enterId', 1);
    $.ajax({
      url: "./php-ajax/insert.php",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function (data) {
        if (data == 1) {
          $("#courseModal").modal("hide");
          notification("Succesfully Inserted");
          setInterval(notificationFade, 2000);
          showCourses();
          $("#course_submit").trigger("reset");
        }
      }
    });
  })

  // show courses 
  function showCourses() {

    $.ajax({
      url: "./php-ajax/fetch.php",
      type: "POST",
      data: { enterId: 1 },
      success: function (data) {
        $("#course_place").html(data);
      }
    });
  }
  function showTeacher() {

    $.ajax({
      url: "./php-ajax/fetch.php",
      type: "POST",
      data: { enterId: 3 },
      success: function (data) {
        $("#teacher_place").html(data);

      }
    });
  }

  showCourses();
  showTeacher();
  // Popup massege 
  function notification(massage) {
    let element = `<span class='bg-dark badge px-2 py-1'>${massage}</span>`;
    $("#notification").append(element);
  }
  function notificationFade() {
    $("#notification").empty();
  }

  //  course edit btn  modal 
  $(document).on('click', '.course-edit-btn', function () {
    let id = $(this).data('cid');
    $.ajax({
      url: "./php-ajax/fetch.php",
      type: "POST",
      data: { id: id, enterId: 2 },
      success: function (data) {
        $("#update-course-form").html(data);
      }
    });
  })

  // course edit btn save form 
  $(document).on('click', '#save_course_update', function () {
    let formId = document.getElementById('course_submit_update');
    let formData = new FormData(formId);
    let id = $(this).data('cid');
    formData.append('id', id);
    formData.append('enterId', 2);
    $.ajax({
      url: "./php-ajax/update.php",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function (data) {
        if (data == 1) {
          $("#courseModalupdate").modal("hide");
          notification("Succesfully Updated");
          setInterval(notificationFade, 2000);
          showCourses();
          $("#course_submit").trigger("reset");
        }
      }
    });

  })


  // del course action 
  $(document).on('click', '.del-btn-course', function () {
    let id = $(this).data('cid');
    let img = $(this).data('img');
    $("#course_id").val(id);
    $("#course_img").val(img);
   
  })
  $(document).on('click', '#del-course', function () {
    let formId = document.getElementById('del-course-modal');
    let formData = new FormData(formId);
    formData.append('enterId', 1);
    $.ajax({
      url: "./php-ajax/delete.php",
      type: "POST",
      contentType: false,
      processData: false,
      data: formData,
      success: function (data) {
        if (data == 1) {
          $('#delModal').modal("hide");
          notification("Succesfully deleted");
          setInterval(notificationFade, 2000);
          showCourses();
        }
      }
    });
  })


  // Teacher 
  $(document).on("click", "#save_teacher", function () {
    let formId = document.getElementById('teacher_submit');
    let formData = new FormData(formId);
    let subject = [];
    $(".form-check-input").each(function () {
      if ($(this).is(":checked")) {
        subject.push($(this).val());
      }
    });
    subject = subject.toString();
    formData.append('subject', subject);
    formData.append('enterId', 2);
    alert(formData.get('subject'));
    $.ajax({
      url: "./php-ajax/insert.php",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function (data) {
        showTeacher();
        $('#teacherModal').modal("hide");
        notification("Succesfully inserted");
        setInterval(notificationFade, 2000);
        $("#teacher_submit").trigger("reset");
      }
    });
  })

  // update teacher 
  $(document).on('click', '.teacher-edit-btn', function () {
    let id = $(this).data('tid');


    $.ajax({
      url: "./php-ajax/fetch.php",
      type: "POST",
      data: { id: id, enterId: 4 },
      success: function (data) {
        $("#update-teacher-form").html(data);
        let subjectName = $("#sub").text();
       let subjectArr = subjectName.split(',');
        $.each(subjectArr , function (index, valu){
        $(".form-check-input-update").each(function () {
          if ($(this).val() == valu ) {
            $(this).attr('checked','checked');
          }
        })
        });
        
      }
    });
  })
   // course edit btn save form 
   $(document).on('click', '#save_teacher_update', function () {
    let formId = document.getElementById('course_submit_update');
    let formData = new FormData(formId);
    let subject =[];
    $(".form-check-input-update").each(function () {
      if ($(this).is(":checked")) {
        subject.push($(this).val());
      }
    });
    let id = $(this).data('tid');
    let img = $(this).data('img');
    formData.append('id', id);
    formData.append('enterId', 3);
    subject = subject.toString();
    formData.append('subject', subject);
    formData.append('old_img', img);
    $.ajax({
      url: "./php-ajax/update.php",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function (data) {
       
          $("#teacherModalupdate").modal("hide");
          notification("Succesfully Updated");
          setInterval(notificationFade, 2000);
          
          $("#course_submit_update").trigger("reset");
        
        showTeacher();
      }
    });

  })

    // del course action 
    $(document).on('click', '.del-btn-teacher', function () {
      let id = $(this).data('tid');
      let img = $(this).data('img');
      $("#teacher_id").val(id);
      $("#teacher_img").val(img);
    })

    $(document).on('click', '#del-teacher', function () {
      let formId = document.getElementById('del-teacher-modal');
      let formData = new FormData(formId);
      formData.append('enterId', 2);
      $.ajax({
        url: "./php-ajax/delete.php",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (data) {
          if(data == 1){
            $('#delModal').modal("hide");
            notification("Succesfully deleted");
            setInterval(notificationFade, 2000);
            showTeacher();}
          }
        
      });
    })

    // feching student data 
    function getData(){
      $.ajax({
        url: 'php-ajax/fetch.php',
        type: 'POST',
        data: {enterId: '5'},
        success: function(response){
          if(response == 1){
            $('.datatable-empty').show();
          }else{
            // $('.datatable-empty').hide();
  
            let count = 0;
          $.each(response, function (key, value){
            count++;
            $('#admission-table tbody tr:first-child').hide();
            $('#admission-table tbody').append('<tr><td>'+count+'</td><td>'+value['student_name']+'</td><td>'+value['email']+'</td><td>'+value['phone']+'</td><td>'+value['course_name']+'</td><td><a href="./student-details.php?sid='+value['sid']+'" class="btn btn-outline-primary btn-sm edit-btn"><i class="bi bi-binoculars-fill"></i></a> <button data-id='+value['sid']+' data-img="'+value['studentImage']+'" data-bs-toggle="modal"         data-bs-target="#delModalStudent" class="text-white btn btn-sm del-student-modal  del-btn" ><i class="bi bi-trash3-fill"></i></button></td></tr>');
          })
          }
         
        }
      });
    }
    getData();

// del student 
$(document).on('click','.del-student-modal',function(){
  let id = $(this).data('id');
  let img = $(this).data('img');
  $('#student_id').val(id);
  $('#student_img').val(img);
})
$(document).on('click','#del-student',function(){
  let formId = document.getElementById('del-student-form');
  let formData = new FormData(formId);
  formData.append('enterId', 3);
  $.ajax({
    url: "./php-ajax/delete.php",
    type: "POST",
    data: formData,
    contentType: false,
    processData: false,
    success: function (data) {
      if(data == 1){
        $('#delModalStudent').modal("hide");
        notification("Succesfully deleted");
        setInterval(notificationFade, 2000);
        $('#admission-table tbody').html('<tr style="display: none;"><td class="datatable-empty" colspan="6">No entries found</td></tr>');
        getData();
        }
      }
    
  });
})



  $(document).on('click','#goback',function(){
    window.history.back()
  })


 
});
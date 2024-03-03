$(document).ready(function () {
  const myTimeout = setTimeout(myGreeting, 500);
  function myGreeting() {

    var HZperPage = 3,//number of results per page
      HZwrapper = 'paginationTable',//wrapper class
      HZlines = 'tableItem',//items class
      HZpaginationId = 'pagination-container',//id of pagination container
      HZpaginationArrowsClass = 'paginacaoCursor',//set the class of pagination arrows
      HZpaginationColorDefault = '',//default color for the pagination numbers
      HZpaginationColorActive = '#fc9928', //color when page is clicked
      HZpaginationCustomClass = 'customPagination'; //custom class for styling the pagination (css)




    /*-------F/ AHMED HIJAZI /*-------*/
    function paginationShow() {
      if ($("#" + HZpaginationId).children().length > 8) {
        var a = $(".activePagination").attr("data-valor");
        if (a >= 4) {
          var i = parseInt(a) - 3, o = parseInt(a) + 2;
          $(".paginacaoValor").hide(), exibir2 = $(".paginacaoValor").slice(i, o).show();
        } else $(".paginacaoValor").hide(), exibir2 = $(".paginacaoValor").slice(0, 5).show();
      }
    }


    paginationShow(), $("#beforePagination").hide(), $("." + HZlines).hide();
    for (var tamanhotabela = $("." + HZwrapper).children().length, porPagina = HZperPage, paginas = Math.ceil(tamanhotabela / porPagina), i = 1; i <= paginas;)
      $("#" + HZpaginationId).append("<p class='paginacaoValor " + HZpaginationCustomClass + "' data-valor=" + i + ">" + i + "</p>"), i++, $(".paginacaoValor").hide(), exibir2 = $(".paginacaoValor").slice(0, 5).show(); $(".paginacaoValor:eq(0)").css("background", "" + HZpaginationColorActive).addClass("activePagination");

    function getExibir() {
      var exibir = $("." + HZlines).slice(0, porPagina).show();
    }
    getExibir();

    $(".paginacaoValor").on("click", function fireIt() { $(".paginacaoValor").css("background", "" + HZpaginationColorDefault).removeClass("activePagination"), $(this).css("background", "" + HZpaginationColorActive).addClass("activePagination"); var a = $(this).attr("data-valor"), i = a * porPagina, o = i - porPagina; $("." + HZlines).hide(), exibir = $("." + HZlines).slice(o, i).show(), "1" === a ? $("#beforePagination").hide() : $("#beforePagination").show(), a === "" + $(".paginacaoValor:last").attr("data-valor") ? $("#afterPagination").hide() : $("#afterPagination").show(), paginationShow() }), $(".paginacaoValor").last().after($("#afterPagination")), $("#beforePagination").on("click", function () { var a = $(".activePagination").attr("data-valor"), i = parseInt(a) - 1; $("[data-valor=" + i + "]").click(), paginationShow() }), $("#afterPagination").on("click", function () { var a = $(".activePagination").attr("data-valor"), i = parseInt(a) + 1; $("[data-valor=" + i + "]").click(), paginationShow() }), $(".paginacaoValor").css("float", "left"), $("." + HZpaginationArrowsClass).css("float", "left");
  }


  function late() {
    let tableLenth = $('.tableItem').length;
    for (let i = 3; i < tableLenth; i++) {
      document.getElementsByClassName('tableItem')[i].style.display = "none";
    }
  }
  function getPaginationBtn() {
    return $('#pagination-container').html(`<p class='paginacaoCursor' id='beforePagination'><</p>
    <p class='paginacaoCursor' id='afterPagination'>></p>`);
  }
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

          getPaginationBtn()
          const myTimeout = setTimeout(myGreeting, 1000);

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
        const newTimeout = setTimeout(late, 100);
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
          $("#course_submit").trigger("reset");
          showCourses();
          const newTimeout = setTimeout(late, 500);

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

          getPaginationBtn()
          const myTimeout = setTimeout(myGreeting, 1000);

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
        getPaginationBtn()
        const myTimeout = setTimeout(myGreeting, 1000);
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
        $.each(subjectArr, function (index, valu) {
          $(".form-check-input-update").each(function () {
            if ($(this).val() == valu) {
              $(this).attr('checked', 'checked');
            }
          })
        });
        const newTimeout = setTimeout(late, 100);
      }
    });
  })
  // course edit btn save form 
  $(document).on('click', '#save_teacher_update', function () {
    let formId = document.getElementById('course_submit_update');
    let formData = new FormData(formId);
    let subject = [];
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
        const newTimeout = setTimeout(late, 100);
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
        if (data == 1) {
          $('#delModal').modal("hide");
          notification("Succesfully deleted");
          setInterval(notificationFade, 2000);
          showTeacher();
          getPaginationBtn()
          const myTimeout = setTimeout(myGreeting, 1000);
        }
      }

    });
  })


  // feching student data 
  function getData() {
    $.ajax({
      url: 'php-ajax/fetch.php',
      type: 'POST',
      data: { enterId: '5' },
      success: function (response) {
        if (response == 1) {
          $('.datatable-empty').show();
        } else {
          // $('.datatable-empty').hide();

          let count = 0;
          $.each(response, function (key, value) {
            count++;
            $('#admission-table tbody tr:first-child').hide();
            $('#admission-table tbody').append('<tr><td>' + count + '</td><td>' + value['student_name'] + '</td><td>' + value['email'] + '</td><td>' + value['phone'] + '</td><td>' + value['course_name'] + '</td><td><a href="./student-details.php?sid=' + value['sid'] + '" class="btn btn-outline-primary btn-sm edit-btn"><i class="bi bi-binoculars-fill"></i></a> <button data-id=' + value['sid'] + ' data-img="' + value['studentImage'] + '" data-bs-toggle="modal"         data-bs-target="#delModalStudent" class="text-white btn btn-sm del-student-modal  del-btn" ><i class="bi bi-trash3-fill"></i></button></td></tr>');
          })
        }


      }
    });
  }
  getData();

  // del student 
  $(document).on('click', '.del-student-modal', function () {
    let id = $(this).data('id');
    let img = $(this).data('img');
    $('#student_id').val(id);
    $('#student_img').val(img);
  })
  $(document).on('click', '#del-student', function () {
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
        if (data == 1) {
          $('#delModalStudent').modal("hide");
          notification("Succesfully deleted");
          setInterval(notificationFade, 2000);
          $('#admission-table tbody').html('<tr style="display: none;"><td class="datatable-empty" colspan="6">No entries found</td></tr>');
          getData();
        }
      }

    });
  })


  $(document).on('click', '#goback', function () {
    window.history.back()
  })
})
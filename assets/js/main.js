$(document).ready(function () {

    $("#popup-box").hide();
    $(document).on('change',".select-course-input",function(){
      let sem = $(this).find(':selected').data('sem');
      let duration = $(this).find(":selected").data("duration");

     $("#sem").val(`${sem} Exam`);
     $("#duration").val(`${duration} Month`);
    })
// Dynamic school name exchanging 
    $(document).on("click", ".school-input",function(){
    
        let schoolClassNum = document.getElementsByClassName('school-input').length;
        let value = $(this).val();
       for(let i = 0; i<schoolClassNum; i++){
        document.getElementsByClassName('school-input')[i].setAttribute('name','');
        document.getElementsByClassName('school-input')[i].value = "";
       }
       $(this).attr("name","school-name");
       $(this).val(value);
    
    })

    // Dynamic Roll Number exchanging 
    $(document).on("click", ".roll-num-input",function(){
    
        let schoolClassNum = document.getElementsByClassName('roll-num-input').length;
        let value = $(this).val();
       for(let i = 0; i<schoolClassNum; i++){
        document.getElementsByClassName('roll-num-input')[i].setAttribute('name','');
        document.getElementsByClassName('roll-num-input')[i].value = "";
       }
       $(this).attr("name","roll-num");
       $(this).val(value);

    })

     // Dynamic Roll Number exchanging 
     $(document).on("click", ".marks",function(){
    
        let schoolClassNum = document.getElementsByClassName('marks').length;
        let value = $(this).val();
       for(let i = 0; i<schoolClassNum; i++){
        document.getElementsByClassName('marks')[i].setAttribute('name','');
        document.getElementsByClassName('marks')[i].value = "";
       }
       $(this).attr("name","mark");
       $(this).val(value);

    })

    
    // $(document).on("click",".tab-value",function(){
    //     alert($(this).text());
    // })

    $(document).on("submit", "#admission-form", function (evented) {
        evented.preventDefault();
        let formData = new FormData(this);
        formData.append("checkId", "1");
        let qualification = $('#exTab1 .nav-pills>li>a.active').text();
       formData.append('qualification',qualification);
        $.ajax({
            url: './php-ajax/insert.php',
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (output) {
                if (output == 1) {
                    $("#popup-box").show();
                   
                    setTimeout(function () {
                        $("#popup-box").hide();
                        $("#admission-form").trigger('reset');
                        $(".drop-zone__thumb").remove();

                        $(".drop-zone").append("<span class='drop-zone__prompt'>Drop file here or click to upload</span>");;
                        $("#myfile").val();
                    }, 4000)
                } 
                else{
                    $("#popup-box").show();
                   
                    setTimeout(function () {
                        $("#popup-box").hide();
                        $("#admission-form").trigger('reset');
                        $(".drop-zone__thumb").remove();

                        $(".drop-zone").append("<span class='drop-zone__prompt'>Drop file here or click to upload</span>");;
                        $("#myfile").val();
                    }, 4000)
                }
            }
        })
    })

    $(document).on("submit", "#contact_form", function (evented) {
        evented.preventDefault();
        let formData = new FormData(this);
        formData.append("checkId", "2");
        $.ajax({
            url: './php-ajax/insert.php',
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                if (data == 1) {
                    $("#popup-box").show();

                    setTimeout(function () {
                        $("#popup-box").hide();
                        $("#contact_form").trigger('reset');
                    }, 4000)
                } else {
                    alert("query failed");
                }
            }
        }) 
    })

    

})
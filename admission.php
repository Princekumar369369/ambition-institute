<!doctype html>
<html class="no-js" lang="en">

<?php include "./assets/components/header.php" ?>

<body>
  
    <!-- header area start -->
    <?php include "./assets/components/navbar.php" ?>

    <!-- header area end -->
    <!-- offset search area start -->
   
    <!-- offset search area end -->
    <!-- body overlay area start -->
    <div class="body_overlay"></div>
    <!-- body overlay area end -->
    <!-- crumbs area start -->
    <div class="crumbs-area">
        <div class="container">
            <div class="crumb-content">
                <h4 class="crumb-title"><span>Admission</span></h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->
    <div class="yellow-patti" style="height: 700px; z-index: -1;">

    </div>
    <!-- about area start -->
    <div class="about-area my-5 py-5">
        <div class="container">
            <div class="row">
                <form class="container" id="admission-form">
                    <div class="card">
                        <div class="col-12 mt-5">
                            <h2 class="text-center">Admission Form</h2>
                        </div>
                        <div class="card-body mx-5">
                            <!-- Personal info  -->
                            <div class="row my-4">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="text" class="admission-input mb-3" name="stu_name"
                                                placeholder="Enter your name">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="admission-input mb-3" name="father_name"
                                                placeholder="Father Name">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="admission-input mb-3" name="mother_name"
                                                placeholder="Mother Name">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="add_phone" class="admission-input mb-3"
                                                placeholder="+91 1234567890">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" name="add_email" class="admission-input mb-3"
                                                placeholder="abc@123.gmail.com">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="number" name="aadhar_num" class="admission-input mb-3"
                                                placeholder="Enter Your Aadhar Number">
                                        </div>
                                        <div class="col-12">
                                            <textarea name="address" class="admission-input mb-3" id="msg"
                                                placeholder="Your Address"></textarea>
                                        </div>



                                    </div>
                                </div>

                                <div class="col-md-4 ">
                                    <div class="drop-zone mx-auto">
                                        <span class="drop-zone__prompt">Drop file here or click to upload</span>
                                        <input type="file" class="form-input drop-zone__input" name="myFile"
                                            id="myfile">
                                    </div>
                                </div>
                            </div>
                            <!-- Qualification info  -->
                            <div id="exTab1">
                                <h4 class="pb-4">Qualification</h4>
                                <ul class="nav nav-pills">
                                    <li>
                                        <a href="#1a" data-toggle="tab" class="active  tab-value py-2 px-3">Below 10 <sup>th</sup></a>
                                    </li>
                                    <li class=""><a href="#2a" data-toggle="tab" class="py-2 tab-value px-3">High School</a>
                                    </li>
                                    <li class='mt-3 mt-md-0'><a href="#3a" data-toggle="tab" class="py-2 tab-value px-3">Inter</a>
                                    </li>
                                    <li class='mt-3 mt-md-0'><a href="#4a" data-toggle="tab" class="py-2 tab-value px-3 ">Higher Study</a>
                                    </li>
                                </ul>

                                <div class="tab-content clearfix">
                                    <div class="tab-pane active" id="1a">
                                        <div class="row my-4 align-items-center">

                                            <div class="mb-0 col-md-3 ms-1">
                                                <select class="form-select form-select-sm admission-input"
                                                    aria-label=".form-select-sm example" name="class" value="0">
                                                    <option selected>Open this select menu</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div>

                                            <div class="col-md-8 mb-0 ms-1 col-12">
                                                <input type="text" class="admission-input school-input"
                                                    placeholder="Enter School or College name">
                                            </div>


                                        </div>
                                    </div>
                                    <div class="tab-pane" id="2a">
                                        <div class="row my-4 align-items-center">


                                            <div class="mb-0 col-md-3 ms-1">
                                                <input type="number" class="admission-input roll-num-input"
                                                    placeholder="High School Roll Number">
                                            </div>

                                            <div class="col-md-6 mb-0 ms-1 col-12">
                                                <input type="text" class="admission-input school-input "
                                                    placeholder="Enter School or College name">
                                            </div>

                                            <div class="col-md-2   ms-1 mb-0">
                                                <input type="number"  placeholder="marks %"
                                                    class=" admission-input marks">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="3a">
                                        <div class="row my-4 align-items-center">


                                            <div class="mb-0 col-md-3 ms-1 ">
                                                <input type="number" class="admission-input roll-num-input"
                                                    placeholder="Inter Roll Number">
                                            </div>

                                            <div class="col-md-6 mb-0 ms-1 ">
                                                <input type="text" class="admission-input school-input "
                                                    placeholder="Enter School or College name">
                                            </div>

                                            <div class="col-md-2  ms-1 mb-0">
                                                <input type="number"  placeholder="marks %"
                                                    class=" admission-input marks">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane" id="4a">
                                        <div class="row my-4 align-items-center">


                                            <div class="mb-0 col-md-2 ms-1">
                                                <input type="number" class="admission-input roll-num-input"
                                                    placeholder="Roll Number">
                                            </div>

                                            <div class="col-md-6 mb-0 ms-1">
                                                <input type="text" class="admission-input school-input "
                                                    placeholder="Enter College or University name">
                                            </div>

                                            <div class="col-md-3  ms-1 mb-0">
                                                <select class="form-select form-select-sm admission-input"
                                                    aria-label=".form-select-sm example" name="subject" value="0">
                                                    <option selected>Select</option>
                                                    <option value="PCM">PCM</option>
                                                    <option value="Biology">Biology</option>
                                                    <option value="Commerce">Commerce</option>
                                                    <option value="IT/tech">IT/tech</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="row my-4 pt-4">
                                <div class="col-md-5">
                                    <select class="select-course-input admission-input" name="course">
                                        <option value="" class="select-course-input">Select Course Name</option>
                                        <?php 
                                        include "./php-ajax/config.php";
                                         $sql = "SELECT * FROM `course`";
                                         $result = mysqli_query($conn,$sql);
                                         
                                         while($rows = mysqli_fetch_assoc($result)){
                                        ?>
                                        <option value="<?php echo $rows['cid'] ?>" data-sem="<?php echo $rows['exam'] ?>"
                                            data-duration="<?php echo $rows['duration'] ?>" class="">
                                            <?php echo $rows['course_name'] ?>
                                        </option>
                                        <?php }?>
                                    </select>
                                </div>
                                <input type="text" readonly value="" name='exam' placeholder="exam"
                                    class="admission-input col-md-3 mx-2 mx-md-0" id="sem">
                                <input type="text" readonly value="" name="course_duration"
                                    class="admission-input ms-1 col-md-3" id="duration" placeholder="Duration">
                            </div>

                            <div class="row my-4">
                                <div class="col-12 text-center">
                                    <button type="submit" class="admission-btn mt-0" id="admission-btn">Submit</button>
                                </div>
                            </div>


                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- about area end -->

    <!-- teacher area end -->
    <section class="show-message position-fixed w-100 h-100 " id="popup-box">
        <div class="container w-100 h-100 d-flex justify-content-center align-items-center">
            <div class="row justify-content-center">
                <div class="card col-12 position-relative">
                    <figure class="success-gif position-absolute">
                        <img src="./assets/images/icon/Animation - 1702138652342.gif" alt="">
                    </figure>
                    <h2 class="p-5 text-center my-3">Succesfully Saved</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- footer area start -->
    <?php include "./assets/components/footer.php"; ?>
    <script>



        // drag and drop image  
        document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
            const dropZoneElement = inputElement.closest(".drop-zone");

            dropZoneElement.addEventListener("click", (e) => {
                inputElement.click();
            });

            inputElement.addEventListener("change", (e) => {
                if (inputElement.files.length) {
                    updateThumbnail(dropZoneElement, inputElement.files[0]);
                }
            });

            dropZoneElement.addEventListener("dragover", (e) => {
                e.preventDefault();
                dropZoneElement.classList.add("drop-zone--over");
            });

            ["dragleave", "dragend"].forEach((type) => {
                dropZoneElement.addEventListener(type, (e) => {
                    dropZoneElement.classList.remove("drop-zone--over");
                });
            });

            dropZoneElement.addEventListener("drop", (e) => {
                e.preventDefault();

                if (e.dataTransfer.files.length) {
                    inputElement.files = e.dataTransfer.files;
                    updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
                }

                dropZoneElement.classList.remove("drop-zone--over");
            });
        });

        /**
         * Updates the thumbnail on a drop zone element.
         *
         * @param {HTMLElement} dropZoneElement
         * @param {File} file
         */
        function updateThumbnail(dropZoneElement, file) {
            let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

            // First time - remove the prompt
            if (dropZoneElement.querySelector(".drop-zone__prompt")) {
                dropZoneElement.querySelector(".drop-zone__prompt").remove();
            }

            // First time - there is no thumbnail element, so lets create it
            if (!thumbnailElement) {
                thumbnailElement = document.createElement("div");
                thumbnailElement.classList.add("drop-zone__thumb");
                dropZoneElement.appendChild(thumbnailElement);
            }

            thumbnailElement.dataset.label = file.name;

            // Show thumbnail for image files
            if (file.type.startsWith("image/")) {
                const reader = new FileReader();

                reader.readAsDataURL(file);
                reader.onload = () => {
                    thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
                };
            } else {
                thumbnailElement.style.backgroundImage = null;
            }
        }


        $("#admission-form").validate({
            rules: {
                stu_name: {
                    required: true,
                    maxlength: 20,
                    minlength: 3,
                },
                father_name: {
                    required: true,
                    maxlength: 20,
                    minlength: 3,
                },
                mother_name: {
                    required: true,
                    maxlength: 20,
                    minlength: 3,
                },
                add_phone: {
                    required: true,
                    range: [1000000000, 9999999999]
                },

                add_email: {
                    required: true,
                    email: true,
                },
                myFile: {
                    required: true,
                },
                address: {
                    required: true,
                    maxlength: 30,
                    minlength: 6,
                },
                h_roll_num: {
                    required: true,
                    range: [1000000000, 9999999999]
                },
                h_school_name: {
                    required: true,
                    maxlength: 30,
                    minlength: 6,
                },
                h_mark_percent: {
                    required: true,
                    range: [1, 99]
                },

                i_roll_num: {
                    required: true,
                    range: [1000000000, 9999999999]
                },
                i_school_name: {
                    required: true,
                    maxlength: 30,
                    minlength: 6,
                },
                i_mark_percent: {
                    required: true,
                    range: [1, 99]
                },
                course: {
                    required: true,
                }
            },
            messages: {
                stu_name: {
                    required: "*Please Enter Student",
                    maxlength: "*Enter 3 to 20 length charector",
                    minlength: "*Enter 3 to 20 length charector",
                },
                father_name: {
                    required: "*Please Enter Father Name",
                    maxlength: "*Enter 3 to 20 length charector",
                    minlength: "*Enter 3 to 20 length charector",
                },
                mother_name: {
                    required: "*Please Enter Mother Name",
                    maxlength: "*Enter 3 to 20 length charector",
                    minlength: "*Enter 3 to 20 length charector",
                },
                add_phone: {
                    required: "*Please Enter Phone Number",
                    range: "Enter 10 number of Your phone number"
                },
                add_email: {
                    required: "*Please Enter Email",
                    email: "Enter Valid Email",
                },
                address: {
                    required: "*Please Enter Address",
                    maxlength: "*Enter 6 to 20 length charector",
                    minlength: "*Enter 6 to 20 length charector",
                },
                h_roll_num: {
                    range: "Enter 10 number of Your Roll number",
                },
                h_school_name: {
                    required: "*Please Enter High School Name",
                    maxlength: "*Enter 6 to 30 length charector",
                    minlength: "*Enter 6 to 30 length charector",
                },
                h_mark_percent: {
                    required: "*Enter High Percentage",
                    range: "*Enter 1 to 99 Number only"
                },

                i_roll_num: {
                    range: "Enter 10 number of Your Roll number",
                },
                i_school_name: {
                    required: "*Please Enter Inter School Name",
                    maxlength: "*Enter 6 to 30 length charector",
                    minlength: "*Enter 6 to 30 length charector",
                },
                i_mark_percent: {
                    required: "*Enter Inter Percentage",
                    range: "*Enter 1 to 99 Number only"
                },

            }
        });
    </script>
</body>

</html>
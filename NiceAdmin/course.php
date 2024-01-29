<!DOCTYPE html>
<html lang="en">

<head>
   <?php include "./component/head.php"; ?>
</head>

<body>

    <!-- ======= Header ======= -->
    <?php include "./component/header.php"; ?>
<!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php include './component/aside.php' ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <nav>
                    <h1>All Courses</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Courses</li>
                    </ol>
                </nav>
                <button type="button" class="btn btn-sm ms-4  btn-success " data-bs-toggle="modal"
                    data-bs-target="#courseModal">
                    <i class="bi bi-plus-circle text-white h6"></i>
                </button>
            </div>



            <div class="">
                <!-- Button trigger modal -->

                <!-- add modal Modal -->
                <div class="modal fade" id="courseModal" tabindex="-1" aria-labelledby="courseModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Course</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="course_submit">
                                    <div class="mb-2">
                                        <input type="file" class="form-control" name="image_file">
                                    </div>
                                    <div class="mb-2">
                                        <input type="text" class="form-control" placeholder="Enter Course Name"
                                            name="course_name">
                                    </div>
                                    <div class="mb-2">
                                        <input type="number" class="form-control" placeholder="Enter Course Price"
                                            name="course_price">
                                    </div>
                                    <div class="mb-2 d-flex">
                                        <input type="number" class="form-control" placeholder="Enter Total Exam"
                                            name="course_exam">
                                        <input type="number" class="form-control"
                                            placeholder="Enter Course Duration in Months" name="course_duration">
                                    </div>
                                    <div class="mb-2">
                                        <textarea maxlength="120" name="course_para" class="w-100 form-control"
                                            placeholder="Enter About Course" id="" cols="30" rows="3"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id="save_course">Save
                                            changes</button>
                                    </div>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- update modal  -->
                <div class="modal fade" id="courseModalupdate" tabindex="-1" aria-labelledby="courseModalupdate"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Course</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form id="course_submit_update">
                                <div class="modal-body" id="update-course-form">


                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <!-- del comform box -->
                <!-- Button trigger modal -->


                <!-- Modal -->
                <div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <form id='del-course-modal'>
                                    <input type="number" id='course_id' hidden name='course-id'>
                                    <input type="text" id='course_img' hidden name='course-img'>
                                </form>
                                <i class="bi bi-exclamation-triangle h3 text-danger"></i>
                                <div>
                                    Are you sure to delete?
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm del-btn  mx-auto text-white"
                                    id="del-course">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title fw-bold"></h3>
                            <div class="row" id="course_place">
                                <!-- course single start -->



                                <!-- course single end -->
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- notification section  -->
        <div class="notification position-fixed" id="notification">

        </div>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include "./component/footer.php" ?>

</body>

</html>
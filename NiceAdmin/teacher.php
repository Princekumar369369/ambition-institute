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
                    <h1>All Teachers</h1>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Teachers</li>
                    </ol>
                </nav>
                <button type="button" class="btn btn-sm ms-4  btn-success " data-bs-toggle="modal"
                    data-bs-target="#teacherModal">
                    <i class="bi bi-plus-circle text-white h6"></i>
                </button>
            </div>



            <div class="">
                <!-- Button trigger modal -->

                <!-- add modal Modal -->
                <div class="modal fade" id="teacherModal" tabindex="-1" aria-labelledby="teacherModal"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Teacher</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="teacher_submit">
                                    <div class="mb-2">
                                        <input type="file" class="form-control" name="image_file_teacher">
                                    </div>
                                    <div class="mb-2">
                                        <input type="text" class="form-control" placeholder="Enter Course Name"
                                            name="teacher_name">
                                    </div>
                                    <div class="m-2 d-flex">
                                        <label class="form-check-label text-black fw-bold" for="flexCheckDefault">
                                            Subjects:
                                        </label>
                                        <div class="row">
                                            <div class="col-auto d-flex mx-1">
                                                <input class="form-check-input bg-success w-25 m-0 form-check-input"
                                                    type="checkbox" value="Excel" id="flexCheckDefault">
                                                <label class="form-check-label ms-1" for="flexCheckDefault">
                                                    Excel
                                                </label>
                                            </div>
                                            <div class="col-auto d-flex mx-1">
                                                <input class="form-check-input bg-success w-25 m-0 form-check-input"
                                                    type="checkbox" value="Tally" id="flexCheckDefault">
                                                <label class="form-check-label ms-1" for="flexCheckDefault">
                                                    Tally
                                                </label>
                                            </div>
                                            <div class="col-auto d-flex mx-1">
                                                <input class="form-check-input bg-success w-25 m-0 form-check-input"
                                                    type="checkbox" value="Ms Office" id="flexCheckDefault">
                                                <label class="form-check-label ms-1" for="flexCheckDefault">
                                                    Ms Office
                                                </label>
                                            </div>
                                            <div class="col-auto d-flex mx-1">
                                                <input class="form-check-input bg-success w-25 m-0 form-check-input"
                                                    type="checkbox" value="Photoshop" id="flexCheckDefault">
                                                <label class="form-check-label ms-1" for="flexCheckDefault">
                                                    Photoshop
                                                </label>
                                            </div>
                                            <div class="col-auto d-flex mx-1">
                                                <input class="form-check-input bg-success w-25 m-0 form-check-input"
                                                    type="checkbox" value="Corel Drow" id="flexCheckDefault">
                                                <label class="form-check-label ms-1" for="flexCheckDefault">
                                                    Corel Drow
                                                </label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id="save_teacher">Save
                                            changes</button>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- update modal  -->
                <div class="modal fade" id="teacherModalupdate" tabindex="-1" aria-labelledby="teacherModalupdate"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Teacher</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form id="course_submit_update">
                                <div class="modal-body" id="update-teacher-form">


                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <!-- del comform box -->
                <!-- Button trigger modal -->


                <!-- Modal -->
                <div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="teacherModalupdate"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-center">
                                <form id='del-teacher-modal'>
                                    <input type="number" id='teacher_id' hidden name='teacher-id'>
                                    <input type="text" id='teacher_img' hidden name='teacher-img'>
                                </form>
                                <i class="bi bi-exclamation-triangle h3 text-danger"></i>
                                <div>
                                    Are you sure to delete?
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm del-btn  mx-auto text-white"
                                    id="del-teacher">Delete</button>
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
                            <div class="row" id="teacher_place">
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
    </main><!-- End #main --><!-- End #main -->

   <?php include "./component/footer.php" ?>

</body>

</html>
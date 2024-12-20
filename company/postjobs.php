<?php
session_start();
if(empty($_SESSION['id_user'])) {
    header("Location: company/dashboard.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Post Job</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
    <?php require_once("db.php");?>
        <!-- Sidebar -->
        <?php include("navbar.php"); ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include("topbar.php"); ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
       
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Create a Job</h2>
          <form  method="post" action="addpost.php">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4">Job Title <Title></Title></label>
                <input type="text" id="jobtitle" name="jobtitle" placeholder="Job Title" required="" class="form-control" />
              </div>
              <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                    <label class="form-label" for="form3Example1">Vacancy</label>
                  <input  class="form-control"  type="text" id="vacancy" name="vacancy" placeholder="Vacancy" required=""/>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                    <label class="form-label" for="form3Example2">Qualifications </label>
                  <input  type="text" id="qualification" name="qualification" placeholder="Qualification Required" required="" class="form-control" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                    <label class="form-label" for="form3Example1">Minimum Salary</label>
                  <input type="number" id="minimumsalary" name="minimumsalary" placeholder="Minimum Salary" required="" class="form-control" />
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                    <label class="form-label" for="form3Example2">Maximum Salary</label>
                  <input type="number" id="maximumsalary" name="maximumsalary" placeholder="Maximum Salary" required="" class="form-control" />
                </div>
              </div>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Job Description</label>
                <textarea id="description" name="description" placeholder="Job Description" rows="5" cols="21"  required="" class="form-control" ></textarea>
            
            </div>

            <!-- Password input -->

           

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">
              Post Job
            </button>
            </div>
            <?php 
              if(isset($_SESSION['registerError'])) {
                ?>
                <div>
                  <p class="text-center">Email Already Exists! Choose A Different Email!</p>
                </div>
              <?php
               unset($_SESSION['registerError']); }
              ?>     
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Future Force.</span>
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
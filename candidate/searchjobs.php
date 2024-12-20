<?php
session_start();
$PRN = $_SESSION['id_user'];
if (empty($_SESSION['id_user'])) {
    header("Location: ../campus/index.php");
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

    <title>Search Jobs</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <?php require_once("db.php"); ?>
    <!-- Page Wrapper -->
    <div id="wrapper">

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
                    <?php if (isset($_SESSION['jobApplySuccess'])) { ?>
                        <div>
                            <p id="successMessage" style="text-align: center; color: red; font-size: 28px;">You have applied successfully!</p>
                        </div>
                    <?php unset($_SESSION['jobApplySuccess']);
                    } ?>

                    <!-- Page Heading -->
                    <div style="background-color: #0F0E0E; height: 80px;">
                        <p style="font-size: 34px; color: white; text-align: center; line-height: 75px;">Search Job</p>
                    </div>
                    <form id="myForm" class="form-inline">
                    <div class="form-group" style="font-size: 18px; margin-left: 20px;"">
          <label>Qualification : </label>
          <select id="qualification" class="form-control" >
            <option value="" selected="">Select Qualification </option>
            <?php 
              $sql = "SELECT DISTINCT(qualification) FROM job_post WHERE qualification IS NOT NULL";
              $result = $conn->query($sql);
              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                  echo "<option value='".$row['qualification']."'>".$row['qualification']."</option>";
                }
              }
            ?>
          </select>
        </div>

        <button class="btn btn-primary" >Search</button>

        </form>

                    <div class="row">
                        <div class="col m-auto">
                            <div class="card mt-5">
                                <table id="myTable" class="table table-bordered table-hover">
                                    <thead>

                                    <tr class="table-primary">
                                            <th scope="col"> Job Name</th>
                                            <th scope="col"> Company Name</th>
                                            <th scope="col"> Minimum Salary</th>
                                            <th scope="col"> Maximum Salary </th>
                                            <th scope="col"> Vacancy</th>
                                            <th scope="col"> Qualification</th>
                                            <th scope="col"> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                    </tbody>
                                </table>

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
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                <!-- Core plugin JavaScript-->
                <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="js/sb-admin-2.min.js"></script>
                <script type="text/javascript">
    $(function() {
      var oTable = $('#myTable').DataTable({
        "autoWidth" : false,
        "ajax" : {
          "url" : "refresh_job_search.php",
          "dataSrc" : "",
          "data" : function (d) {
            d.qualification = $("#qualification").val();
          }
        }
      });

      $("#myForm").on("submit", function(e) {
        e.preventDefault();
        oTable.ajax.reload( null, false);
      })

    });
  </script>

</body>

</html>
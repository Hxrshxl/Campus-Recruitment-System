<?php
//To Handle Session Variables on This Page
session_start();
//If user Not logged in then redirect them back to homepage. 
//This is required if user tries to manually enter dashboard.php in URL.
if (empty($_SESSION['id_user'])) {
    header("Location: ../campus/index.php");
    exit();
}
require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> User Application</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

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
                    <div style="background-color: #0F0E0E; height: 80px;">
                        <p style="font-size: 34px; color: white; text-align: center; line-height: 75px;">Student Applications</p>
                    </div>
                    <div class="row">

                        <table class="table ">

                            <?php
                            $sql = "SELECT * FROM apply_job_post INNER JOIN users ON apply_job_post.PRN=users.PRN WHERE apply_job_post.PRN='$_GET[id_user]' AND apply_job_post.id_jobpost='$_GET[id_jobpost]'";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                            ?>



                                    <tr>
                                        <td>PRN</td>
                                        <td>:</td>
                                        <td><?php echo $row['PRN']; ?></td>
                                    </tr>


                                    <tr>
                                        <td>Name</td>
                                        <td>:</td>
                                        <td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td>
                                    </tr>


                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td><?php echo $row['email']; ?></td>
                                    </tr>



                                    <tr>
                                        <td>Address</td>
                                        <td>:</td>
                                        <td><?php echo $row['address']; ?></td>
                                    </tr>



                                    <tr>
                                        <td>City</td>
                                        <td>:</td>
                                        <td><?php echo $row['city']; ?></td>
                                    </tr>



                                    <tr>
                                        <td>State</td>
                                        <td>:</td>
                                        <td><?php echo $row['state']; ?></td>
                                    </tr>


                                    <tr>
                                        <td>Contact No</td>
                                        <td>:</td>
                                        <td><?php echo $row['contactno']; ?></td>
                                    </tr>



                                    <tr>
                                        <td>Qualification</td>
                                        <td>:</td>
                                        <td><?php echo $row['qualification']; ?></td>
                                    </tr>



                                    <tr>
                                        <td>Stream</td>
                                        <td>:</td>
                                        <td><?php echo $row['stream']; ?></td>
                                    </tr>



                                    <tr>
                                        <td>Passing Year</td>
                                        <td>:</td>
                                        <td><?php echo $row['passingyear']; ?></td>
                                    </tr>


                                    <tr>
                                        <td>Date Of Birth&nbsp;&nbsp;&nbsp;</td>
                                        <td>:&nbsp;&nbsp;&nbsp;</td>
                                        <td><?php echo $row['dob']; ?></td>
                                    </tr>




                                    <tr>
                                        <td>CGPA</td>
                                        <td>:</td>
                                        <td><?php echo $row['CGPA']; ?></td>
                                    </tr>


                        </table>
                        <br>

                        <?php
                                    if (isset($row['resume'])) {
                        ?>
                            <a href="../uploads/resume/<?php echo $row['resume']; ?>" class="btn btn-success" download="<?php echo $row['firstname']; ?>" style="font-size: 20px;">Download Resume</a>
                        <?php
                                    }
                        ?>
                        <a href="reject-user.php?id_user=<?php echo $_GET['id_user']; ?>&id_jobpost=<?php echo $row['id_jobpost']; ?>" class="btn btn-danger" style="font-size: 20px;">Reject Application</a>
                        <a href="accept-user.php?id_user=<?php echo $_GET['id_user']; ?>&id_jobpost=<?php echo $row['id_jobpost']; ?>" class="btn btn-primary" style="font-size: 20px;">Accept Application</a>
                <?php }
                            } ?>


                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Future Force.</span>
                    </div>
                </div>
            </footer>
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

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $(".successMessage:visible").fadeOut(2000);
        });
    </script>

</body>

</html>
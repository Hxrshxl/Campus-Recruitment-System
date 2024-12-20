<?php
session_start();
$id = $_SESSION['id_user'];
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

    <title>Candidate Profile</title>

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

                    <?php

                    $sql = "SELECT * FROM users WHERE PRN = {$id}";
                    $result = mysqli_query($conn, $sql) or die("Qyery Unsucessful");
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <section>
                                <div class="container py-5">
                                    <form action="edit.php" method="post">

                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card mb-4">
                                                    <div class="card-body text-center">
                                                        <img src="img/1.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                                       
                                                        <h5 class="my-3">Registration Number:</h5>
                                                        <p class="text-muted mb-1"><?php echo $_SESSION['id_user']; ?></p>
                                                        <p class="text-muted mb-4"></p>
                                                        <div class="d-flex justify-content-center mb-2">
                                                            <button name="add" type="submit" class="btn btn-primary">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <p class="mb-0">First Name</p>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="text" id="fname" name="fname" placeholder="First Name " value="<?php echo $row['firstname']; ?>" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <p class="mb-0">Last Name</p>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="text" id="lname" name="lname" placeholder="Last Name " value="<?php echo $row['lastname']; ?>" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <p class="mb-0">Email</p>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="email" id="email" name="email" placeholder="Email Address " value="<?php echo $row['email']; ?>" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <p class="mb-0">Mobile</p>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="number" id="phone" name="contactno" placeholder="1234567890" class="form-control" value="<?php echo $row['contactno']; ?>"  required>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <p class="mb-0">Qualification</p>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="text" id="qualification" name="qualification" class="form-control" placeholder="Qualification " value="<?php echo $row['qualification']; ?>" required="">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <p class="mb-0">CGPA</p>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="number" id="age" min="1" max="10" class="form-control" name="cgpa" placeholder="cgpa" value="<?php echo $row['CGPA']; ?>" required="">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <p class="mb-0">Stream</p>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="text" id="stream" name="stream" class="form-control" value="<?php echo $row['stream']; ?>" placeholder="Stream">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <p class="mb-0">Date Of Birth</p>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="date" id="dob" name="dob" placeholder="Date of Birth " value="<?php echo $row['dob']; ?>" class="form-control" required="">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <p class="mb-0">Age</p>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="number" id="age" min="1" max="99" name="age" placeholder="Age " value="<?php echo $row['age']; ?>" class="form-control" required="">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <p class="mb-0">Address</p>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <textarea class="form-control" rows="4" id="address" name="address" placeholder="Address *"  required=""><?php echo $row['address']; ?></textarea>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <p class="mb-0">City</p>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="text" id="city" name="city" class="form-control" value="<?php echo $row['city']; ?>" placeholder="City">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <p class="mb-0">State</p>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="text" id="state" name="state" class="form-control" value="<?php echo $row['state']; ?>" placeholder="State">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <p class="mb-0">Passing Year</p>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="date" id="passingyear" name="passingyear" class="form-control" placeholder="Passing Year *" value="<?php echo $row['passingyear']; ?>" required="">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <p class="mb-0">Password</p>
                                                            </div>
                                                            <div class="col-sm-9">
                                                                <input type="text" id="password" name="password" class="form-control" value="<?php echo $row['password']; ?>" placeholder="Password *" required="">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                </div>
                                </form>
                </div>
                </section>

        <?php }
                    }
        ?>
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

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
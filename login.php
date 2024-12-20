<?php 
  session_start();
  if(isset($_SESSION['id_user'])) {
    header("Location: ../campus/candidate/dashboard.php");
    exit();
}?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/cdlogin.css">
  <title>Candidate Login</title>
</head>

<body>

  <?php include 'navbar.php' ?>


  <div class="container d-flex justify-content-center align-items-center min-vh-100">



    <div class="row border rounded-5 p-3 bg-white shadow box-area">



      <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #282A3A;">
        <div class="featured-image mb-3">
          <img src="img/1.png" class="img-fluid" style="width: 250px;">
        </div>
        <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Join Us </p>
        <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Find out which companies are hiring</small>
      </div>



      <div class="col-md-6 right-box">
        <div class="row align-items-center">
          <div class="header-text mb-4">
            <h2>Candidate Login</h2>
            <p>We are happy to have you back.</p>
          </div>
          <form method="post" action="checklogin.php">
            <div class="input-group mb-3">
              <input class="form-control form-control-lg bg-light fs-6" type="email" id="email" name="email" placeholder="Email" required="">
            </div>
            <div class="input-group mb-1">
              <input class="form-control form-control-lg bg-light fs-6" type="password" id="password" name="password" placeholder="Password" required="">
            </div>
            <div class="input-group mb-5 d-flex justify-content-between">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="formCheck">
                <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
              </div>
              <div class="forgot">
                <small><a href="forgot-password.php">Forgot Password?</a></small>
              </div>
            </div>
            <div class="input-group mb-3">
              <button type="submit" class="btn btn-lg btn-dark w-100 fs-6">Login</button>
            </div>
            <div class="input-group mb-3">
              <button class="btn btn-lg btn-light w-100 fs-6"><img src="img/google.png" style="width:20px" class="me-2"><small>Sign In with Google</small></button>
            </div>
            <div class="row">
              <small>Don't have account? <a href="register.php">Register</a></small>
            </div>
            <?php
            if (isset($_SESSION['registerCompleted'])) {
            ?>
              <div>
                <p id="successMessage" style="text-align: center; color: red; font-size: 28px;">You have registered successfully!</p>
              </div>
            <?php
              unset($_SESSION['registerCompleted']);
            }
            ?>

            <?php
            if (isset($_SESSION['loginError'])) {
            ?>
              <div>
                <p style="text-align: center; color: red; font-size: 28px;">Invalid Email or Password</p>
              </div>
            <?php
              unset($_SESSION['loginError']);
            }
            ?>
          </form>
        </div>
      </div>

    </div>
  </div>
  <?php include 'footer.php' ?>
</body>

</html>
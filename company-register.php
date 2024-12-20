<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/reg.css">


  <title>Register</title>
</head>

<body>
<?php
  session_start();

  if(isset($_SESSION['id_user'])) {
    header("Location: company/dashboard.php");
    exit();
  }

  require_once("db.php");

?>
  <?php include 'navbar.php'; ?>
  <div class="container reg">
    <div class="title">Registration</div>
    <div class="content">
      <form method="post" action="addcompany.php">
        <div class="user-details">
          <div class="input-box">
            <span for="companyname" class="details">Company Name</span>
            <input type="text" id="companyname" name="companyname" placeholder="Company Name *" required="">
          </div>
          <div class="input-box">
            <span for="headofficecity" class="details">Head Office City</span>
            <input type="text" id="headofficecity" name="headofficecity" placeholder="Head Office City *" required="">
          </div>
          <div class="input-box">
            <span for="contactno" class="details">Contact Number</span>
            <input type="tel" id="phone" name="phone" placeholder="1234-567-890" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" required>
          </div>
          <div class="input-box">
            <span for="website" class="details">Website</span>
            <input type="text" id="website" name="website" placeholder="Website">
          </div>
          <div class="input-box">
            <span for="companytype" class="details">Company Type</span>
            <input type="text" id="companytype" name="companytype" placeholder="Company Type">
          </div>
          <div class="input-box">
            <span for="email" class="details">Company Email Address</span>
            <input type="email" id="email" name="email" placeholder="Email Address *" required="">
          </div>
          <div class="input-box">
            <span for="password" class="details">Password</span>
            <input type="password" id="password" name="password" placeholder="Password *" required="">
          </div>
        </div>

        <div class="button">
          <input type="submit" value="Register">
        </div>
        <?php
          if(isset($_SESSION['registerError'])){                
          ?>
          <div>
          <p style="text-align: center; color: red; font-size: 28px;">Email already Exists!</p>
          </div>
          <?php
          unset($_SESSION['registerError']);}
          ?>

      </form>
    </div>
  </div>
  <?php include 'footer.php' ?>
</body>

</html>
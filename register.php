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
<?php include 'navbar.php'; ?>
<div class="container reg">
  <div class="title">Registration</div>
  <div class="content">
    <form method="post" action="adduser.php" enctype="multipart/form-data">
      <?php
    // If User already registered with this email then show error message.
    if (isset($_SESSION['registerError'])) {
      ?>
      <div class="form-group">
        <label style="text-align: center; color: red; font-size: 28px;">Email Already Exists! Choose A Different Email!</label>
      </div>
    <?php
      unset($_SESSION['registerError']);
    }
    ?>
    <?php if (isset($_SESSION['uploadError'])) { ?>
      <div class="form-group">
        <label style="text-align: center; color: red; font-size: 28px;"><?php echo $_SESSION['uploadError']; ?></label>
      </div>
    <?php unset($_SESSION['uploadError']);
    } ?>

      <div class="user-details">
        <div class="input-box">
          <span class="details">First Name</span>
          <input type="text" id="fname" name="fname" placeholder="First Name *" required>
        </div>
        <div class="input-box">
          <span class="details">Last Name</span>
          <input type="text" id="lname" name="lname" placeholder="Last Name *" required>
        </div>
        <div class="input-box">
          <span class="details">Email</span>
          <input type="email" id="email" name="email" placeholder="Email Address *" required>
        </div>
        <div class="input-box">
          <span class="details">Date of Birth</span>
          <input type="date" id="dob" name="dob" placeholder="Date of Birth *" required="">
        </div>
        <div class="input-box">
          <span class="details">Age</span>
          <input type="number" id="age" min="1" max="99" name="age" placeholder="Age *" required="">
        </div>
        <div class="input-box">
          <span class="details">Year of Passing</span>
          <input type="date" id="passingyear" name="passingyear" placeholder="Passing Year *" required="">
        </div>
        <div class="input-box">
          <span class="details">Qualifications</span>
          <input type="text" id="qualification" name="qualification" placeholder="Qualification *" required="">
        </div>
        <div class="input-box">
          <span class="details">Stream</span>
          <input type="text" id="stream" name="stream" placeholder="Stream">
        </div>
        <div class="input-box">
          <span class="details">Password</span>
          <input type="password" id="password" name="password" placeholder="Password *" required="">
        </div>
        <div class="input-box">
          <span class="details">Contact Number</span>
          <input type="tel" id="phone" name="phone" placeholder="1234-567-890" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" required>
        </div>
        <div class="input-box">
          <span class="details">Address:</span>
          <textarea style="border:1px solid black; border-radius: 5px; width: 80%; padding: 15px; font-size: 18px;" rows="4" id="address" name="address" placeholder="Address *" required=""></textarea>
        </div>
        <div class="input-box">
          <span class="details">City</span>
          <input type="text" id="city" name="city" placeholder="City">
        </div>
        <div class="input-box">
          <span class="details">State</span>
          <input type="text" id="state" name="state" placeholder="State">
        </div>
        <div class="input-box">
          <span class="details">Resume * (Either PDF or DOCUMENT)</span>
          <input type="file" name="resume" required>
        </div>


      </div>
      <div class="button">
        <input type="submit" value="Register">
      </div>
     
    </form>
  </div>
</div>
<?php include 'footer.php'?>
</body>

</html>
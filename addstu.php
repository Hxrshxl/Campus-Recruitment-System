<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-witdh, initial-scale=1.0" />

    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reg.css">
    <link type="text/css" rel="stylesheet" href="css/admindashboard.css" />

   


</head>

<body>
    <section id="sidebar">
        <div class="sidebar-brand">
            <h2><i class="fa fa-desktop"></i> <span>Future-Force.</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a href="admindashboard.php"><i class="fa fa-desktop"></i> <span>Dashboard</span></a></li>
                <li><a href="#"><i class="fa fa-users"></i> <span>Profile</span></a></li>
                <li><a href="#"><i class="fa fa-file"></i> <span>Batch</span> <i class="fa fa-caret-down"></i></a></li>
                <li><a href="#"> <span>Create Batch</span></a></li>
                <li><a href="#"> <span>Update Batch</span></a></li>
                <li><a href="#"> <span>Delete Batch</span></a></li>
                <li><a href="#"><i class="fa fa-file-pdf-o"></i> <span>Students</span> <i class="fa fa-caret-down"></i></a></li>
                <li><a href="#"> <span>Add Student</span></a></li>
                <li><a href="#"> <span>Add Batch</span></a></li>
                <li><a href="#"><span>Update Update</span></a></li>
                <li><a href="#"></i> <span>Delete Student</span></a></li>
                <li><a href="#"><i class="fa fa-money"></i> <span>Companies</span></a></li>
                <li><a href="#"><i class="fa fa-user"></i> <span>Job Applications</span></a></li>
                <li><a href="logout.php"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
            </ul>
        </div>
    </section>

    <Section id="main-content">
        <header>
            <div class="header-left">
                <h2 class="toggle-btn">
                    <a href="#"> Dashboard</a>
                </h2>
            </div>
            <div class="header-left header-serach">
                <!-- <div class="serach-par">
                    <input class="search" type="text" placeholder="Search Here...">
                    <i class="fa fa-search"></i>
                </div> -->
            </div>
            <div class="header-left header-profile">
                <img src="img/user.png" class="img-responsive" />
                <h3>UserName</h3>
                <p>Admin</p>
            </div>
            <div class="clear"></div>
        </header>
        <div class="clear"></div>
        <div class="main-content-info container">

            <div class="clear"></div>
        </div>

        <div class="content-pro-par container">
            <div class="pro-table">
                <div class="recent-project">
                    <div class="rec-pro-h">
                        <h2>Recent Offers</h2>
                    </div>
                    <div class="see-all">
                        <button>See all</button>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="container reg">
                    <div class="title">Add Student</div>
                    <div class="content">
                        <form method="post" action="addstudent.php" enctype="multipart/form-data">
                            <?php
                            //If User already registered with this email then show error message.
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
                                    <span class="details">PRN</span>
                                    <input type="text" id="fname" name="fname" placeholder="PRN *" required>
                                </div>


                                <div class="input-box">
                                    <span class="details">Email</span>
                                    <input type="email" id="email" name="email" placeholder="Email Address *" required>
                                </div>

                                <div class="input-box">
                                    <span class="details">Password</span>
                                    <input type="password" id="password" name="password" placeholder="Password *" required="">
                                </div>


                                <div class="button">
                                    <input type="submit" value="Register">
                                </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

    </Section>
    <div class="clear"></div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/external.js"></script>
</body>

</html>
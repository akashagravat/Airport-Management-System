<?php
session_start();
include('include/config.php');
$data=$_SESSION['uname'];
$sql= "SELECT * FROM admin WHERE UserName='$data'";
$result = mysqli_query($conn, $sql); 

while ($row= mysqli_fetch_row($result))
{
    $id=$row[0];
    $fname=$row[1];
    $mname=$row[2];
   

}

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="icon" href="../img/logo.jpg">
    <title>Passenger|Account</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">

        <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        Airport Management System
                    </a>
                </div>
                <ul class="nav">
                    <li >
                        <a class="nav-link" href="dashboard.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="Users.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="BookeTicket.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Booked Tour</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="route.php">
                            <i class="nc-icon nc-atom"></i>
                            <p>All Routes</p>
                        </a>
                    </li>

                    <li>
                        <a class="nav-link" href="contact.php">
                            <i class="fa fa-phone"></i>
                            <p>Contact</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="history.php">
                            <i class="fa fa-history"></i>
                            <p>Login History</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="notification.php">
                            <i class="fa fa-history"></i>
                            <p>Logout History</p>
                        </a>
                    </li>

                </ul>

            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500" style="background-color: rgb(55, 59, 65); ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> Dashboard </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="notification.php" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>

                            </li>
                            <li class="nav-item">
                                <a href="https://www.google.com/search?q=" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="account.php">
                                    <span class="no-icon">Account :  <?php echo $_SESSION['uname']?></span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="changeps.php">
                                    <span class="no-icon"><i class="fa fa-key"></i>Change Password</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="include/logout.php">
                                    <span class="no-icon"><i class="fa fa-sign-out"></i>Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content" style="background-image: url(../img/slider\ 1.jpg);">
            
            
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col">
                            <div class="card ">
                                <div class="card-header bg-success text-white"> <i class="nc-icon nc-circle-09"></i> Admin Profile
                                </div>
                                <form method="POST"> 

                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>ID </label>
                                                    <input type="text" class="form-control" disabled value="<?php echo $id ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>UserName</label>
                                                    <input type="text" class="form-control" placeholder="First Name" value="<?php echo $fname ?>" name="fname" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Password</label>
                                                    <input type="text" class="form-control" placeholder="Last Name" value="<?php echo $mname ?>" name="lname" disabled>
                                                </div>
                                            </div>
                                        </div>
</div>
                        </div>
                    </div>
                    </form>
      
                    </div>          </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="../index.html">
                            Home
                        </a>
                            </li>
                            <li>
                                <a href="../Contact.php">
                            Contact Us
                        </a>
                            </li>
                            <li>
                                <a href="../aboutus.html">
                            About Us
                        </a>
                            </li>
                            <li>
                                <a href="../gallery.html">
                            Gallery
                        </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ??
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            Designed By Akash Agravat
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    </div>

    </div>
    </div>
    <script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="../assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!--  Chartist Plugin  -->
    <script src="../assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
    <script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/js/demo.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
<?php 
session_start();
include('include/config.php');
$data=$_SESSION['username'];
$sql= "SELECT * FROM user WHERE Email='$data'";
$result = mysqli_query($conn, $sql); 

while ($row= mysqli_fetch_row($result))
{
    
    $email=$row[4];
    $ps=$row[11];
    $nps="";
}
if(isset($_POST['submit'])){
    $nps=$_REQUEST['nps'];
    if($nps != ""){
    $alt= "Update user set Password='$nps' where Email='$data'" ;
    mysqli_query($conn, $alt);
    }

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
    <title>Passenger|Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <script src="js/check.js"></script>
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
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="User Profile.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="BookTour.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Book Tour</p>
                        </a>
                    </li>

                    <li>
                        <a class="nav-link" href="All Route.php">
                            <i class="nc-icon nc-atom"></i>
                            <p>All Routes</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="map.php">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="notification.php">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
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
                            <li class="nav-item">
                                <a class="nav-link" href="User Profile.php">
                                    <span class="no-icon">Account : <?php 
									$que="select * from user where Email='".$_SESSION['username']."'";
									$query=mysqli_query($conn,$que);
while($row1=mysqli_fetch_array($query))
{
	echo $row1['1']."&nbsp".$row1['3'];
}
									?></span>
                                </a>
                            </li>
                            <li class="nav-item active">
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
                                <div class="card-header bg-danger text-white"> <i class="fa fa-key"></i> Change Password
                                </div>
                                <div class="card-body">
                                    <form method="POST" onsubmit="return cps()">
                                   
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" placeholder="Email" name="eml" value="<?php echo $data ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Old Password</label>
                                                    <input type="text" class="form-control" placeholder="old password" name="ps" value="<?php echo $ps ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <input type="text" class="form-control" placeholder="New Password" name="nps" value="<?php echo $nps ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <button type="submit" class="btn btn-info btn-fill pull-right" name="submit">Change Password</button>
                                        <div class="clearfix"></div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
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
                            ©
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
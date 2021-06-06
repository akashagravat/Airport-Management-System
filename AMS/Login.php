<?php 
session_start();
include('include/config.php');
if (isset($_POST['submit'])) {
   
    
    $sql= "SELECT * FROM user WHERE Email='".$_POST['uname']."' and Password='".$_POST['ps']."'";
    $result = mysqli_query($conn, $sql);
    $row=mysqli_num_rows($result);
    if ($row > 0) {

   $_SESSION=$row['0'];

      $_SESSION['username']=$_POST['uname'];
      $_SESSION['password']=$_POST['ps'];
      $dt=date("Y-m-d");
      $dt2=date("H:i:s");

      while($row = mysqli_fetch_assoc($result)) {
        $log="insert into userlog(UserName,Date,Time) values('".$_SESSION['username']."','".$dt."','".$dt2."')";
        $result1= mysqli_query($conn, $log);
        header('Location: dashboard.php');
 


    }
    } else {
      ?><script>alert("Invalid Username/Password");</script><?php
    }
    
    mysqli_close($conn);
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" href="../img/logo.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>AMS|Passenger Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body style="background-image: url(../img/slider\ 1.jpg);">
    <nav class="navbar navbar-expand-lg  " style=" background-color: lightcoral">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" style="background-color: aqua;">
            <span class="navbar-toggler-icon"><i class="material-icons">menu</i></span>
          </button>
        <a class="navbar-brand" href="#">
            <img src="../img/logo.jpg" width="50" height="50" alt="Logo">Airport Management System</a>


        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item  ">
                    <a class="nav-link " href="../index.html"><i class="fa fa-fw fa-home"></i>Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../aboutus.html"><i class="fa fa-info-circle"></i>About US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../gallery.html"><i class="fa fa-image"></i>Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../news.html"><i class="fa fa-newspaper-o"></i> News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Contact.php"><i class="fa fa-fw fa-envelope"></i>Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-user"></i> Login/Sign Up
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item " href="../Admin/Login.php">Admin Login</a>
                        <a class="dropdown-item active" href="Login.php">Passenger Login<span class="sr-only">(current)</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="Signup.php">Sign Up</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="https://www.google.com/search?q=">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-fw fa-search"></i>Search</button>
            </form>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <div class="card" style="background-color: lightskyblue;">
                    <div class="card-header bg-primary text-white "><i class="fa fa-user"></i> AMS|PASSENGER LOGIN
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            <caption>
                                <center>
                                    <h1 style="color: rgb(255, 114, 71);">Login Form</h1>
                                </center>
                            </caption>

                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text ml-5 pr-4 pl-2" id="inputGroup-sizing-lg" > <i class="fa fa-fw fa-user"></i>User Name</span>
                                </div>
                                <input type="text" class="form-control mr-5" aria-label="Large" name="uname" aria-describedby="inputGroup-sizing-default" placeholder="Enter Your User Name" autofocus>
                            </div>




                            <div class="input-group mt-3">
                                <div class="input-group-prepend ml-3">
                                    <span class="input-group-text ml-4 pr-4 pl-2" id="inputGroup-sizing-lg"><i class="fa fa-lock"></i> Password</span>
                                </div>
                                <input class="form-control mr-5" type="password" id="example-password-input"name="ps" aria-label="Large" aria-describedby="inputGroup-sizing-default" placeholder="Enter Password">
                            </div>
                    </div>


                    <center>
                        <button type="reset" class="btn btn-dark mx-5 my-5 float-left"><i class="fa fa-refresh"></i>Reset</button>
                        <button type="submit" class="btn btn-danger my-5 " name="submit" ><i class="fa fa-sign-in"></i>Login</button>
                      <a href="Signup.php">  <button type="button" class="btn btn-success mx-5 my-5 float-right "  ><i class="fa fa-registered"></i>Register</button></a>
                </center>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


    <footer class="footer mt-3">
        <ul class="nav-foot">
            <li><a href="../index.html">Home</a></li>
            <li><a href="../aboutus.html">About US</a></li>
            <li><a href="../AllRoute.php">Routes</a></li>
            <li><a href="../Contact.php">Contact us</a></li>
            <p class="float-right">&copy; 2021 Designed by Akash Agravat</p>
        </ul>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
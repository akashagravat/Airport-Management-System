<?php

$nameerr=$emailerr=$monoerr=$msgerr="";
$str=$mes=$name=$email=$mono=$msg="";
if (isset($_POST['submit'])) {
    if(empty($_POST["name"])){
        $nameerr="Name Is Required";
    }
    if(empty($_POST["email"])){
        $emailerr="Email Is Required";
    }
    if(empty($_POST["mono"])){
        $monoerr="Mobile Number Is Required";
    }
    if(empty($_POST["msg"])){
        $msgerr="Message Is Required";
    }
    if (empty($nameerr && $emailerr && $monoerr &&  $msgerr)) {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ams";
    
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
          $err = die("Connection failed: " . mysqli_connect_error());
        }
        //  $mes = 'Connection successfull ';
        $name = mysqli_real_escape_string($conn, $_REQUEST['name']);
        $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
        $mono =   $_REQUEST['mono'];
        $msg = mysqli_real_escape_string($conn, $_REQUEST['msg']);
        $sql = "INSERT INTO contact (Name, Email, MobileNo, Message)  VALUES ('$name', '$email','$mono','$msg')";
        if(mysqli_query($conn, $sql)){
          $str= '<h3>data stored in a database successfully.</h3>'; 
}  else{
          echo "ERROR: Hush! Sorry . " 
              . mysqli_error($conn);
      }
        //  echo  $sql;
        mysqli_close($conn);
      }

}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/logo.jpg">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <title>AMS|Contact Us</title>
    <script src="ams/js/check.js"></script>
</head>

<body style="background-image: url(img/slider\ 1.jpg);background-repeat: no-repeat;background-size: cover;">

<nav class="navbar navbar-expand-lg  " style=" background-color: lightcoral">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" style="background-color: aqua;">
            <span class="navbar-toggler-icon"><i class="material-icons">menu</i></span>
          </button>
        <a class="navbar-brand" href="#">
            <img src="img/logo.jpg" width="50" height="50" alt="Logo">Airport Management System</a>


        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item ">
                    <a class="nav-link " href="index.html"><i class="fa fa-fw fa-home"></i>Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.html"><i class="fa fa-info-circle"></i>About US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.html"><i class="fa fa-image"></i>Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="news.html"><i class="fa fa-newspaper-o"></i> News</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " href="Contact.php"><i class="fa fa-fw fa-envelope"></i>Contact<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-user"></i> Login/Sign Up
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="admin/Login.php">Admin Login</a>
                        <a class="dropdown-item" href="ams/Login.php">Passenger Login</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="ams/Signup.php">Sign Up</a>
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
                <div class="card">
                    <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Contact us
                    </div>
                    <div class="card-body">
                        <form method="POST" onsubmit="return success()">
                            <div class="form-group">
                                <label for="name"><i class="fa fa-user"></i>Name</label>
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" name="name" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="fa fa-envelope"></i> Email address</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="mno"><i class="fa fa-phone"></i>Mobile Number</label>
                                <input type="tel" class="form-control" id="mno" aria-describedby="emailHelp" placeholder="Enter Mobile Number" name="mono" required>
                            </div>
                            <div class="form-group">
                                <label for="message"><i class="material-icons">message</i> Message</label>
                                <textarea class="form-control" id="message" rows="6" name="msg" required></textarea>
                            </div>
                            <div class="mx-auto">
                                <button type="submit" class="btn btn-primary text-right"  name="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="card bg-light mb-3">
                    <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
                    <div class="card-body">
                        <p>Airport Road Civil Enclave</p>
                        <p>Govardhanpur</p>
                        <p>Jamnagar</p>
                        <p>Email : agravatakash4@gmail.com</p>
                        <p>Mobile No. +91 9574919445</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer mt-3">
        <ul class="nav-foot">
            <li><a href="index.html">Home</a></li>
            <li><a href="aboutus.html">About US</a></li>
            <li><a href="AllRoute.php">Routes</a></li>
            <li><a href="Contact.php">Contact us</a></li>
            <p class="float-right">&copy; 2020 Designed by Akash Agravat</p>
        </ul>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
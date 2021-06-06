<?php
$fnameerr = $mnameerr = $lnameerr = $generr = $mnoerr = $emailerr  = $bderr = $pserr = $cpserr = $mserr = "";
$fname = $lname = $mname = $email = $bd = $mno = $ps = $cps = "";
if (isset($_POST['submit'])) {
    if (empty($_POST["fname"])) {
        $fnameerr = "First Name Is Required";
    }
    if (empty($_POST["mname"])) {
        $mnameerr = "Middle Name Is Required";
    }
    if (empty($_POST["lname"])) {
        $lnameerr = "Last Name Is Required";
    }
    if (empty($_POST["gen"])) {
        $generr = "empty gender";
    }
    if (empty($_POST["bd"])) {
        $bderr = "empty gender";
    }
    if (empty($_POST["email"])) {
        $emailerr = "Email Is Required";
    }
    if (empty($_POST["mno"])) {
        $mnoerr = "Mobile Number Is Required";
    }
    if (empty($_POST["ps"])) {
        $pserr = "Password Is Required";
    }
    if (empty($_POST["cps"])) {
        $cpserr = "Confirm Number Is Required";
    }
    if ($_POST["ps"] != $_POST["cps"]) {
        $mserr = "Password Does Not Match";
    }


    if (empty($fnameerr && $mnameerr && $lnameerr && $emailerr && $mnoerr &&  $generr && $bderr && $pserr && $cpserr && $mserr)) {

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
        $fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
        $mname = mysqli_real_escape_string($conn, $_REQUEST['mname']);
        $lname = mysqli_real_escape_string($conn, $_REQUEST['lname']);
        $email = mysqli_real_escape_string($conn, $_REQUEST['email']);
        $mno =   $_REQUEST['mno'];
        $bd =   $_REQUEST['bd'];
        $ps = $_REQUEST['ps'];

        $sql = "INSERT INTO user (FirstName, MiddleName, LastName, Email, Birthdate, MobileNo, Password)  VALUES ('$fname','$mname','$lname', '$email','$bd','$mno','$ps')";
        if (mysqli_query($conn, $sql)) {

            $str = '<h3>data stored in a database successfully.</h3>';
            header('Location: Login.php');
        } else {
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
    <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="../img/logo.jpg">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        .error {
            color: #FF0001;
        }
    </style>

    <title>AMS|Sign Up</title>
    <script src="js/check.js"></script>

</head>

<body style="background-image: url(../img/slider\ 1.jpg);background-size: 100% 100%; background-attachment: fixed;">
    <nav class="navbar navbar-expand-lg  " style=" background-color: lightcoral">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation" style="background-color: aqua;">
            <span class="navbar-toggler-icon"><i class="material-icons">menu</i></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="../img/logo.jpg" width="50" height="50" alt="Logo">Airport Management System</a>


        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item ">
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
                        <a class="dropdown-item" href="../Admin/Login.php">Admin Login</a>
                        <a class="dropdown-item" href="Login.php">Passenger Login</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item active" href="Signup.php">Sign Up<span class="sr-only">(current)</span></a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="https://www.google.com/search?q=">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-fw fa-search"></i>Search</button>
            </form>
        </div>
    </nav>

    <form method="POST" onsubmit="return registered()">
        <caption>
            <center>
                <h1 style="color: rgb(169, 255, 71);">Registartion Form</h1>
            </center>
        </caption>
        <div class="input-group mt-3">
            <div class="input-group-prepend">
                <span class="input-group-text ml-5 pr-4" id="inputGroup-sizing-lg"> <i class="fa fa-fw fa-user"></i>First Name</span>
            </div>
            <input type="text" class="form-control mr-5 " aria-label="Large" aria-describedby="inputGroup-sizing-default" placeholder="Enter Your First Name" name="fname" autofocus required>
            <br> <span class="error"> <?php echo $fnameerr; ?>
        </div>

        <div class="input-group mt-3">
            <div class="input-group-prepend">
                <span class="input-group-text ml-5 pl-2" id="inputGroup-sizing-lg"> <i class="fa fa-fw fa-user"></i>Middle Name</span>
            </div>
            <input type="text" class="form-control mr-5" aria-label="Large" aria-describedby="inputGroup-sizing-default" placeholder="Enter Your Middle Name" name="mname" required>
            <br> <span class="error"> <?php echo $mnameerr; ?>
        </div>

        <div class="input-group mt-3">
            <div class="input-group-prepend">
                <span class="input-group-text ml-5 pr-4 pl-2" id="inputGroup-sizing-lg"> <i class="fa fa-fw fa-user"></i>Last Name</span>
            </div>
            <input type="text" class="form-control mr-5" aria-label="Large" aria-describedby="inputGroup-sizing-default" placeholder="Enter Your Last Name" name="lname" required>
            <br> <span class="error"> <?php echo $lnameerr; ?>
        </div>

        <div class="input-group mt-3">
            <div class="input-group-prepend">
                <span class="input-group-text ml-5  pl-3 pr-5" id="basic-addon2"><i class="fa fa-envelope"></i>Email</span>
            </div>
            <input type="email" class="form-control mr-5" placeholder="Enter Your Email" aria-label="Recipient's username" aria-describedby="basic-addon2" name="email" required>
            <br> <span class="error"> <?php echo $emailerr; ?>
        </div>

        <fieldset class="form-group mt-3">
            <div class="row">
                <div class="input-group-prepend ml-3">
                    <span class="input-group-text ml-5  pl-3 pr-5" id="basic-addon2"><i class="fa fa-group"></i>Gender</span>
                </div>

                <div class="col-sm-10 input-group-prepend " style="background-color: lightgoldenrodyellow;">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="gridRadios1" value="male" name="gen">
                        <label class="form-check-label" for="gridRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="gridRadios2" value="female" name="gen">
                        <label class="form-check-label" for="gridRadios2">
                            Female
                        </label>
                    </div>
                    <div class="form-check disabled form-check-inline">
                        <input class="form-check-input" type="radio" id="gridRadios3" value="other" name="gen">
                        <label class="form-check-label" for="gridRadios3">
                            Other
                        </label>
                    </div>
                    <br> <span class="error"> <?php echo $generr; ?>

                </div>
            </div>
        </fieldset>

        <div class="input-group mt-3">
            <div class="input-group-prepend ml-3">
                <span class="input-group-text ml-5 pr-4 pl-2" id="inputGroup-sizing-lg"><i class="fa fa-birthday-cake"></i>Birth Date</span>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="date" id="example-date-input" name="bd" aria-label="Large" aria-describedby="inputGroup-sizing-default" required>
                <span class="error"> <?php echo $bderr; ?>

            </div>

        </div>
        </div>
        <div class="input-group mt-3">
            <div class="input-group-prepend ml-3">
                <span class="input-group-text ml-4 pr-4 pl-2" id="inputGroup-sizing-lg"><i class="fa fa-phone"></i> Mobile Number</span>
            </div>
            <input class="form-control mr-5" type="tel" id="example-password-input" name="mno" aria-label="Large" aria-describedby="inputGroup-sizing-default" placeholder="Enter Mobile Number" required>
            <br> <span class="error"> <?php echo $mnoerr; ?>
        </div>
        </div>
        <div class="input-group mt-3">
            <div class="input-group-prepend ml-3">
                <span class="input-group-text ml-4 pr-4 pl-2" id="inputGroup-sizing-lg"><i class="fa fa-lock"></i> Password</span>
            </div>
            <input class="form-control mr-5" type="password" id="example-password-input" name="ps" aria-label="Large" aria-describedby="inputGroup-sizing-default" placeholder="Enter Password" required>
            <br> <span class="error"> <?php echo $pserr; ?>
        </div>
        </div>
        <div class="input-group mt-3">
            <div class="input-group-prepend ml-3">
                <span class="input-group-text ml-4 pr-4 pl-2" id="inputGroup-sizing-lg"><i class="fa fa-lock"></i> Confirm Password</span>
            </div>
            <input class="form-control mr-5" type="password" id="example-password-input" name="cps" aria-label="Large" aria-describedby="inputGroup-sizing-default" placeholder="Enter Confirm Password" required>
            <br> <span class="error"> <?php echo $cpserr; ?>
                <br><?php echo $mserr; ?>
            </span>
        </div>
        </div>

        <center>
            <button type="reset" class="btn btn-dark mx-5 my-5 float-left"><i class="fa fa-refresh"></i>Reset</button>
            <button type="submit" class="btn btn-success my-5 " name="submit"><i class="fa fa-registered"></i>Register</button>
       <a href="Login.php"><button type="button" class="btn btn-danger mx-5 my-5 float-right"><i class="fa fa-sign-in"></i>Login</button></a>
        </center>

    </form>

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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
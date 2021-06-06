<?php $servername = "localhost";
$username = "root";
$password = "";
$dbname = "ams";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$data = "SELECT * FROM routes";
$result = mysqli_query($conn, $data); 

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


    <title>AMS|Routes</title>
</head>

<body style="background-image: url(img/slider\ 1.jpg);">

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
    <div class="container-fluid">
                    <div class="row mx-5 mt-5">
                    <div class="card  mx-5">
                                <div class="card-header bg-primary text-white"><i class="fa fa-plane"></i>All Routes
                                </div>
                                <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col" >ID</th>
                                        <th scope="col">Origin</th>
                                        <th scope="col">Destination</th>
                                
                                    </tr>

                                </thead>
                                <tbody>
                                <?php      
                          If (mysqli_num_rows($result) > 0) {
while ($row= mysqli_fetch_row($result))
{
    ?>
     <tr>
                        
                        <th scope="row"><?php echo $row['0']; ?></th>
                        <td><?php echo $row['1']; ?></td>
                                        <td><?php echo $row['2']; ?></td>
     </tr>
     <?php }} ?>                       
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                <div class="card bg-light mb-3">
                    <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-plane"></i> Routes</div>
                    <div class="card-body">
                        <p>Jamnagar</p>
                        <p>Mumbai</p>
                        <p>Hyderabad</p>
                        <p>Vishakhapatnam</p>
                        <p>Chennai</p>
                        <p>Bangalore</p>
                        <p>Delhi</p>
                        <p>Cochin</p>
                        <p>Coimbatore</p>
                        <p>Nagpur</p>
                        <p>Goa</p>
                        <p>Dubai</p>

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
<?php
session_start();
include('config.php');
$data=$_SESSION['uname'];
$_SESSION['dt'] = date("Y-m-d");
$_SESSION['dt2'] = date("H:i:s");

$log = "insert into adminogout(UserName,Date,Time) values('$data','" . $_SESSION['dt'] . "','" . $_SESSION['dt2'] . "')";
            $result1 = mysqli_query($conn, $log);
            header('Location: ../Login.php');

?>
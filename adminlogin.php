<?php
session_start();	
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$email=$_POST['email'];
$pwd=$_POST['pwd'];
admin_login($cxn,$email,$pwd);
?>


<?php
session_start();
include("bigsean.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$firstname = $_SESSION['firstname'];
$surname = $_SESSION['surname'];
$email = $_SESSION['email'];
$memberid = $_SESSION['id'];
$picture = $_SESSION['picture'];
$loginid = $_SESSION['loginid'];

date_default_timezone_set('Africa/Lagos');
$time = date("h:ia");
$date = date("y/m/d");
$query1="insert into logout (loginid,id,firstname,email,logouttime,logoutDate) values('$loginid','$memberid','$firstname','$email','$time','$date')";
	$result1 = mysqli_query($cxn,$query1) or     
		die("Couldn't execute SELECT query2");
		session_destroy();												
	header("Location: index.php");
?>
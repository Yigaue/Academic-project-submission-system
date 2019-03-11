<?php
		session_start();
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$id = $_GET['id'];
$roll = $_GET['roll'];
admin_refute($cxn,$id,$roll);
?>


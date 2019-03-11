<?php
session_start();	
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$email=$_POST['email'];
$firstname=$_POST['firstname'];
$surname=$_POST['surname'];
$pwd=$_POST['pwd'];
if(empty($email) or empty($firstname) or empty($surname) or empty($pwd))
{
	
}
else
{
 add_admin($cxn,$email,$surname,$firstname,$pwd);
}
?>
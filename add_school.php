<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$school = $_GET['school'];
 add_school($school,$cxn);
?>
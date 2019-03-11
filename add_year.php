<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$year = $_GET['year'];
 add_year($year,$cxn);
?>
<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$dept = $_GET['dept'];
add_dept($dept,$cxn);
?>
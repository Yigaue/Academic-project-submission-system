<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$bank = $_GET['bank'];
 add_bank($bank,$cxn);
?>
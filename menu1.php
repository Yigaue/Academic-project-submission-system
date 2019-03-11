<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$mem_id = $_GET['memomi'];
my_projects($cxn,$mem_id);

?>
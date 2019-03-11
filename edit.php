<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$id = $_GET['id'];
$mem_id = $_GET['memomi'];
edit_project($cxn,$id,$mem_id);
?>
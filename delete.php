<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$id = $_GET['id'];

delete_project($cxn,$id);
?>
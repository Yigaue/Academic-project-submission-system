<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$id = $_GET['id'];
Change_session($cxn,$id);
edit_profile($cxn);
?>
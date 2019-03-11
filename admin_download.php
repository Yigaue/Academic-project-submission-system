<?php
session_start();
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;

?>
<?php
$id = $_GET['id'];
$admin_id = $_SESSION['id'];
admin_download($cxn,$id,$admin_id);

?>

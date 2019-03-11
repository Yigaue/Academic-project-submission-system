
<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;

?>
<?php
$id = $_GET['id'];
download($cxn,$id);

?>

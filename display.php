
<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$value = intval($_GET['value']);
profile_tab($cxn,$value);
?>

  
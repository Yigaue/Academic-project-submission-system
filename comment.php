<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;

?>
<?php
$id = $_GET['id'];
$comment = $_POST['comment'];
$name = $_POST['name'];
if(empty($comment) or empty($name) )
{
	echo"	<script >
    window.location = 'projectpage.php?id=$id';
</script>";
}
else
{

insert_comment($cxn,$id,$name,$comment);
}
?>
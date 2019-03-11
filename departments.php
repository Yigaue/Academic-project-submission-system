<?php
include("design/header.php");
?>
<br><br><br>
<?php
$id = $_GET['id'];
display_departmental_projects($cxn,$id);
?>
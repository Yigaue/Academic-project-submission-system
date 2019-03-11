<?php
include("design/header.php");
?>
<div class='col-md-12' align='center' align='center'><h3>All Masters Departments</h3>
</div>
<div class='col-md-12' align='center'>
<?php
$id=2;
display_type_departments($cxn,$id);
?>
</div>
<br>
<div class='col-md-12 footer' align='center'>
<?php
include("footer.php");
?>
</div>
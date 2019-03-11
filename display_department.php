<?php
include("design/header.php");
?>
<div class='col-md-12' align='center' align='center'><h3>All Departments</h3>
</div>
<div class='col-md-12' align='center'>
<?php
display_departments($cxn);
?>
</div>
<br>
<div class='col-md-12 footer' align='center'>
<?php
include("footer.php");
?>
</div>
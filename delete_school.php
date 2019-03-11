<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$school = $_GET['school'];
select_schoolid($cxn,$school);
delete_school($school,$schoolid,$cxn);
?>
<div class='col-xm-12' id='e_d_reply' align='center'><h6>School Deleted <font color='green'><i class='glyphicon glyphicon-ok'></i></font></h6></div>
	<strong>Please Select a School then Click Edit/Delete</strong>
<div  class='col-md-12'>&nbsp;</div>
				<form role="form" action="" method="POST">
							<select id='edit_delete_school_name' name='edit_delete_school_name' class="form-control" >
							<?php
							select_school($cxn);
							?>
							 </select>
							 <div  class='col-md-12'>&nbsp;</div>
							 <div  class='col-md-12' align='center'>
		 <span><img src='images/b_edit.png'  alt='delete on Jarazone'/> <a onclick='e_d_edit_school()'> Edit</a></span>&nbsp;&nbsp;
		 
		 <span><a onclick='e_d_delete_school()'><img src='images/b_drop.png'  alt='delete on Jarazone'/> Delete</a></span>
								</div>
				</form>

<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$department = $_GET['dept'];
select_departmentid($cxn,$department);
$id = $departmentid;
delete_dept($department,$id,$cxn);
?>
<div class='col-xm-12' id='e_d_reply1' align='center'><h6>Department Deleted <font color='green'><i class='glyphicon glyphicon-ok'></i></font></h6></div>
	<strong>Please Select a Department then Click Edit/Delete</strong>
<div  class='col-md-12'>&nbsp;</div>
				<form role="form" action="" method="POST">
							<select id='edit_delete_dept_name' name='edit_delete_dept_name' class="form-control" >
							<?php
						select_department($cxn);
							?>
							 </select>
							 <div  class='col-md-12'>&nbsp;</div>
							 <div  class='col-md-12' align='center'>
		 <span><img src='images/b_edit.png'  alt='delete on Jarazone'/> <a onclick='e_d_edit_dept()'> Edit</a></span>&nbsp;&nbsp;
		 
		 <span><a onclick='e_d_delete_dept()'><img src='images/b_drop.png'  alt='delete on Jarazone'/> Delete</a></span>
								</div>
				</form>

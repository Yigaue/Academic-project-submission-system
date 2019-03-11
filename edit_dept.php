<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$department = $_GET['dept'];
select_departmentid($cxn,$department);
?>
<div class='col-xm-12' id='e_d_reply1' align='center'></div>
							<strong>Please edit the Department</strong>
<div  class='col-md-12'>&nbsp;</div>
				<form role="form" action="" method="POST">
							<div class="form-group">
								  <div class="col-sm-12">
									<input type="text" class="form-control" id="update_dept_name" name="update_dept_name" value='<?php echo $department ; ?>' placeholder="enter Department name" ></input>
								 </div>
								</div>
							 <div  class='col-md-12'>&nbsp;</div>
							 <div  class='col-md-12' align='center'>
		 <span><button onclick='update_dept(<?php echo $departmentid ; ?>)' type="button" class="btn btn-success btn-sm" >Save</button></span>&nbsp;&nbsp;
		 
		<span><button onclick='cancel_dept()' type="button" class="btn btn-primary btn-sm" >Cancel</button></span>
								</div>
				</form>
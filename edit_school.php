<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$school = $_GET['school'];
select_schoolid($cxn,$school);
?>
<div class='col-xm-12' id='e_d_reply' align='center'></div>
							<strong>Please edit the School</strong>
<div  class='col-md-12'>&nbsp;</div>
				<form role="form" action="" method="POST">
							<div class="form-group">
								  <div class="col-sm-12">
									<input type="text" class="form-control" id="update_school_name" name="update_school_name" value='<?php echo $school ; ?>' placeholder="enter school name" ></input>
								 </div>
								</div>
							 <div  class='col-md-12'>&nbsp;</div>
							 <div  class='col-md-12' align='center'>
		 <span><button onclick='update_school(<?php echo $schoolid ; ?>)' type="button" class="btn btn-success btn-sm" >Save</button></span>&nbsp;&nbsp;
		 
		<span><button onclick='cancel_school()' type="button" class="btn btn-primary btn-sm" >Cancel</button></span>
								</div>
				</form>
<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$year = $_GET['year'];
select_yearid($cxn,$year);
?>
<div class='col-xm-12' id='e_d_reply3' align='center'></div>
							<strong>Please edit the Year</strong>
<div  class='col-md-12'>&nbsp;</div>
				<form role="form" action="" method="POST">
							<div class="form-group">
								  <div class="col-sm-12">
									<input type="text" class="form-control" id="update_year_name" name="update_year_name" value='<?php echo $year ; ?>' placeholder="enter year" ></input>
								 </div>
								</div>
							 <div  class='col-md-12'>&nbsp;</div>
							 <div  class='col-md-12' align='center'>
		 <span><button onclick='update_year(<?php echo $yearid ; ?>)' type="button" class="btn btn-success btn-sm" >Save</button></span>&nbsp;&nbsp;
		 
		<span><button onclick='cancel_year()' type="button" class="btn btn-primary btn-sm" >Cancel</button></span>
								</div>
				</form>
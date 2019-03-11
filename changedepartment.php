<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
?>
<form role="form" action="" method="POST">
								<div class="form-group">
								  <div class="col-sm-12">
									<input type="dept" class="form-control" id="dept_name" name="dept_name" placeholder="enter department name" required></input>
								 </div>
								 
								</div>
								
								
								
								<div class="form-group">
								
							  <div class='col-md-12' style="text-align:center; "><button onclick='add_dept()' type='button' class="btn btn-primary btn-sm btn-block" >Submit</button></div>
							  
							 
								
										</div>
				</form>
			</div>
			<div  class='col-md-12'>&nbsp;</div>
			<div  class='col-md-12' align='center'><strong>Check if Department is already in the Database</strong>
						  <select class="form-control" >
							<?php
							select_department($cxn);
							?>
							 </select>
					</div>
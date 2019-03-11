<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
?>
<form role="form" action="" method="POST">
								<div class="form-group">
								  <div class="col-sm-12">
									<input type="year" class="form-control" id="year_num" name="year_num" placeholder="enter year " required></input>
								 </div>
								 
								</div>
								<div class="form-group">
							  <div class='col-md-12' style="text-align:center; "><button type="button" onclick='add_year()' class="btn btn-primary btn-sm btn-block" >Submit</button></div>
										</div>
				</form>
			<div  class='col-md-12'>&nbsp;</div>
			<div  class='col-md-12' align='center'><strong>Check if Year is already in the Database</strong>
						  <select class="form-control" >
							<?php
							select_year($cxn);
							?>
							 </select>
					</div>
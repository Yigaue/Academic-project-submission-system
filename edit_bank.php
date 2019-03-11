<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$bank = $_GET['bank'];
select_bankid($cxn,$bank);
?>
<div class='col-xm-12' id='e_d_reply2' align='center'></div>
							<strong>Please edit the Bank</strong>
<div  class='col-md-12'>&nbsp;</div>
				<form role="form" action="" method="POST">
							<div class="form-group">
								  <div class="col-sm-12">
									<input type="text" class="form-control" id="update_bank_name" name="update_bank_name" value='<?php echo $bank ; ?>' placeholder="enter Bank name" ></input>
								 </div>
								</div>
							 <div  class='col-md-12'>&nbsp;</div>
							 <div  class='col-md-12' align='center'>
		 <span><button onclick='update_bank(<?php echo $bankid ; ?>)' type="button" class="btn btn-success btn-sm" >Save</button></span>&nbsp;&nbsp;
		 
		<span><button onclick='cancel_bank()' type="button" class="btn btn-primary btn-sm" >Cancel</button></span>
								</div>
				</form>
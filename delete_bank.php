<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$bank = $_GET['bank'];
select_bankid($cxn,$bank);
$id = $bankid;
delete_bank($bank,$id,$cxn);
?>
<div class='col-xm-12' id='e_d_reply2' align='center'><h6>Bank Deleted <font color='green'><i class='glyphicon glyphicon-ok'></i></font></h6></div>
	<strong>Please Select a Bank then Click Edit/Delete</strong>
<div  class='col-md-12'>&nbsp;</div>
				<form role="form" action="" method="POST">
							<select id='edit_delete_bank_name' name='edit_delete_bank_name' class="form-control" >
							<?php
						select_bank($cxn);
							?>
							 </select>
							 <div  class='col-md-12'>&nbsp;</div>
							 <div  class='col-md-12' align='center'>
		 <span><img src='images/b_edit.png'  alt='delete on Jarazone'/> <a onclick='e_d_edit_bank()'> Edit</a></span>&nbsp;&nbsp;
		 
		 <span><a onclick='e_d_delete_bank()'><img src='images/b_drop.png'  alt='delete on Jarazone'/> Delete</a></span>
								</div>
				</form>

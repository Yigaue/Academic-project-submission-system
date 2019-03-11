<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$year = $_GET['year'];
select_yearid($cxn,$year);
$id = $yearid;
delete_year($year,$id,$cxn);
?>
<div class='col-xm-12' id='e_d_reply3' align='center'><h6>Year Deleted <font color='green'><i class='glyphicon glyphicon-ok'></i></font></h6></div>
	<strong>Please Select a Year then Click Edit/Delete</strong>
<div  class='col-md-12'>&nbsp;</div>
				<form role="form" action="" method="POST">
							<select id='edit_delete_year_name' name='edit_delete_year_name' class="form-control" >
							<?php
						select_year($cxn);
							?>
							 </select>
							 <div  class='col-md-12'>&nbsp;</div>
							 <div  class='col-md-12' align='center'>
		 <span><img src='images/b_edit.png'  alt='delete on Jarazone'/> <a onclick='e_d_edit_year()'> Edit</a></span>&nbsp;&nbsp;
		 
		 <span><a onclick='e_d_delete_year()'><img src='images/b_drop.png'  alt='delete on Jarazone'/> Delete</a></span>
								</div>
				</form>

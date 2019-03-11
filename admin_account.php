<?php
session_start();
if(isset($_SESSION['auth_admin'])) 
	 {
		 	if($_SESSION['auth_admin'] != "yes")
	{
		$error="Sorry, You Have to Log in to view this page";
		header("Location: admin_login.php?error= $error");
	}
	 }
else
{

				$error="Sorry, You Have to Log in to view this page";
		header("Location: admin_login.php?error= $error");
}

$firstname = $_SESSION['firstname'];
$surname = $_SESSION['surname'];
$email = $_SESSION['email'];
$id = $_SESSION['id'];
$picture = $_SESSION['picture']  ;
include("signuphead.php");
echo"<br><br>";
?>

<div class='col-md-2'>
		<div align='center'><img src='photo/<?php echo $picture ?>' href='photo/<?php echo$picture ?>' class='img-square' alt='$firstname on Jarazone' width='100' height='15%' align='center' style='align:left;'></div>
		<br> <strong>Name :</strong><?php echo "$firstname $surname"; ?>
		<br> <strong>Position :</strong> Admin
		
		
		<div class='col-md-12' align='center'><strong><ul>Add</ul></strong></div>
		
<div ><a data-toggle='collapse' align='center'href='#Add_school' style='width:100%; text-align:center;'class='btn btn-primary btn-md' role='button'>Add School <i class='fa fa-caret-down'></i></a><br></div>
		<div id='Add_school' class='collapse'>
		
		<div class='col-md-12' align='center'><strong>Add School</strong></div>
							<div class='col-xm-12' id='reply' align='center'></div>
							<div class='col-md-12' id='school'>
							<form role="form" action="" method="POST">
								<div class="form-group">
								  <div class="col-sm-12">
									<input type="school" class="form-control" id="school_name" name="school_name" placeholder="enter school name" ></input>
								 </div>
								 
								</div>
								
								
								
								<div class="form-group">
								
							  <div class='col-md-12' style="text-align:center; "><button onclick='add_school()' type="button" class="btn btn-primary btn-sm btn-block" >Submit</button></div>
							  
							 
								
										</div>
				</form>
			
			<div  class='col-md-12'>&nbsp;</div>
			<div  class='col-md-12' align='center'><strong>Check if School is already in the Database</strong>
						  <select class="form-control" >
							<?php
							select_school($cxn);
							?>
							 </select>
					</div>
				
				</div>
				<div  class='col-md-12'>&nbsp;</div>
		</div>
			
<div><a data-toggle='collapse' href='#Add_dept' style='width:100%; text-align:center;'class='btn btn-primary btn-md' role='button'>Add Department <i class='fa fa-caret-down'></i></a><br></div>	
		<div id='Add_dept' class='collapse'>
<div class='col-md-12' align='center'><strong>Add Department</strong></div>
							<div class='col-xm-12' id='reply1' align='center'></div>
							<div class='col-md-12' id='department'>
							<form role="form" action="" method="POST">
								<div class="form-group">
								  <div class="col-sm-12">
									<input type="dept" class="form-control" id="dept_name" name="dept_name" placeholder="enter department name" ></input>
								 </div>
								 
								</div>
								
								
								
								<div class="form-group">
								
							  <div class='col-md-12' style="text-align:center; "><button onclick='add_dept()' type='button' class="btn btn-primary btn-sm btn-block" >Submit</button></div>
							  
							 
								
										</div>
				</form>

			<div  class='col-md-12'>&nbsp;</div>
			<div  class='col-md-12' align='center'><strong>Check if Department is already in the Database</strong>
						  <select class="form-control" >
							<?php
							select_department($cxn);
							?>
							 </select>
					</div>
								</div>
				<div  class='col-md-12'>&nbsp;</div>
		</div>

<div><a  data-toggle='collapse' href='#Add_bank' style='width:100%; text-align:center;'class='btn btn-primary btn-md' role='button'>Add Bank <i class='fa fa-caret-down'></i></a><br></div>
		<div id='Add_bank' class='collapse'>
		
		<div class='col-md-12' align='center'><strong>Add Bank</strong></div>
							<div class='col-xm-12' id='reply2' align='center'></div>
							<div class='col-md-12' id='bank'>
							
							<form role="form" action="" method="POST">
								<div class="form-group">
								  <div class="col-sm-12">
									<input type="bank" class="form-control" id="bank_name" name="bank_name" placeholder="enter bank name" required></input>
								 </div>
								 
								</div>
								
								
								
								<div class="form-group">
							  <div class='col-md-12' style="text-align:center; "><button type="button" onclick='add_bank()' class="btn btn-primary btn-sm btn-block" >Submit</button></div>
										</div>
				</form>
			
			<div  class='col-md-12'>&nbsp;</div>
			<div  class='col-md-12' align='center'><strong>Check if Bank is already in the Database</strong>
						  <select class="form-control" >
							<?php
							select_bank($cxn);
							?>
							 </select>
					</div>
					</div>
				<div  class='col-md-12'>&nbsp;</div>
		</div>

<div><a  data-toggle='collapse'  href='#Add_year'  style='width:100%; text-align:center;'class='btn btn-primary btn-md' role='button'>Add Year <i class='fa fa-caret-down'></i></a><br></div>		
		<div id='Add_year' class='collapse'>
		<div class='col-md-12' align='center'><strong>Add Year</strong></div>
							<div class='col-xm-12' id='reply3' align='center'></div>
							<div class='col-md-12' id='year'>
							
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
					
				</div>
				<div  class='col-md-12'>&nbsp;</div>
		</div>
		<div  class='col-md-12'>&nbsp;</div>
		
		
		
		
		
		
		
		
		
		
		
		
		<div class='col-md-12' align='center'><strong><ul>Edit/Delete</ul></strong></div>
		
<div ><a data-toggle='collapse' align='center'href='#ed_school' style='width:100%; text-align:center;'class='btn btn-primary btn-md' role='button'> School <i class='fa fa-caret-down'></i></a><br></div>
		<div id='ed_school' class='collapse'>
		
							
							<div class='col-md-12' id='e_d_school' align='center'>
							<div class='col-xm-12' id='e_d_reply' align='center'></div>
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
						</div>
				<div  class='col-md-12'>&nbsp;</div>
		</div>
			
			
			
			
			
			
			
<div><a data-toggle='collapse' href='#ed_dept' style='width:100%; text-align:center;'class='btn btn-primary btn-md' role='button'> Department <i class='fa fa-caret-down'></i></a><br></div>	
		<div id='ed_dept' class='collapse'>
		
							
							<div class='col-md-12' id='e_d_dept' align='center'>
							<div class='col-xm-12' id='e_d_reply1' align='center'></div>
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
		 <span><img src='images/b_edit.png'  alt='edit on Jarazone'/> <a onclick='e_d_edit_dept()'> Edit</a></span>&nbsp;&nbsp;
		 
		 <span><a onclick='e_d_delete_dept()'><img src='images/b_drop.png'  alt='delete on Jarazone'/> Delete</a></span>
								</div>
				</form>
						</div>
				<div  class='col-md-12'>&nbsp;</div>
		</div>
		
		
		
		
		
		
		

			
<div><a data-toggle='collapse' href='#ed_bank' style='width:100%; text-align:center;'class='btn btn-primary btn-md' role='button'> Bank <i class='fa fa-caret-down'></i></a><br></div>	
		<div id='ed_bank' class='collapse'>
		
							
							<div class='col-md-12' id='e_d_bank' align='center'>
							<div class='col-xm-12' id='e_d_reply2' align='center'></div>
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
		 <span><img src='images/b_edit.png'  alt='edit on Jarazone'/> <a onclick='e_d_edit_bank()'> Edit</a></span>&nbsp;&nbsp;
		 
		 <span><a onclick='e_d_delete_bank()'><img src='images/b_drop.png'  alt='delete on Jarazone'/> Delete</a></span>
								</div>
				</form>
						</div>
				<div  class='col-md-12'>&nbsp;</div>
		</div>
		
		
		
		
		
		
		
		

<div><a data-toggle='collapse' href='#ed_year' style='width:100%; text-align:center;'class='btn btn-primary btn-md' role='button'> Year <i class='fa fa-caret-down'></i></a><br></div>	
		<div id='ed_year' class='collapse'>
		
							
							<div class='col-md-12' id='e_d_year' align='center'>
							<div class='col-xm-12' id='e_d_reply3' align='center'></div>
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
		 <span><img src='images/b_edit.png'  alt='edit on Jarazone'/> <a onclick='e_d_edit_year()'> Edit</a></span>&nbsp;&nbsp;
		 
		 <span><a onclick='e_d_delete_year()'><img src='images/b_drop.png'  alt='delete on Jarazone'/> Delete</a></span>
								</div>
				</form>
						</div>
				<div  class='col-md-12'>&nbsp;</div>
		</div>
		
		
		
	</div>
		
		
	<div class='col-md-10'>
	<div class='col-md-12' align='center' id='reup' >
	Projects will be uploaded here.
	</div>
	<div class='col-md-12' align='center' >
	<form action='reupload.php' class='dropzone' id='dropform'>
<input type='hidden' name='id' id='id'  value='' />
</form>
</div>

	<br>
	<?php
	admin_account($cxn,$rollss);
	?>
	</div>
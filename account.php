<?php
session_start();
if(isset($_SESSION['auth'])) 
	 {
		 	if($_SESSION['auth'] != "yes")
			{
				$error="Sorry, You Have to Log in to view this page";
				echo"<script>location.href='login_form.php?error=$error'</script>";
			}
	 }
else
{

				$error="Sorry, You Have to Log in to view this page";
				echo"<script>location.href='login_form.php?error=$error'</script>";
}
$firstname = $_SESSION['firstname'];
$surname = $_SESSION['surname'];
$email = $_SESSION['email'];
$id = $_SESSION['id'];
include("signuphead.php");
?>

<div class="col-md-12 content" style='align:center;'>
<div class='col-md-12' align='center'>&nbsp;
</div>
<div class='col-md-12' align='center'>&nbsp;
</div>

<div class='col-md-1'>
</div>
<div class="well well-md col-md-10" id='all' align='center' style='background-color:black; align:center; color:white;'>
<?php
$firstname = $_SESSION['firstname'];
	$surname = $_SESSION['surname'];
		$email = $_SESSION['email'];
		$id = $_SESSION['id'];
		$picture = $_SESSION['picture'] ;
		
		echo"<img src='photo/$picture' href='photo/$picture' class='img-circle' alt='$firstname on Jarazone' width='200' height='35%' align='center' style='align:center;'><br>";
		if(isset($_GET['errorr'])) 
	 {      
 $errorr = $_GET['errorr'];
			echo  "<div id='er'>$errorr</div> ";
	} 
	?>
		<div id='pic'><a onclick='pic()'><h6>&nbsp;&nbsp;&nbsp;Edit Profile Picture <i class='glyphicon glyphicon-pencil'></i></h6></a></div><br>
		<div id='namee'><h4>&nbsp;&nbsp;&nbsp; <?php echo "$firstname $surname"; ?></h4><br><br></div>
		
	<ul class='nav nav-pills' style='width:100%;'>
    <li class='active'><a data-toggle='tab' href='#Profile'  ><i class='glyphicon glyphicon-user'></i> Profile</a></li>
    <li><a  href='projectform.php'><i class='fa fa-cloud-upload'></i> Upload Project</a></li>
    <li ><a data-toggle='tab' href='#menu1' ><i class='fa fa-database'></i>  Projects</a></li>
	 <li><a data-toggle='tab' href='#menu2' ><i class='fa fa-usd'></i> Earnings</a></li>
    <li ><a  href='logout.php'><i class='glyphicon glyphicon-log-out'></i> Log Out</a></li>
  </ul>

</div>
<div class='col-md-1'>
</div>
<div class='col-md-12' align='center'>
<div class='col-md-3'>
</div>
<div class='col-md-6'  style='align:center;'>

  <div class='tab-content'>
   
 <div id='Profile' class='tab-pane fade in active'>
 <div id="display_profilee" align='center' style=" text-align:center;">
<?php
profile($cxn);
?>
   </div>
 <div id="edit_profile" align='center' style="display: none; text-align:center;">
<?php 
edit_profile($cxn);
?>
   </div>
 </div>
    <div id='menu1' class='tab-pane fade col-md-12'>
	 <div id="display_projectse" align='center' style=" text-align:center;">
<?php
$mem_id = $_SESSION['id'];
my_projects($cxn,$mem_id);
?>
   </div>
<div id='info'>
</div>
</div>
    <div id='menu2' class='tab-pane fade'>
	<?php
	$memo_id = $_SESSION['id'];
my_projects_earnings($cxn,$memo_id);
?>
<div id='infoe'>
</div>
</div>
  </div>
<div class='col-md-12' id='infoh' style='align:center;'></div>
</div>
<div class='col-md-3'>
</div>
</div>
<div class='col-md-12' align='center'>
<div class='col-md-2'>
</div>
<div class='col-md-8' id='info1'></div>
<div class='col-md-2'>
</div>
</div>
<br>
<div class='col-md-12' align='center'>&nbsp;
</div>
<div class='col-md-12' align='center'>&nbsp;
</div>
<div class='col-md-12' align='center'>&nbsp;
</div>
</div>
<div class='col-md-12 footer' align='center'>
<?php
include("footer.php");
?>
</div>
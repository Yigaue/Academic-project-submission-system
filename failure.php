<?php
include("signuphead.php");
 if(isset($_GET['error'])) 
	 {      
 $error = $_GET['error'];
			echo "<br><br><br><h5 style='color:red; text-align:center;'><font color='red'><i class='glyphicon glyphicon-warning-sign'></i></font> $error </h5><br>
			<div class='col-md-12'  align='center'><a href='index.php' class='btn btn-primary btn-md' role='button'>Back To Home</a>
			<a href='projectform.php' class='btn btn-success btn-md' role='button'>Back To Upload Form</a></div>";     
	} 
?>
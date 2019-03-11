 <?php
include("signuphead.php");
?>
<div id='change'>
<?php
if(isset($_GET['error'])) 
	 {      
 $error = $_GET['error'];
			echo "<br><br><h5 style='color:red; text-align:center;'>$error </h5>";     
	} 
?>
<div class='col-md-12' align='center'><strong>Jara<font color='#ff3300'>zone</font></strong> Log In</div><br>
<div class='col-md-3' ></div><div class='col-md-6'  style='background-color:black; align:center; color:white; '>

<form role="form" action="login1.php" method="POST">
 <div class='col-md-12'>
	<div class="form-group">
     <div class='col-md-1'></div>
      <label class="control-label col-sm-4" style="text-align:right;" for="email">Email <i class="fa fa-user"></i>:</label>
      <div class="col-sm-4">
        <input type="email" class="form-control" id="email" name="email" placeholder="enter email" required></input>
     </div>
	  <div class='col-md-3'></div>
    </div>
	</div>
	 <div class='col-md-12'>
    <div class="form-group">
     <div class='col-md-1'></div>
      <label class="control-label col-sm-4" style="text-align:right;" for="pwd">Password <i class="fa fa-lock"></i>:</label>
     <div class="col-sm-4">      
        <input type="password" class="form-control" id="pwd" name="pwd"placeholder="enter password"required/>
       </div>
	  <div class='col-md-3'></div>
    </div>
	</div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10" style="text-align:center;">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
	 <div class='col-md-12'>
    <div class="form-group">
     <div class='col-md-4'></div>
  <div class='col-md-4' style="text-align:center; "><button type="submit" class="btn btn-primary btn-sm btn-block" >Log In</button></div>
   <div class='col-md-4'></div>
 <div class='col-md-12' align='center'> <a onclick='login_signup(1)' class='btn btn-success btn-sm' role='button'>Create New Account</a></div>
    </div>
	</div>
	</form>
	</div><div class='col-md-3' ></div>
	</body>
	</html>
	</div>
	
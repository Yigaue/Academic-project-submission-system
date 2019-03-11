<?php
include("signuphead.php");
?>
<div id='change1'>
<?php
if(isset($_GET['error'])) 
	 {      
 $error = $_GET['error'];
			echo "<br><br><br><h5 style='color:red; text-align:center;'>$error </h5>";     
	} 
	?>
<body>
<br><br><br>
<div class="container">
<div class='col-md-12' align='center'><strong>Sign Up To Be A Jara<font color='#ff3300'>zone</font> Administrator</strong></div><br>
<div class='col-md-3' ></div><div class='col-md-6'  style='background-color:black; align:center; color:white; '>
 <form role="form"  id='valid' action='adminsignup.php' method='POST'>
 <div class='col-md-12'>
   <div class="form-group">
	<div class='col-md-1'></div>
      <label class="control-label col-sm-4" style="text-align:right;"for="firstname">First Name <i class="fa fa-user"></i>:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="enter Firstname"required></input>
      </div>
	  <div class='col-md-3'></div>
    </div>
	</div>
	<div class='col-md-12'>
   <div class="form-group">
	<div class='col-md-1'></div>
      <label class="control-label col-sm-4" style="text-align:right;"for="Surname">Surname <i class="fa fa-user"></i>:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" id="surname" name="surname" placeholder="enter Surname"required></input>
      </div>
	 <div class='col-md-3'></div>
    </div>
	</div>
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
      <label class="control-label col-sm-4" style="text-align:right;" for="pwd">New Password <i class="fa fa-lock"></i>:</label>
     <div class="col-sm-4">      
        <input type="password" class="form-control" id="pwd" name="pwd"placeholder="enter new password"required/>
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
    <div class='col-md-4' style="text-align:center; ">

	<button  id="submit_up" type='submit'  class="btn btn-primary btn-sm btn-block" data-loading-text="Signing You Up...">Sign Up</button>
	<a onclick='admin_login_signup(2)' class='btn btn-success btn-sm' role='button'>Go Back</a></div>
   <div class='col-md-4'></div>
    </div>
	</div>
	</form>
	</div><div class='col-md-3' ></div>
	</div>
	</body>
	</html>
	</div>
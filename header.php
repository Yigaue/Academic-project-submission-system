<!--

Author: L.G
Author URL: http://wwww.jarazone.com
-->
<!DOCTYPE html>
<html lang="en">

<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;

?>
						
				
				
			

<head>
<title>Project library </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="jarazone.com helps nigeria students to buy and or sell any their stuff conveniently" />
<meta http-equiv="refresh" content="1800"><base href="index.php" target="_self">
<meta name="author" content="noble ideas">
<link rel="shortcut icon" href="images/jarazonelogobig.jpg" type="image/x-icon">
<meta http-equiv="X-UA-Compatible" content="IE=IE,edge">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->

<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->



		  

<style type="text/css">

.style1 {color: #FF6600}
</style>
<div id='wrapper'>
		<div id='header'>

				<link rel="stylesheet" href="head.css">
				<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
						<script src="bootstrap/js/jquery.js"> </script>
							<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
								<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
									<script src="bootstrap/js/bootstrap.js"> </script>
									<?php
									count_projects($cxn);
									
									?>
									<?php
									/*echo $entries ; */
								
									?>
									<script>

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://www.javascriptsource.com -->
<!-- Ben (BassClar89@aol.com) -->

<!-- Begin
<!--
var g_iCount = new Number();

// CHANGE THE COUNTDOWN NUMBER HERE - ADD ONE TO IT //
var g_iCount = -1;

function startCountdown(){
       if((g_iCount ) < <?php echo $entries ; ?>){
               g_iCount = g_iCount + 1;
               numberCountdown.innerText = g_iCount;
               setTimeout('startCountdown()',300);
       }
}
//  End -->
</script>
									
									
								
<script>
function blinker() {
	$('.blinking').fadeOut(2000);
	$('.blinking').fadeIn(2000);
}
setInterval(blinker, 200);
</script>


<script>
$(document).ready(function(){
    $("#paid").one("click", function(){
        $("p").append("<br><div   class='form-group' ><div class='col-md-4' ></div><label class='control-label col-md-2'>  Price of your Project <img src='images/naira.jpg' class='img-circle' alt='Cinque Terre' width='20' height='20'></label><div  class='col-md-2'>	<select class='form-control' name='price'>	<?php	select_price($cxn);	?>	</select></div></div><div class='col-md-4' ></div><br><div class='col-md-4' ></div><div   class='form-group' ><label class='control-label col-md-2'> Account Name</label><div  class='col-md-2'><input class='form-control' type='text'  placeholder='enter Account Name'name='accountname'/></div></div><div class='col-md-4' ></div><br>	<div class='col-md-4' >	</div>	<div   class='form-group' >	<label class='control-label col-md-2'> Account Number	</label>	<div  class='col-md-2'>	<input class='form-control' type='text'  placeholder='enter Account number'name='accountnumber'/>	</div>	</div>	<div class='col-md-4' >	</div>	<br>	<div class='col-md-4' >	</div>	<div   class='form-group' >	<label class='control-label col-md-2'> Bank	</label>	<div  class='col-md-2'>	<select class='form-control' name='bank'>	<?php	select_bank($cxn);	?>	</select>	</div>	</div>	<div class='col-md-4' >	</div><br><div class='col-md-4' ></div><div   class='form-group' ><label class='control-label col-md-2'> Account type</label><div  class='col-md-2'><select class='form-control'   placeholder='enter Account tye'name='accounttype'><?php	select_acctype($cxn);	?>	</select></div></div><div class='col-md-4' ></div><br><br><div class='col-md-4' ></div><div   class='form-group' ><label class='control-label col-md-2'> Email</label><div  class='col-md-2'><input class='form-control' type='Email'  placeholder='enter Email'name='email'/></div></div><div class='col-md-4' ></div><br>	");
    });
    
});
$(document).ready(function(){
    $("#free").click(function(){
        $("p").hide();
    });
    $("#paid").click(function(){
        $("p").show();
    });
});

function changeImage(myImage4) {
    document.getElementById("myImage4").src = img.src.replace("gold.jpg", "Fr-star - Copy (3).png");
}
</script>

</head>
</div>
		<body onLoad="startCountdown()">
		<!-- comment-->
		<div id="fb-root"></div>
<script>
(function(d, s, id)
		 {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1880567655496937";
		  fjs.parentNode.insertBefore(js, fjs);
		}
		(document, 'script', 'facebook-jssdk')
);
</script>
<!--like button-->
<div id="fb-root"></div>
<script>
(function(d, s, id) 
{
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=1880567655496937";
  fjs.parentNode.insertBefore(js, fjs);
}
(document, 'script', 'facebook-jssdk')
);
</script>
		<br><a href="index.php"><img src="images/download.png" class="img-head" alt="jarazone"></a><br>
		<br>&nbsp;       <br>
		<div class="header">

		<div class="container-fluid">
			
		  <div class="logo">
				<h1 ><a href="index.php">Project Library<span>welcome to jarazone</span></a></h1>
		  </div>
			
			<div class="header-ri">
				<ul class="social-top">
					<li><a href="facebook.com" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="www.twitter.com" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="www.pinterest.com" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					
			  </ul>	
			</div>
		

				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
						<li ><a href="index.php" class="hyper"><span>Home</span></a></li>	
							
							<li ><a href="projectform.php" class="hyper "><span>upload project</span></a></li>
							
							
						</li>
						<li><a href="index.php#footer" class="hyper"> <span>Our Story</span></a></li>
						<li><a href="contact.php" class="hyper"> <span>Contact Us</span></a></li>
							
                    <li><a href="project/JZC/index.php" class="hyper"><span>Join the community</span></a></li>
					</ul>
				</div>
				</nav>
					
				  <div class="clearfix"></div>
				</div>
					
  </div>			
</div>

<br>

</body>
</html>
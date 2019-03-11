<?php
include("signuphead.php");
?>
<div class="col-md-12" align='center'>
				<h1>			
				<a  href="index.php" align='center'><img src="images/download.png"  align='center'style='width:150px; height:200px align:center;' alt="jarazone"/></a>
				</h1>
				 </div>
			
				  <div id="loding" align='center' style="display: none; text-align:center;">
 <br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br>
   <span class="loding_txt">Loading....</span>
   </div>
<div class='col-md-12' align='center' id='top_dept'>
<h4><span><strong>Please Select A Department</strong></span></h4>
<?php
top_masters_display_dept($cxn);
?>
</div>
<br>
<div class='col-md-12 footer' align='center'>
<?php
include("footer.php");
?>
</div>
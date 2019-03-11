<?php
include("design/header.php");
?>
		<div id='content'style='width:100%;'>
<!-- THREE STEPS TO INSTALL NUMBER COUNTDOWN:

  1.  Copy the coding into the HEAD of your HTML document
  2.  Add the onLoad event handler into the BODY tag
  3.  Put the last coding into the BODY of your HTML document  -->

<!-- STEP ONE: Paste this code into the HEAD of your HTML document  -->



<!-- STEP TWO: Insert the onLoad event handler into your BODY tag  -->


<div class='col-md-12 dark' align='center'>
<!-- STEP THREE: Copy this code into the BODY of your HTML document  -->

<br>
<br>
<br>
<br>


<font face="Digital Readout Upright" color="white" size="7">
 <div id="counting_p" align='center' style=" text-align:center;">
 <br> <br> <br>
   <span class="counting_txt">Counting Projects....</span>
   </div>
<a href='allprojects.php' style='color:white;'> <div align="center" id="numberCountdown"></div></a>
</font>

<p class="blinking" align='center'>
<font face="arial, helvetica" size"-20" color='white'>Projects Added<br>
</font>
</p>
<br>
<a href='projectform.php' class='btn btn-primary btn-lg' role='button'>Add A Project</a>
<br>
<br>
<br>
<marquee>Recommended Project Upload Format(Doc & Docx).


</marquee>
</div>

<div class='col-md-12 dark1' align='center' style='height:300%;'>
<h3><strong>
<br><h1><i class="fa fa-cloud"></i>
</h1>About us<br><br>
<p o align='center'>Project Library is an online platform where<br> Students and Alumni can easily share Project materials with each other</p>
</strong></h3>
<div class='col-md-3'></div>
		<div class='well well-md col-md-6' style='background-color: text-align:center; #f8f8f8; border-color: #e7e7e7;'  id='tell'>
 Please tell us your school and department to serve You better.
												<form role="form" action="" method="POST">
													 <div class='col-md-12'>
														 
														<div class="form-group">
														  <label class="control-label col-sm-4" style="text-align:right;" for="schooll">School:</label>
														 <div class="col-sm-4">      
															 <select class="form-control" name='schooll' id='schooll'>
																	<?php
																	select_school($cxn);
																	?>
															 </select>
														   </div>
														  <div class='col-md-4'></div>
														</div>
														
														</div>
														
														 <div class='col-md-12'>
														 
														<div class="form-group">
														  <label class="control-label col-sm-4" style="text-align:right;" for="deptt">Department:</label>
														 <div class="col-sm-4">      
															 <select class="form-control" name='deptt' id='deptt'>
																	<?php
																	select_department($cxn);
																	?>
															 </select>
														   </div>
														  <div class='col-md-4'></div>
														</div>
														
														</div>
														
														 <div class='col-md-12'>
														<div class="form-group">
														 <div class='col-md-4'></div>
													  <div class='col-md-4' style="text-align:center; ">
													  <button type="button" class="btn btn-success btn-sm btn-block" onclick='tell_projects()'>Tell</button></div>
													   <div class='col-md-4'></div>
										
														</div>
														</div>
														</form>
</div><div class='col-md-3'></div>
</div>

<!-- Script Size:  1.33 KB -->
 <div class='col-md-12 dark2' style='height: 500%;'align='center'><h3><strong>
<br><br>
Looking for a Project?<br><br><p  class="blinking" align='center'>Search here!!</p>
<form class="form-horizontal" role="form" action='search.php' method='POST'>
<br>
<div class='col-md-4'>
</div>
<div class='col-md-4'>
  <input type="search" name="search" placeholder="Search Projects or Members" style='width:75%'><button type="submit"   class="btn btn-primary btn-lg"><i class='fa fa-search'></i></button>
  </div>
  <div class='col-md-4'>
  </div>
</form><br>

 <div class='col-md-12' style='text-align:center'>or<br>Search By 
  </div>
  <div class='col-md-12'>&nbsp;</div>
<div class='col-md-12'>
<a href='display_department.php' class='btn btn-primary btn-md' role='button' > Department </a>
</div>
<div class='col-md-12'>&nbsp;</div>
<div class='col-md-12'>
<a href='undergraduate.php' class='btn btn-primary btn-md' role='button' >Undergraduate </a>
</div>
<div class='col-md-12'>&nbsp;</div>
<div class='col-md-12'>
<a href='masters.php' class='btn btn-primary btn-md' role='button' style='width:30%;' > Masters</a>
<a href='phd.php'class='btn btn-primary btn-md' role='button' style='width:25%;' >P.H.D.</a>
<a href='others.php'class='btn btn-primary btn-md' role='button' style='width:30%;' >Others.</a>

</div>
<div class='col-md-12'>&nbsp;</div>
 </div>
  <div class='col-md-12 dark1' style='height: 500%;'align='center'>
  <div class='col-md-6'>
    <div id='' align='center'><h3><strong>How To's On Jarazone</strong></h3></div>
  
  <div ><a data-toggle='collapse' align='center'href='#how_to1' style='width:100%; text-align:center;'class='btn btn-default btn-md' role='button'>How To Do This<i class='fa fa-caret-down'></i></a><br></div>
  <div id='how_to1' class='collapse'>
		
		<div class='col-md-12' align='center'><strong>How To Do This</strong></div>
						
				<div  class='col-md-12'>&nbsp;</div>
		</div>
  <div ><a data-toggle='collapse' align='center'href='#how_to2' style='width:100%; text-align:center;'class='btn btn-default btn-md' role='button'>How To Do That<i class='fa fa-caret-down'></i></a><br></div>
  <div id='how_to2' class='collapse'>
		
		<div class='col-md-12' align='center'><strong>How To Do That</strong></div>
						
				<div  class='col-md-12'>&nbsp;</div>
		</div>
 <div ><a data-toggle='collapse' align='center'href='#how_to3' style='width:100%; text-align:center;'class='btn btn-default btn-md' role='button'>How To Do These<i class='fa fa-caret-down'></i></a><br></div>
  <div id='how_to3' class='collapse'>
		
		<div class='col-md-12' align='center'><strong>How To Do These</strong></div>
						
				<div  class='col-md-12'>&nbsp;</div>
		</div>
 <div ><a data-toggle='collapse' align='center'href='#how_to4' style='width:100%; text-align:center;'class='btn btn-default btn-md' role='button'>How To Do Them<i class='fa fa-caret-down'></i></a><br></div>
  <div id='how_to4' class='collapse'>
		
		<div class='col-md-12' align='center'><strong>How To Do Them</strong></div>
						
				<div  class='col-md-12'>&nbsp;</div>
		</div>
		<div ><a data-toggle='collapse' align='center'href='#how_to5' style='width:100%; text-align:center;'class='btn btn-default btn-md' role='button'>How To Do Them<i class='fa fa-caret-down'></i></a><br></div>
  <div id='how_to5' class='collapse'>
		
		<div class='col-md-12' align='center'><strong>How To Do Them</strong></div>
						
				<div  class='col-md-12'>&nbsp;</div>
		</div>
		<div ><a data-toggle='collapse' align='center'href='#how_to6' style='width:100%; text-align:center;'class='btn btn-default btn-md' role='button'>How To Do Them<i class='fa fa-caret-down'></i></a><br></div>
  <div id='how_to6' class='collapse'>
		
		<div class='col-md-12' align='center'><strong>How To Do Them</strong></div>
						
				<div  class='col-md-12'>&nbsp;</div>
		</div>
		<div ><a data-toggle='collapse' align='center'href='#how_to7' style='width:100%; text-align:center;'class='btn btn-default btn-md' role='button'>How To Do Them<i class='fa fa-caret-down'></i></a><br></div>
  <div id='how_to7' class='collapse'>
		
		<div class='col-md-12' align='center'><strong>How To Do Them</strong></div>
						
				<div  class='col-md-12'>&nbsp;</div>
		</div>
		<div ><a data-toggle='collapse' align='center'href='#how_to8' style='width:100%; text-align:center;'class='btn btn-default btn-md' role='button'>How To Do Them<i class='fa fa-caret-down'></i></a><br></div>
  <div id='how_to8' class='collapse'>
		
		<div class='col-md-12' align='center'><strong>How To Do Them</strong></div>
						
				<div  class='col-md-12'>&nbsp;</div>
		</div>
		<div ><a data-toggle='collapse' align='center'href='#how_to9' style='width:100%; text-align:center;'class='btn btn-default btn-md' role='button'>How To Do Them<i class='fa fa-caret-down'></i></a><br></div>
  <div id='how_to9' class='collapse'>
		
		<div class='col-md-12' align='center'><strong>How To Do Them</strong></div>
						
				<div  class='col-md-12'>&nbsp;</div>
		</div>
		<div ><a data-toggle='collapse' align='center'href='#how_to10' style='width:100%; text-align:center;'class='btn btn-default btn-md' role='button'>How To Do Them<i class='fa fa-caret-down'></i></a><br></div>
  <div id='how_to10' class='collapse'>
		
		<div class='col-md-12' align='center'><strong>How To Do Them</strong></div>
						
				<div  class='col-md-12'>&nbsp;</div>
		</div>
		<div ><a data-toggle='collapse' align='center'href='#how_to11' style='width:100%; text-align:center;'class='btn btn-default btn-md' role='button'>How To Do Them<i class='fa fa-caret-down'></i></a><br></div>
  <div id='how_to11' class='collapse'>
		
		<div class='col-md-12' align='center'><strong>How To Do Them</strong></div>
						
				<div  class='col-md-12'>&nbsp;</div>
		</div>
		<div ><a data-toggle='collapse' align='center'href='#how_to12' style='width:100%; text-align:center;'class='btn btn-default btn-md' role='button'>How To Do Them<i class='fa fa-caret-down'></i></a><br></div>
  <div id='how_to12' class='collapse'>
		
		<div class='col-md-12' align='center'><strong>How To Do Them</strong></div>
						
				<div  class='col-md-12'>&nbsp;</div>
		</div>
		
  </div>
  <div class='col-md-6'>
   <div id='' align='center'><h3><strong>How A Standard Project Post should Look Like</strong></h3></div>
  </div>
  </div>
   <div class='col-md-12 dark2' style='height: 350%;'align='center'>
    <div id='' align='center'><h3><strong>Top 100 Projects </strong></h3></div>
	 <div class='col-md-12' align='center'><h3><strong>In</strong></h3></div>
	 
	 <div class='col-md-12'>&nbsp;</div>
<div class='col-md-12'>
<a href='top_everywhere.php' class='btn btn-primary btn-md' role='button' >EveryWhere</a>
</div>
    <div class='col-md-12'>&nbsp;</div>
<div class='col-md-12'>
<a href='top_display_depts.php' class='btn btn-primary btn-md' role='button' > Department </a>
</div>
<div class='col-md-12'>&nbsp;</div>
<div class='col-md-12'>
<a href='display_top_underg_dept.php' class='btn btn-primary btn-md' role='button' >Undergraduate </a>
</div>
<div class='col-md-12'>&nbsp;</div>
<div class='col-md-12'>
<a href='display_top_masters_dept.php' class='btn btn-primary btn-md' role='button' style='width:30%;' > Masters</a>
<a href='display_top_phd_dept.php'class='btn btn-primary btn-md' role='button' style='width:25%;' >P.H.D.</a>
<a href='display_top_others_dept.php' class='btn btn-primary btn-md' role='button' style='width:30%;' >Others.</a>

</div>
<div class='col-md-12'>&nbsp;</div>
   </div>
   
    <div class='col-md-12 dark1' style='height: 350%;'align='center'>
      <div id='' align='center'><h3><strong>Like Our Facebook Page</strong></h3></div>
			<div class='col-md-12' align='center'>
<div class='fb-page' data-href='https://web.facebook.com/yourcgpa/' data-tabs='timeline' data-small-header='false' data-adapt-container-width='true' data-hide-cover='false' data-show-facepile='true'><blockquote cite='https://web.facebook.com/yourcgpa/' class='fb-xfbml-parse-ignore'><a 'https://web.facebook.com/yourcgpa/'>Jarazone</a></blockquote></div>
			</div><br><br>
			<div class='col-md-12' align='center'>&nbsp;&nbsp;&nbsp;</div>
<div class='col-md-12'>&nbsp;</div>
   </div>
   
    <div class='col-md-12 dark2' style='height: 350px;'align='center'>
     <div id='' align='center'><h3><strong>Jarazone Partners</strong></h3></div>
<div class='col-md-12'>&nbsp;</div>
   </div>
   
   
   
 <div id="lodingin" align='center' style="display: none; text-align:center;">
 <br> <br> <br>
   <span class="loding_txt">Loading....</span>
   </div>
 <div id='all_projects' align='center'>
 <div id='' align='center'><h2><strong>Projects </strong></h2></div>
 <br>
 <div class='col-md-3'></div>
		<div class='well well-md col-md-6' align='center' style='background-color: #f8f8f8; border-color: #e7e7e7;'  id=''>
			 <strong>You did not tell us Your School and department. <br> Scroll up and tell or Check Projects from
			 </strong>
			 <br>
			 <div class='col-md-4'></div>
			 <div class='col-md-4'>
			 <button  type="button" class="btn btn-success btn-sm btn-block" onclick='everywhere()' >Everywhere</button>
		</div>
		<div class='col-md-4'></div>
		</div>
 <div class='col-md-3'></div>
 </div>
 

 

</div>


<br>
<br>
</div>
<div class='col-md-12 footer' align='center'>
<?php
include("footer.php");
?>
</div>
</body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/57c3e32a416c00672f62e672/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>

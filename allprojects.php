 <?php
include("design/header.php");
?>
<br>
<div class='col-md-12' align='center' ><h3><strong>All Projects</strong></h3>
				</div>
				<br>
 <div class='col-md-12 dark2' align='center'><h3><strong>
<br><br>
Looking for a Project?<br><br><p  class="blinking" align='center'>Search here!!</p>
<form class="form-horizontal" role="form" action='search.php' method='POST'>
<br>
<div class='col-md-4'>
</div>
<div class='col-md-4'>
  <input type="search" name="search" placeholder="I'm searching for.." style='width:75%'><button type="submit"   class="btn btn-primary btn-lg"><i class='fa fa-search'></i></button>
  </div>
  <div class='col-md-4'>
  </div>
</form><br>
 <div class='col-md-12' style='text-align:center'>or
  </div><br><br>


<a href='display_department.php' class='btn btn-primary btn-lg' role='button'>Search By Department <i class="fa fa-angle-right"></i></a>

 </div>
 <div class="container">
 <div id='' align='center'><strong>Recent Projects From everywhere</strong></div>
  <ul class="nav nav-pills" >
    <li class="active"><a data-toggle="tab" href="#recent" onclick='recent_projects()'>All</a></li>
    <li><a data-toggle="tab" href="#free" onclick='free_projects()'>Free</a></li>
    <li ><a data-toggle="tab" href="#paid" onclick='paid_projects()'>Paid</a></li>
  </ul>

  <div class="tab-content col-md-12" >
    <div id="recent" class="tab-pane fade in active" style='background-color:white;' >
		<strong><h4 style='text-align:center;'>Recent Projects</h4></strong>
			
			
		<div class='col-md-3' style='background-color: #f8f8f8; border-color:#f8f8f8;'></div>
		 <div id="loding_recent" align='center' style="display: none; text-align:center;">
 <br> <br> <br>
   <span class="loding_txt">Loading....</span>
   </div>
		<div class='well well-md col-md-6' style='background-color: #f8f8f8; border-color: #e7e7e7;' id='recent_func'>
		<?php
		
			display_projects($cxn);
		?>
 <div  id="show_more_main">
        <span id="show"> <button type='button' class='btn btn-primary btn-sm btn-block' onclick='show_more(<?php echo $projectid ?>)'>Show more</button> </span>
        <span id="loding" style="display: none;"><span class="loding_txt">Loading....</span></span>
    </div>
					</div>
					<div class='col-md-3' style='background-color: #f8f8f8; border-color: #f8f8f8;'></div>
					
	</div>
    <div id="free" class="tab-pane fade col-md-12">
		<strong><h4 style='text-align:center;'>Recent Free Projects</h4></strong>
	
	<div class='col-md-3' style='background-color: #f8f8f8; border-color:#f8f8f8;'></div>
	 <div id="loding_freee" align='center' style="display: none; text-align:center;">
 <br> <br> <br>
   <span class="loding_txt">Loading....</span>
   </div>
		<div class='well well-md col-md-6' style='background-color: #f8f8f8; border-color: #e7e7e7;' id='free_func'>
		<?php
		
			display_free_projects($cxn);

		?>
		<div  id="show_more_main_free">
        <span id="show_free"> <button type='button' class='btn btn-primary btn-sm btn-block' onclick='show_more_free(<?php echo $projectid ?>)'>Show more</button> </span>
        <span id="loding_free" style="display: none;"><span class="loding_txt">Loading....</span></span>
    </div>
					</div>
					<div class='col-md-3' style='background-color: #f8f8f8; border-color: #f8f8f8;'></div>
	
	</div>
    <div id="paid" class="tab-pane fade">
      <strong><h4 style='text-align:center;'>Recent Paid Projects</h4></strong>
	  
	  
	  <div class='col-md-3' style='background-color: #f8f8f8; border-color:#f8f8f8;'></div>
	   <div id="loding_paidd" align='center' style="display: none; text-align:center;">
 <br> <br> <br>
   <span class="loding_txt">Loading....</span>
   </div>
		<div class='well well-md col-md-6' style='background-color: #f8f8f8; border-color: #e7e7e7;' id='paid_func'>
		<?php
		
			display_paid_projects($cxn);
		?>
		<div  id="show_more_main_paid">
        <span id="show_paid"> <button type='button' class='btn btn-primary btn-sm btn-block' onclick='show_more_paid(<?php echo $projectid ?>)'>Show more</button> </span>
        <span id="loding_paid" style="display: none;"><span class="loding_txt">Loading....</span></span>
    </div>
					</div>
					<div class='col-md-3' style='background-color: #f8f8f8; border-color: #f8f8f8;'></div>
					
	
	 </div>
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
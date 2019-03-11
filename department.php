<?php
include("design/header.php");
$id = $_GET['id'];
$departmentid = $id ;
department($cxn,$id);
?>
<br>
<div class='col-md-12 dark3' align='center'><h3><strong>
<br><br>
<input type='hidden' class='form-control' id='deptt' name='deptt' value='<?php echo $department ?>'></input>
Looking for a/an <?php echo $department ?> Project?<br><br><span  class="blinking" align='center'>Search here!!</span>
<form class="form-horizontal" role="form" action='search_department.php?id=<?php echo $id ?>' method='POST'>
<br>
   <div class='col-md-4'>
</div>
<div class='col-md-4'>
<input type='hidden' class='form-control' id='deptid' name='deptid' value='<?php echo $departmentid ?>'></input>
  <input type="search" name="search" placeholder="I'm searching for.." style='width:75%'><button type="submit"   class="btn btn-primary btn-lg"><i class='fa fa-search'></i></button>
  </div>
  <div class='col-md-4'>
  </div></form>
 </div>
 

   <div align='center'><h3><span align='center'><?php echo $department ?> Projects</span></h3></div>
  <ul class="nav nav-pills" >
    <li class="active"><a data-toggle="tab" href="#recent">Recent</a></li>
    <li><a data-toggle="tab" href="#free">Top Free</a></li>
    <li><a data-toggle="tab" href="#paid">Top Paid</a></li>
  </ul>

  <div class="tab-content">
    <div id="recent" class="tab-pane fade in active">
							<strong><h4 style='text-align:center;'>Recent <?php echo $department ?>  Projects</h4></strong>
						<div class='col-md-3' style='background-color: #f8f8f8; border-color:#f8f8f8;'></div>
		<div class='well well-md col-md-6' style='background-color: #f8f8f8; border-color: #e7e7e7;' id='recent_func'>
		<?php
		
			display_departmental_projects($cxn,$departmentid);
		?>
		<div  id="show_more_main">
        <span id="show"> <button type='button' class='btn btn-primary btn-sm btn-block' onclick='show_more_dept(<?php echo $projectid ?>)'>Show more</button> </span>
        <span id="loding" style="display: none;"><span class="loding_txt">Loading....</span></span>
    </div>
					</div>
					<div class='col-md-3' style='background-color: #f8f8f8; border-color: #f8f8f8;'></div>
 </div>
     <div id="free" class="tab-pane fade col-md-12">
							<strong><h4 style='text-align:center;'>Free <?php echo $department ?>  Projects</h4></strong>
						<div class='col-md-3' style='background-color: #f8f8f8; border-color:#f8f8f8;'></div>
		<div class='well well-md col-md-6' style='background-color: #f8f8f8; border-color: #e7e7e7;' id='free_func'>
		<?php
		
			display_free_Departmental_projects($cxn,$departmentid);
		?>
		<div  id="show_more_main_free">
        <span id="show_free"> <button type='button' class='btn btn-primary btn-sm btn-block' onclick='show_more_free_dept(<?php echo $projectid ?>)'>Show more</button> </span>
        <span id="loding_free" style="display: none;"><span class="loding_txt">Loading....</span></span>
    </div>
					</div>
					<div class='col-md-3' style='background-color: #f8f8f8; border-color: #f8f8f8;'></div>
 </div>
    <div id="paid" class="tab-pane fade">
							  <strong><h4 style='text-align:center;'>Top Paid <?php echo $department ?>  Projects</h4></strong>
							  <div class='col-md-3' style='background-color: #f8f8f8; border-color:#f8f8f8;'></div>
		<div class='well well-md col-md-6' style='background-color: #f8f8f8; border-color: #e7e7e7;' id='paid_func'>
							<?php
							 display_paid_departmental_projects($cxn,$departmentid);
							 ?>
							<div  id="show_more_main_paid">
        <span id="show_paid"> <button type='button' class='btn btn-primary btn-sm btn-block' onclick='show_more_paid_dept(<?php echo $projectid ?>)'>Show more</button> </span>
        <span id="loding_paid" style="display: none;"><span class="loding_txt">Loading....</span></span>
    </div>
	</div>
					<div class='col-md-3' style='background-color: #f8f8f8; border-color: #f8f8f8;'></div>
	
	

			
	 </div>
  </div>



<div class='col-md-12 footer' align='center'>
<?php
include("footer.php");
?>
</div>
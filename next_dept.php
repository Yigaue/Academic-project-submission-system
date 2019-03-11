
<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;

$id = $_POST['id'];
$type = $_POST['type'];
$dept = $_POST['dept'];
select_departmentid($cxn,$dept);
$deptid = $departmentid;

if($type == "recent")
	{
		 show_more_dept($cxn,$id,$deptid);
	
		
	?>
		 <div  id="show_more_main">
				<span id="show"> <button type='button' class='btn btn-primary btn-sm btn-block' onclick='show_more_dept(<?php echo $projectid ?>)'>Show more</button> </span>
				<span id="loding" style="display: none;"><span class="loding_txt">Loading....</span></span>
			</div>
	<?php
	}
elseif($type == "free")
	{
		show_more_free_dept($cxn,$id,$deptid);
	
			
	?>
	<div  id="show_more_main_free">
        <span id="show_free"> <button type='button' class='btn btn-primary btn-sm btn-block' onclick='show_more_free_dept(<?php echo $projectid ?>)'>Show more</button> </span>
        <span id="loding_free" style="display: none;"><span class="loding_txt">Loading....</span></span>
    </div>
	<?php
	}
elseif($type == "paid")
	{
		show_more_paid_dept($cxn,$id,$deptid);
	
			
	?>
	<div  id="show_more_main_paid">
        <span id="show_paid"> <button type='button' class='btn btn-primary btn-sm btn-block' onclick='show_more_paid_dept(<?php echo $projectid ?>)'>Show more</button> </span>
        <span id="loding_paid" style="display: none;"><span class="loding_txt">Loading....</span></span>
    </div>
	<?php
	}
	?>
	
	
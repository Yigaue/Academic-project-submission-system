
<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$school = $_GET['school'];
$dept = $_GET['dept'];
$department = $dept;
select_departmentid($cxn,$department);
select_schoolid($cxn,$school);
				
				display_free_projects_with_tell($cxn,$school,$dept,$schoolid,$departmentid);
	
?>
<div  id="show_more_main_free">
        <span id="show_free"> <button type='button' class='btn btn-primary btn-sm btn-block' onclick='show_more_free_tell(<?php echo $projectid ?>)'>Show more</button> </span>
        <span id="loding_free" style="display: none;"><span class="loding_txt">Loading....</span></span>
    </div>

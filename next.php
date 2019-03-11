
<?php

$id = $_POST['id'];
$type = $_POST['type'];

include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;

if($type == "recent")
	{
		show_more($cxn,$id);
	
		
	?>
		 <div  id="show_more_main">
				<span id="show"> <button type='button' class='btn btn-primary btn-sm btn-block' onclick='show_more(<?php echo $projectid ?>)'>Show more</button> </span>
				<span id="loding" style="display: none;"><span class="loding_txt">Loading....</span></span>
			</div>
	<?php
	}
elseif($type == "free")
	{
		show_more_free($cxn,$id);
	
			
	?>
	<div  id="show_more_main_free">
        <span id="show_free"> <button type='button' class='btn btn-primary btn-sm btn-block' onclick='show_more_free(<?php echo $projectid ?>)'>Show more</button> </span>
        <span id="loding_free" style="display: none;"><span class="loding_txt">Loading....</span></span>
    </div>
	<?php
	}
elseif($type == "paid")
	{
		show_more_paid($cxn,$id);
	
			
	?>
	<div  id="show_more_main_paid">
        <span id="show_paid"> <button type='button' class='btn btn-primary btn-sm btn-block' onclick='show_more_paid(<?php echo $projectid ?>)'>Show more</button> </span>
        <span id="loding_paid" style="display: none;"><span class="loding_txt">Loading....</span></span>
    </div>
	<?php
	}
	?>
	
	
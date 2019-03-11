<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
display_free_projects($cxn);
?>
<div  id="show_more_main_free">
        <span id="show_free"> <button type='button' class='btn btn-primary btn-sm btn-block' onclick='show_more_free(<?php echo $projectid ?>)'>Show more</button> </span>
        <span id="loding_free" style="display: none;"><span class="loding_txt">Loading....</span></span>
    </div>
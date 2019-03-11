<?php
include("bigsean.php");
include("db_functions.php");
$cxn = mysqli_connect($host,$user,$passwd,$dbname) ;
$email = $_GET['email'];

$type = $_GET['type'];
   $emess = "Hi, i am from Jarazone. "; 
   $emess .= " Please i need your ,";    
   $emess .= "\n\n\t$type\n\t";    
   $emess .= "so That i could contact you for more information about your project \n\n";   
   $emess .= "Thanks. \n\n";      
   $subj ="Jarazone Request";   
   $mailsend=mail("$email","$subj","$emess");
   echo" <font color='navyblue'>$type Request Sent</font> <font color='green'><i class='glyphicon glyphicon-ok'></i></font>";
   
  
?>
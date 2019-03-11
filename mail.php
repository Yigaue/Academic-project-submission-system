<?php

$email = $_POST['email'];
$message = $_POST['message'];
$name = $_POST['name'];

$to = "providenceifeosame@gmail.com"; 
// precious pls change my email address here to your own to test, then to the company's own wen ure done testing.

$subject = $name;
$txt = $message;
 $header = "From:$email\r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$txt,$header);
         
         if( $retval == true ) {
			 echo"$name<br>";
            echo "Message sent successfully...";
         }else {
			  echo"$name<br>";
            echo "Message could not be sent...";
         }
?> 
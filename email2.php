<?php
$to = "ganzacynthia@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: mignoneunguyeneza250@gmail.com" . "\r\n" .
"CC: mignonneunguyeneza150@gmail.com";

if(mail($to,$subject,$txt,$headers)){
	echo "succeded";
}
else{
	echo "failed";
}
    
?>
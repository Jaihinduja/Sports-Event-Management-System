<?php
$to = "vaibhav.gaikwad@ves.ac.in";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";
mail($to,$subject,$txt,$headers);
echo "sucess"
?>
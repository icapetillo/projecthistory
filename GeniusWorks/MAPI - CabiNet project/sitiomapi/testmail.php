<?php
$to = "sos_soporte@hotmail.com";
$subject = "Test mail";
$message = "Hola esto es una prueba";
$from = "soporte@publired.com.mx";
$headers = "From: $from";
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?> 
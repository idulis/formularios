<?php

$from = "disraelligua@gmail.com";

$email = $_POST['email'];
$suject = $_POST['subject'];
$mensaje = $_POST['message'];

mail($email, $suject, $mensaje, "From".$from);

print("Your message has been sent: <br />$email<br />$subject<br />$message<br />")

?>
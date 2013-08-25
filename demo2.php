<?php
$email = $_POST['email'];
$nombre = $_POST['nombre'];
$data = $nombre . "," .$email;
$file = "file.csv";

file_put_contents($file, $data . PHP_EOL, FILE_APPEND);

print("Thank you for submitting your email address !!!")


?>
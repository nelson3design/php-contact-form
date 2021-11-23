<?php

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];


$to ='mandeart2@gmail.com';
$subject='teste de envio de email';

$message ="Name: ". $name. "\n Email: " . $email . "\n\n Message: " . $message;

$headers='From: '.$email. "\r\n". 'Reply-To: '.$email;

mail($to, $subject,$message,$headers);
echo "Enviado!";

?>

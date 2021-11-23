<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>

	<?php

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];


$to ='mandeart2@gmail.com';
$subject='teste de envio de email';

$message ="Name: ". $name. "\n Email: " . $email . "\n\n Message: " . $message;

$headers='From: '.$email. "\r\n". 'Reply-To: '.$email;


mail($to, $subject,$message,$headers);
// echo "Enviado!";

?>

	
<h6 class="send">Enviado!</h6>
	<form action="" method="POST" class="form">
		<div>Name</div>
		<input type="text" name="name" class="name" placeholder="Your name" required autofocus>

		<div>Email</div>
		<input type="email" name="email" class="email" placeholder="Your Email address" required>

		<div>Message</div>
		<textarea name="message" class="message" cols="30" rows="10" required></textarea>
		<button type="submit" class="submit">Submit</button>
	</form>
	<script>
		var btn=document.querySelector('.submit')

		var send=document.querySelector('.send')

		send.style.display='none'

		var name=document.querySelector('.name')
		var email=document.querySelector('.email')

		var message=document.querySelector('.message')

		btn.addEventsListener('click',()=>{
			if(name.value && email.value && message.value){
				send.style.display='block'
			}
		})
	</script>
	

</body>
</html>
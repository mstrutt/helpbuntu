<?php
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$valid = true;
	
	if($name == ""){
		echo "<p><a class='error'>*Please enter your name.</a></p>";
		$valid = false;
	}
	
	if(0 >= strrpos($email,'@') ||  strrpos($email,'@')+3 >= strrpos($email,'.') || strrpos($email,'.')+2 >= strlen($email)){
		echo "<p><a class='error'>*Please enter a valid email address.</a></p>";
		$valid = false;
	}
	
	if($message == ""){
		echo "<p><a class='error'>*Please write a message.</a></p>";
		$valid = false;
	}
	
	if($valid == true){
		$to = "admin@mstrutt.co.uk";
		$subject = "HelpBuntu Query From ".$name." (".$email.")";
		$body = "Dear M Strutt\n\n".$message."\n\nThanks,\n\n".$name.".";
		$headers = "From: ".$email;
		if(mail($to, $subject, $body, $headers)){
			echo "<p><a>Thank you $name, your message has been sent successfully.</a></p>";
		}else{
			echo "<p><a class='error'>Sorry $name. Message delivery failed. Please try again.</a></p>";
		}
	}
	
?>
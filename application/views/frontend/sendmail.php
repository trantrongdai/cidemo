<?php 
	session_start();
	if($_SESSION['security_code'] == $_POST['captcha']) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$website = $_POST['website'];
		$subject = $_POST['subject'];
		$content = $_POST['content'];

		$to = "contact.email.example@gmail.com";

		$body = "Ngày: ". date('d/m/Y')."\n";
		$body .= $name . "- Email:" . $email . "\n";
		$body .= "Website: $website\n";
		$body .= "Send a Email with content:\n".nl2br($content);
		$headers = "From: $email \n";

		mail($to, $subject, $body, $headers);
		echo "true";

	} else {
		echo "false";
	}

?>
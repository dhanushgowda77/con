<?php
	$name = $_POST['name'];
	$visitor = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'dhanushgowdas77@gmail.com';

	$email_subject = "New Form Submission";

	$email_body = "User Name: $name.\n".

		"User Email: $visitor_email.\n".

			"User Message: $message.\n";

	$to = "contact@dhanushgowda.me";
	$headers = "from: $email_from\r\n";
	$headers = "from: $visitor_email\r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("location: contact.html");


?>
<?php
	$myemail = 'voelker.keith@gmail.com';
	$name = $_POST['firstname' + 'lastname'];
	$company = $_POST['companyname'];
	$email_address = $_POST['email'];
	$phone = $_POST['phone'];

	$to = $myemail;
	$email_subject = "$companyname Request to become a sponsor";
	$email_body = "You have received a request to become a sponsor from $firstname $lastname from $companyname at email address $email";
	mail($to, $email_subject, $email_body);
?>
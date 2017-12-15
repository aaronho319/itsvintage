<?php
	if($_POST["submit"]) {
		$recipient = "hello@itsvintagevintage.com"
		$subject = "It's Vantage Website Contact"
		$sender = $_POST["name"]
		$number = $_POST["number"]
		$senderEmail = $_POST["senderEmail"]
		$message = $_POST["message"]

		$mailBody = "[It's Vintage Website] \n" . "Name: " . $sender. \n "Number: " . $number. \n "Email: " . $senderEmail. \n \n $message;

		mail($recipient, $subject, $mailBody); 
	}

	header ('Location: contact.html'); 
	exit;

?>
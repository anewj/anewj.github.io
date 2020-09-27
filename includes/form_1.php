<?php	
	if(empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['contact_number']) && strlen($_POST['contact_number']) == 0 || empty($_POST['query']) && strlen($_POST['query']) == 0)
	{
		return false;
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact_number = $_POST['contact_number'];
	$query = $_POST['query'];
	$optin = $_POST['optin'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nEmail: $email \nContact_Number: $contact_number \nQuery: $query \nOptin: $optin \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>
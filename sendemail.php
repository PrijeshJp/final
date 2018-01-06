<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for contacting us.  We will be in touch with you shortly.'
	);
	$error_status = array(
		'type'=>'Failure',
		'message'=>'Failed to send email. Please try again later.'
	);
	
    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $subject = @trim(stripslashes($_POST['subject'])); 
    $message = @trim(stripslashes($_POST['message']));
    $phone = @trim(stripslashes($_POST['phone'])); 
    $company= @trim(stripslashes($_POST['company'])); 
    $email_from = 'minusculetechnologies.com';//replace with your email
    $email_to = 'sales@minusculetechnologies.com';//replace with your email
   
    
    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Phone: ' . $phone . "\n\n". 'Company Name: ' . $company . "\n\n". 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
	
	if($success){
		echo json_encode($status);
	} else {
		echo json_encode($error_status);
	}
    die;
?>
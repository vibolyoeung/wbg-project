<?php
session_start();

//echo $_SESSION['security_code'];
$senderName=$_POST['contactName'];
$senderEmail=$_POST['contactEmail'];
$senderMsg=$_POST['msg'];
$security_code=$_POST['captchaStr'];
$ccMail="sosangha.007@gmail.com";

if(trim($senderName) != "" && trim($senderEmail) != "" && trim($senderMsg) != ""){
	$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
	// Run the preg_match() function on regex against the email address
	if (preg_match($regex, $senderEmail)) {		
		if($security_code==$_SESSION['security_code']){
		$to = "info@webbestgroup.com";
		$subject = "WebBest Group Contact Form From: ".$senderName;
		$txt = "<b>Sender name</b>: ".$senderName."<br /><b>Email</b>:".$senderEmail."<br /><b>Message</b>:".$senderMsg;
		$headers = "From:".$senderEmail. "\r\n" .
		"CC: ".$ccMail."\r\n"."Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		if(@mail($to,$subject,$txt,$headers)){
			$_SESSION['send_msg'] = "<div class='alert alert-success'><a class='close' data-dismiss='alert' href='#'>&times;</a>You successfully contact us, we will contact you back as soon as possible. Thank you</div>";
			}
		else{
			$_SESSION['send_msg'] = "<div class='alert alert-error'><a class='close' data-dismiss='alert' href='#'>&times;</a>Problem with sending email, please try again!</div>";
			}
		}
		else{
			$_SESSION['send_msg'] = "<div class='alert alert-error'><a class='close' data-dismiss='alert' href='#'>&times;</a>Security code is not matched</div>";
		}
	}else{
		$_SESSION['send_msg'] = "<div class='alert alert-error'><a class='close' data-dismiss='alert' href='#'>&times;</a>Provided Email is invalid</div>";
		}
	}
else{
	$_SESSION['send_msg'] = "<div class='alert alert-error'><a class='close' data-dismiss='alert' href='#'>&times;</a>All fields are required</div>";
	}
	
header("location:../index.php?page=contact#contact");

?>
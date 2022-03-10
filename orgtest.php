<?php
session_start();


include("config.php");

if(!empty($_POST["submit"])) {
    
	
	$regValue=$_SESSION["regNameplay"];
	$re= $regValue;
	$name = $_POST["name"];
	$email = $_POST["se"];
	$subject = $_POST["sub"];
	$content = $_POST["message"];
    $email_body="$content.\n"."from: $email";
    
    	
		$result = mysqli_query($mysqli, "INSERT INTO test5(Name,Email,Re,Subject,Message) VALUES('$name','$email','$re','$subject','$content')");

		mysqli_close($mysqli);
	

	$toEmail = $re;
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $email_body, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success"; 
	}
}


?>
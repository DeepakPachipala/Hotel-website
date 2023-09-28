<?php
//get data from form

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "deepakpachipala@gmail.com";
$subject = "mail from hotel website";
$name ."\r\n Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@indianhotel.com" . "\r\n" . "CC: somebodyelse@example.com";
if($email != NULL) {
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
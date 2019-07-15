<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$loan = $_POST['loan'];
$email_from = 'travelbugusa.com';
$email_subject = "New Loan Submission";
$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"User Loan: $loan.\n";
$to = "parx317@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply To: $visitor_email \r\n";
mail($to,email_subject,$email_body,$headers);
header("Location: index.html");
?>

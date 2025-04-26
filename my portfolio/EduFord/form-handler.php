<?php
$name = $_post['name'];
$visitor_email = $_post['email'];
$subject = $_post['subject'];
$message = $_post['message'];

$email_form = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "User subject: $subject.\n".
              "User message: $message.\n";

$to = 'harism8991701@gmail.com';

$headers = "Form: $email_from \r\n"

$headers .= "Reply-To: $visitor_email \r\n"

mail($to,$email_subject,$email_body,$headers);

header("location contact.html")


?>















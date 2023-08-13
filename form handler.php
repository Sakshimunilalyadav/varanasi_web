<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$comment = $_POST['comment'];


$email_form = 'info@yourwebsite.com';

$email_subjecct = 'New Form Submission';

$email_body = "user Name: $name.\n".
              "user Name: $visitor_email.\n".
              "User Comment: $comment.\n";

$to = 'sakshiyadav082003@gmail.com';

$headers = "From: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to.$email_subject,$email_body,$headers);

header("Location: review.html");
?>
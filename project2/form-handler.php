<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
// $subject=$_POST['subject'];
$message=$_POST['message'];
$teliphone=$_POST['teliphone'];

$email_from='shivamojha1946@gamil.com';
$email_subject='New form submission';
$email_body="User Name:$name.\n".
"User Email:$visitor_email.\n".
"User Message:$message.\n";

$to='techwithshivam26@gmail.com';
$headers="from:$email_from\r\n";
$headers .="Reply-to:$visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");
?>
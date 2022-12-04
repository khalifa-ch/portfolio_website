<?php
$name = $_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='info@khalifa-ch.github.io/portfolio_website';

$email_subject='New Form submission';

$email_body="User name  $name .\n".
            "User email  $visitor_email .\n".  
            " subject  $subject .\n".
            "User Message  $message .\n";

$to ='khalifachelbi06@gmail.com';

$headers="From $email_from \r\n ";  

$headers .="Reply-To $visitor_email \r\n ";
mail($to,$email_subject,$email_body,$headers);
header("location:contact.html");
?>

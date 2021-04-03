<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'nagorishafiq1996@gmail.com';

$email_subject = "New Form Submission";

$email_body = "user Name: $name.\n".
                "user Email: $visitor_email.\n". 
                "user Subject: $subject.\n". 
                "user Message: $message.\n". 
                
     $to = "nagorishafiq1996@gmail.com";
     $headers = "From: $email_from \r\n"; 
     $headers = "reply_to: $visitor_email \r\n";           

     mail($to, $email_subject, $email_body, $headers);
     headers("Location: ctn.html");




?>
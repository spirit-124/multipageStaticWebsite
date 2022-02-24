<?php
 $name = $_POST['name'];
 $visitor_email = $_POST['email'];
 $subject = $_POST['subject'];
 $message = $_POST['message'];

 $email_from = 'info@eduford.org';

 $email_subject = 'New Form Submission';

 $Email_body = "user Name: $name.\n".
                "user Email: $visitor_email.\n".
                " Subject: $subject.\n".
                " User Message: $subject.\n";

$to ='agraw512@gmail.com';

$headers = "From: $email-from \r\n";

$headers .= "Reply_to: $visitor_email  \r\n";

mail($to,$email_subject,$Email_body,$headers);

header("Location: contact.html")
?>
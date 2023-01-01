<?php

$name = $_POST['name'];
$visitorEmail = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['message'];

$email_from = "website@gmail.com"; //the website email

$email_subject = "New Form Submission"; 

$email_body =   "User Name: $name.\n".
                "User Email: $visitorEmail.\n".
                "Subject: $subject.\n".
                "User Message: $msg.\n";

$to = "obayhany@gmail.com"; //destination

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitorEmail \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");

?>
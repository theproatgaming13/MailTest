<?php
// Email settings
$to = "mikstavast@gc-webhosting.nl"; // Replace with your email
$subject = "New Contact Form Submission";
$body = "Name: $name\nEmail: $email\nMessage: $message";
$headers = "From: $email";
// Send email
if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
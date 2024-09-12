<?php
// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Validate form data (add more validation as needed)
if (empty($name) || empty($email) || empty($subject) || empty($message)) {
    // Handle validation error (e.g., display an error message)
    echo "Please fill in all required fields.";
    exit;
}

// Prepare email message
$to = 'pabbyinitiative@gmail.com'; // Replace with your email address
$subject = 'Contact Form Submission: ' . $subject;
$messageBody = "Name: $name\nEmail: $email\n\nMessage:\n$message";

// Send email using PHP's mail function
$headers = "From: $email";
if (mail($to, $subject, $messageBody, $headers)) {
    // Email sent successfully
    echo "Your message has been sent. Thank you!";
} else {
    // Error sending email
    echo "An error occurred while sending your message. Please try again later.";
}
?>
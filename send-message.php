<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Your email address where you want to receive the messages
    $to = "geetibahar.ahmadi123@gmail.com";  // Replace with your own email address
    $subject = "New Contact Form Submission from $name";
    $message_body = "You have received a new message from your website contact form.\n\n";
    $message_body .= "Name: $name\n";
    $message_body .= "Email: $email\n";
    $message_body .= "Message:\n$message\n";

    // Set headers for the email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Send the email
    if (mail($to, $subject, $message_body, $headers)) {
        echo "Thank you for your message! We will get back to you soon.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again.";
    }
}
?>

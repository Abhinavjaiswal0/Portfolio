<!-- thank-you.php -->
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $text = $_POST["text"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "uixabhinav@gmail.com";

    // Set email subject
    $subject = "New Contact Form Submission";

    // Build the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Project: $text\n";
    $email_message .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $email_message);

    // Redirect to thank you page
    header("Location: thank-you.html");
    exit(); // Ensure that no further code is executed after redirection
}

?>
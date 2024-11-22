<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and collect form data
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST["message"]));

    // Email settings
    $to = "your-email@example.com";  // Replace with your email address
    $subject = "New Message from Contact Form";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    // Compose email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "<p>Thank you for your message, $name! We'll get back to you soon.</p>";
    } else {
        echo "<p>Sorry, something went wrong. Please try again later.</p>";
    }
} else {
    echo "<p>Invalid request.</p>";
}
?>

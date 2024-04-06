<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Here, you can do additional validation or processing as needed
    // For example, you might want to check if fields are empty, validate email format, etc.

    // Send email (example)
    $to = "your@example.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $body)) {
        // Email sent successfully
        http_response_code(200);
        echo "Your message has been sent successfully!";
    } else {
        // Failed to send email
        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    // If the form is not submitted, return an error
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
?>

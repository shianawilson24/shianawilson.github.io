<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Recipient email address
    $to = "shianawilson.1996@gmail.com";

    // Subject of the email
    $subject = "Message from $name";

    // Email content
    $emailContent = "Name: $name\n";
    $emailContent .= "Email: $email\n\n";
    $emailContent .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $emailContent);

    // Redirect back to the contact form page
    header("Location: your-contact-form-page.html");
}
?>
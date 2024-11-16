<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);

    $to = "sk16331ee059@example.com";
    $message = "Name: $name\nEmail: $email\nSubject: $subject";
    $headers = "From: no-reply@example.com";

    if (mail($to, "New Form Submission", $message, $headers)) {
        echo "Form submitted successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>

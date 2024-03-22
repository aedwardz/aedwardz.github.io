<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'antonile@uci.edu';
    $subject = 'New Message from Contact Form';
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = 'From: ' . $email;

    if (mail($to, $subject, $body, $headers)) {
        echo '<script>alert("Message sent successfully. We will get back to you soon.");</script>';
    } else {
        echo '<script>alert("Sorry, there was an error sending your message. Please try again later.");</script>';
    }
}
?>

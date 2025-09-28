<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "igfountainenterprises@gmail.com";
    $subject = "New Contact Us Message";
    $headers = "From: $email";
    $body = "Name: $name\nEmail:
    $email\nMessage: $Message";

    mail($to, $subject, $message, $headers);
    echo "Thank you for contacting us!";
    if(mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
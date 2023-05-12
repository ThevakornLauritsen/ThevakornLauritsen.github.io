<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "basiteiprot@gmail.com"; // Replace with your desired email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $body)) {
        echo "Thank you for contacting me!";
    } else {
        echo "Sorry, an error occurred. Please try again later.";
    }
}
?>
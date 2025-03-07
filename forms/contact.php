<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "felopater.remon2020@gmail.com";  // ضع بريدك الإلكتروني هنا
    $from_name = htmlspecialchars($_POST["name"]);
    $from_email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $headers = "From: $from_name <$from_email>\r\n";
    $headers .= "Reply-To: $from_email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid request.";
}
?>


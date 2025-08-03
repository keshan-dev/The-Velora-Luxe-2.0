<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);

  $to = "theveloraluxe@email.com"; 
  $headers = "From: $email" . "\r\n" .
             "Reply-To: $email" . "\r\n" .
             "Content-type:text/plain;charset=UTF-8";
  $body = "You have received a new message from your website:\n\n";
  $body .= "Name: $name\n";
  $body .= "Email: $email\n";
  $body .= "Subject: $subject\n";
  $body .= "Message:\n$message\n";

  if (mail($to, $subject, $body, $headers)) {
    echo "<script>alert('Message sent successfully!'); window.history.back();</script>";
  } else {
    echo "<script>alert('Failed to send message. Please try again later.'); window.history.back();</script>";
  }
}
?>
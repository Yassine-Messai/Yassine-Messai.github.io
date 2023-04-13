<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set up email message
  $to = "elmessaiyassine@gmail.com";
  $subject = "New message from " . $name;
  $body = "Name: " . $name . "\n\nEmail: " . $email . "\n\nMessage: " . $message;

  // Send email
  if (mail($to, $subject, $body)) {
    echo "<p>Your message has been sent successfully.</p>";
  } else {
    echo "<p>There was a problem sending your message. Please try again later.</p>";
  }
}

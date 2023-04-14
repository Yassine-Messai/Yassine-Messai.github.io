<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $to = 'elmessaiyassine@gmail.com';
  $body = "<html>
              <body>
                  <h2>Contact Request</h2>
                  <hr>
                  <p>Name: $name</p>
                  <p>Email: $email</p>
                  <p>Subject: $subject</p>
                  <p>Message: $message</p>
              </body>
          </html>";

  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8\r\n";

  if (mail($to, $subject, $body, $headers)) {
    echo "<div class='alert alert-success'>Your message has been sent successfully.</div>";
  } else {
    echo "<div class='alert alert-danger'>The server failed to send the message. Please try again later.</div>";
  }
}

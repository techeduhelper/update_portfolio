<?php
  // Get form data
  $name = $_POST['name'];
  $gmail = $_POST['gmail'];
  $message = $_POST['message'];
  

  // Set email headers
  $headers = "From: $gmail\r\n";
  $headers .= "Reply-To: $gmail\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  // Build email body
  $body .= "<p>Name: $name</p>\n";
  $body .= "<p>Gmail ID: $gmail</p>\n";
  $body = "<p>Message: $message</p>\n";
  

  // Send email
  mail('uccmaniruddinkhan@gmail.com', 'Contact form submission', $body, $headers);
?>

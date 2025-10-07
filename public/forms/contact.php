<?php
  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'contact@example.com';

  // Check if form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
      echo "All required fields must be filled out.";
      exit;
    }
    
    // Build email content
    $email_subject = "Contact Form: " . $subject;
    $email_body = "You have received a new message from your website contact form.\n\n";
    $email_body .= "Name: " . $name . "\n";
    $email_body .= "Email: " . $email . "\n";
    if (!empty($phone)) {
      $email_body .= "Phone: " . $phone . "\n";
    }
    $email_body .= "Message:\n" . $message . "\n";
    
    // Email headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    // Send email
    if (mail($receiving_email_address, $email_subject, $email_body, $headers)) {
      echo "OK";
    } else {
      echo "Error sending email.";
    }
  }
?>

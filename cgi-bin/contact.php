<?php
  if (!empty($_POST['comment'])) {
    $comment = stripslashes($_POST['comment']); 
    $email = stripslashes($_POST['email']); 

    $email_from = $email;
    $email_to = 'adriana@nanott.net';
    $subject = "Contact made from nanott.net";

    $body = 'Comment: ' . $comment . "\n\n" . 'Email: ' . $email;

    $success = mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo '<p>Email Sent!</p>';
  }
?>
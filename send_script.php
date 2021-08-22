<?php

if (isset($_POST['send_message_btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg    = $_POST['msg'];

    // Content-Type helps email client to parse file as HTML 
    // therefore retaining styles

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
    $message ="<html>
    <head>
        <title>New message from website contact form</title>
    </head>
    <body>
        <h1>" . $subject . "</h1>
        <p>".$msg."</p>
    </body>
    </html>";
    if (mail('joyjoel2011@yahoo.com', $subject, $message, $headers)) {
        echo "Email Sent!";
    } else {
        echo "Failed to Send Email. Please try again later";
    }
}


// When the user clicks the send button on the contact form, 
// the values in the form are submitted to the 
// 'send_script.php' file. This file grabs the values from the 
// form and forwards them to the email address specified. 
// The email can be sent in HTML format as above and CSS can 
// be used to apply some styles to the email.


?>
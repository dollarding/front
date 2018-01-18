
<?php

$name = $_POST['name'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$comment = $_POST['comment'];
$message = $_POST['message'];

$from = 'Coupit Adnetwork'; 
$to = 'mgonzalezbernal@gmail.com'; 
$subject = 'Adnetwork';
 
$body = "From: $name\n Tel: $telefono\n E-Mail: $email\n Comment: $comment\n Message:\n $message";

if (!$_POST['name']) {
    $errName = 'Please enter your name';
}

if (!$_POST['telefono']) {
    $errTel = 'Please enter your tel';
}

if (!$_POST['message']) {
    $errMessage = 'Please enter your message';
}

if (!$_POST['email'] || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
    $errEmail = 'Please enter a valid email address';
}

// If there are no errors, send the email
if (!$errName && && !$errTel !$errEmail && !$errMessage) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}


?>
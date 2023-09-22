<?php

// error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
// ini_set('display_errors', 1);


if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    $secret = '6Lc7JikoAAAAAL2SL10Xm8RYY4Yijc2gziEyiNER';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {

        $fname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $msg = $_POST['message'];

        if (!$fname || !$email || !$phone || !$msg) {
            $error = 'Please fill in all fields.';
            include('contact.php');
            exit;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = 'Please enter a valid email address.';
            include('contact.php');
            exit;
        }
        $to = 'verify@klinsheet.com';
        $subject = 'Message from contact form';
        $from = "$email";

        $content = 'Below are the details that were filled:' . "\n"
            . 'First name: ' . $fname . "\n"
            . 'Email: ' . $email . "\n"
            . 'Phone: ' . $phone . "\n"
            . 'Message: ' . $msg . "\n";

        mail($to, $subject, $content, $from);
        header('location: contact.php?succ=yes');
    }
} else {
    $error = 'Your message did not submit. Please use the reCaptcha';
    include('contact.php');
    exit;
}

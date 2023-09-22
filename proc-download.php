<?php

if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    $secret = '6Lc7JikoAAAAAL2SL10Xm8RYY4Yijc2gziEyiNER';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {

        $email = $_POST['email'];

        if (!$email) {
            $error = 'Please input your email .';
            include('index.php');
            exit;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = 'Please enter a valid email address.';
            include('index.php');
            exit;
        }
        $to = $email;
        $subject = 'Message from contact form';
        $from = "verify@klinsheet.com";

        $content = 'Below are the details that were filled:' . "\n"
            . 'Email: ' . $email . "\n";

        mail($to, $subject, $content, $from);
        header('location: index.php?succ=yes');
    }
} else {
    $error = 'Your message did not submit. Please use the reCaptcha';
    include('index.php');
    exit;
}

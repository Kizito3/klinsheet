<?php



if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    $secret = '6Lc7JikoAAAAAL2SL10Xm8RYY4Yijc2gziEyiNER';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {

        $fname = $_POST['fullname'];
        $email = $_POST['email'];
        $msg = $_POST['message'];

        $interested = $_POST['interested'];

        $interested = implode(',', $interested);

        if (!$fname || !$email || !$msg || !$interested) {
            $error = 'Please fill in all fields.';
            include('request-a-proposal.php');
            exit;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = 'Please enter a valid email address.';
            include('request-a-proposal.php');
            exit;
        }
        $to = 'verify@klinsheet.com';
        $subject = 'Message from request a quote form';
        $from = "$email";

        $content = 'Below are the details that were filled:' . "\n"
            . 'First name: ' . $fname . "\n"
            . 'Email: ' . $email . "\n"
            . 'Phone: ' . $phone . "\n"
            . 'Interested: ' . $interested . "\n"
            . 'Message: ' . $msg . "\n";

        mail($to, $subject, $content, $from);
        header('location: request-a-proposal.php?succ=yes');
    }
} else {
    $error = 'Your message did not submit. Please use the reCaptcha';
    include('request-a-proposal.php');
    exit;
}

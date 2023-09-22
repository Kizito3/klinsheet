<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinsheet consulting</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="icon" href="images/favicon.png" />

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>
    <style>
        .mycaptcha {
            margin-left: 250px;
            margin-top: 10px;
        }

        @media (max-width: 768px) {
            .mycaptcha {
                margin-left: 20px;
                margin-top: 10px;
            }
        }
    </style>
        <div id="preloader"></div>

    <?php include("includes/nav.php"); ?>

    <section class="request-quote-section">
        <div class="container">
            <div class="request-quote-details">
                <h2>How can we help your business?</h2>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="request-form-details ">
                <h2>Fill the form below</h2>
            </div>
            <form action="proc-request.php" method="post">
                <?php

                if ($_GET['succ'] == 'yes') {
                    echo '<div class="alert alert-success"> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> Your message has been sent. One of our representatives would contact you.</div>';
                }

                if ($error) {
                    echo '<div class="alert alert-danger ">' . $error . '</div>';
                }

                ?>
                <div class="request-form">
                    <div class="request-input">
                        <input type="text" placeholder="Name" name="fullname">
                    </div>
                    <div class="request-input">
                        <input type="email" placeholder="Email" name="email">
                    </div>
                </div>

                <div class="request-checkbox">
                    <div class="checkbox-para">
                        <p>Which service are you interested in?</p>
                        <div class="checkbox-input">
                            <input type="checkbox" name="interested[]" value="Academic Verification"> <span>Academic Verification</span>
                        </div>
                        <div class="checkbox-input">
                            <input type="checkbox" name="interested[]" value="Academic Verification"> <span>Previous Employee Check</span>
                        </div>
                        <div class="checkbox-input">
                            <input type="checkbox" name="interested[]" value="Academic Verification"> <span>Guarantors/Reference Check</span>
                        </div>
                        <div class="checkbox-input">
                            <input type="checkbox" name="interested[]" value="Academic Verification"> <span>NYSC Verification</span>
                        </div>
                    </div>

                    <div class="checkbox2">
                        <div class="checkbox-input">
                            <input type="checkbox" name="interested[]" value="Academic Verification"> <span>Address Verification</span>
                        </div>
                        <div class="checkbox-input">
                            <input type="checkbox" name="interested[]" value="Academic Verification"> <span>Credit Check</span>
                        </div>
                        <div class="checkbox-input">
                            <input type="checkbox" name="interested[]" value="Academic Verification"> <span>Criminal Check</span>
                        </div>
                        <div class="checkbox-input">
                            <input type="checkbox" name="interested[]" value="Academic Verification"> <span>Request a Quote</span>
                        </div>
                    </div>

                </div>

                <div class="request-textarea">
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Additional Information"></textarea>
                </div>
                <div class="g-recaptcha mycaptcha" name="g-recaptcha-response" data-sitekey="6Lc7JikoAAAAAJw1RvQa1CnqSiqYyYoeP4VTKNNo">
                </div>
                <div class="truth-btn2 check-btn request-btn">
                    <button type="submit">Submit Now</button>
                </div>
            </form>

        </div>
    </section>



    <?php include("includes/footer.php"); ?>
    <button id="scrollToTopButton"><i class="fa-solid fa-arrow-up"></i></button>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
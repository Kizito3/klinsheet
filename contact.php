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
            margin-left: 510px;
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .mycaptcha {
                margin-left: 10px;
                margin-top: 10px;
            }
        }
    </style>

    <?php include("includes/nav.php"); ?>

    <section class="contact-section">
        <div class="container">
            <div class="contact-details">
                <h2>Contact Us</h2>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="form-heading">
                <h2>Keep in Touch with Us</h2>
            </div>
            <div class="all-form">
                <form action="proc-contact.php">
                    <?php

                    if ($_GET['succ'] == 'yes') {
                        echo '<div class="alert alert-success">Your message has been sent. One of our representatives would contact you.</div>';
                    }

                    if ($error) {
                        echo '<div class="alert alert-danger ">'.$error.'</div>';
                    }

                    ?>
                    <div class="form-details">
                        <div class="form1">
                            <input type="text" placeholder="Name" name="fullname">
                        </div>
                        <div class="form1">
                            <input type="text" placeholder="Email ID" name="email">
                        </div>
                        <div class="form1">
                            <input type="text" placeholder="Phone" name="phone">
                        </div>
                    </div>

                    <div class="contact-textarea">
                        <textarea name="message" id="" cols="30" rows="10" placeholder="Type your message"></textarea>
                    </div>
                    <div class="g-recaptcha mycaptcha" name="g-recaptcha-response" data-sitekey="6Lc7JikoAAAAAJw1RvQa1CnqSiqYyYoeP4VTKNNo">
                </div>
                    <div class="contact-btn">
                        <button class="link-btn" type="submit">Submit Now</button>
                    </div>
                </form>
            </div>


            <div class="local-details">
                <div class="local1 my-local">
                    <h5>LOCATION</h5>
                    <p>Abbey Mortgage Bank Building,<br> 51 Okota Road,<br>Okota-Isolo, Lagos.</p>
                </div>

                <div class="local1">
                    <h5>EMAIL</h5>
                    <p><a href="mailto:verify@klinsheet.com" class="email-link"> verify@klinsheet.com</a></p>
                </div>

                <div class="local1">
                    <h5>PHONE</h5>
                    <p><a href="tel:+234 701 463 6348" class="email-link">+234 701 463 6348</a></p>
                </div>
            </div>

            

        </div>
        <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7928.0355970650635!2d3.318239!3d6.51943!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8ef4a6f7dcc5%3A0x506d881b2ff4b92e!2s51%20Okota%20Rd%2C%20Ilasamaja%20234001%2C%20Lagos!5e0!3m2!1sen!2sng!4v1614950276597!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    </section>




    <?php include("includes/footer.php"); ?>
    <button id="scrollToTopButton"><i class="fa-solid fa-arrow-up"></i></button>
    <script src="js/main.js"></script>
</body>

</html>
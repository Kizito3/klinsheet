<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinsheet consulting</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>

<body>

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
            <div class="request-form-details">
                <h2>Fill the form below</h2>
            </div>
            <div class="request-form">
                <div class="request-input">
                    <input type="text" placeholder="Name">
                </div>
                <div class="request-input">
                    <input type="email" placeholder="Email">
                </div>
            </div>

            <div class="request-checkbox">
                <div class="checkbox-para">
                    <p>Which service are you interested in?</p>
                    <div class="checkbox-input">
                       <input type="checkbox" value="Academic Verification"> <span>Academic Verification</span>
                    </div>
                    <div class="checkbox-input">
                       <input type="checkbox" value="Academic Verification"> <span>Previous Employee Check</span>
                    </div>
                    <div class="checkbox-input">
                       <input type="checkbox" value="Academic Verification"> <span>Guarantors/Reference Check</span>
                    </div>
                    <div class="checkbox-input">
                       <input type="checkbox" value="Academic Verification"> <span>NYSC Verification</span>
                    </div>
                </div>

                <div class="checkbox2">
                    <div class="checkbox-input">
                       <input type="checkbox" value="Academic Verification"> <span>Address Verification</span>
                    </div>
                    <div class="checkbox-input">
                       <input type="checkbox" value="Academic Verification"> <span>Credit Check</span>
                    </div>
                    <div class="checkbox-input">
                       <input type="checkbox" value="Academic Verification"> <span>Criminal Check</span>
                    </div>
                    <div class="checkbox-input">
                       <input type="checkbox" value="Academic Verification"> <span>Request a Quote</span>
                    </div>
                </div>

            </div>

            <div class="request-textarea">
                <textarea name="" id="" cols="30" rows="10" placeholder="Additional Information"></textarea>
            </div>
        </div>
    </section>



    <?php include("includes/footer.php"); ?>

    <script src="js/main.js"></script>
</body>

</html>
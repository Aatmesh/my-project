<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gain | Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./scss/style.css">
    <link rel="stylesheet" href="./scss/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="./bootstrap/js/jquery.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>

</head>


<body>

    <main role="main">
    <?php require_once 'header.php'; ?>

        <!-- background-header -->
        <div class="page-bg-header"
            style="background-image:url(./images/full-img.png) ;    background-size: cover;background-position: right;">
            <h1>Contact Us</h1>
        </div>

        <div id="contact-section" class="container gain-flex-row contact-section border-css-gain">
            <div class="col-md-6 left-map-block">
                <!-- <div id="googleMap" style="width:100%;height:400px;"></div> -->

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.236238964398!2d72.88183931476146!3d19.09728948707574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c86f8548cc81%3A0x5235a2c98192c104!2s1%20Aerocity%20Corporate%20Park!5e0!3m2!1sen!2sin!4v1591181842176!5m2!1sen!2sin"
                    width="100%" height="350px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>

            </div>
            <div class="col-md-6 about-right-block contact-details-page">
                <div class="inner-p">
                    <div class="col-md-12 row">
                        <div><img class="detail-info-icon" src="./images/phone.svg" alt=""></div>
                        <div>
                            <h6> <b>Phone</b> </h6>
                            <p>378937853</p>
                        </div>
                    </div>
                    <div class="col-md-12 row">
                        <div><img class="detail-info-icon" src="./images/pin.svg" alt=""></div>
                        <div>
                            <h6> <b>Address</b> </h6>
                            <p>Spring Store London Oxford <br>
                                Street, 012 United Kingdom
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12 row">
                        <div><img class="detail-info-icon" src="./images/mail.svg" alt=""></div>
                        <div>
                            <h6> <b>Email</b> </h6>
                            <p>Suppor@moontheme.net <br>
                                Info@moontheme.net
                            </p>
                        </div>
                    </div>

                </div>



            </div>


        </div>

        <!-- FOOTER -->
        <?php require_once 'footer.php'; ?>

    </main>


    <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(document).scrollTop() > 100) {
                    $("nav").addClass("sticky");
                } else {
                    $("nav").removeClass("sticky");
                }
            });
        });
    </script>
</body>

</html>
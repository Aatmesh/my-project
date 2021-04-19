<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gain | Meet The Founder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./scss/style.css">
    <link rel="stylesheet" href="./scss/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="./bootstrap/js/jquery.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <link rel="icon" href="images/favicon.png">
</head>


<body>

    <main role="main">
    <?php require_once 'header.php'; ?>


        <!-- background-header -->
        <div class="page-bg-header"
            style="background-image:url(./images/full-img.png) ;    background-size: cover;background-position: right;">
            <h1>Meet The Founder</h1>
        </div>


        <div class="team-wrapper container body-page ">
            <div class="row" >
                <div class="col-md-12">
                    <!-- <h5>Connect with people you may know</h5> -->
                    <div class="row" style="    align-items: center;">
                        <div class="col-md-3 gain-flex-row text-center">
                            <!-- <div class="left-side-profile"> -->
                                <img  class="founder-img" src="./images/mrsam.png" alt="">
                            <!-- </div> -->
                        </div>
                        <div class="col-md-2 gain-flex-row">
                        <div class="right-side-personalinfo">
                                <h6>Mr. Sam Issa</h6>
                                <p>Founder and Managing Director </p>
                                <p>GAIN Online Community</p>
                                <!-- <p>www.gain.ae </p> -->
                               
                            </div>
                        </div>
                        <div class="col-md-7 gain-flex-row">
                        <span>We are continuously evolving to contribute to growth, development of an affluent
                                    Real Estate Community. Around the world we are seeing the rapid progression of
                                    globalization, computerization and diversification. Businesses are being called upon
                                    to show that they are growing increasingly responsive to society. Taking the
                                    fundamental philosophy to heart and turning our focus towards the gap in the Real
                                    Estate Market and the challenges faced, we work towards providing a unique platform
                                    where products and services are made available through our extensive Partnerships.
                                    We aim to contribute to the resolution of the PROBLEM of increasing Real Estate
                                    costs by connecting OUR PEOPLE to OUR PARTNERS and to continue innovating to
                                    increase corporate value through dialog with all stakeholders</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- FOOTER -->
       

        <?php require_once 'footer.php'; ?>
        
    </main>

    <!-- <script>
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(document).scrollTop() > 100) {
                    $("nav").addClass("sticky");
                } else {
                    $("nav").removeClass("sticky");
                }
            });
        });
        
    </script> -->

<script>
 $("#home-page").removeClass('active');
 </script>
</body>



</html>
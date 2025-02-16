<?php
include 'cdn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--favicon icon-->
    <link rel="icon" href="assets/img/favicon.png" type="image/png" sizes="16x16">

    <!--title-->
    <!--<title>Web Applications</title>-->
    <title>Loan Management System</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0PD36XE5CJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-0PD36XE5CJ');
    </script>

</head>
<body>
    <!--preloader start-->
    <div id="preloader">
        <div class="loader1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--preloader end-->
    <!--header top start-->
    <!--topbar start-->
    <?php
    include 'header.php';
    ?>
   

   <section style="padding: 50px 15px; background: #f8f9fa;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 40px;">
                <h1 style="font-size: 2.5rem; font-weight: bold; margin-bottom: 10px;">Jhaishna: Emerging Leader in India's IT Sector</h1>
                <h2 style="font-size: 1.2rem; font-weight: 300; font-style: italic; color: #6c757d;">Jhaishna Technologies win the Fastest Growing Indian Company Leadership Awards</h2>
            </div>

            <div style="display: flex; flex-wrap: wrap; gap: 20px;">
                <!-- Content Section -->
                <div style="flex: 1 1 60%; max-width: 60%;">
                    <p style="font-size: 1rem; line-height: 1.6; margin-bottom: 20px;">
                        We are proud to announce that Jhaishna Technologies has been honored with the prestigious Fastest Growing Indian Company Leadership Award at the International Achievers' Conference. This recognition celebrates our relentless pursuit of excellence, innovation, and the trust of our valued partners and customers.
                    </p>
                    <p style="font-size: 1rem; line-height: 1.6; margin-bottom: 20px;">
                        Our CEO, Rama Puppla, accepted the award on behalf of the entire Jhaishna family, highlighting our commitment to driving success and delivering exceptional value in the IT industry. This milestone reflects the collective efforts of our talented team and the unwavering support of our esteemed customers who have been integral to our journey.
                    </p>
                    <p style="font-size: 1rem; line-height: 1.6; margin-bottom: 20px;">
                        This achievement inspires us to continue setting new benchmarks and expanding our contributions to the IT landscape. We thank all our partners and stakeholders for being a part of this incredible journey.
                    </p>
                    <p style="font-size: 1rem; line-height: 1.6; margin-bottom: 20px;">
                        Explore our story and services to learn how we can empower your business. Together, let’s achieve new heights!<br>
                        <strong>#Innovation #Growth #Excellence</strong>
                    </p>
                </div>

                <!-- Image Section -->
                <div style="flex: 1 1 35%; max-width: 35%; display: flex; flex-direction: column; gap: 20px;">
                    <img src="assets/img/achievement1.jpg" alt="Achievement 1" style="width: 100%; border-radius: 10px; object-fit: cover;">
                    <img src="assets/img/achievement2.jpg" alt="Achievement 2" style="width: 100%; border-radius: 10px; object-fit: cover;">
                </div>
            </div>
        </div>
    </section>





<?php
    include 'footer.php';
    ?>
    <!--footer section end-->
    <!--scroll bottom to top button start-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </button>
    <!--scroll bottom to top button end-->
    <!--build:js-->
    <!--endbuild-->

</body>
</html>


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
    <title>Our Achievements</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0PD36XE5CJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-0PD36XE5CJ');
    </script>

    <style>
        .achievement-header {
    text-align: left;
    margin-bottom: 10px;
}

h2 {
    font-size: 1.2rem; /* Adjust font size as needed */
    font-weight: 300;  /* Adjust font weight if needed */
    font-style: italic; /* Make the text italic */
    color: black;    /* Set the color (you can change this to any color you prefer) */
    margin-top: 5px;  /* Optional: adds spacing from the previous element */
    margin-left: 15px;
    margin-bottom: 25px; /* Optional: adds left margin */
}

.achievement-header h2 {
    font-size: 1.2rem;
    font-weight: 300;
    font-style: italic;
    color: #6c757d;
    margin-left: 15px;
    margin-top: 10px; /* Add some spacing */
}

.achievement-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    align-items: stretch; /* Align elements with the same height */
}

.achievement-text {
    flex: 1 1 60%;
    max-width: 60%;
    font-size: 1rem;
    line-height: 1.6;
    display: flex;
    flex-direction: column;
    justify-content: flex-start; /* Ensure the text content starts at the top */
}

.achievement-images {
    flex: 1 1 35%;
    max-width: 35%;
    display: flex;
    flex-direction: column;
    gap: 20px;
    align-self: flex-start; /* Align images to the top */
}

.achievement-images img {
    width: 100%;
    border-radius: 10px;
    object-fit: cover;
}

@media (max-width: 768px) {
    .achievement-container {
        flex-direction: column;
    }

    .achievement-text,
    .achievement-images {
        max-width: 100%;
    }
}

    </style>
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

    <section class="" style="background: url('assets/img/header-bg-5.jpg')no-repeat center center / cover">
        <div class="section-lg bg-gradient-primary text-white section-header">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <div class="page-header-content text-center">
                            <h1>Achievements of Us</h1>
                            <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                    <li class="breadcrumb-item">Blogs</a></li>
                                    <li class="breadcrumb-item active"><a href="Achievements.php">Emerging Leader</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding: 30px 15px; background: #f8f9fa;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <div class="achievement-header">
                <h1>Emerging Leader in India's IT Sector</h1>
                <!-- <h2>Jhaishna Technologies win the Fastest Growing Indian Company Leadership Awards</h2> -->
            </div>

            <div class="achievement-container">

            
                <!-- Content Section -->
                <div class="achievement-text">
                <h2>Jhaishna Technologies win the Fastest Growing Indian Company Leadership Awards</h2>
                    <p>
                        We are proud to announce that Jhaishna Technologies has been honored with the prestigious Fastest Growing Indian Company Leadership Award at the International Achievers' Conference. This recognition celebrates our relentless pursuit of excellence, innovation, and the trust of our valued partners and customers.
                    </p>
                    <p>
                        Our CEO, Rama Puppla, accepted the award on behalf of the entire Jhaishna family, highlighting our commitment to driving success and delivering exceptional value in the IT industry. This milestone reflects the collective efforts of our talented team and the unwavering support of our esteemed customers who have been integral to our journey.
                    </p>
                    <p>
                        This achievement inspires us to continue setting new benchmarks and expanding our contributions to the IT landscape. We thank all our partners and stakeholders for being a part of this incredible journey.
                    </p>
                    <p>
                        Explore our story and services to learn how we can empower your business. Together, let’s achieve new heights!<br>
                        <strong>#Innovation #Growth #Excellence</strong>
                    </p>
                </div>

                <!-- Image Section -->
                <div class="achievement-images">
                    <img src="assets/img/achievement2.jpg" alt="Achievement 1">
                    <img src="assets/img/achieve30.jpg" alt="Achievement 2">
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

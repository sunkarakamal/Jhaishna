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
    <link rel="icon" class="lozad" href="assets/img/favicon.png" type="image/png" sizes="16x16">

    <!--title-->
    <title>Mail-Us</title>

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

    <div class="main">

        <!--404 section start-->
        <section class="section py-0 position-relative text-white lozad" style="background: url('assets/img/slider-img-2.jpg')no-repeat center center / cover">
            <div class="section-lg bg-gradient-primary min-vh-100 d-flex align-items-center w-100">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-9 col-lg-7">
                            <div class="hero-content-left text-white text-center">
                                <h1 class="text-white">Kindly Subscribe for continuing</h1>
                                <p class="lead">We Request you to subscribe below for good experience </p>
                                <!-- <div id="clock" class="countdown-wrap my-5"></div> -->
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-5 col-lg-5">
                            <form action="index.php" method="post" class="subscribe-form position-relative d-none d-md-block d-lg-block">
                                <div class="d-flex align-items-center">
                                    <input type="text" class="form-control input" id="email-footer" name="email" placeholder="your mail id">
                                    <input type="submit" class="button btn btn-secondary" id="submit-footer" value="Subscribe">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--404 section end-->

    </div>

    <!--scroll bottom to top button start-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </button>
    <!--scroll bottom to top button end-->
    <!--build:js-->

</body>

</html>
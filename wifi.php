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
    <title>Our Tailered Billing Solution</title>

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
    <section class="" style="background: url('assets/img/header-bg-5.jpg')no-repeat center center / cover">
            <div class="section-lg bg-gradient-primary text-white section-header">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-7">
                            <div class="page-header-content text-center">
                                <h1> ONU + WIFI</h1>
                                <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                    <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                        <li class="breadcrumb-item">Products</a></li>
                                    <li class="breadcrumb-item active"><a href="wifi.php">Triple Play ONU + WIFI</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       <!-- Product Information Section -->
<!-- Product Information Section -->
<section class="py-5">
    <div class="container">

        <!-- Product Section: ONU + WIFI -->
        <!-- <div class="row text-center mb-5">
            <div class="col-lg-12">
                <h2 class="font-weight-bold">ONU + WIFI Products</h2>
                <p class="lead">Explore our high-performance Optical Network Units (ONU) designed for efficient high-speed internet connectivity over fiber optic networks with integrated WiFi functionality.</p>
            </div>
        </div> -->

        <!-- Product 1: PTF2262 -->
        <div class="row text-center mb-5">
            <div class="col-lg-12">
                <h2 class="font-weight-bold">PTF2262: Optical Network Unit with WiFi</h2>
                <p class="lead">A reliable Optical Network Unit (ONU) designed for efficient high-speed internet connectivity over fiber optic networks.</p>
            </div>
        </div>
        
        <!-- Images Side by Side -->
        <div class="row mb-4">
    <div class="col-md-12">
        <img src="assets/img/wifi.jpg" class="img-fluid rounded shadow" style="width: 100%; height: 600px;" alt="PTF2262 Image 1">
    </div>
</div>

        <!-- Specifications Table for PTF2262 -->
        <div class="row mb-5">
            <div class="col-lg-12">
                <h5 class="font-weight-bold text-center">Specifications:</h5>
                <table class="table table-bordered mx-auto" style="width: 90%; max-width: 1200px;">
                    <thead>
                        <tr>
                            <th>MODEL</th>
                            <th>CATEGORY</th>
                            <th>PON STANDARD</th>
                            <th>INTERFACE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PTF2262</td>
                            <td>ONU & WIFI</td>
                            <td>GPON ITU-T, G.984.x</td>
                            <td>1*TEL, 2*LAN, WiFi</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Product 2: PTF2364 -->
        <div class="row text-center mb-5">
            <div class="col-lg-12">
                <h2 class="font-weight-bold">PTF2364: Optical Network Unit with WiFi</h2>
                <p class="lead">A reliable Optical Network Unit (ONU) designed for efficient high-speed internet connectivity over fiber optic networks.</p>
            </div>
        </div>
        
        <!-- Images Side by Side -->
        <div class="row mb-4">
    <div class="col-md-12">
        <img src="assets/img/wifi2.jpg" class="img-fluid rounded shadow" style="width: 100%; height: 700px;" alt="PTF2364 Image 1">
    </div>
</div>

        <!-- Specifications Table for PTF2364 -->
        <div class="row">
            <div class="col-lg-12">
                <h5 class="font-weight-bold text-center">Specifications:</h5>
                <table class="table table-bordered mx-auto" style="width: 90%; max-width: 1200px;">
                    <thead>
                        <tr>
                            <th>MODEL</th>
                            <th>CATEGORY</th>
                            <th>PON STANDARD</th>
                            <th>INTERFACE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PTF2364</td>
                            <td>ONU & WIFI</td>
                            <td>GPON ITU-T, G.984.x</td>
                            <td>1*TEL, 2*USB2.0, 4*LAN, WiFi</td>
                        </tr>
                    </tbody>
                </table>
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



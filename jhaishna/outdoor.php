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
                                <h1>OUTDOOR WIFI</h1>
                                <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                    <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                        <li class="breadcrumb-item">Products</a></li>
                                        <li class="breadcrumb-item active"><a href="outdoor.php">Outdoor WIFI</a></li>
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

        <!-- Product 1: ZNM800 -->
        <div class="row text-center mb-5">
            <div class="col-lg-12">
                <h2 class="font-weight-bold">AX5400: OUTDOOR TRI-BAND WIFI</h2>
                <p class="lead"> AX5400: A robust outdoor tri-band Wi-Fi 6 access point delivering ultra-fast with AX5400 speeds and 
                wide-range coverage for seamless connectivity in any environment. .</p>
            </div>
        </div>
        
        <!-- Images Side by Side -->
        <div class="row mb-4">
    <div class="col-md-12">
        <img src="assets/img/outdoor.jpg" class="img-fluid rounded shadow" style="width: 100%; height: 500px;" alt="ZNM800 Image 1">
    </div>
</div>

        <!-- Specifications Table -->
        <div class="row mb-5">
            <div class="col-lg-12">
                <h5 class="font-weight-bold text-center">Specifications:</h5>
                <table class="table table-bordered mx-auto" style="width: 90%; max-width: 1200px;">
                    <thead>
                        <tr>
                            <th>MODEL</th>
                            <th>CATEGORY</th>
                            <th>DDR</th>
                            <th>FLASH</th>
                            <th>INTERFACE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>AX5400</td>
                            <td>OUTDOOR</td>
                            <td>4GB</td>
                            <td>1GB</td>
                            <td>2.4G & 5.2G & 5.8G WiFi 
                            Wi-Fi 802.11ax </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Product 2: GB720 -->
        <div class="row text-center mb-5">
            <div class="col-lg-12">
                <h2 class="font-weight-bold">AX3000: IPTV OUTDOOR DUAL-BAND WIFI</h2>
                <p class="lead"> A robust outdoor dual-band Wi-Fi 6 access point delivering super-fast AX3000 speeds and wide-
                range coverage for seamless connectivity in any environment</p>
            </div>
        </div>
        
        <!-- Images Side by Side -->
        
<div class="row mb-4">
    <div class="col-md-12">
        <img src="assets/img/outdoor2.jpg" class="img-fluid rounded shadow" style="width: 100%; height: 500px;" alt="GB720 Image 1">
    </div>
</div>

        <!-- Specifications Table -->
        <div class="row">
            <div class="col-lg-12">
                <h5 class="font-weight-bold text-center">Specifications:</h5>
                <table class="table table-bordered mx-auto" style="width: 90%; max-width: 1200px;">
                    <thead>
                        <tr>
                            <th>MODEL</th>
                            <th>CATEGORY</th>
                            <th>DDR</th>
                            <th>FLASH</th>
                            <th>INTERFACE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>AX3000</td>
                            <td>OUTDOOR</td>
                            <td>512MB</td>
                            <td>128MB</td>
                            <td>2.4G & 5G WiFi 
                            Wi-Fi 802.11ax</td>
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

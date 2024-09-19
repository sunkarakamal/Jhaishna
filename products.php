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
    <title>About Us</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0PD36XE5CJ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-0PD36XE5CJ');
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '212751893562565');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=212751893562565&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->

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

    <!--header section start-->
    <?php
    include 'header.php';
    ?>

    <div class="main">
        <!--page header section start-->
        <section style="background: url('assets/img/header-bg-5.jpg') no-repeat center center / cover">
            <div class="section-lg bg-gradient-primary text-white section-header">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-7">
                            <div class="page-header-content text-center">
                                <h1>Products</h1>
                                <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                    <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                        <li class="breadcrumb-item active" aria-current="page">
                                            A preferred business software solutions suite for the next-gen business leaders!
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container py-5">
    <!-- Section Heading -->
    <div class="row mb-6 text-center">
        <div class="col">
            <h2 class="display-4">Our Solutions</h2>
            <p class="lead">Delivering cutting-edge software solutions for next-gen business.</p>
        </div>
    </div>

   <!-- Loan Management System Section -->
<div class="row align-items-center mb-7">
    <div class="col-lg-6">
        <img src="assets/img/Billing.jpg" class="img-fluid rounded shadow" alt="Loan Management System">
    </div>
    <div class="col-lg-6">
        <h3>Loan Management System</h3>
        <p class="lead">The Loan Management System (LMS) is a robust platform designed to streamline and manage the entire loan lifecycle. From application and approval to disbursement and repayment, LMS offers an integrated solution for efficient loan processing. With features like automated workflows, real-time tracking, and comprehensive reporting, LMS enhances operational efficiency and customer satisfaction.</p>
    </div>
</div>


    <!-- ONT_ONU -->
    <div class="row align-items-center mb-7">
    <div class="col-lg-6 order-lg-2">
        <img src="assets/img/tail.jpg" class="img-fluid rounded shadow" alt="ONT/ONU Technology">
    </div>
    <div class="col-lg-6 order-lg-1">
        <h3>Advanced ONT/ONU Solutions</h3>
        <p class="lead">Our ONT (Optical Network Terminal) and ONU (Optical Network Unit) solutions offer state-of-the-art technology for efficient fiber optic network management. Designed to deliver high-speed internet and seamless connectivity, our ONT and ONU devices ensure robust performance and reliability. With cutting-edge technology and comprehensive management tools, we provide solutions that enhance your network infrastructure, improve data transmission, and support scalable connectivity for both residential and commercial environments.</p>
    </div>
</div>


    <!-- BRM and Monitoring Section -->
    <!-- <div class="row align-items-center mb-7">
        <div class="col-lg-6">
            <img src="assets/img/tail.jpg" class="img-fluid rounded shadow" alt="BRM Solutions">
        </div>
        <div class="col-lg-6 ">
        <h3>Automatic Service Activation Process (ASAP)</h3>
<p class="lead">Our Automatic Service Activation Process (ASAP) solution simplifies and automates service activation workflows, reducing the need for manual intervention. ASAP streamlines customer onboarding by integrating seamlessly with your existing systems, enabling swift provisioning of services and activation. It is designed to manage complex scenarios, including multiple service bundles and customized activation rules, ensuring flexibility and scalability. With real-time monitoring and automated notifications, ASAP enhances operational efficiency and customer satisfaction by minimizing delays and errors in the activation process.</p>
 </div> -->

    <!-- MES and SPC Section -->
    <div class="row align-items-center mt-7">
        <div class="col-lg-6 ">
            <img src="assets/img/mes.jpg" class="img-fluid rounded shadow" alt="MES and SPC Solutions">
        </div>
        <div class="col-lg-6 ">
            <h3>Manufacturing Execution & Process Control</h3>
            <p class="lead">Our integrated Manufacturing Execution System (MES) and Statistical Process Control (SPC) solutions provide full visibility and control over your production processes. From real-time tracking to quality management, we help ensure optimal performance and consistency across your manufacturing operations. Whether it's automation or process optimization, our tools streamline every aspect of production.</p>
        </div>
    </div>
</div>
</div>


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

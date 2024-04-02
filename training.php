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
    <title>Training</title>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0PD36XE5CJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
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
    <!--header section end-->

    <div class="main">

        <!--page header section start-->
        <section class="section-xl section-header bg-gradient-primary text-white min-vh-100 flex-column d-flex justify-content-center">
            <video class="fit-cover w-100 h-100 position-absolute z--1" src="http://corporx.themetags.com/corporate.mp4" autoplay="true" type="video/mp4" muted="" loop="true"></video>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <div class="page-header-content text-center">
                            <h1>Training & Certification</h1>
                            <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                    <li class="breadcrumb-item"><a href="training.php">Training</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Development</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <!--page header section end-->

    <!--project section start-->
    <section class="section section-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center pb-2">
                        <ul class="nav nav-pills custom-pill" role="tablist">
                            <li class="nav-item">
                                <a class="btn btn-pill btn-outline-primary" data-mixitup-control data-filter="all">ALL</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-pill btn-outline-primary" data-mixitup-control data-filter=".web">WEB</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-pill btn-outline-primary" data-mixitup-control data-filter=".android">Android</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-pill btn-outline-primary" data-mixitup-control data-filter=".corporate">Corporate</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-pill btn-outline-primary" data-mixitup-control data-filter=".digital">Digital Marketing</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-pill btn-outline-primary" data-mixitup-control data-filter=".java">Java</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-pill btn-outline-primary" data-mixitup-control data-filter=".mern">MERN Stack</a>
                            </li>
                        </ul>
                    </div>
                    <div class="portfolio-container" id="MixItUp">
                        <div class="mix portfolio-item web" data-ref="mixitup-target">
                            <div class="card bg-white border-variant-soft shadow-soft">
                                <div class="blog-img position-relative">
                                    <img src="assets/img/training/web.png" class="card-img-top rounded-top" alt="web">
                                    <a href="web-details.php" class="position-absolute category-text small badge badge-secondary">Full Stack Development</a>
                                </div>
                                <div class="card-body">
                                    <h3 class="h5 card-title mt-3"><a href="web-details.php">The Complete Web Development</a></h3>
                                    <p class="card-text">Learn Web Development by building Live websites and mobile apps using HTML, CSS, Javascript, PHP, Python, Java, MySQL & more!</p>
                                    <a href="web-details.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">View More <span> <i class="fas fa-angle-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="mix portfolio-item other android" data-ref="mixitup-target">
                            <div class="card bg-white border-variant-soft shadow-soft">
                                <div class="blog-img position-relative">
                                    <img src="assets/img/training/mobile.png" class="card-img-top rounded-top" alt="android">
                                    <a href="mobi-details.php" class="position-absolute category-text small badge badge-secondary">Android Development</a>
                                </div>
                                <div class="card-body">
                                    <h3 class="h5 card-title mt-3"><a href="mobi-details.php">Complete Android Development</a></h3>
                                    <p class="card-text">Learn how to build and develop Android Applications for smartphones like android, iOS or cross platforms and beyond.</p>
                                    <a href="mobi-details.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">View More <span> <i class="fas fa-angle-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="mix portfolio-item corporate" data-ref="mixitup-target">
                            <div class="card bg-white border-variant-soft shadow-soft">
                                <div class="blog-img position-relative">
                                    <img src="assets/img/training/corporate.png" class="card-img-top rounded-top" alt="corporate lifestyle">
                                    <a href="culture-details.php" class="position-absolute category-text small badge badge-secondary">Corporate Culture</a>
                                </div>
                                <div class="card-body">
                                    <h3 class="h5 card-title mt-3"><a href="culture-details.php">The Corporate Culture</a></h3>
                                    <p class="card-text">Learn how to embrace and adapt to changes in corporate culture for positive results and effective growth in your career life.</p>
                                    <a href="culture-details.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">View More <span> <i class="fas fa-angle-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="mix portfolio-item digital" data-ref="mixitup-target">
                            <div class="card bg-white border-variant-soft shadow-soft">
                                <div class="blog-img position-relative">
                                    <img src="assets/img/training/digital.png" class="card-img-top rounded-top" alt="digital marketing">
                                    <a href="marketing-details.php" class="position-absolute category-text small badge badge-secondary">Digital Marketing</a>
                                </div>
                                <div class="card-body">
                                    <h3 class="h5 card-title mt-3"><a href="marketing-details.php">Digital Advertising & Marketing</a></h3>
                                    <p class="card-text">Master Digital Marketing Strategy, Social Media Marketing, SEO, YouTube, Email, Facebook Marketing, Analytics & More!</p>
                                    <a href="marketing-details.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">View More <span> <i class="fas fa-angle-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="mix portfolio-item java" data-ref="mixitup-target">
                            <div class="card bg-white border-variant-soft shadow-soft">
                                <div class="blog-img position-relative">
                                    <img src="assets/img/training/java.png" class="card-img-top rounded-top" alt="java">
                                    <a href="java-details.php" class="position-absolute category-text small badge badge-secondary">Java</a>
                                </div>
                                <div class="card-body">
                                    <h3 class="h5 card-title mt-3"><a href="java-details.php">Java Programming - Developers</a></h3>
                                    <p class="card-text">Learn Java In This Course And Become a Computer Programmer. Obtain valuable Core Java Skills.</p>
                                    <a href="java-details.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">View More <span> <i class="fas fa-angle-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="mix portfolio-item mern" data-ref="mixitup-target">
                            <div class="card bg-white border-variant-soft shadow-soft">
                                <div class="blog-img position-relative">
                                    <img src="assets/img/training/mern.png" class="card-img-top rounded-top" alt="mern">
                                    <a href="mern-details.php" class="position-absolute category-text small badge badge-secondary">MERN Stack</a>
                                </div>
                                <div class="card-body">
                                    <h3 class="h5 card-title mt-3"><a href="mern-details.php">MERN Stack Made Simple</a></h3>
                                    <p class="card-text">Master everything about MERN stack. Learn MongoDB, Express, React & Node by building & deploying a complete app</p>
                                    <a href="mern-details.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">View More <span> <i class="fas fa-angle-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="gap"></div>
                        <div class="gap"></div>
                        <div class="gap"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--project section end-->

    <!--cta section start-->
    <section class="section section-sm py-5 bg-soft">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-7">
                    <div class="subscribe-content">
                        <h3>Consulting Agency for Your Business</h3>
                        <p class="mb-lg-0 mb-md-0">Rapidiously engage fully tested e-commerce with progressive architectures.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="action-btn text-lg-right text-sm-left">
                        <a href="contact.php" class="btn btn-primary">Contact With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--cta section end-->

    </div>

    <!--footer section start-->
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
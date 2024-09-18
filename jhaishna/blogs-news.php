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
    <title>Blogs and News</title>

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
    <?php
        include 'header.php';
    ?>
    <div class="main">

        <!--page header section start-->
        <section class="" style="background: url('assets/img/header-bg-5.jpg')no-repeat center center / cover">
            <div class="section-lg bg-gradient-primary text-white section-header">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-7">
                            <div class="page-header-content text-center">
                                <h1>Blog Default</h1>
                                <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                    <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item"><a href="blogs-news.php">Blog</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">All</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->

        <!--blog section start-->
        <section class="section section-lg ">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-4">
                        <div class="card bg-white border-variant-soft shadow-soft">
                            <div class="blog-img position-relative">
                                <img src="assets/img/blog/all-blog/pandemic.jpg" class="card-img-top rounded-top" alt="pandemic and IT">
                                <a href="#" class="position-absolute category-text small badge badge-secondary">Universal</a>
                            </div>
                            <div class="card-body">
                                <div class="media d-flex align-items-center justify-content-end">
                                    <div class="d-flex align-items-center">
                                        <span class="small"><span class="far fa-calendar-alt mr-2"></span>02 May, 2021</span>
                                    </div>
                                </div>
                                <h3 class="h5 card-title mt-3"><a href="pandemicblog.php">Pandemic and IT</a></h3>
                                <p class="card-text">The outbreak of unprecedented COVID-19 pandemic in the country has consumed several businesses...</p>
                                <a href="pandemicblog.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-4">
                        <div class="card bg-white border-variant-soft shadow-soft">
                            <div class="blog-img position-relative">
                                <img src="assets/img/blog/all-blog/business-imp.jpg" class="card-img-top rounded-top" alt="Business importance">
                                <a href="#" class="position-absolute category-text small badge badge-secondary">Business</a>
                            </div>
                            <div class="card-body">
                                <div class="media d-flex align-items-center justify-content-end">
                                    <div class="d-flex align-items-center">
                                        <span class="small"><span class="far fa-calendar-alt mr-2"></span>05 May, 2021</span>
                                    </div>
                                </div>
                                <h3 class="h5 card-title mt-3"><a href="business-imp-blog.php">Importance of BRM to your Business</a></h3>
                                <p class="card-text">They say the world is now in our hands and the information is at our fingertips..</p>
                                <a href="business-imp-blog.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-4">
                        <div class="card bg-white border-variant-soft shadow-soft">
                            <div class="blog-img position-relative">
                                <img src="assets/img/blog/all-blog/resume.jpg" class="card-img-top rounded-top" alt="resume">
                                <a href="#" class="position-absolute category-text small badge badge-secondary">Resume</a>
                            </div>
                            <div class="card-body">
                                <div class="media d-flex align-items-center justify-content-end">
                                    <div class="d-flex align-items-center">
                                        <span class="small"><span class="far fa-calendar-alt mr-2"></span>09 May, 2021</span>
                                    </div>
                                </div>
                                <h3 class="h5 card-title mt-3"><a href="resumeblog.php">Professional Resume</a></h3>
                                <p class="card-text">You can't just start writing a resume by putting your info together in the resume template all willy-nilly.</p>
                                <a href="resumeblog.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-4">
                        <div class="card bg-white border-variant-soft shadow-soft">
                            <div class="blog-img position-relative">
                                <img src="assets/img/blog/5.jpg" class="card-img-top rounded-top" alt="themetags office">
                                <a href="#" class="position-absolute category-text small badge badge-secondary">SEO, Business</a>
                            </div>
                            <div class="card-body">
                                <div class="media d-flex align-items-center justify-content-between">
                                    <div class="post-group">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="23k followers">
                                            <img class="avatar avatar-xs mr-2 img-fluid rounded-circle border border-variant-primary p-1" src="assets/img/clients/client-3.jpg" alt="admin"> <span class="font-small">Writer</span>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="small"><span class="far fa-calendar-alt mr-2"></span>15 March 2020</span>
                                    </div>
                                </div>
                                <h3 class="h5 card-title mt-3"><a href="#">Authoritatively unleash fully</a></h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="services-details.html" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-4">
                        <div class="card bg-white border-variant-soft shadow-soft">
                            <div class="blog-img position-relative">
                                <img src="assets/img/blog/6.jpg" class="card-img-top rounded-top" alt="themetags office">
                                <a href="#" class="position-absolute category-text small badge badge-secondary">Analytics</a>
                            </div>
                            <div class="card-body">
                                <div class="media d-flex align-items-center justify-content-between">
                                    <div class="post-group">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="23k followers">
                                            <img class="avatar avatar-xs mr-2 img-fluid rounded-circle border border-variant-primary p-1" src="assets/img/clients/client-1.jpg" alt="admin"> <span class="font-small">Joe B</span>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="small"><span class="far fa-calendar-alt mr-2"></span>15 March 2020</span>
                                    </div>
                                </div>
                                <h3 class="h5 card-title mt-3"><a href="#">We partnered up with Google</a></h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="services-details.html" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-4">
                        <div class="card bg-white border-variant-soft shadow-soft">
                            <div class="blog-img position-relative">
                                <img src="assets/img/blog/3.jpg" class="card-img-top rounded-top" alt="resume format">
                                <a href="#" class="position-absolute category-text small badge badge-secondary">Resume</a>
                            </div>
                            <div class="card-body">
                                <div class="media d-flex align-items-center justify-content-end">
                                    <div class="d-flex align-items-center">
                                        <span class="small"><span class="far fa-calendar-alt mr-2"></span>06 June, 2021</span>
                                    </div>
                                </div>
                                <h3 class="h5 card-title mt-3"><a href="resumeblog.php">Professional Resume Format</a></h3>
                                <p class="card-text">You can't just start writing a resume by putting your info together in the resume template all willy-nilly.<br/></p>
                                <a href="resumeblog.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="row justify-content-center">
                    <nav class="mt-4">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link border border-variant-soft rounded" href="#">Previous</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link border border-variant-soft rounded" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link border border-variant-soft rounded" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link border border-variant-soft rounded" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link border border-variant-soft rounded" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!--blog section end-->


    </div>

    <!--footer section start-->
    <footer class="footer-wrap">
        <div class="footer footer-top section section-md bg-primary text-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-4 mb-4">
                        <a class="footer-brand mr-lg-5 d-flex" href="index.html">
                            <img src="assets/img/logo-white.png" class="mr-3" alt="Footer logo">
                        </a>
                        <p class="my-4">Interactively unleash interactive best practices before technically sound portals.</p>
                        <div class="btn-wrapper mt-4">
                            <button class="btn btn-icon-only btn-pill btn-twitter mr-2 icon icon-xs icon-shape" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="40k Followers">
                                <span aria-hidden="true" class="fab fa-twitter"></span>
                            </button>
                            <button class="btn btn-icon-only btn-pill btn-facebook mr-2 icon icon-xs icon-shape" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="50k Like">
                                <span aria-hidden="true" class="fab fa-facebook-f"></span>
                            </button>
                            <button class="btn btn-icon-only btn-pill btn-youtube mr-2 icon icon-xs icon-shape" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="25k Subscribe">
                                <span aria-hidden="true" class="fab fa-youtube"></span>
                            </button>
                            <button class="btn btn-icon-only btn-pill btn-dribbble icon icon-xs icon-shape" type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="2k Project">
                                <span aria-hidden="true" class="fab fa-dribbble"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <h5 class="mb-4">Company</h5>
                        <ul class="links-vertical">
                            <li><a target="_blank" href="#">About Us</a></li>
                            <li><a target="_blank" href="#">Careers</a></li>
                            <li><a target="_blank" href="#">Customers</a></li>
                            <li><a target="_blank" href="#">Community</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <h5 class="mb-4">Resources</h5>
                        <ul class="links-vertical">
                            <li><a target="_blank" href="#">Help</a></li>
                            <li><a target="_blank" href="#">Events</a></li>
                            <li><a target="_blank" href="#">Live sessions</a></li>
                            <li><a target="_blank" href="#">Open sources</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-2">
                        <h5 class="mb-4">Support</h5>
                        <ul class="links-vertical">
                            <li><a target="_blank" href="#">Help</a></li>
                            <li><a target="_blank" href="#">Tech Support</a></li>
                            <li><a target="_blank" href="#">Network Status</a></li>
                            <li><a target="_blank" href="#">Contact Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer py-3 bg-primary text-white border-top border-variant-default">
            <div class="container">
                <div class="row">
                    <div class="col p-3">
                        <div class="d-flex text-center justify-content-center align-items-center">
                            <p class="copyright pb-0 mb-0">Copyrights © 2021. All
                                rights reserved by
                                <a href="https://themeforest.net/user/themetags" target="_blank">ThemeTags</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer section end-->
    <!--scroll bottom to top button start-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fas fa-hand-point-up"></span>
    </button>
    <!--scroll bottom to top button end-->
    <!--build:js-->
    <script src="assets/js/vendors/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendors/popper.min.js"></script>
    <script src="assets/js/vendors/bootstrap.min.js"></script>
    <script src="assets/js/vendors/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendors/jquery.easing.min.js"></script>
    <script src="assets/js/vendors/mixitup.min.js"></script>
    <script src="assets/js/vendors/headroom.min.js"></script>
    <script src="assets/js/vendors/smooth-scroll.min.js"></script>
    <script src="assets/js/vendors/wow.min.js"></script>
    <script src="assets/js/vendors/owl.carousel.min.js"></script>
    <script src="assets/js/vendors/jquery.waypoints.min.js"></script>
    <!--<script src="assets/js/vendors/countUp.min.js"></script>-->
    <script src="assets/js/vendors/jquery.countdown.min.js"></script>
    <script src="assets/js/vendors/validator.min.js"></script>
    <script src="assets/js/app.js"></script>
    <!--endbuild-->
</body>

</html>
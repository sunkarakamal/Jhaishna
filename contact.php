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
    <title>Contact Us</title>

    <!-- VECTOR CODE -->

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
    <!--header section end-->

    <div class="main">

        <!--page header section start-->
        <section class="lozad" style="background: url('assets/img/corpo.jpg')no-repeat center center / cover">
            <div class="section-lg bg-gradient-primary text-white section-header">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-7">
                            <div class="page-header-content text-center">
                                <h1>Contact US</h1>
                                <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                    <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact US</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->

        <!--promo section start-->
        <section class="section section-lg pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 mb-md-4 mb-lg-0">
                        <div class="rounded-custom text-center shadow-sm">
                            <div class="card-body py-5">
                                <div class="icon icon-md text-secondary">
                                    <i class="ti-mobile"></i>
                                </div>
                                <div>
                                    <h5 class="h6">Call Us</h5>
                                    <a href="tel:+91 96865 44129">
                                        <p class="text-muted mb-0">+91 96865 44129</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 mb-md-4 mb-lg-0">
                        <div class="rounded-custom text-center shadow-sm">
                            <div class="card-body py-5">
                                <div class="icon icon-md text-secondary">
                                    <i class="ti-location-pin"></i>
                                </div>
                                <div>
                                    <h5 class="h6">Visit Us</h5>
                                    <p class="text-muted mb-0">Vijayawada</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-4 mb-md-4 mb-lg-0">
                        <div class="rounded-custom text-center shadow-sm">
                            <div class="card-body py-5">
                                <div class="icon icon-md text-secondary">
                                    <i class="ti-email"></i>
                                </div>
                                <div>
                                    <h5 class="h6">Mail Us</h5>
                                    <a href="mailto:projects@jhaishna.com">
                                        <p class="text-muted mb-0">projects@jhaishna.com</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-md-6 col-sm-6 mb-4 mb-md-4 mb-lg-0">
                        <div class="rounded-custom text-center shadow-sm">
                            <div class="card-body py-5">
                                <div class="icon icon-md text-secondary">
                                    <i class="ti-headphone-alt"></i>
                                </div>
                                <div>
                                    <h5 class="h6">Live Chat</h5>
                                    <p class="text-muted mb-0">Chat with Us 24/7</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!--promo section end-->

        <!--contact us section start-->
        <section class="section section-lg">
            <div class="container contact">
                <div class="col-12 pb-3 message-box d-none">
                    <div class="alert alert-danger"></div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-md-6">
                        <div class="contact-us-form bg-soft rounded p-5">
                            <h4>Ready to get started?</h4>

                            <form method="POST" action="submit.php">

                                <div class="form-row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="name" placeholder="Enter name"
                                                name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Enter email" name="email" required>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="tel" class="form-control" name="phone"
                                                placeholder="Enter your number" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" rows="7"
                                                cols="25" placeholder="Message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-3 text-center">
                                        <button type="submit" name="submit" class="btn btn-secondary" id="submit">
                                            Send Message
                                        </button>


                                    </div>



                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="contact-us-content">
                            <h2>Looking for Internship and Various Services?</h2>
                            <p class="lead">Open to all passionate and emerging individuals.</p>
                            <a href="contact-us.php" class="btn btn-outline-secondary align-items-center">Get Directions
                                <span class="ti-arrow-right pl-2"></span></a>
                            <hr class="my-5">
                            <h5>Visit Us</h5>
                            <address>
                            40-5/3-9, Tikkle Rd, opp. Sneha Apartments, Shyam Nagar, Labbipet, Vijayawada, Andhra Pradesh 520010
                            </address>
                            <br>
                            <span>Phone: <a href="tel:+91 96865 44129" class="link-color">+91 7893696993, +91
                                    9686544129</a></span> <br>
                            <span>Email: <a href="projects@jhaishna.com"
                                    class="link-color">projects@jhaishna.com</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--contact us section end-->

        <!--contact map section start-->
        <div class="section py-0">
            <div class="google-map mb-n2 opacity-9 w-100">
               <!-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955036.5448085605!2d76.49532995549379!3d14.522512820539337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a367528e91a5d15%3A0x56c683aaba232b54!2sJYESHTA%20Tech%20World%20Pvt%20ltd!5e0!3m2!1sen!2sin!4v1615207898945!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>-->
                    <!--<img src="assets/img/map1.jpg" width="100%" height="450" style="border:0;>-->

                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.488893394292!2d80.6474841741205!3d16.501398027725568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a35fab0ab343e3f%3A0x244165c045610fe9!2sJhaishna%20Technologies%20Private%20Limited!5e0!3m2!1sen!2sin!4v1709802828807!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!--<iframe src="https://www.google.com/maps/d/embed?mid=1m9w7MA5ce-3Zispy9e2D9G-x41jnHfU&ehbc=2E312F" width="640" height="480"></iframe>-->
            </div>
        </div>
        <!--contact map section end-->



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
    <!--endbuild-->
</body>

</html>
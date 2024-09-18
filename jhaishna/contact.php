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
    <section class="lozad" style="background: url('assets/img/corpo.jpg')no-repeat center center / cover">
            <div class="section-lg bg-gradient-primary text-white section-header">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-7">
                            <div class="page-header-content text-center">
                                <h1>Contact US</h1>
                                <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                    <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                       
                                        <li class="breadcrumb-item active" aria-current="page">Unleash Your Growth Potential</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--page header section start-->
        <section class="section section-lg">
    <div class="container contact">
        <div class="col-12 pb-3 message-box d-none">
            <div class="alert alert-danger"></div>
        </div>
        <div class="row justify-content-center align-items-center" style="min-height: 70vh;">
            <div class="col-md-8 mb-5 d-flex justify-content-center">
                <div class="contact-us-form bg-soft rounded p-4" style="max-width: 850px; width: 100%;">
                    <h4 class="text-center" style="font-size: 2.5rem;">Ready to get started?</h4>
                    <form method="POST" action="submit.php">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Enter your number" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea name="message" id="message" class="form-control" rows="3" placeholder="Message" required></textarea>
                        </div>
                        
                        <!-- CAPTCHA Container -->
                        <div id="captchaContainer" style="display: flex; align-items: center; margin-bottom: 20px;">
                            <div id="captcha" style="font-size: 15px; margin-right: 10px;"> <!-- Placeholder for CAPTCHA --> </div>
                            <input type="text" id="captchaInput" placeholder="Enter CAPTCHA" required style="width: 80px; padding: 4px; font-size: 9px; border: 2px solid hsl(0, 0%, 80%); border-radius: 4px; margin-right: 10px;">
                            <button type="button" id="refreshCaptcha" style="border: none; background: none; padding: 0;">
                                <i class="fas fa-sync-alt" style="font-size: 20px; cursor: pointer;"></i>
                            </button>
                        </div>

                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-secondary" id="submit" onclick="return validateCaptcha()">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

                   
                   <!-- <div class="col-md-6">
                        <div class="rounded-custom text-center shadow-sm mb-4">
                            <div class="card-body py-5">
                                <div class="icon icon-md text-secondary">
                                    <i class="ti-email"></i>
                                </div>
                                <div>
                                    <h5 class="h6">Location </h5>
                                    <a href="mailto:projects@jhaishna.com">
                                        <p class="text-muted mb-0">40-5/3-9, Tikkle Rd, opp. Sneha Apartments, Shyam Nagar, Labbipet, Vijayawada, Andhra Pradesh 520010</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-custom text-center shadow-sm mb-4">
                            <div class="card-body py-5">
                                <div class="icon icon-md text-secondary">
                                    <i class="ti-location-pin"></i>
                                </div>
                                <div>
                                    <h5 class="h6">Call Us</h5>
                                    <p class="text-muted mb-0"></p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-custom text-center shadow-sm mb-4">
                            <div class="card-body py-5">
                                <div class="icon icon-md text-secondary">
                                    <i class="ti-mobile"></i>
                                </div>
                                <div>
                                    <h5 class="h6">Email Us</h5>
                                    <a href="tel:+91 96865 44129">
                                        <p class="text-muted mb-0">Info@jhaishna.com</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="google-map mb-n2 opacity-9 w-100 rounded-custom shadow-sm">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.488893394292!2d80.6474841741205!3d16.501398027725568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a35fab0ab343e3f%3A0x244165c045610fe9!2sJhaishna%20Technologies%20Private%20Limited!5e0!3m2!1sen!2sin!4v1709802828807!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="rounded-custom text-center shadow-sm mb-4">
                            <div class="card-body py-5">
                                <div class="icon icon-md text-secondary">
                                    <i class="ti-email"></i>
                                </div>
                                <div>
                                    <h5 class="h6">Location</h5>
                                    <a href="mailto:projects@jhaishna.com">
                                        <p class="text-muted mb-0">16 Floor, Unit A, Dan 6, 2-6 Fui You Kok Street, Tsuen Wan, New Territories, Hong Kong </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-custom text-center shadow-sm mb-4">
                            <div class="card-body py-5">
                                <div class="icon icon-md text-secondary">
                                    <i class="ti-location-pin"></i>
                                </div>
                                <div>
                                    <h5 class="h6">Call Us</h5>
                                    <p class="text-muted mb-0"> </p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-custom text-center shadow-sm mb-4">
                            <div class="card-body py-5">
                                <div class="icon icon-md text-secondary">
                                    <i class="ti-mobile"></i>
                                </div>
                                <div>
                                    <h5 class="h6">Email Us</h5>
                                    <a href="tel:+91 96865 44129">
                                        <p class="text-muted mb-0"></p>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="google-map mb-n2 opacity-9 w-100 rounded-custom shadow-sm">
                          <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d12238.77848914491!2d114.10249143038598!3d22.37098478639803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s16%20Floor%2C%20Unit%20A%2C%20Dan%206%2C%202-6%20Fui%20You%20Kok%20Street%2C%20Tsuen%20Wan%2C%20New%20Territories%2C%20Hong%20Kong!5e0!3m2!1sen!2sin!4v1724843337015!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="rounded-custom text-center shadow-sm mb-4">
                            <div class="card-body py-5">
                                <div class="icon icon-md text-secondary">
                                    <i class="ti-email"></i>
                                </div>
                                <div>
                                    <h5 class="h6">Location</h5>
                                    <a href="mailto:projects@jhaishna.com">
                                        <p class="text-muted mb-0">USA Address: 12110 Sunset Hills Rd, Ste 600 Reston, Virginia 20191, USA </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-custom text-center shadow-sm mb-4">
                            <div class="card-body py-5">
                                <div class="icon icon-md text-secondary">
                                    <i class="ti-location-pin"></i>
                                </div>
                                <div>
                                    <h5 class="h6">Call Us</h5>
                                    <p class="text-muted mb-0"> </p>
                                </div>
                            </div>
                        </div>
                        <div class="rounded-custom text-center shadow-sm mb-4">
                            <div class="card-body py-5">
                                <div class="icon icon-md text-secondary">
                                    <i class="ti-mobile"></i>
                                </div>
                                <div>
                                    <h5 class="h6">Email Us</h5>
                                    <a href="tel:+91 96865 44129">
                                        <p class="text-muted mb-0"></p>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="google-map mb-n2 opacity-9 w-100 rounded-custom shadow-sm">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3102.614926542066!2d-77.36768542493179!3d38.95562464326787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1shttps%3A%2F%2Fmaps.app.goo.gl%2F5F5qii6Qmsh9ukeq7!5e0!3m2!1sen!2sin!4v1724842454050!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>-->
                    <div class="col-md-12 mb-4">
    <div class="combined-box rounded-custom shadow-sm p-4 mb-4"> <!-- Outer box -->
        <div class="row">
            <!-- USA Location Section -->
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center location-section p-4"> <!-- Centered location -->
                <div class="text-center">
                    <div class="icon icon-md text-secondary mb-3">
                        <i class="ti-email"></i>
                    </div>
                    <h5 class="h6">Location</h5>
                    <p class="text-muted mb-0">USA Address: 12110 Sunset Hills Rd, Ste 600 Reston, Virginia 20191, USA</p>
                </div>
            </div>

            <!-- USA Google Map Section -->
            <div class="col-md-6 google-map-section"> <!-- Half-width for map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3102.614926542066!2d-77.36768542493179!3d38.95562464326787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1shttps%3A%2F%2Fmaps.app.goo.gl%2F5F5qii6Qmsh9ukeq7!5e0!3m2!1sen!2sin!4v1724842454050!5m2!1sen!2sin" width="100%" height="300" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <div class="combined-box rounded-custom shadow-sm p-4 mb-4"> <!-- Outer box -->
        <div class="row">
            <!-- Vijayawada Location Section -->
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center location-section p-4"> <!-- Centered location -->
                <div class="text-center">
                    <div class="icon icon-md text-secondary mb-3">
                        <i class="ti-email"></i>
                    </div>
                    <h5 class="h6">Location</h5>
                    <p class="text-muted mb-0">40-5/3-9, Tikkle Rd, opp. Sneha Apartments, Shyam Nagar, Labbipet, Vijayawada, Andhra Pradesh 520010</p>
                </div>
            </div>

            <!-- Vijayawada Google Map Section -->
            <div class="col-md-6 google-map-section"> <!-- Half-width for map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.488893394292!2d80.6474841741205!3d16.501398027725568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a35fab0ab343e3f%3A0x244165c045610fe9!2sJhaishna%20Technologies%20Private%20Limited!5e0!3m2!1sen!2sin!4v1709802828807!5m2!1sen!2sin" width="100%" height="300" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <div class="combined-box rounded-custom shadow-sm p-4 mb-4"> <!-- Outer box -->
        <div class="row">
            <!-- Hong Kong Location Section -->
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center location-section p-4"> <!-- Centered location -->
                <div class="text-center">
                    <div class="icon icon-md text-secondary mb-3">
                        <i class="ti-email"></i>
                    </div>
                    <h5 class="h6">Location</h5>
                    <p class="text-muted mb-0">16 Floor, Unit A, Dan 6, 2-6 Fui You Kok Street, Tsuen Wan, New Territories, Hong Kong</p>
                </div>
            </div>

            <!-- Hong Kong Google Map Section -->
            <div class="col-md-6 google-map-section"> <!-- Half-width for map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d12238.77848914491!2d114.10249143038598!3d22.37098478639803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s16%20Floor%2C%20Unit%20A%2C%20Dan%206%2C%202-6%20Fui%20You%20Kok%20Street%2C%20Tsuen%20Wan%2C%20New%20Territories%2C%20Hong%20Kong!5e0!3m2!1sen!2sin!4v1724843337015!5m2!1sen!2sin" width="100%" height="300" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>





                    
        <!--contact us section end-->

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

    <script>  
    // Function to generate numeric CAPTCHA
    function generateNumericCaptcha() {
        var captcha = '';
        var length = 6; // Length of CAPTCHA
        for (var i = 0; i < length; i++) {
            captcha += Math.floor(Math.random() * 10); // Generate random digits
        }
        document.getElementById('captcha').innerText = captcha; // Display CAPTCHA
    }

    // Function to validate CAPTCHA
    function validateCaptcha() {
        var captchaInput = document.getElementById('captchaInput').value.trim(); // User input
        var captchaDisplayed = document.getElementById('captcha').innerText.trim(); // Displayed CAPTCHA
        if (captchaInput === captchaDisplayed) {
            return true; // Allow form submission if CAPTCHA matches
        } else {
            alert('Invalid CAPTCHA. Please try again.');
            return false; // Prevent form submission if CAPTCHA doesn't match
        }
    }

    // Add event listener for DOMContentLoaded to generate initial CAPTCHA
    document.addEventListener('DOMContentLoaded', function () {
        generateNumericCaptcha(); // Generate the initial CAPTCHA when the page loads

        // Add event listener for the refresh button
        document.getElementById('refreshCaptcha').addEventListener('click', function() {
            generateNumericCaptcha(); // Call the function to regenerate CAPTCHA
        });
    });
</script>

</body>

</html>

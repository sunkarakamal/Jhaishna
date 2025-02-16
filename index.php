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
    <!--<link rel="icon" class="lozad" href="assets/img/favicon.png" type="image/png" sizes="16x16">-->
    <!-- favicon icon -->
<link rel="icon" class="lozad" href="assets/img/favicon.png" type="image/png" sizes="16x16">



    <!--title-->
    <title>Jhaishna</title>

    <!-- VECTOR CODE -->
<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  
}

body {
  font-family: Arial, sans-serif;
}

.client-slider {
  width: 100%;
  overflow: hidden; 
  position: relative;
  
  padding: 20px 0;
}

.slider-wrapper {
  display: flex;
  transition: transform 0.3s ease-in-out;
}

.slide {
  min-width: 25%; 
  display: flex;
  justify-content: center;
  align-items: center;
}

.slide img {
  width: 150px; 
  height: 100px;
  object-fit: contain;
  filter: none;
  transition: filter 0.3s ease-in-out;
}

.slide img:hover {
  filter: none;
}


.slider-controls {
  position: absolute;
  top: 50%;
  width: 100%;
  display: flex;
  justify-content: space-between;
  transform: translateY(-50%);
}

.slider-btn {
  background-color: rgba(0, 0, 0, 0.5);
  color: #fff;
  border: none;
  padding: 10px;
  cursor: pointer;
  font-size: 18px;
  z-index: 10;
}





/* Popup Container */
.award-container {
  position: fixed;
  bottom: 5vh;  /* 5% of the viewport height */
  right: 5vw;   /* 5% of the viewport width */
  width: 30vw;  /* 30% of the viewport width for responsiveness */
  max-width: 430px;  /* Maximum width */
  min-width: 250px;  /* Minimum width */
  height: 33vh; /* 1/3rd of the viewport height */
  max-height: 300px; /* Optional max height */
  /* background: url('assets/img/5.png') center/cover no-repeat; Clear background image */
  box-shadow: 
    0 0 10px 2px rgba(245, 158, 11, 0.5),
    inset 0 0 10px rgba(245, 158, 11, 0.3);
  border-radius: 10px;
  overflow: hidden;
  z-index: 1000;
  padding: 15px;
  text-align: center;
  transform: translateY(100px);
  opacity: 0;
  pointer-events: none;
  visibility: hidden;
  transition: transform 0.7s ease-in-out, opacity 0.7s ease-in-out;
}


/* Pseudo-element for background */
.award-container:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url('assets/img/5.png') center/cover no-repeat; /* Set background image */
  opacity: 0.85; /* Adjust the opacity to control the transparency of the image */
  z-index: -1; /* Keep the image behind the content */
}

/* Adjusted for Optional Overlay (if needed) */
/* .award-container {
  background: url('assets/img/5.png') center/cover no-repeat;
  opacity: 0.5;
  /* Uncomment this line if you need a gradient overlay for better text visibility:
     background: linear-gradient(rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.4)), 
     url('assets/img/1.png') center/cover no-repeat;
  */
/*} */

/* Media Queries for Smaller Screens */
@media (max-width: 768px) {
  .award-container {
    width: 40vw;  /* 40% of the viewport width for tablet-sized screens */
    max-width: 400px;  /* Max width for tablets */
    height: 30vh; /* Slightly reduced height for smaller screens */
  }
}

@media (max-width: 480px) {
  .award-container {
    width: 50vw;  /* 50% of the viewport width for mobile screens */
    max-width: 350px;  /* Max width for mobile */
    height: 25vh; /* Further reduced height for mobile */
  }
}






/* Visible state */
.award-container.visible {
  transform: translateY(0);
  opacity: 1;
  pointer-events: auto;
  visibility: visible;
}

/* Dismiss button */
.dismiss-btn {
  position: absolute;
  top: 8px;
  right: 15px;
  background: transparent;
  border: none;
  color: #888;
  font-size: 20px;
  cursor: pointer;
}

.dismiss-btn:hover {
  color: #333;
}

/* Content Styling */
.award-body .award-image {
  width: 80%;
  height: auto;
  margin-bottom: 10px;
  border-radius: 6px;
}

.award-body h3 {
  font-size: 1rem;
  color: #333;
  margin: 4px 0;
  position: absolute; /* Position button relative to .award-body */
  bottom: 71px; /* 20px from the bottom of the popup */
  left: 50%; /* Center horizontally */
  transform: translateX(-50%);
}

.award-body p {
  font-size: 0.9rem;
  color: #555;
  margin: 0px 0;
  position: absolute; /* Position button relative to .award-body */
  bottom: 30px; /* 20px from the bottom of the popup */
  left: 50%; /* Center horizontally */
  transform: translateX(-50%);
}

/* .award-body a {
  display: inline-block;
  text-decoration: none;
  color: #fff;
  background-color: #007bff;
  padding: 6px 12px;
  border-radius: 3px;
  font-size: 0.85rem;
  transition: background-color 0.3s ease;
}

.award-body a:hover {
  background-color: #0056b3;
} */
/* Button Styling */
.award-body a {
  display: inline-block;
  text-decoration: none;
  color: #FF0000;
  background-color:#f5d742;
  padding: 3px 6px;
  border-radius: 8px;
  font-size: 0.85rem;
  transition: background-color 0.3s ease;
  position: absolute; /* Position button relative to .award-body */
  bottom: 7px; /* 20px from the bottom of the popup */
  left: 50%; /* Center horizontally */
  transform: translateX(-50%); /* Adjust for centering */
}

.award-body a:hover {
  background-color:#ffd700;
}


/* Background Video */
/* .background-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 1;
} */


.background-gif {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
        }

/* Semi-Transparent Overlay */
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.2); /* Darker black for better text visibility */
    z-index: 2;
}

/* Hero Content Styles */
.hero-content-wrap {
    position: relative;
    z-index: 3; /* Ensure it's above the overlay */
    color: #ffffff; /* Ensure white text for contrast */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Add shadow for better readability */
}

.hero-content-wrap h1 {
    font-size: 3rem; /* Adjust for better visibility */
    line-height: 1.3;
    font-weight: 700;
    margin-bottom: 20px;
}

.hero-content-wrap p {
    font-size: 1.2rem;
    line-height: 1.6;
    font-weight: 700;
    margin-bottom: 15px;
}

.hero-content-wrap ul {
    padding-left: 20px;
}

.hero-content-wrap li {
    font-size: 1.1rem;
    line-height: 1.5;
}

.action-btns .btn {
    font-size: 1rem;
    padding: 12px 25px;
}

/* Owl Carousel Adjustments */
.owl-carousel .item {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    height: 100%;
}


 .gradient-overly-right-color {
    background: none !important; /* Remove any background or gradient */
    background-image: none !important;/* Remove any gradient or image */
}

.gradient-overly-right-color::before,
.gradient-overly-right-color::after {
    content: none;
    background: none;
}


.hero-content-wrap {
  position: relative;
  z-index: 2;                /* Ensure the content stays above the video */
}

.hero-content-wrap h1, .hero-content-wrap p, .hero-content-wrap .action-btns {
  color: #fff;               /* Ensure the text is readable on the video */
  z-index: 3;                /* Ensure text and buttons stay above the video */
}

/* Optional: Adjust padding for smaller screens */
@media (max-width: 768px) {
  .hero-content-wrap {
    padding: 15px;           /* Adjust padding for smaller screens */
  }
}

@media (max-width: 480px) {
  .hero-content-wrap {
    padding: 10px;           /* Further adjustment for mobile devices */
  }
}

/* Falling numbers container */
.loading-screen {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: white; /* White background */
  z-index: 9999;
  overflow: hidden;
  transition: background-color 0.5s ease-in-out; /* Smooth background fade-out effect */
}

/* Falling number styling */
.matrix-number {
  position: absolute;
  font-family: 'Courier New', Courier, monospace;
  font-size: 20px; /* Slightly larger font for visibility */
  white-space: nowrap;
  animation: fall linear infinite;
  transform: rotate(0deg);
  color: rgba(0, 0, 0, 0); /* Light gray for lighter numbers */
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0); /* Softer shadow for lighter effect */
  transition: background-color 0.5s ease-in-out; /* Smooth fading transition */
}

/* Falling animation */
@keyframes fall {
  0% {
    transform: translateY(-10%) rotate(var(--tilt-angle));
    opacity: 1; /* Fully visible at the start */
  }
  70% {
    transform: translateY(70vh) rotate(var(--tilt-angle));
    opacity: 0.7; /* Slightly fade out */
  }
  100% {
    transform: translateY(100vh) rotate(var(--tilt-angle));
    opacity: 0; /* Fully fade out */
  }
}

/* Hidden class to hide the loading screen */
.hidden {
  display: none;
}





</style>

</head>

<body>

<!-- Loading screen for the falling numbers effect -->
<div class="loading-screen" id="loadingScreen"></div>

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
    <!--topbar end-->
    <!--header top end-->
    <!--header section start-->
    <?php
    include 'header.php';
    ?>
    <!--header section end-->

    <div class="main">
        <!--hero section start-->
        <!-- <section class="section section-xl pt-9 pb-9 section-header text-white gradient-overly-right-color" style="background-image: url('assets/img/home-banner3.jpg')"> -->

        <section class="section section-xl pt-9 pb-9 section-header text-white gradient-overly-right-color" style="position: relative; overflow: hidden;">
    <!-- Background Video -->
    <!-- <video autoplay muted loop id="background-video" class="background-video" preload="auto">
    <source src="assets/img/homepage demo.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video> -->

<img src="assets/img/homescreen.gif" alt="Background GIF" class="background-gif" preload="auto">

     <!-- Semi-Transparent 
      Overlay -->
     <div class="overlay"></div>

            <div class="container">
                <div class="row">
                    <div class="owl-carousel owl-theme hero-content-slider custom-dot custom-dot-2">
                        <div class="item">
                            <div class="col-md-8 col-lg-7 col-12">
                                <div class="hero-content-wrap">
                                    <h1 class="display-2">Transform Your Business in Next 90 Days</h1>
                                    <p class="lead">Unlock Growth Potential with Oracle's BRM, OAP, and ASAP Solutions!</p>
                                    <ul class="list-unstyled tech-feature-list text-white">
                                        <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>Billing</strong> Revenue management</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>OBRM</strong> Access portal</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>Automated</strong> service activation program</li>
                                    </ul>
                                    <div class="action-btns pt-3">
                                        <a href="contact.php" class="btn btn-secondary mr-3">Connect</a>
                                        <a href="softdev.php" class="btn btn-outline-light">Know More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-8 col-lg-7 col-12">
                                <div class="hero-content-wrap position-relative z-index">
                                    <h1 class="display-2">Optimize Billing and Revenue Workflows to Exemplary Standards</h1>
                                    <p class="lead">Oracle BRM empowers smooth & efficient rating for Billing and Revenue Management across diverse services</p>
                                    <p class="lead">Simplify your operations, enhance customer satisfaction and focus on growing your business with confidence</p>


                                    <a href="softdev.php" class="btn btn-secondary mt-3">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-8 col-lg-7 col-12">
                                <div class="hero-content-wrap text-white">
                                    <h1 class="display-2"> Effortlessly Manage Relations with Our Innovative CRM Solutions</h1>
                                    <p class="lead"> Easily manage customer relationships, sales pipelines, user accounts, pricing plans, promotions & customize your interface with ease </p>

                                    <a href="CRM.php" class="btn btn-secondary mt-3">Learn More</a>
                                
                                </div>
                                
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-8 col-lg-7 col-12">
                                <div class="hero-content-wrap">
                                    <h1 class="display-2">Streamline Automatic Service Activation for Effortless Setup and Management </h1>
                                    <p class="lead">Unlock Efficiency & Effectiveness at once.Automated service activation program efficiently streamlines customer verification and request validation for seamless compliance </p>

                                    <a href="cloud.php" class="btn btn-secondary mt-3">Learn More</a>
                                
                                </div>
                                </div>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- <section class="section section-xl pt-9 pb-9 section-header text-white gradient-overly-right-color" style="background-image: url('assets/img/home-banner3.jpg')">
    <div class="container">
        <div class="row">
            <div class="owl-carousel owl-theme hero-content-slider custom-dot custom-dot-2" style="display: flex; align-items: center;">
                
                <!-- Move the dots to the left -->
                <!-- <div class="owl-dots" style="position: absolute; left: 20px; top: 50%; transform: translateY(-50%); display: flex; flex-direction: column;">
                    <button role="button" class="owl-dot active" style="margin-bottom: 10px;">
                        <span style="background-color: white; border-radius: 50%; width: 10px; height: 10px; display: block;"></span>
                    </button>
                    <button role="button" class="owl-dot" style="margin-bottom: 10px;">
                        <span style="background-color: white; border-radius: 50%; width: 10px; height: 10px; display: block;"></span>
                    </button>
                    <button role="button" class="owl-dot" style="margin-bottom: 10px;">
                        <span style="background-color: white; border-radius: 50%; width: 10px; height: 10px; display: block;"></span>
                    </button>
                    <button role="button" class="owl-dot" style="margin-bottom: 10px;">
                        <span style="background-color: white; border-radius: 50%; width: 10px; height: 10px; display: block;"></span>
                    </button>
                </div> -->

                <!-- Content Items -->
                <!-- <div class="item" style="margin-left: 100px;">
                    <div class="col-md-8 col-lg-7 col-12">
                        <div class="hero-content-wrap">
                            <h1 class="display-2">Transform Your Business in Next 90 Days</h1>
                            <p class="lead">Unlock Growth Potential with Oracle's BRM, OAP, and ASAP Solutions!</p>
                            <ul class="list-unstyled tech-feature-list text-white">
                                <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>Billing</strong> Revenue management</li>
                                <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>OBRM</strong> Access portal</li>
                                <li class="py-1"><span class="ti-control-forward mr-2"></span><strong>Automated</strong> service activation program</li>
                            </ul>
                            <div class="action-btns pt-3">
                                <a href="contact.php" class="btn btn-secondary mr-3">Connect</a>
                                <a href="softdev.php" class="btn btn-outline-light">Know More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="item" style="margin-left: 100px;">
                    <div class="col-md-8 col-lg-7 col-12">
                        <div class="hero-content-wrap position-relative z-index">
                            <h1 class="display-2">Bill like a BOSS with Oracle BRM!</h1>
                            <p class="lead">Empowering Communication Service Providers with Oracle BRM for seamless rating, billing, and revenue management across diverse services.</p>

                            <a href="contact.php" class="btn btn-secondary mt-3">Get Start Now</a>
                        </div>
                    </div>
                </div>

                <div class="item" style="margin-left: 100px;">
                    <div class="col-md-8 col-lg-7 col-12">
                        <div class="hero-content-wrap text-white">
                            <h1 class="display-2">Experience seamless access with CRM's user-friendly platform</h1>
                            <p class="lead">With CRM, easily manage customer relationships, sales pipelines, contacts, system settings, user accounts, pricing plans, promotions, and customize your interface with ease!.</p>

                            <a href="contact.php" class="btn btn-secondary mt-3">Get Start Now</a>
                        </div>
                    </div>
                </div>

                <div class="item" style="margin-left: 100px;">
                    <div class="col-md-8 col-lg-7 col-12">
                        <div class="hero-content-wrap">
                            <h1 class="display-2">Streamlined Automatic Service Activation for Effortless Setup and Management</h1>
                            <p class="lead">Unlocking convenience, one activation at a time. Our automated service activation program streamlines customer verification and request validation for seamless compliance. Let's activate together!</p>

                            <a href="contact.php" class="btn btn-secondary mt-3">connect</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --> 




        <!--hero section end-->

        <!--promo section start-->
        <section class="section section-sm pb-0 mt-n8 z-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-md-4 mb-4 mb-lg-0">
                        <div class="single-promo-block promo-hover-bg-3 hover-image shadow p-5 rounded-custom bg-white">
                            <div class="icon icon-lg text-primary"><i class="fas fa-laptop"></i></div>
                            <div class="promo-block-content">
                                <h5>Automated service activation programs</h5>
                                <p class="mb-0">At Jhaishna Technologies, we specialize in creating, configuring,& managing telecommunications services to help you streamline development cycles and quickly enter the market.
</br>
With ASAP we deliver winning business solutions by leveraging the best strategies and industry experts. Let us help you drive efficiency and innovation in your operations.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-md-4 mb-4 mb-lg-0">
                        <div class="single-promo-block promo-hover-bg-2 hover-image shadow p-5 rounded-custom bg-white">
                            <div class="icon icon-lg text-primary"><i class="fas fa-chart-line"></i></div>
                            <div class="promo-block-content justify-content-center">
                                <h5> Expert Strategies for Winning Results</h5>
                                <p class="mb-0">Our team of BRM experts is dedicated to providing top-notch services tailored to your specific needs. With our proven strategies and industry know-how, we ensure that your business reaches new heights.
</br>
</br>
Say goodbye to billing headaches Our comprehensive solutions are designed to streamline your processes, increase efficiency, and maximize revenue.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-md-4 mb-4 mb-lg-0">
                        <div class="single-promo-block promo-hover-bg-1 hover-image shadow p-5 rounded-custom bg-white">
                            <div class="icon icon-lg text-primary"><i class="fab fa-confluence"></i></div>
                            <div class="promo-block-content">
                                <h5>Your Project, Our Expertise</h5>
                                <p class="mb-0">With our vast experience in organizing projects efficiently based on customer needs, we can help you build a strong brand identity that resonates with your target audience. Trust us to bring your vision to life!.
</br>
</br>
We take pride in offering comprehensive support & product management services, skillfully handling new updates & features tailored to meet our clients' specific requirements. </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>

        <br>
        <br>
        <section class="client-slider">
    <div class="slider-wrapper" id="slider">
      <!-- Duplicate slides for seamless looping -->
      <div class="slide"><img src="assets/img/HKT.jpg" alt="HKT"></div>
    <div class="slide"><img src="assets/img/oracle.jpg" alt="oracle"></div>
    <div class="slide"><img src="assets/img/hongkong.jpeg" alt="HKBN"></div>
    <div class="slide"><img src="assets/img/jio.jpg" alt="jio"></div>
    <div class="slide"><img src="assets/img/hathway.jpg" alt="hathway"></div>
    <div class="slide"><img src="assets/img/digi.jpg" alt="digi"></div>
    <div class="slide"><img src="assets/img/equi.jpg" alt="equi"></div>
    <div class="slide"><img src="assets/img/rackspace.jpg" alt="rackspace"></div>
      <!-- Duplicate slides for seamless looping -->
      <div class="slide"><img src="assets/img/HKT.jpg" alt="HKT"></div>
    <div class="slide"><img src="assets/img/oracle.jpg" alt="oracle"></div>
    <div class="slide"><img src="assets/img/hongkong.jpeg" alt="HKBN"></div>
    <div class="slide"><img src="assets/img/jio.jpg" alt="jio"></div>
    </div>
    <div class="slider-controls">
      <button class="slider-btn" id="prevBtn">&#10094;</button>
      <button class="slider-btn" id="nextBtn">&#10095;</button>
    </div>
  </section>

  <script>
    const slider = document.getElementById('slider');
    const slides = document.querySelectorAll('.slide');
    const slideWidth = slider.offsetWidth / 4; // Divide slider width by 4 to show 4 logos
    let currentPosition = 0;

    // Move the slider left to right automatically
    const moveSliderAuto = () => {
      currentPosition += slideWidth;
      slider.style.transition = 'transform 0.5s ease-in-out';
      slider.style.transform = `translateX(-${currentPosition}px)`;

      // Reset to the starting position for seamless looping
      if (currentPosition >= slideWidth * (slides.length - 4)) {
        setTimeout(() => {
          slider.style.transition = 'none';
          currentPosition = 0;
          slider.style.transform = `translateX(-${currentPosition}px)`;
        }, 500);
      }
    };

    // Move slider manually
    const moveSliderManual = (direction) => {
      if (direction === 'next') {
        currentPosition += slideWidth;
        if (currentPosition >= slideWidth * (slides.length - 4)) {
          currentPosition = 0;
        }
      } else if (direction === 'prev') {
        currentPosition -= slideWidth;
        if (currentPosition < 0) {
          currentPosition = slideWidth * (slides.length - 4);
        }
      }
      slider.style.transition = 'transform 0.5s ease-in-out';
      slider.style.transform = `translateX(-${currentPosition}px)`;
    };

    // Buttons for manual control
    document.getElementById('nextBtn').addEventListener('click', () => moveSliderManual('next'));
    document.getElementById('prevBtn').addEventListener('click', () => moveSliderManual('prev'));

    // Auto-slide every 2 seconds
    setInterval(moveSliderAuto, 2000);
  </script>
        <!--promo section end-->

        <!--about section start-->
        <section class="section section-lg bg-soft">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-md-12 col-lg-6 mb-4 mb-md-4 mb-lg-0">
                        <div class="card bg-primary position-relative shadow-lg fancy-radius p-3 z-1">
                            <div class="dot-shape-top position-absolute">
                            <img src="assets/img/color-shape.svg" alt="dot" class="img-fluid lozad">
                            </div>
                            <img class="fancy-radius img-fluid lozad" src="assets/img/about-us (2).jpg" alt="modern desk" style="height: 400px; width: 100%; object-fit: contain;">
                            <div class="dot-shape position-absolute bottom-0">
                            <img src="assets/img/dot-shape.png" class="lozad" alt="dot">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5">
                        <div class="about-content-right">
                            <!-- <h2>Manifest  Solutions for Your Business Needs</h2>
                            <p>With over 7 years of experience, Jhaishna Technologies has been at the forefront of providing cutting-edge solutions in billing and revenue management. Our track record speaks for itself, as we have successfully assisted numerous clients in optimizing their financial operations.
                            </p> -->
                            <div class="feature-tabs-wrap">
                                <ul class="nav nav-tabs mb-3 border-bottom-0 feature-tabs" data-tabs="tabs">
                                    <li class="nav-item">
                                        <a class="py-2 d-flex align-items-center active" href="#feature-tab-1" data-toggle="tab">
                                            <h6 class="mb-0">Our Mission</h6>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="py-2 d-flex align-items-center" href="#feature-tab-2" data-toggle="tab">
                                            <h6 class="mb-0">Our Vision</h6>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="py-2 d-flex align-items-center" href="#feature-tab-3" data-toggle="tab">
                                            <h6 class="mb-0">Our Values</h6>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content feature-tab-content">
                                    <div class="tab-pane active" id="feature-tab-1">
                                        <p> <b> Simplify billing with precision :</b> Our dedicated team excels in simplifying complex billing procedures, ensuring accuracy and efficiency in every transaction. Say goodbye to billing headaches with our tailored solutions.</p>
                                        <ul class="list-unstyled tech-feature-list mb-4">
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Assuring </strong> clients on deliver results.</li>
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Identifying</strong> and plugging revenue leaks.</li>
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Ensure  </strong>  maximum profitability for business.</li>
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Streamlining</strong> intricate billing processes.</li>
                                        </ul>

                                    </div>
                                    <div class="tab-pane" id="feature-tab-2">
                                        <p><b>Maximize Profitability, Minimize Revenue Leakage :</b> At Jhaishna Technologies, we are dedicated to helping telecom companies thrive by reducing revenue leakage and maximizing profitability through our innovative billing revenue management services.</p>

                                        <ul class="list-unstyled tech-feature-list mb-4">
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Assuring</strong> clients on deliver results.</li>
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Identifying</strong> and plugging revenue leak.</li>
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Ensure</strong> maximum profitability for business.</li>
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Streamlining</strong> intricate billing processes.</li>
                                        </ul>

                                    </div>
                                    <div class="tab-pane" id="feature-tab-3">
                                        <p><b>Trusted Software Development Partner : </b> With a strong foothold in India, Jhaishna has emerged as a reliable and innovative Software Development Company. We are committed to leveraging the latest technologies to meet your evolving business needs.
                                        </p>
                                        <ul class="list-unstyled tech-feature-list mb-4">
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Assuring</strong> clients on deliver results.</li>
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Identifying</strong> and plugging revenue leak.</li>
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Ensure</strong> maximum profitability for business.</li>
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Streamlining</strong> intricate billing processes.</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      
        <!--about section end-->

        <!--cta section start-->
        <!--<section class="py-0 text-white lozad" style="background: url('assets/img/slider-img-5.jpg')no-repeat center center fixed">
            <div class="section section-sm bg-gradient-primary">
                <div class="container">
                    <div class="row">
                    <div class="col-6 col-md-6 col-lg-3 mb-4 mb-md-4 mb-lg-0">
                            <div class="icon-box text-center">
                                <div class="icon icon-md"><i class="fas fa-user"></i></div>
                                <span class="counter d-block display-3 my-2" data-count="1475">0</span>
                                <h3 class="h6">Active viewers / day</h3>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 mb-4 mb-md-4 mb-lg-0">
                            <div class="icon-box text-center">
                                <div class="icon icon-md"><i class="fas fa-tasks"></i></div>
                                <span class="counter d-block display-3 my-2" data-count="55"></span>
                                <h3 class="h6">Projects</h3>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3 mb-4 mb-md-4 mb-lg-0">
                            <div class="icon-box text-center">
                                <div class="icon icon-md"><i class="fas fa-users"></i></div>
                                <span class="counter d-block display-3 my-2" data-count="75">0</span>
                                <h3 class="h6">Served Clients</h3>
                            </div>
                        </div>
                         <div class="col-6 col-md-6 col-lg-3 mb-4 mb-md-4 mb-lg-0">
                            <div class="icon-box text-center">
                                 <div class="icon icon-md"><i class="fas fa-dollar-sign"></i></div>
                                 <span class="counter d-block display-3 my-2" data-count="6144">0</span>
                                 <h3 class="h6">Revenue</h3>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </section>-->
        <!--cta section end-->

        <!--work-process section start-->
        <section class="section section-lg  ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Working with Few Process it's Simple</h2>
                            <p class="lead">Distinctively grow go forward manufactured products and enthusiastically disseminate outsourcing customer service.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-md-4 mb-lg-0">
                        <div class="step-dots right-radial-top text-center">
                            <div class="icon icon-shape icon-lg bg-default-alt text-default rounded-circle"><i class="fas fa-lightbulb"></i></div>
                            <h5 class="mt-4 mb-3">Create Design</h5>
                            <p> Begin by creating a detailed design or plan that outlines the project scope, objectives, and deliverables. This stage sets the foundation for the entire project and ensures that all stakeholders are aligned on the vision and goals.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-md-4 mb-lg-0">
                        <div class="step-dots right-radial-bottom text-center">
                            <div class="icon icon-shape icon-lg bg-secondary-alt text-secondary rounded-circle"><i class="fab fa-buffer"></i></div>
                            <h5 class="mt-4 mb-3">Develop Prototype</h5>
                            <p>Develop a prototype that allows stakeholders to visualize the project's functionality & provide valuable feedback before full-scale development begins. This iterative process helps in refining the project design & ensuring that it meets expectations.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-md-4 mb-lg-0">
                        <div class="step-dots right-radial-top text-center">
                            <div class="icon icon-shape icon-lg bg-warning-alt text-warning rounded-circle"><i class="fas fa-drafting-compass"></i></div>
                            <h5 class="mt-4 mb-3"> Finalize Plans</h5>
                            <p> Once the design and prototype are approved, finalize plans by detailing the project schedule, resource allocation, budget considerations, & any other logistical aspects crucial for successful execution. </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-md-4 mb-lg-0">
                        <div class="step-dots text-center">
                            <div class="icon icon-shape icon-lg bg-success-alt text-success rounded-circle"><i class="fas fa-project-diagram"></i></div>
                            <h5 class="mt-4 mb-3">Launch Project</h5>
                            <p>Execute according to the established timeline and objectives while keeping communication channels open for feedback and adjustments as needed. A successful launch sets the tone for a smooth project delivery.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--work-process section end-->
        <!--<section class="py-0 text-white lozad">
<div>
<video autoplay muted loop class="video-background" style="margin: left 10px;"width=100% >
        <source src="assets\img\video.mp4" type="video/mp4">
            <div class="container" style="margin: left 10px;">
            
                <div class="row" style="margin: left 10px;">
</div>
                <!--<video autoplay muted loop class="video-background" style="margin: left 10px;">
        <source src="Clients (1).mp4" type="video/mp4">
</div>
</section>-->



        <!--features section start-->
        <!--<section class="section section-lg bg-soft ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Best Quality Services</h2>
                            <p class="lead">Efficiently aggregate core competencies without maintainable ideas. Dynamically foster tactical solutions without enabled value.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-5">
                         Icon box 
                        <div class="icon-box text-center">
                            <div class="card-icon mb-4">
                                <img src="assets/img/icon/softdev.svg" alt="icon" width="60" class="img-fluid lozad">
                            </div>
                            <h2 class="h5">Contact management</h2>
                            <p class="mb-0">We develop one of the most efficient software in affordable prize that is more user friendly.</p>
                        </div>
                         End of Icon box 
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                         Icon box 
                        <div class="icon-box text-center">
                            <div class="card-icon mb-4">
                                <img src="assets/img/icon/mobile.svg" alt="icon" width="60" class="img-fluid lozad">
                            </div>
                            <h2 class="h5">Lead management</h2>
                            <p class="mb-0">You can also find our excellently designed mobile apps that are multi interface including all the trending features. </p>
                        </div>
                         End of Icon box 
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5">
                         Icon box 
                        <div class="icon-box text-center">
                            <div class="card-icon mb-4">
                                <img src="assets/img/icon/digital.svg" alt="icon" width="60" class="img-fluid">
                            </div>
                            <h2 class="h5">Task management</h2>
                            <p class="mb-0">We deploy one of our best marketing strategies on digital platforms to boost your business along with SEO & content moderation on social media.
                            </p>
                        </div>
                         End of Icon box 
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                         Icon box 
                        <div class="icon-box text-center">
                            <div class="card-icon mb-4">
                                <img src="assets/img/icon/brand.svg" alt="icon" width="60" class="img-fluid lozad">
                                <img src="assets/img/icon/brand.svg" alt="icon" width="60" class="img-fluid lozad">
                            </div>
                            <h2 class="h5">Basic reporting functionalities.</h2>
                            <p class="mb-0">We also promote the brand name of a corporate entity in specific with products and services. We apply specific strategy for improving your brand name.
                            </p>
                        </div>
                         End of Icon box 
                    </div>
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 mb-md-0">
                         Icon box 
                        <div class="icon-box text-center">
                            <div class="card-icon mb-4">
                                <img src="assets/img/icon/add-on.svg" alt="icon" width="60" class="img-fluid">
                            </div>
                            <h2 class="h5">Workflow automation</h2>
                            <p class="mb-0">We also own a well equipped studio that can contribute to produce the required contents for your business promotions like advertisement.</p>
                        </div>
                         End of Icon box 
                    </div>
                    <div class="col-md-6 col-lg-4 mb-lg-0 mb-md-0">
                        Icon box
                        <div class="icon-box text-center">
                            <div class="card-icon mb-4">
                                <img src="assets/img/icon/training.svg" alt="icon" width="60" class="img-fluid lozad">
                            </div>
                            <h2 class="h5">Project management</h2>
                            <p class="mb-0">One of many premium features include giving corporate communication training and provide intership in IT sector.</p>
                        </div>
                         End of Icon box 
                    </div>
                </div>
            </div>
        </section>
        features section end

        <!--blog section start-->
    <!-- <section class="section section-lg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Our Latest Blogs</h2>
                            <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process improvements develop end-to-end customer service.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-lg-0 mb-4" id="blogs">
                        <div class="card bg-white border-variant-soft shadow-soft">
                            <div class="blog-img position-relative">
                                <img src="assets/img/blog/all-blog/pandemic.jpg" class="card-img-top rounded-top lozad" alt="pandemic and IT">
                                <a target="_blank" href="pandemicblog.php" class="position-absolute category-text small badge badge-secondary">Global</a>
                            </div>
                            <div class="card-body">
                                
                                <h3 class="h5 card-title mt-3"><a  target="_blank" href="pandemicblog.php">Pandemic and IT</a> </h3>
                                <p class="card-text text-justify">The COVID-19 pandemic has undeniably cast a long shadow over the world, disrupting lives and businesses on an unparalleled scale. Amongst the chaos, the Information Technology sector emerged not only as a beacon of resilience but as an essential pillar sustaining other critical industries through tumultuous times. Jhaishna Technologies has examined the pandemic's profound impact on the various facets within the IT framework.</p>
                          
                                <a target="_blank" href="pandemicblog.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
                          
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-lg-0 mb-4">
                        <div class="card bg-white border-variant-soft shadow-soft">
                            <div class="blog-img position-relative">
                                <img src="assets/img/blog/all-blog/business-imp.jpg" class="card-img-top rounded-top lozad" alt="business">
                                <a href="business-imp-blog.php" class="position-absolute category-text small badge badge-secondary">Business Importance</a>
                            </div>
                            <div class="card-body">
                                 <div class="media d-flex align-items-center justify-content-between">
                                    <div class="post-group">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="3k followers">
                                            <img class="avatar avatar-xs mr-2 img-fluid rounded-circle border border-variant-primary p-1" src="assets/img/clients/client-2.jpg" alt="admin"> <span class="small">Writer</span>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <span class="small"><span class="far fa-calendar-alt mr-2"></span>15 March 2020</span>
                                    </div>
                                </div> 
                                <h3 class="h5 card-title mt-3"><a href="business-imp-blog.php">Importance of BRM to your businesss</a></h3>
                                <p class="card-text text-justify">
                                They say the world is now in our hands and the information is at our fingertips. There are no second thoughts to that. The world of the internet is fantastic. It continues to transform the way we connect with people, share information, and live a quality life.A lot of people spend most of their time on the internet. This could be for buying a product, using a service, reading a blog, entertaining themselves.
                                </p>
                                <a href="business-imp-blog.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-lg-0 mb-4">
                        <div class="card bg-white border-variant-soft shadow-soft">
                            <div class="blog-img position-relative">
                                <img src="assets/img/blog/all-blog/resume.jpg" class="card-img-top rounded-top lozad" alt="resume">
                                <a href="resumeblog.php" class="position-absolute category-text small badge badge-secondary">Resume</a>
                            </div>
                            <div class="card-body">
                                <h3 class="h5 card-title mt-3"><a href="resumeblog.php">Crafting the Perfect Professional Resume</a></h3>
                                <p class="card-text text-justify">In the competitive jungle of the job market, the professional resume is your trusty vine—a crucial tool for swinging from the searching masses to the employed elite in the business world. It's your first impression; your snapshot of professional potential; your one shot at standing out from the nameless, faceless stacks of other applicants.A standout resume is not just a document listing your work history.</p>
                                <a href="resumeblog.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>--->
        <!--blog section end-->
       <!-- <section class="section section-lg py-0">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-heading text-center mb-5">
          <h2>Our Latest Blogs</h2>
          <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process improvements develop end-to-end customer service.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4 mb-0" id="blogs">
        <div class="card bg-white border-variant-soft shadow-soft">
          <div class="blog-img position-relative" style="width: 100%; height: 200px; overflow: hidden;">
            <img src="assets\img\2px.jpg" class="card-img-top rounded-top lozad" style="width: 100%; height: 100%; object-fit: cover;">
            <a target="_blank" href="pandemicblog.php" class="position-absolute category-text small badge badge-secondary"></a>
          </div>
          <div class="card-body">
            <h3 class="h5 card-title mt-3"><a target="_blank" href="pandemicblog.php">Our Vision for Cutting-Edge Solutions</a></h3>
            <p class="card-text text-justify">We lead the charge in innovation, pushing boundaries to redefine possibilities. Seamlessly integrating technology into everyday life, enhancing experiences through intuitive, user-centric design. Creating a brighter future with technologies that minimize environmental impact while maximizing efficiency and effectiveness.</p>
             <a target="_blank" href="pandemicblog.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-0">
        <div class="card bg-white border-variant-soft shadow-soft">
          <div class="blog-img position-relative" style="width: 100%; height: 200px; overflow: hidden;">
            <img src="assets/img/3px.jpg" class="card-img-top rounded-top lozad" style="width: 100%; height: 100%; object-fit: cover;" alt="business">
            <a href="business-imp-blog.php" class="position-absolute category-text small badge badge-secondary"></a>
          </div>
          <div class="card-body">
            <h3 class="h5 card-title mt-3"><a href="business-imp-blog.php">Nurturing Talent in a Dynamic Environment</a></h3>
            <p class="card-text text-justify">In our dynamic environment, we prioritize nurturing talent through various means. We encourage a culture of continuous learning, where employees have access to resources and opportunities for skill development. Empowerment is key - we provide autonomy and support for individuals to explore their interests and innovate.</p>
              <a href="business-imp-blog.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-0">
        <div class="card bg-white border-variant-soft shadow-soft">
          <div class="blog-img position-relative" style="width: 100%; height: 200px; overflow: hidden;">
            <img src="assets\img\4px.jpg" class="card-img-top rounded-top lozad" style="width: 100%; height: 100%; object-fit: cover;" alt="resume">
          </div>
          <div class="card-body">
            <h3 class="h5 card-title mt-3"><a href="resumeblog.php">Fostering Collaboration and Inclusivity</a></h3>
            <p class="card-text text-justify">In our organization, fostering collaboration and inclusivity is paramount. We believe that diverse perspectives and experiences are fundamental to driving innovation and creativity. Therefore, we actively promote an inclusive culture.</p>
            <a href="resumeblog.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->
<style>
.section .row {
  display: flex;
  flex-wrap: wrap;
}

.section .col-12.col-md-6.col-lg-4 {
  display: flex;
}

.section .card {
  flex: 1;
  display: flex;
  flex-direction: column;
}

.section .card-body {
  flex-grow: 1;
}
</style>
<!-- 
<section class="section section-lg py-0">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-heading text-center mb-5">
          <h2>Our Latest Blogs</h2>
          <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process improvements develop end-to-end customer service.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4 mb-0">
        <div class="card bg-white border-variant-soft shadow-soft">
          <div class="blog-img position-relative" style="width: 100%; height: 200px; overflow: hidden;">
            <img src="assets\img\2px.jpg" class="card-img-top rounded-top lozad" style="width: 100%; height: 100%; object-fit: cover;">
            <a target="_blank" href="pandemicblog.php" class="position-absolute category-text small badge badge-secondary"></a>
          </div>
          <div class="card-body">
            <h3 class="h5 card-title mt-3"><a target="_blank" href="pandemicblog.php">Our Vision for Cutting-Edge Solutions</a></h3>
            <p class="card-text text-justify">We lead the charge in innovation, pushing boundaries to redefine possibilities. Seamlessly integrating technology into everyday life, enhancing experiences through intuitive, user-centric design. Creating a brighter future with technologies that minimize environmental impact while maximizing efficiency and effectiveness.</p>
             <a target="_blank" href="pandemicblog.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-0">
        <div class="card bg-white border-variant-soft shadow-soft">
          <div class="blog-img position-relative" style="width: 100%; height: 200px; overflow: hidden;">
            <img src="assets/img/3px.jpg" class="card-img-top rounded-top lozad" style="width: 100%; height: 100%; object-fit: cover;" alt="business">
            <a href="business-imp-blog.php" class="position-absolute category-text small badge badge-secondary"></a>
          </div>
          <div class="card-body">
            <h3 class="h5 card-title mt-3"><a href="business-imp-blog.php">Nurturing Talent in a Dynamic Environment</a></h3>
            <p class="card-text text-justify">In our dynamic environment, we prioritize nurturing talent through various means. We encourage a culture of continuous learning, where employees have access to resources and opportunities for skill development. Empowerment is key - we provide autonomy and support for individuals to explore their interests and innovate.</p>
              <a href="business-imp-blog.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-0">
        <div class="card bg-white border-variant-soft shadow-soft">
          <div class="blog-img position-relative" style="width: 100%; height: 200px; overflow: hidden;">
            <img src="assets\img\4px.jpg" class="card-img-top rounded-top lozad" style="width: 100%; height: 100%; object-fit: cover;" alt="resume">
          </div>
          <div class="card-body">
            <h3 class="h5 card-title mt-3"><a href="resumeblog.php">Fostering Collaboration and Inclusivity</a></h3>
            <p class="card-text text-justify">In our organization, fostering collaboration and inclusivity is paramount. We believe that diverse perspectives and experiences are fundamental to driving innovation and creativity. Therefore, we actively promote an inclusive culture.</p>
            <br>
            <br>
            

            <a href="resumeblog.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->


<!--<section class="section section-lg py-0">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-heading text-center mb-5">
          <h2>Our Latest Blogs</h2>
          <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process improvements develop end-to-end customer service.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4 mb-0" id="blogs">
        <div class="card bg-white border-variant-soft shadow-soft">
          <div class="blog-img position-relative" style="width: 100%; height: 200px; overflow: hidden;">
            <img src="assets/img/cutting.jpg" class="card-img-top rounded-top lozad" style="width: 100%; height: 100%; object-fit: cover;">
            <a target="_blank" href="pandemicblog.php" class="position-absolute category-text small badge badge-secondary"></a>
          </div>
          <div class="card-body">
            <h3 class="h5 card-title mt-3"><a target="_blank" href="pandemicblog.php">Our Vision for Cutting-Edge Solutions</a></h3>
            <p class="card-text text-justify">We lead the charge in innovation, pushing boundaries to redefine possibilities. Seamlessly integrating technology into everyday life, enhancing experiences through intuitive, user-centric design. Creating a brighter future with technologies that minimize environmental impact while maximizing efficiency and effectiveness.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-0">
        <div class="card bg-white border-variant-soft shadow-soft">
          <div class="blog-img position-relative" style="width: 100%; height: 200px; overflow: hidden;">
            <img src="assets/img/talent.jpg" class="card-img-top rounded-top lozad" style="width: 100%; height: 100%; object-fit: cover;" alt="business">
            <a href="business-imp-blog.php" class="position-absolute category-text small badge badge-secondary"></a>
          </div>
          <div class="card-body">
            <h3 class="h5 card-title mt-3"><a href="business-imp-blog.php">Nurturing Talent in a Dynamic Environment</a></h3>
            <p class="card-text text-justify">In our dynamic environment, we prioritize nurturing talent through various means. We encourage a culture of continuous learning, where employees have access to resources and opportunities for skill development. Empowerment is key - we provide autonomy and support for individuals to explore their interests and innovate.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-0">
        <div class="card bg-white border-variant-soft shadow-soft">
          <div class="blog-img position-relative" style="width: 100%; height: 200px; overflow: hidden;">
            <img src="assets/img/collabration.jpg" class="card-img-top rounded-top lozad" style="width: 100%; height: 100%; object-fit: cover;" alt="resume">
            <a href="resumeblog.php" class="position-absolute category-text small badge badge-secondary"></a>
          </div>
          <div class="card-body">
            <h3 class="h5 card-title mt-3"><a href="resumeblog.php">Fostering Collaboration and Inclusivity</a></h3>
            <p class="card-text text-justify">In our organization, fostering collaboration and inclusivity is paramount. We believe that diverse perspectives and experiences are fundamental to driving innovation and creativity. Therefore, we actively promote an inclusive culture.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->





        <!--testimonial section start-->
       <!-- <section class="section section-lg  bg-primary">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                        <div class="section-heading mb-5 text-center text-white">
                            <h2>Reviews regarding the Career Support & Training</h2>
                            <p class="lead">
                            when they want to look back on their career and be proud of their work, and be proud that they tried everything.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="owl-carousel owl-theme client-testimonial custom-dot">
                            <div class="item">
                                <div class="testimonial-single shadow-sm bg-white rounded-custom p-5">
                                    <div class="quotation mb-4">
                                        <span class="icon icon-md icon-lg  icon-light "><i class="fas fa-quote-left"></i></span>
                                    </div>
                                    <blockquote class="blockquote">
                                        Excellent place to learn the concepts of designing tools. I had already completed my internship years ago and wanted to take up a refresher here, but it kind of turned out to be a high impactful training session.
                                    </blockquote>
                                    <div class="d-flex justify-content-md-between justify-content-lg-between align-items-center pt-3">
                                        <div class="media align-items-center">
                                        
                                            <div class="media-body">
                                                <h6 class="mb-0">Mounika</h6>
                                                <small>Juniour Software Developer</small>
                                            </div>
                                        </div>
                                        <div class="client-ratting d-none d-md-block d-lg-block">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star-half-alt ratting-color"></i></span></li>
                                            </ul>
                                            <span class="font-weight-bold small">4.3 <span class="font-weight-lighter">Out of 5</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-single shadow-sm bg-white rounded-custom p-5">
                                    <div class="quotation mb-4">
                                        <span class="icon icon-md icon-lg  icon-light "><i class="fas fa-quote-left"></i></span>
                                    </div>
                                    <blockquote class="blockquote">
                                    It looks professional & organized, & I had a very challenging time putting it all together & it is very rewarding knowing that I put in my best effort. I was able to complete this internship successfully  
                                    & that instilled a new confidence in myself that I didn't have before. I thank Jhaishna for all support.
                                    </blockquote>
                                    <div class="d-flex justify-content-md-between justify-content-lg-between align-items-center pt-3">
                                          <div class="media align-items-center">
                                        
                                            <div class="media-body">
                                                <h6 class="mb-0">Kavya ML</h6>
                                                <small>Software Engineer</small>
                                            </div>
                                        </div>
                                        <div class="client-ratting d-none d-md-block d-lg-block">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star-half-alt ratting-color"></i></span></li>
                                            </ul>
                                            <span class="font-weight-bold small">4.3 <span class="font-weight-lighter">Out of 5</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-single shadow-sm bg-white rounded-custom p-5">
                                    <div class="quotation mb-4">
                                        <span class="icon icon-md icon-lg  icon-light "><i class="fas fa-quote-left"></i></span>
                                    </div>
                                    <blockquote class="blockquote">
                                        The training included the explaining of every topic in detail with live instances. So in a way you would learn topics more practically & can easily connect with your day to day work which makes it a lot more simple & effective learning.
                                    </blockquote>
                                    <div class="d-flex justify-content-md-between justify-content-lg-between align-items-center pt-3">
                                        <div class="media align-items-center">
                                          
                                            <div class="media-body">
                                                <h6 class="mb-0">Vara Prasad</h6>
                                                <small>Operation Executive</small>
                                            </div>
                                        </div>
                                        <div class="client-ratting d-none d-md-block d-lg-block">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                            </ul>
                                            <span class="font-weight-bold small">5.0 <span class="font-weight-lighter">Out of 5</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-single shadow-sm bg-white rounded-custom p-5">
                                    <div class="quotation mb-4">
                                        <span class="icon icon-md icon-lg  icon-light "><i class="fas fa-quote-left"></i></span>
                                    </div>
                                    <blockquote class="blockquote">
                                        If you actually want to learn the web & app designing concepts, then this is the place. I am very pleased to say that this Training was an absolute delight & total value for money though it was completely online. I was able to understand all concepts clearly.                                    </blockquote>
                                    <div class="d-flex justify-content-md-between justify-content-lg-between align-items-center pt-3">
                                        <div class="media align-items-center">
                                           
                                            <div class="media-body">
                                                <h6 class="mb-0">Divya</h6>
                                                <small>Intern</small>
                                            </div>
                                        </div>
                                        <div class="client-ratting d-none d-md-block d-lg-block">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="far fa-star"></i></span></li>
                                            </ul>
                                            <span class="font-weight-bold small">4.0 <span class="font-weight-lighter">Out of 5</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-single shadow-sm bg-white rounded-custom p-5">
                                    <div class="quotation mb-4">
                                        <span class="icon icon-md icon-lg  icon-light "><i class="fas fa-quote-left"></i></span>
                                    </div>
                                    <blockquote class="blockquote">
                                        This training gave me the confidence of driving projects on my own and got an opportunity to mentor a couple of students as well. I would recommend this institute for learning the concepts of website designing.
                                    </blockquote>
                                    <div class="d-flex justify-content-md-between justify-content-lg-between align-items-center pt-3">
                                        <div class="media align-items-center">
                                          
                                            <div class="media-body">
                                                <h6 class="mb-0">Ram Krishna</h6>
                                                <small>Software Analyst</small>
                                            </div>
                                        </div>
                                        <div class="client-ratting d-none d-md-block d-lg-block">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                                <li class="list-inline-item mr-0"><span class="icon icon-xs font-small text-warning"><i class="fas fa-star ratting-color"></i></span></li>
                                            </ul>
                                            <span class="font-weight-bold small">5.0 <span class="font-weight-lighter">Out of 5</span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--testimonial section end-->

        <!--cta section start-->
       <!-- <section class="section py-0" class="lozad" style="background: url('assets/img/hero-bg11.jpg')no-repeat center fixed">
            <div class="section-lg section bg-gradient-primary text-white  ">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-9 col-md-10 col-lg-9">
                            <div class="section-title text-center mb-5">
                                <h2>Download Our Business Apps</h2>
                                <p class="lead">Building your Apps helps attract more potential clients. Our integrated marketing team will promote enabled internal or work high-impact convergence.</p>
                            </div>
                            <div class="download-btn-wrap text-center">
                                <a class="btn btn-pill border border-variant-light  text-white  shadow-hover mr-md-3 mb-4 mb-md-3 mb-lg-0" href="#">
                                    <div class="d-flex align-items-center">
                                        <span class="icon icon-md mr-3 h-auto"><i class="fab fa-apple"></i></span>
                                        <div class="d-block text-left">
                                            <small class="font-small ">Download on the</small>
                                            <div class="h6 mb-0">App Store</div>
                                        </div>
                                    </div>
                                </a> -->
                              <!--  <a class="btn btn-pill border border-variant-light text-white shadow-hover mr-md-3 mb-4 mb-md-3 mb-lg-0" href="https://play.google.com/store/apps/details?id=com.jyesthatech">
                                    <div class="d-flex align-items-center">
                                        <span class="icon icon-md mr-3 h-auto"><i class="fab fa-google-play"></i></span>
                                        <div class="d-block text-left">
                                            <small class="font-small ">Download on the</small>
                                            <div class="h6 mb-0">Google Play</div>
                                        </div>
                                    </div>
                                </a> -->
                                <!-- <a class="btn btn-pill border border-variant-light  text-white  shadow-hover" href="#">
                                    <div class="d-flex align-items-center">
                                        <span class="icon icon-md mr-3 h-auto"><i class="fab fa-windows"></i></span>
                                        <div class="d-block text-left">
                                            <small class="font-small ">Download on the</small>
                                            <div class="h6 mb-0">Windows</div>
                                        </div>
                                    </div>
                                </a> -->
                         <!--   </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--cta section end-->

        <!--customer logo section start-->
        <!-- <div class="section section-sm">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme clients-carousel">
                            <div class="item single-client">
                                  <img src="assets/img/client-logos/logo01.png" alt="client logo" class="img-fluid lozad">
                            </div>
                            <div class="item single-client">
                                  <img src="assets/img/client-logos/logo02.png" alt="client logo" class="img-fluid lozad">
                            </div>
                            <div class="item single-client">
                                  <img src="assets/img/client-logos/logo03.png" alt="client logo" class="img-fluid lozad">
                            </div>
                            <div class="item single-client">
                                <img src="assets/img/client-logos/logo04.png" alt="client logo" class="img-fluid lozad">
                            </div>
                            <div class="item single-client">
                                <img src="assets/img/client-logos/logo3.png" alt="client logo" class="img-fluid lozad">
                            </div>
                            <div class="item single-client">
                                <img src="assets/img/client-logos/logo01.png" alt="client logo" class="img-fluid lozad">
                            </div>
                            <div class="item single-client">
                                <img src="assets/img/client-logos/logo02.png" alt="client logo" class="img-fluid lozad">
                            </div>
                            <div class="item single-client">
                                <img src="assets/img/client-logos/logo3.png" alt="client logo" class="img-fluid lozad">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!--customer logo section end-->
 
        <!--<div class="container">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="embed-responsive embed-responsive-16by9">
        <video width="100%" height="200" controls>
  <source src="Clients (1).mp4" type="video/mp4">
</video>
          
        </video>
      </div>
    </div>
  </div>-->



  <section class="section section-lg py-0">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-heading text-center mb-5">
          <h2>Our Latest Blogs</h2>
          <!-- <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process improvements develop end-to-end customer service.</p> -->
        </div>
      </div>
    </div>
    <div class="row">


    <div class="col-12 col-md-6 col-lg-4 mb-0" id="blogs">
  <a  href="achievements.php" style="text-decoration: none; color: inherit;">
    <div class="card bg-white border-variant-soft shadow-soft">
      <div class="blog-img position-relative" style="width: 100%; height: 200px; ">
        <img src="assets/img/achieve30.jpg" class="card-img-top rounded-top lozad" style="width: 100%; height: 100%; object-fit:content;">
        <span class="position-absolute category-text small badge badge-secondary"></span>
      </div>
      <div class="card-body">
        <h3 class="h5 card-title mt-3">Jhaishna: Emerging Leader in India's IT Sector </h3>
        <p class="card-text text">Jhaishna Technologies win the fastest growing Indian Company Leadership Award. </p>
      </div>
    </div>
  </a>
</div>
      
    <div class="col-12 col-md-6 col-lg-4 mb-0" id="blogs" >
  <a target="_blank" href="mes2.php" style="text-decoration: none; color: inherit;">
    <div class="card bg-white border-variant-soft shadow-soft">
      <div class="blog-img position-relative" style="width: 100%; height: 200px; overflow: hidden;">
        <img src="assets/img/mes.jpg" class="card-img-top rounded-top lozad" style="width: 100%; height: 100%; object-fit: cover;">
        <span class="position-absolute category-text small badge badge-secondary"></span>
      </div>
      <div class="card-body">
        <h3 class="h5 card-title mt-3">The Power of MES </h3>
        <p class="card-text text">Optimize production processes with our MES for real-time monitoring and control. </p>
      </div>
    </div>
  </a>
</div>
   

  
      <div class="col-12 col-md-6 col-lg-4 mb-0" id="blogs">
  <a target="_blank" href="business-imp-blog.php" style="text-decoration: none; color: inherit;">
    <div class="card bg-white border-variant-soft shadow-soft">
      <div class="blog-img position-relative" style="width: 100%; height: 200px; overflow: hidden;">
        <img src="assets/img/cutting.jpg" class="card-img-top rounded-top lozad" style="width: 100%; height: 100%; object-fit: cover;">
        <span class="position-absolute category-text small badge badge-secondary"></span>
      </div>
      <div class="card-body">
        <h3 class="h5 card-title mt-3">Our Vision </h3>
        <p class="card-text text">We lead the charge in innovation, pushing boundaries to redefine possibilities. </p>
      </div>
    </div>
  </a>
</div>



    
      

    </div>
  </div>
</section>



<section class="section section-sm bg-soft py-0">
  <div class="section section-sm bg-gradient-primary">
    <div class="container">
      <div class="row justify-content-around align-items-center" style="display: flex; align-items: stretch;">
        <div class="col-md-7 d-flex align-items-center">
          <div class="subscribe-content w-100 text-center" style="display: flex; flex-direction: column; justify-content: center;">
            <h3 style="font-size: 2rem; padding: 10px 0; margin: 0; min-height: 60px; display: flex; align-items: center; justify-content: center;">
              <strong>Ready to Pursue Excellence?</strong>
            </h3>
          </div>
        </div>
        <div class="col-md-4 d-flex align-items-center">
          <div class="action-btn text-lg-right text-sm-left w-100" style="display: flex; align-items: center; justify-content: center; margin-right: 20px;">
            <a href="contact.php" class="btn btn-primary" style="min-height: 60px; display: flex; align-items: center; justify-content: center;">
              Discuss Projects
            </a>
          </div>
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
    <!--endbuild-->

<!-- Floating Award Popup -->
<div class="award-container hidden" id="award-container">
  <!-- Dismiss Button -->
  <button class="dismiss-btn" id="dismiss-btn">&times;</button>
  <!-- Popup Content -->
  <div class="award-body">
    
    <!-- Image at the top -->
    <!-- <img src="assets/img/edit5.jpg" alt="Achievement Image" class="award-image"> -->
    <!-- Heading below the image -->
    <h3>Privileged To Acheive</h3>
    <!-- Recognized text -->
    <p>Fastest Growing Indian Company Leader</p>
    <!-- Link Button -->
    <a href="achievements.php" target="_blank">Read More</a>
  </div>

  <!-- Robot Inside the Popup -->
  <div class="robot">
    <!-- Robot Head -->
    <div class="robot-head">
      <div class="robot-face">
        <div class="robot-eye"></div>
        <div class="robot-eye"></div>
      </div>
    </div>
    <!-- Robot Body -->
    <div class="robot-body"></div>
  </div>
</div>









<!-- <script>
  // JavaScript to handle dismiss button
  const dismissBtn = document.getElementById('dismiss-btn');
  const awardContainer = document.getElementById('award-container');

  dismissBtn.addEventListener('click', () => {
    awardContainer.classList.add('hidden');
  });
</script> -->


<!-- <script>
  // JavaScript to handle dismiss button
  const dismissBtn = document.getElementById('dismiss-btn');
  const awardContainer = document.getElementById('award-container');

  dismissBtn.addEventListener('click', () => {
    awardContainer.classList.add('hidden');
  });
</script> -->
<script>
 document.addEventListener("DOMContentLoaded", function () {
  const awardContainer = document.getElementById("award-container");

  setTimeout(() => {
    if (awardContainer) {
      awardContainer.classList.remove("hidden");
      awardContainer.classList.add("visible");
    }
  }, 2000);

  const dismissButton = document.getElementById("dismiss-btn");
  if (dismissButton) {
    dismissButton.addEventListener("click", () => {
      awardContainer.classList.remove("visible");
      awardContainer.classList.add("hidden");
    });
  }
});


</script>




<script>
// Get the loading screen container
const loadingScreen = document.getElementById('loadingScreen');

// Track the current phase of the animation
let isGreenPhase = false; // Initially false, blue/red phase

// Function to generate random 0 or 1 falling
function createFallingNumber() {
  const number = document.createElement('span');
  number.classList.add('matrix-number');

  // Set random 0 or 1
  number.textContent = Math.random() > 0.9 ? '0' : '1';

  // Set random horizontal position
  number.style.left = Math.random() * 100 + 'vw';

  // Set random animation duration (slower, between 3 to 4 seconds now)
  const duration = Math.random() * 1 + 3; // Between 3 and 4 seconds (slower)
  number.style.animationDuration = duration + 's';

  // Set random tilt angle
  const tiltAngle = Math.random() > 0.5 ? `${Math.random() * 10 - 5}deg` : '0deg'; // Between -5 and 5 degrees
  number.style.setProperty('--tilt-angle', tiltAngle);

  // Set the color based on the current phase (only green after green phase)
  if (isGreenPhase) {
    number.style.color = '#00ff00'; // Bright green
    number.style.fontSize = '24px'; // Increase font size slightly
  } else {
    // Initially, set random color (blue or red) until the green phase starts
    const randomColor = Math.random() > 0.5 ? 'blue' : 'red';
    number.style.color = randomColor;
  }

  // Append the number to the loading screen
  loadingScreen.appendChild(number);

  // Remove the number after it finishes animation
  setTimeout(() => {
    number.remove();
  }, 4000); // Numbers stay for up to 4 seconds now (slower removal)
}

// Generate falling numbers at slower intervals (every 100ms now)
const interval = setInterval(() => {
  createFallingNumber();
}, 100); // Generate a new number every 100ms (slower)


// Transition to green phase and increase font size after 2 seconds
setTimeout(() => {
  isGreenPhase = true; // All new numbers will be green
  document.querySelectorAll('.matrix-number').forEach(number => {
    number.style.color = '#00ff00'; // Bright green
    number.style.fontSize = '24px'; // Increase font size slightly
  });
}, 2000); // Transition to green phase after 2 seconds

// Fade background color to transparent after 2 seconds
setTimeout(() => {
  loadingScreen.style.transition = 'background-color 0.5s ease-in-out'; // Fading effect now much faster
  loadingScreen.style.backgroundColor = 'transparent';
}, 2000); // Fade out after 2 seconds

// Hide the loading screen and stop number generation after 4 seconds
setTimeout(() => {
  clearInterval(interval); // Stop generating numbers
  loadingScreen.classList.add('hidden'); // Hide loading screen completely
}, 4000); // Hide after everything completes

</script>

<script>
   const gif = document.querySelector('.background-gif');

// Make the GIF visible once it's loaded
gif.addEventListener('load', function() {
    gif.style.visibility = 'visible';
});

// Optional: Error handling if the GIF fails to load
gif.addEventListener('error', function() {
    console.log('GIF failed to load.');
    // You can replace the source with a fallback image if needed
    gif.src = 'assets/img/homescreen.gif';
});

</script>







</body>

</html>
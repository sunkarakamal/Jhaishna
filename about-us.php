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
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0PD36XE5CJ');
</script>
<!-- Facebook Pixel Code -->
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
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=212751893562565&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

</head>
<style>
 .card-body {
    display: flex;
    flex-direction: column;
    justify-content: center; /* Centers content vertically */
    background-color: #ffffff;
    border: 1px solid #333333; /* Added the missing width (1px) */
    border-radius: 8px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}


.card-body {
    border: 1px solid #333333; /* Light black/dark gray border */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Light shadow */
}


.card-text {
    color: #555;
}

</style>
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
        <!-- Section Start -->
        <section 
  class="section section-xl pt-9 pb-4 text-white gradient-overly-right-color" 
  style="position: relative; overflow: hidden;"
  id="about-section"
>
    
<img 
      src="assets/img/about.gif" 
      alt="Background GIF" 
      class="background-gif" 
      preload="auto" 
      style="
        width: 100%; 
        height: auto; 
        position: absolute; 
        top: 0; 
        left: 0; 
        z-index: -1;"
    >

    <!-- Fading Effect Outside GIF -->
    <div 
      class="fade-outside" 
      style="
        position: absolute; 
        bottom: 0; 
        left: 0; 
        width: 100%; 
        height: 10px; /* Adjust height for the gradient */
        background: linear-gradient(to bottom, rgba(0, 0, 255, 0) 0%, white 100%);
        z-index: 0; /* Place it above the GIF but below content */
      "
    ></div>


    <div 
        class="container text-center mt-5" 
        style="position: relative; z-index: 1; padding: 1rem 0rem;"
    >
        <h1>Empowering Businesses With <br>Innovative Solutions</h1>
        <p class="mt-3 mb-3">
            Transforming Growth Through <br> Technology and AI
        </p>
        <div class="action-btns pt-1 mt-0 mb-2" style="position: relative;">
        <div class="action-btns pt-1 mt-7 mb-2" style="position: relative;">
        <a 
        href="about-us.php" 
        id="know-more-btn" 
        class="btn btn-outline-light mb-3" 
        style="padding: 10px 25px; font-size: 0.875rem; border-radius: 4px;"
    >
        Know More
    </a>
    <a 
        href="contact.php" 
        class="btn btn-outline-light mb-3" 
        style="padding: 10px 30px; font-size: 0.875rem; border-radius: 4px;"
      
    >
        Connect
    </a>
    </div>
<!-- 
<svg 
    width="400" 
    height="110" 
    viewBox="0 0 200 50"  
    xmlns="http://www.w3.org/2000/svg" 
    style="
        position: absolute;
        top: 170px; /* Adjusted to move the arrow further down */
        left: 50%;
        transform: translateX(-50%);
        z-index: -1;
        opacity: 0.2; /* Set opacity to 60% */
    "
>
    <path 
        d="M40 10 L100 20 L160 10"  
        fill="none" 
        stroke="white" 
        stroke-width="1"
    />
</svg> -->


<svg 
    id="scroll-arrow" 
    width="400" 
    height="110" 
    viewBox="0 0 200 50"  
    xmlns="http://www.w3.org/2000/svg" 
    style="
        position: absolute;
        top: 170px; /* Adjusted to move the arrow further down */
        left: 50%;
        transform: translateX(-50%);
        z-index: -1;
        opacity: 0.2; /* Set opacity to 60% */
        cursor: pointer; /* Added to indicate clickable */
    "
>
    <path 
        d="M40 10 L100 20 L160 10"  
        fill="none" 
        stroke="white" 
        stroke-width="1"
    />
</svg>

</div>
</section>






       

        <!--about section start-->
       <!-- <section class="section section-lg bg-soft mb-0">
            <div class="container mb-0">
                <div class="row justify-content-center">
                    <div class="col-md-9 col-lg-8">
                       
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col-md-12 col-lg-12">
                        <div class="feature-tabs-wrap">
                            <ul class="nav nav-tabs border-bottom-0 feature-tabs feature-tabs-center d-flex justify-content-center" data-tabs="tabs">
                              
                                <li class="nav-item">
        <a class="nav-link d-flex align-items-center px-0 py-2 " href="#feature-tab-1" data-toggle="tab">
            <h5 class="mb-0">About Us</h5>
        </a>
    </li>
                              
         
                                <li class="nav-item">
                                    <a class="nav-link d-flex align-items-center px-0 py-2" href="#feature-tab-2" data-toggle="tab">
                                       <h6 class="mb-0">Why Choose Us</h6>
                                    </a>
                                </li>
                            </ul>
                           <div class="tab-content feature-tab-content">
                                <div class="tab-pane show active" id="feature-tab-1">
                                    <div class="row justify-content-between align-items-center">
                                     
                                        <div class="col-12 col-md-5 col-lg-6 mb-4 mb-md-4 mb-lg-0">
    <div class="card bg-primary position-relative z-2 shadow-lg fancy-radius p-3">
        <div class="dot-shape-top position-absolute">
            <img src="assets/img/color-shape.svg" alt="dot" class="img-fluid">
        </div>
         Use object-fit: contain to preserve the original aspect ratio 
        <img class="fancy-radius img-fluid" src="assets/img/about.jpg" alt="modern desk" style="height: 400px; width: 100%; object-fit: contain;">
        <div class="dot-shape position-absolute bottom-0">
            <img src="assets/img/dot-shape.png" alt="dot">
        </div>
    </div>
</div>



                                        <div class="col-12 col-md-7 col-lg-5">
                                            <div class="video-promo-content">

                                                <p class="lead">Jhaishna is founded by leading Information and Communication Technology professionals who have witnessed various issues faced by clients, with a deep understanding of their needs, issues, business objectives and stands as a focused partner with the right experience..</p>
                                                <p class="lead"> Jhaishna is committed to becoming a global technology leader, providing comprehensive solutions and high-quality communication products through continuous research and development and innovation to meet customers' personalized customization needs...</p>
                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane" id="feature-tab-2">
                                    <div class="row">
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-4">
                                            <div class="services-single d-flex p-5 border border-variant-soft bg-white rounded-custom">
                                                <div class="icon icon-lg mr-4 text-secondary">
                                                    <i class="ti-announcement"></i>
                                                </div>
                                                <div class="services-content-wrap">
                                                    <h3 class="h6">Software Development</h3>
                                                    <p>Progressively empower business "outside the box" thinking with resource-leveling partnerships.
                                                    </p>
                                                    <a href="softdev.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-4">
                                            <div class="services-single d-flex p-5 border border-variant-soft bg-white rounded-custom">
                                                <div class="icon icon-lg mr-4 text-secondary">
                                                    <i class="ti-light-bulb"></i>
                                                </div>
                                                <div class="services-content-wrap">
                                                    <h3 class="h6">Web & Mobile App Development</h3>
                                                    <p>Quickly pontificate holistic e-commerce rather than goal web-readiness enhance inexpensive.</p>
                                                    <a href="mob.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-4">
                                            <div class="services-single d-flex p-5 border border-variant-soft bg-white rounded-custom">
                                                <div class="icon icon-lg mr-4 text-secondary">
                                                    <i class="ti-headphone-alt"></i>
                                                </div>
                                                <div class="services-content-wrap">
                                                    <h3 class="h6">24/7 Service for Maintenance & Hosting </h3>
                                                    <p>Authoritatively reinvent multimedia based niches with global portals orchestrate client-centered .</p>
                                                    <a href="corpo.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-6 col-sm-6 mb-4">
                                            <div class="services-single d-flex p-5 border border-variant-soft bg-white rounded-custom">
                                                <div class="icon icon-lg mr-4 text-secondary">
                                                    <i class="ti-bell"></i>
                                                </div>
                                                <div class="services-content-wrap">
                                                    <h3 class="h6">Branding & Marketing</h3>
                                                    <p>Assertively leverage other's standardized e-services with fully tested e-commerce synergistic. </p>
                                                    <a href="digi.php" class="link-with-icon text-default font-small font-weight-bold" target="_blank">Read more <span> <i class="fas fa-angle-right"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!--about section end-->

        </section>
    </div>






     <!--<section class="section section-lg mt-0">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between problems">
                    <div class="col-md-5 col-lg-5 problem">
                        <div class="feature-content section-title">
                             <h1>WE ARE</br> <span>PROBLEM SOLVERS</span></h1> 
                            <img class="fancy-radius img-fluid" src="assets/img/about.us.jpg" alt="modern desk">

                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 mb-3 mb-md-3 mb-lg-0">
                        <div class="feature-widget-wrap">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="card card-body shadow mt-5">
                                        <div class="d-flex">
                                            <div class="mr-3 mr-md-4">
                                                <div class="mb-3 p-3 p-md-4 icon icon-shape icon-md rounded-circle bg-default-alt text-default">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                            </div>
                                            <div class="feature-content">
                                                <h5>Our approach is simple.</h5>
                                                <p class="mb-0">
                                                We are specialized in helping companies identify and communicate their unique value to customers.
                                               offering services such as brand positioning, customer research, and project development tailored to each client's specific needs. 
                                               & set a personalized support in achieving clients growth that attracts businesses towards jhaishna
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> --->
        <!--promo section end-->

        <section class="section section-lg" id="about-section2" style="padding-top: 2rem; padding-bottom: 2rem;">
    <div class="container">
        <div class="col-sm-6">
            <!-- Parallax Effect Applied Here -->
            <h1 class="title parallax-horizontal-element" data-aos="fade-left" style="font-size: 2.5rem; font-weight: bold; margin-bottom: 0.5rem;">
                About Us
            </h1>
            <p style="font-size: 1.3rem; line-height: 1.6; margin-bottom: 0.8rem;">
                Jhaishna Technologies Private Limited is a leading software development and Oracle consulting 
                company based in Andhra Pradesh, India, with operations over India, Hong Kong, and the United States.
            </p>
            <p style="font-size: 1.3rem; line-height: 1.6; margin-bottom: 0;">
                Our commitment to optimizing clients' business operations efficiency has positioned us as a trusted 
                partner for organizations striving to enhance their IT services and achieve sustainable business growth.
                With tailored IT advisory services and engagement models, we empower businesses to achieve their 
                goals and make a positive impact on the organizations we work with, thus having us win 
                the Fastest Growing Indian Company Leadership Award.
            </p>
        </div>
    </div>
</section>









<!-- <script>
document.addEventListener("DOMContentLoaded", () => {
    const parallaxElement = document.querySelector(".parallax-horizontal-element");

    window.addEventListener("scroll", () => {
        const scrollPosition = window.scrollY; // Current vertical scroll
        const parallaxSpeed = 0.2; // Adjust speed: Higher is slower

        // Update horizontal position
        const translateX = scrollPosition * parallaxSpeed;
        parallaxElement.style.transform = `translate3d(${translateX}%, 0, 0)`;
    });
});


</script> -->

<script>
document.addEventListener("DOMContentLoaded", () => {
    const parallaxElement = document.querySelector(".parallax-horizontal-element");

    window.addEventListener("scroll", () => {
        const scrollPosition = window.scrollY; // Current vertical scroll
        const documentHeight = document.documentElement.scrollHeight - window.innerHeight;
        const triggerPoint = documentHeight * 0.25; // 50% downward

        // Only apply the parallax effect after scrolling 50% of the page
        if (scrollPosition >= triggerPoint) {
            const parallaxSpeed = 0.2; // Adjust speed: Higher is slower
            const translateX = (scrollPosition - triggerPoint) * parallaxSpeed;

            // Update horizontal position
            parallaxElement.style.transform = `translate3d(${translateX}%, 0, 0)`;
        } else {
            // Reset the transform if above 50%
            parallaxElement.style.transform = `translate3d(0, 0, 0)`;
        }
    });
});
</script>




<section class="section section-lg" id="about-section2" >
    <div class="container" style="overflow-y: auto; max-height: 400px;"> <!-- Add overflow and max-height -->
        <div class="col-md-8">
            <h1 class="title parallax-horizontal-element" data-aos="fade-left" >
                Our Achievements
            </h1>
          
        </div>
    </div>
</div>


        <!-- Achievements Boxes -->
        <div class="row">
            <!-- Box 1 -->
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card-body text-center p-3 border rounded shadow-sm bg-white h-100">
                    <h3 class="h6 card-title mt-2">15+ Years Experience</h3>
                    <p class="card-text small">Delivering Industry <br> Excellence</p>
                </div>
            </div>
            <!-- Box 2 -->
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card-body text-center p-3 border rounded shadow-sm bg-white h-100">
                    <h3 class="h6 card-title mt-2">Global Reach</h3>
                    <p class="card-text small">Strategic Partnerships <br> & Clients</p>
                </div>
            </div>
            <!-- Box 3 -->
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card-body text-center p-3 border rounded shadow-sm bg-white h-100">
                    <h3 class="h6 card-title mt-2">2024 Fastest <br> Growing Company Award</h3>
                    <p class="card-text small">Proven track record <br> providing cost-effective solutions</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const parallaxElement = document.querySelector(".parallax-horizontal-element");

    window.addEventListener("scroll", () => {
        const scrollPosition = window.scrollY; // Current vertical scroll
        const documentHeight = document.documentElement.scrollHeight - window.innerHeight;
        const triggerPoint = documentHeight * 0.25; // 50% downward

        // Only apply the parallax effect after scrolling 50% of the page
        if (scrollPosition >= triggerPoint) {
            const parallaxSpeed = 0.2; // Adjust speed: Higher is slower
            const translateX = (scrollPosition - triggerPoint) * parallaxSpeed;

            // Update horizontal position
            parallaxElement.style.transform = `translate3d(${translateX}%, 0, 0)`;
        } else {
            // Reset the transform if above 50%
            parallaxElement.style.transform = `translate3d(0, 0, 0)`;
        }
    });
});
</script>




<section class="section section-lg bg-soft">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-md-12 col-lg-6 mb-4 mb-md-4 mb-lg-0">
                        <!--<div class="card bg-primary position-relative shadow-lg fancy-radius p-3 z-1">
                            <div class="dot-shape-top position-absolute">
                            <img src="assets/img/color-shape.svg" alt="dot" class="img-fluid lozad">
                            </div>
                            <img class="fancy-radius img-fluid lozad" src="assets/img/about-us (2).jpg" alt="modern desk" style="height: 400px; width: 100%; object-fit: contain;">
                            <div class="dot-shape position-absolute bottom-0">
                            <img src="assets/img/dot-shape.png" class="lozad" alt="dot">
                            </div>
                        </div>-->
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
                                            <h6 class="mb-0"> Mission</h6>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="py-2 d-flex align-items-center" href="#feature-tab-2" data-toggle="tab">
                                            <h6 class="mb-0"> Vision</h6>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="py-2 d-flex align-items-center" href="#feature-tab-3" data-toggle="tab">
                                            <h6 class="mb-0"> Values</h6>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content feature-tab-content">
                                    <div class="tab-pane active" id="feature-tab-1">
                                        <p>  Simple, innovate relentlessly and deliver cutting-edge solutions that enables businesses to thrive, adapt, and lead in an evolving businessl landscape</p>
                                      <!--  <ul class="list-unstyled tech-feature-list mb-4">
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Assuring </strong> clients on deliver results.</li>
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Identifying</strong> and plugging revenue leaks.</li>
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Ensure  </strong>  maximum profitability for business.</li>
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Streamlining</strong> intricate billing processes.</li>
                                        </ul>-->

                                    </div>
                                    <div class="tab-pane" id="feature-tab-2">
                                        <p> To become a global leader in technological excellence, inspiring change and enabling businesses to achieve their highest potential by Jhaishna being in the lead</p>

                                        <!--<ul class="list-unstyled tech-feature-list mb-4">
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Assuring</strong> clients on deliver results.</li>
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Identifying</strong> and plugging revenue leak.</li>
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Ensure</strong> maximum profitability for business.</li>
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Streamlining</strong> intricate billing processes.</li>
                                        </ul>-->

                                    </div>
                                    <div class="tab-pane" id="feature-tab-3">
                                        <p> We are driven by integrity, passion and a commitment to excellence. Our core values guide us in every decision, ensuring trust, collaboration, and impact for our clients and partners
                                        </p>
                                     <!--   <ul class="list-unstyled tech-feature-list mb-4">
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Assuring</strong> clients on deliver results.</li>
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Identifying</strong> and plugging revenue leak.</li>
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Ensure</strong> maximum profitability for business.</li>
                                            <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Streamlining</strong> intricate billing processes.</li>
                                        </ul>-->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-sm py-5 bg-soft">
    <div class="container">
        <div class="row justify-content-around align-items-center">
            <div class="col-md-7">
                <div class="subscribe-content">
                    <h3>Ready to build your vision into reaily?</h3>
                    <br>
                    <div class="action-btn">
                        <a href="contact.php" class="btn btn-primary">ContactUs</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Optional other content here -->
            </div>
        </div>
    </div>
</section>


    <!--footer section start-->
    <?php
    include 'footer.php';
    ?>
    <!--footer section end-->
    <!--scroll bottom to top button start-->
    <button class=" scroll-top scroll-to-target " data-target=" html ">
        <span class=" fas fa-hand-point-up "></span>
    </button>
    <!--scroll bottom to top button end-->
    
    <!--endbuild-->

   
    <script>
    document.getElementById('know-more-btn').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default link behavior
        const scrollHeight = window.innerHeight * 0.9; // 90% of viewport height
        window.scrollBy({
            top: scrollHeight,
            behavior: 'smooth'
        });
    });
</script>

<script>
    document.getElementById('know-more-btn').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default link behavior
        // const scrollHeight = window.innerHeight * 0.9; // 90% of viewport height
        // window.scrollBy({
        //     top: scrollHeight,
        //     behavior: 'smooth'
        // });
        const aboutSection = document.getElementById('about-section2');
        // window.scrollBy({
            aboutSection.scrollIntoView({
                behavior: 'smooth', // Smooth scrolling effect
                block: 'start' // Align to the top of the viewport
        });
    });
</script>
<script>
    // Attach click event listener to the SVG
    document.getElementById('scroll-arrow').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent any default action
        // const scrollHeight = window.innerHeight * 0.5; // Calculate 90% of viewport height
        const aboutSection = document.getElementById('about-section2');
        // window.scrollBy({
            aboutSection.scrollIntoView({
                behavior: 'smooth', // Smooth scrolling effect
                block: 'start' // Align to the top of the viewport
        });
    });
</script>
</body>

</html>
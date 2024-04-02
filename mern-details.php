
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
    <title>MERN Stack Development</title>

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
    <?php
    include 'header.php';
    ?>
    <div class="main">

        <!--page header section start-->
        <section class="" style="background: url('assets/img/header-bg-5.jpg')no-repeat center center / cover">
            <div class="section-lg bg-gradient-primary text-white section-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-5 mb-4 mb-md-4 mt-lg-0">
                            <div class="hero-slider-content-8">
                                <h1 class="display-2"><span>MERN Stack Made Simple</span> </h1>
                                <p class="lead">Master everything about MERN stack. Learn MongoDB, Express, React & Node by building & deploying a complete app.</p>
                                <a href="contact.php" class="btn btn-secondary mt-4" data-toggle="modal" data-target="#enquiry">Enquiry Now</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7">
                            <div class="image-wrap">
                                <img src="assets/img/training/mern.png" alt="digital" class="custom-img-width img-fluid">
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
                    <div class="col-lg-4 col-md-4 order-1 order-sm-1 order-md-0 order-lg-0">
                        <div class="sidebar-left pr-4">

                            <!-- Search widget-->
                            <!-- <aside class="widget widget-search">
                                <form>
                                    <input class="form-control" type="search" placeholder="Type Search Words">
                                    <button class="search-button" type="submit"><span class="ti-search"></span></button>
                                </form>
                            </aside> -->

                            <!-- Categories widget-->
                            <aside class="widget widget-categories">
                                <div class="widget-title">
                                    <h6>Categories</h6>
                                </div>
                                <ul class="list-unstyled">
                                    <li><a href="web-details.php">Full Stack Development <span class="float-right">  <i class="fas fa-laptop-code"></i></span></a></li>
                                    <li><a href="mobi-details.php">Android Development <span class="float-right">  <i class="fas fa-mobile"></i></span></a></li>
                                    <li><a href="marketing-details.php">Digital Marketing <span class="float-right">  <i class="fas fa-hashtag"></i></span></a></li>
                                    <li><a href="culture-details.php">Corporate Culture & Styles <span class="float-right">  <i class="fas fa-building"></i></span></a></li>
                                    <li><a href="mern-details.php">MERN Stack <span class="float-right">  <i class="fas fa-code"></i></span></a></li>
                                </ul>
                            </aside>

                            <!-- Recent entries widget-->
                            <aside class="widget widget-recent-entries-custom">
                                <div class="widget-title">
                                    <h6>Recent Posts</h6>
                                </div>
                                <ul class="list-unstyled">
                                    <li class="clearfix d-flex align-items-center">
                                        <div class="wi">
                                            <a href="#"><img src="assets/img/blog/1.png" alt="recent post" class="img-fluid rounded" /></a>
                                        </div>
                                        <div class="wb"><a href="coming-soon.php">MEAN & MERN</a><span class="post-date"></span></div>
                                    </li>
                                    <li class="clearfix d-flex align-items-center">
                                        <div class="wi">
                                            <a href="#"><img src="assets/img/blog/2.png" alt="recent post" class="img-fluid rounded" /></a>
                                        </div>
                                        <div class="wb"><a href="coming-soon.php">Search Engine Optimization</a><span class="post-date"></span></div>
                                    </li>
                                    <li class="clearfix d-flex align-items-center">
                                        <div class="wi">
                                            <a href="#"><img src="assets/img/blog/3.jpg" alt="recent post" class="img-fluid rounded" /></a>
                                        </div>
                                        <div class="wb"><a href="coming-soon.php">Active Interaction</a><span class="post-date"></span></div>
                                    </li>
                                </ul>
                            </aside>

                            <!-- Subscribe widget-->
                            <aside class="widget widget-categories">
                                <div class="widget-title">
                                    <h6>Research Papers</h6>
                                </div>
                                <p>Ping Us! subscribe to our Blog & News page</p>

                                <!-- <input type="text" class="form-control input" id="email-footer" name="email" placeholder="hello@jysehtatech.com"> -->
                                <button type="submit" data-toggle="modal" data-target="#enquiry" class="btn btn-secondary btn-block mt-3">Subscribe</button>

                            </aside>

                            <!-- Tags widget-->
                            <aside class="widget widget-tag-cloud">
                                <div class="widget-title">
                                    <h6>Tags</h6>
                                </div>
                                <div class="tag-cloud"><a href="Training.php">E-commerce</a><a href="Training.php">Portfolio</a><a href="Training.php">responsive</a><a href="Training.php">bootstrap</a><a href="Training.php">business</a><a href="Training.php">corporate</a></div>
                            </aside>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 order-0 order-sm-0 order-md-1 order-lg-1 mb-4 mb-md-0 mb-lg-0">
                        <!-- Post-->
                        <div class="post">
                            <div class="col-12">
                                <div class="card card-body shadow">
                                    <div class="d-flex">
                                        <div class="mr-3 mr-md-4">
                                            <div class="mb-0 p-0 p-md-2 icon icon-shape icon-md rounded-circle bg-default-alt text-default">
                                                <i class="fas fa-trophy"></i>
                                            </div>
                                        </div>
                                        <div class="feature-content ">
                                            <h5>What you'll learn</h5>
                                            <p class="mb-0">
                                                <i class="fas fa-check"></i>&nbsp;Creating complete apps with the MERN stack
                                            </p>
                                            <p class="mb-0">
                                                <i class="fas fa-check"></i>&nbsp;NodeJS for Javascript servers
                                            </p>
                                            <p class="mb-0">
                                                <i class="fas fa-check"></i>&nbsp;User account authentication
                                            </p>
                                            <p class="mb-0">
                                                <i class="fas fa-check"></i>&nbsp;React for dynamic websites
                                            </p>
                                            <p class="mb-0">
                                                <i class="fas fa-check"></i>&nbsp;ExpressJS for Javascript Web APIs
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Post end-->
                        <!--review section start-->
                        <section class="section section-lg">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-lg-12">
                                        <div class="d-flex">
                                            <div class="feature-content">
                                                <h5>Course content</h5>
                                            </div>
                                        </div>
                                        <!--Accordion-->
                                        <div class="accordion">
                                            <div class="card card-sm px-4 py-1 border border-light rounded mb-0">
                                                <div data-target="#panel-2" class="accordion-panel-header icon-title collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-2"><span class="mb-0">Course Details</span> <span class="icon"><i class="fas fa-angle-down"></i></span></div>
                                                <div class="collapse" id="panel-2">
                                                    <div class="accordion-content">
                                                        <p class="mb-0">
                                                            <i class="fas fa-server"></i>&nbsp;Express Server
                                                        </p>
                                                        <p class="mb-0">
                                                            <i class="fab fa-react"></i>&nbsp;React
                                                        </p>
                                                        <p class="mb-0">
                                                            <i class="fas fa-cubes"></i>&nbsp;Creating API with React + Node js
                                                        </p>
                                                        <p class="mb-0">
                                                            <i class="fas fa-times"></i>&nbsp;Handling Errors on the Client + Server 
                                                        </p>
                                                        <p class="mb-0">
                                                            <i class="fas fa-shield-alt"></i>&nbsp;Authorization and Protecting Content
                                                        </p>
                                                        <p class="mb-0">
                                                            <i class="fas fa-ellipsis-h"></i>&nbsp;Pagination
                                                        </p>
                                                        <p class="mb-0">
                                                            <i class="fas fa-mobile"></i>&nbsp;Refactoring & Mobile Styling
                                                        </p>
                                                        <p class="mb-0">
                                                            <i class="fas fa-mail-bulk"></i>&nbsp;Deploying
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-5 mt-lg-2">
                                                <div class="col text-center"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#enquiry"><span class="mr-2"><i class="fas fa-question-circle"></i></span>Get Complete Course</a></div>
                                            </div>
                                        </div>
                                        <!--End of Accordion-->
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!--review section end-->

                        <!--project details row start-->
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="d-flex">
                                    <div class="feature-content">
                                        <h5>Requirements</h5>
                                    </div>
                                </div>
                                <div class="project-details-content">
                                    <ul class="list-unstyled tech-feature-list">
                                        <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Basic </strong>Javascript / CSS / HTML</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Basics</strong> of Git</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Basics</strong> to learn and enhance your skills</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="d-flex">
                                    <div class="feature-content">
                                        <h5>Description</h5>
                                    </div>
                                </div>
                                <div class="project-details-content">
                                    <p>The easiest way to build complete web applications using just the fundamental languages of the web: JavaScript, HTML and CSS.</p>
                                    <p>We will build a complete web app using the JavaScript frameworks of the MERN Stack: MongoDB, ExpressJS, React and NodeJS.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="d-flex">
                                    <div class="feature-content">
                                        <h5>Who this course is for:</h5>
                                    </div>
                                </div>
                                <div class="project-details-content">
                                    <ul class="list-unstyled tech-feature-list">
                                        <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Web developers who want to learn the basics of Full Stack development</strong></li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Javascript programmers </strong>who want to learn React</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Javascript programmers</strong> who want to learn MongoDB as a database</li>
                                        <li class="py-1"><span class="ti-control-forward mr-2 text-secondary"></span><strong>Javascript programmers </strong>who want to learn NodeJS and ExpressJS for server development</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--project details row end-->
                    </div>
        </section>
        <!--project details section end-->
        </div>
        </div>
    </div>
    </section>
    <!--blog section end-->

    <!-- Modal -->
    <div class="modal fade" id="enquiry" tabindex="-1" role="dialog" aria-labelledby="enquiryTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="sign-up-form-wrap position-relative rounded p-5 bg-white text-dark shadow-lg">
                    <div class="sign-up-form-header text-center mb-4">
                        <h3>Request a Proposal</h3>
                        <p>Fill Out Our Form & We’ll be in Touch Shortly</p>
                    </div>
                    <div class="message-box d-none">
                        <div class="alert alert-danger"></div>
                    </div>
                    <formtadget="_blank" action="coming-soon.php"  id="getQuoteFrm" method="post" class="sign-up-form">
                        <div class="form-group input-group">
                            <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                        </div>
                        <div class="form-group input-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                        </div>
                        <div class="form-group input-group">
                            <input type="text" name="subject" class="form-control" placeholder="Phone" required="required">
                        </div>
                        <h3><label>Type of project Required</label></h3>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">Responsive Website
                                </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">Mobile Apps
                                </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">UI & UX Designs&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">Digital Marketing
                                </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value="">Server Maintenance
                                </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value=""> Hosting Services
                                </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value=""> Graphic Designing &nbsp;
                                </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value=""> Branding & Promotions
                                </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value=""> Logo Desiging
                                </label>
                        </div>
                        <br/>
                        <br/>
                        <div class="form-group input-group">
                            <textarea name="message" id="msg" class="form-control" placeholder="Write your Requirement..." cols="30" rows="2" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="btn btn-secondary btn-block" value="Send">
                        </div>
                        <div class="form-check d-flex align-items-center text-center">
                            <input type="checkbox" class="form-check-input mt-0 mr-3" id="exampleCheck1">
                            <label class="form-check-label text-muted" for="exampleCheck1">I agree your <a href="#">terms &amp; conditions</a></label>
                        </div>
                    </formtadget=>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->

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
    <!--<script src="assets/js/vendors/countUp.min.js"></script>-->
    <!--endbuild-->
</body>

</html>
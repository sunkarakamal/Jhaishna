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
    <link rel="icon" class="lozad" href="assets/img/favicon.png" type="image/png" sizes="16x16">

    <!--title-->
    <!--<title>Services - Corporate Branding</title>-->
    <title>Monitoring</title>


    <!-- endbuild -->
	
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

    <div class="main">

        <!--page header section start-->
        <section class="lozad" style="background: url('assets/img/slider-img-4.jpg')no-repeat center center / cover">
            <div class="section-lg bg-gradient-primary text-white section-header">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-7">
                            <div class="page-header-content text-center">
                                <h1>MONITORING</h1>
                                <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                    <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                        <li class="breadcrumb-item"><a href="index.php">Services</a></li>
                                        <li class="breadcrumb-item"><a href="corpo.php">Monitoring</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--page header section end-->

        <!--about section start-->
        <section class="section section-lg">
            <div class="container">
                <div class="row row-grid align-items-center">
                    <div class="col-12 col-lg-5">
                        <h2>Monitoring</h2>
                        <p class="lead">Convert your emails into tickets and keep them all organized in one place. Never leave customers' questions unanswered.</p>
                        <ul class="list-unstyled tech-feature-list">
                            <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>Creative</strong> Websites Design</li>
                            <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>Accounting</strong> Procedures Guidebook</li>
                            <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>Cost</strong> Accounting Fundamentals</li>
                            <li class="py-1"><span class="icon icon-xs mr-2 text-secondary"> <i class="ti-control-forward"></i></span><strong>SEO</strong> Optimization Services</li>
                        </ul>
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-12">
                                <a href="#" class="btn btn-secondary mt-3" data-toggle="modal" data-target="#exampleModalLong">ENQUIRY <span class="icon icon-xs ml-2 "><span class="fas fa-arrow-right "></span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 ml-lg-auto">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="card bg-default text-white shadow-soft rounded mb-4">
                                    <div class="px-3 px-lg-4 py-5 text-center">
                                        <span class="icon icon-lg d-block"><i class="fas fa-drafting-compass"></i></span>
                                        <h5>Logo Designing</h5>
                                        <p class="mb-0">A design that conveys the essence of your brand.</p>
                                    </div>
                                </div>
                                <div class="card bg-success text-white shadow-soft rounded mb-4">
                                    <div class="px-3 px-lg-4 py-5 text-center">
                                        <span class="icon icon-lg d-block"><i class="fas fa-ad"></i></span>
                                        <h5>Promotions</h5>
                                        <p class="mb-0">Proactively develop B2B alignments rather.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 pt-lg-4">
                                <div class="card bg-secondary text-white shadow-soft rounded mb-4">
                                    <div class="px-3 px-lg-4 py-5 text-center">
                                        <span class="icon icon-lg d-block"><i class="fas fa-star"></i></span>
                                        <h5>Brand Identity</h5>
                                        <p class="mb-0">A brand is a bit more intangible.</p>
                                    </div>
                                </div>
                                <div class="card bg-primary text-white shadow-soft rounded mb-4">
                                    <div class="px-3 px-lg-4 py-5 text-center">
                                        <span class="icon icon-lg d-block"><i class="fab fa-product-hunt"></i></span>
                                        <h5>Pre & Post Production House</h5>
                                        <p class="mb-0">Equipped with advanced editing system, echo & noise-free recording rooms.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about section end-->

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
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
                        <form tadget="_blank" action="projectlogin.php"   method="post" class="sign-up-form">
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
                                    <input type="checkbox" class="form-check-input" name="data[]" value="Oracle Communication Consulting">Oracle Communication Consulting.
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="data[]" value="Tailered Billing Solution">Tailered Billing Solution.
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="data[]" value="Tailered CRM SystemX">Tailered CRM System.
                                    Designs&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="data[]" value="Digitial Bussiness Transformation">Digitial Bussiness Transformation.
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="data[]" value="Staff Augmentation">Staff Augmentation
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input"  name="data[]" value="Cloud Migration And Automation">Cloud Migration And Automation.
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="data[]"  value="E-Invoicing Software">E-Invoicing Software. &nbsp;
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input"  name="data[]" value="Digitial Manufacturing Platform">Digitial Manufacturing Platform.
                                </label>
                            </div>
                            <br>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input"  name="data[]" value="Others">Others.
                                </label>
                            </div>
                            <br />
                            <br />
                            
                            <div class="form-group input-group">
                                <textarea name="message" id="msg" class="form-control" placeholder="Write your Requirement..." cols="30" rows="2" required="required"></textarea>
                            </div>

                            <div class="form-check d-flex align-items-center text-center">
                                <input type="checkbox" class="form-check-input mt-0 mr-3" id="exampleCheck1">
                                <label class="form-check-label text-muted" for="exampleCheck1">I agree your <a href="#">terms &amp; conditions</a></label>
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" class="btn btn-secondary btn-block" value="Send">
                            </div>
                            
                        </form>
                    </div>
                </div>
                </div>
        </div>
        <!-- modal end -->

        <!--blog section start-->
        <section class="section section-lg bg-soft ">
            <div class="container ">
                <div class="row justify-content-center ">
                    <div class="col-lg-8 ">
                        <div class="section-heading text-center mb-5 ">
                            <h2>Other Services</h2>
                            <p class="lead ">Dynamically pursue reliable convergence rather than 24/7 process improvements develop end-to-end customer service.</p>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-lg-0 mb-4 ">
                        <div class="card bg-white border-variant-soft shadow-soft ">
                            <div class="blog-img position-relative ">
                                <img src="assets/img/preview.gif " class="card-img-top rounded-top" class="lozad" alt="themetags office ">
                            </div>
                            <div class="card-body ">
                                <h3 class="h5 card-title mt-3 "><a href="# ">OBRM Access Portal</a></h3>
                                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="mob.php" class="link-with-icon text-default font-small font-weight-bold " target="_blank ">Read more <span> <i class="fas fa-angle-right "></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-lg-0 mb-4 ">
                        <div class="card bg-white border-variant-soft shadow-soft ">
                            <div class="blog-img position-relative ">
                                <img src="assets/img/softdev.gif" class="card-img-top rounded-top" class="lozad" alt="themetags office ">
                            </div>
                            <div class="card-body ">
                                <h3 class="h5 card-title mt-3 "><a href="# ">Billing Revenue Management</a></h3>
                                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="softdev.php" class="link-with-icon text-default font-small font-weight-bold " target="_blank ">Read more <span> <i class="fas fa-angle-right "></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-lg-0 mb-4 ">
                        <div class="card bg-white border-variant-soft shadow-soft ">
                            <div class="blog-img position-relative ">
                                <img src="assets/img/ASAP.gif " class="card-img-top rounded-top lozad" alt="themetags office ">
                            </div>
                            <div class="card-body ">
                                <h3 class="h5 card-title mt-3 "><a href="# ">Automated Service Activation Program</a></h3>
                                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="digi.php" class="link-with-icon text-default font-small font-weight-bold " target="_blank ">Read more <span> <i class="fas fa-angle-right "></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--blog section end-->
    </div>

    <!--footer section start-->
    <?php
    include 'footer.php';
    ?>
    <!--footer section end-->
    <!--scroll bottom to top button start-->
    <button class="scroll-top scroll-to-target " data-target="html ">
        <span class="fas fa-hand-point-up "></span>
    </button>
    <!--scroll bottom to top button end-->

</body>

</html>
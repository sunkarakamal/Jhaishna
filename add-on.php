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
    <!--<title>Services - Add Ons</title>-->
    <title>Services - Self care</title>

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
        <section class="" style="background: url('assets/img/corpo.jpg')no-repeat center center / cover">
            <div class="section-lg bg-gradient-primary text-white section-header">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-7">
                            <div class="page-header-content text-center">
                                <h1>Self-Care</h1>
                                <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                    <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                        <li class="breadcrumb-item"><a href="index.php">Services</a></li>
                                        <li class="breadcrumb-item"><a href="add-on.php">Self-Care</a></li>
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
        <section class="section section-lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="promo-services-single position-relative rounded-custom p-5 shadow">
                            <span class="icon icon-lg text-primary d-block">
                                <i class="fas fa-server"></i>
                            </span>
                            <!--<h3 class="h5">Server Maintenance</h3>-->
                            <p class="mb-0">Intrinsicly create 2.0 testing procedures rather than interdependent schemas.
                            </p>
                            <a href="#" class="links-icon bg-secondary shadow-sm" data-toggle="modal" data-target="#exampleModalLong "><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="promo-services-single position-relative rounded-custom p-5 shadow">
                            <span class="icon icon-lg text-primary d-block">
                                <i class="fas fa-cloud"></i>
                            </span>
                            <h3 class="h5">Hosting Services</h3>
                            <p class="mb-0">Conveniently myocardinate efficient opportunities rather than distributed for change.</p>
                            <a href="#" class="links-icon bg-secondary shadow-sm" data-toggle="modal" data-target="#exampleModalLong "><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="promo-services-single position-relative rounded-custom p-5 shadow">
                            <span class="icon icon-lg text-primary d-block">
                                <i class="fas fa-microphone"></i>
                            </span>
                            <h3 class="h5">Studio Recoding</h3>
                            <p class="mb-0">Quickly expedite cross-media information rather than open-source metrics maintain.</p>
                            <a href="#" class="links-icon bg-secondary shadow-sm" data-toggle="modal" data-target="#exampleModalLong "><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--promo section end-->

        <!-- Modal -->
    <!--<form method="post" action="projectlogin.php">-->
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
                        <form action="projectlogin.php"  method="post" class="sign-up-form">
                        
                            <div class="form-group input-group">
                                <input type="text" name="name" class="form-control" placeholder="First Name" required="required">
                            </div>
                            <div class="form-group input-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                            </div>
                            <div class="form-group input-group">
                                <input type="text" name="Mobile" class="form-control" placeholder="Phone" required="required">
                            </div>
                            <h3><label>Type of project Required</label></h3>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="data[]" value="">Client Portals 
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input"  name="data[]" value="">Lead Management
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input"  name="data[]" value="">UI & UX Designs&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="data[]" value="">Digital Marketing
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="data[]"  value="">Project management
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="data[]"  value=""> Software Development
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="data[]"  value=""> Graphic Designing &nbsp;
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input"  name="data[]" value=""> Branding & Promotions
                                </label>
                            </div>
                            <!--<div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input"  name="data[]" value=""> Logo Desiging
                                </label>
                            </div>-->
                            <br />
                            <br />
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!--</form>   --->
        <!-- modal end -->

        <!--blog section start-->
        <section class="section section-lg bg-soft">
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
                                <img src="assets/img/preview.gif" class="card-img-top rounded-top " alt="themetags office ">
                            </div>
                            <div class="card-body ">
                                <h3 class="h5 card-title mt-3 "><a href="digi.php">OBRM Access Portal</a></h3>
                                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="digi.php" class="link-with-icon text-default font-small font-weight-bold " target="_blank ">Read more <span> <i class="fas fa-angle-right "></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-lg-0 mb-4 ">
                        <div class="card bg-white border-variant-soft shadow-soft ">
                            <div class="blog-img position-relative ">
                                <img src="assets/img/softdev.gif" class="card-img-top rounded-top " alt="themetags office ">
                            </div>
                            <div class="card-body ">
                                <h3 class="h5 card-title mt-3 "><a href="add-on.php">Billing Revenue Management</a></h3>
                                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="add-on.php" class="link-with-icon text-default font-small font-weight-bold " target="_blank ">Read more <span> <i class="fas fa-angle-right "></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4 mb-md-4 mb-lg-0 mb-4 ">
                        <div class="card bg-white border-variant-soft shadow-soft ">
                            <div class="blog-img position-relative ">
                                <img src="assets/img/ASAP.gif" class="card-img-top rounded-top " alt="themetags office ">
                            </div>
                            <div class="card-body ">
                                <h3 class="h5 card-title mt-3 "><a href="softdev.php">Automated Service Activation Program</a></h3>
                                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="softdev.php" class="link-with-icon text-default font-small font-weight-bold " target="_blank ">Read more <span> <i class="fas fa-angle-right "></i></span></a>
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
    <!--build:js-->
</body>

</html>
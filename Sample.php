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
    <title>Internship</title>

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
                                <h1>Full-Stack Development Course Details</h1>
                                <nav aria-label="breadcrumb" class="d-flex justify-content-center">
                                    <ol class="breadcrumb breadcrumb-transparent breadcrumb-text-light">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item"><a href="blogdetails.php">Blog</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Intern - Full Stack Developer</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <br>
        <br>
        <!--page header section end-->

        <!--blog section start-->
        <!--<section class="section section-lg ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 mb-5 mb-md-0 mb-lg-0">-->
                        <!-- Post-->
                        <!--<div class="post">
                            <div class="post-preview"><img src="assets/img/blog/intern2.jpg" alt="article" class="img-fluid" /></div>
                            <div class="post-wrapper">
                                <div class="post-header mt-4">
                                    <h1 class="post-title h3">Full Stack Development Course (2024)</h1>
                                </div>
                                <div class="post-content">
                                    <p class="text-justify">Here is a list of modules covered under Jhaishna's full-stack development course.</p>
                                    <p class="text-justify">Full-stack development refers to the method of applying both front-end and back development protocols to develop websites. This field has been gaining popularity in recent years due to the growing number of digital businesses. 
                                        It combines the work of managing servers and databases and system engineering. Full-stack developers are in great demand across the world. </p> 
                                    <h1 class="post-title h3">Full Stack Development Course Modules</h1>
                                    <p class="text-justify">Jhaishna’s full stack development course modules are designed by experts who have extensive experience in the industry in addition to being excellent teachers. Jhaishna promotes multifaceted learning experience.</p>-->

                                    <!--<div class="post-preview"><img src="assets/img/blog/web1.png" alt="article" class="img-fluid" /></div><br/>
                                    <h1 class="post-title h3">Module 1: HTML</h1>
                                    <p class="text-justify">HTML is the basic and must have skill-set for every web developer. It is used and extended by various other technologies.
                                    To be completely able to understand how things work in web development, you should develop an understanding of HTML. In this section, you will learn,</p>
                                    <ul>
                                        <li>Introduction to HTML</li>
                                        <li>Browsers and HTML</li>
                                        <li>Tags, Attributes and Elements</li>
                                        <li>Comments</li>
                                        <li>Doctype Element</li>
                                        <li>Headings, Paragraphs and Formatting text</li>
                                        <li>Lists and links</li>
                                        <li>Images and Tables</li>
                                    </ul>
                                    <h1 class="post-title h3">Module 2: CSS</h1>
                                    <p class="text-justify">CSS is another important language amongst the web development trifecta. 
                                    It will help you style, plan a layout and control the behaviour and look and feel of the web apps that you build. In this module, you will learn:</p>
                                    <ul>
                                        <li>Introduction to CSS</li>
                                        <li>Applying CSS to HTML</li>
                                        <li>CSS Colors and Backgrounds</li>
                                        <li>CSS box model</li>
                                        <li>CSS margins, padding and borders</li>
                                        <li>CSS text and font properties</li>
                                        <li>CSS general properties</li>
                                    </ul>

                                    <h1 class="post-title h3">Module 3: JavaScript</h1>
                                    <p class="text-justify">The third one amongst the must learn trifecta, Js is present in about 90% of the internet. 
                                    To make sense of what you’re doing and to design and build new web apps, this language is used predominantly, and it is indispensable. In this section you will learn the following topics:</p>
                                    <ul>
                                        <li>Introduction to JavaScript</li>
                                        <li>Applying JavaScript (internal and external)</li>
                                        <li>Understanding JS syntax</li>
                                        <li>Introduction to Document and Window Object</li>
                                        <li>Fundamentals of JS</li>
                                        <li>Conditional Statements</li>
                                        <li>Functions</li>
                                        <li>Events</li>
                                        <li>JavaScript DOM</li>
                                    </ul>

                                    <h1 class="post-title h3">Module 4: React JS</h1>
                                    <p class="text-justify">Reactjs is the best and most popular framework for front-end development. An integral part of the MERN stack, its community is great, and the demand for reactjs specialists is only increasing day-by-day. 
                                    React is great for Rapid app development, SPAs and for creating awesome responsive and interactive web apps. In this topic you will learn:</p>
                                    <ul>
                                        <li>Introduction</li>
                                        <li>Templates using JSX</li>
                                        <li>Components, State and Props</li>
                                        <li>Life cycle of Components</li>
                                        <li>Rendering List and Portals</li>
                                        <li>Error handling</li>
                                        <li>Routers</li>
                                        <li>Redux and Redux Saga</li>
                                        <li>Immutable JS</li>
                                        <li>Service side rendering</li>
                                        <li>Unit testing</li>
                                        <li>Webpack</li>
                                    </ul>

                                    <h1 class="post-title h3">Module 5: Node JS</h1>
                                    <p class="text-justify">Nodejs is a great skill to have. It is JS based, and it completes the javascript full stack experience. It is a backend skill, which is in demand and pays well. In this module, you will learn the following:</p>
                                    <ul>
                                        <li>Overview</li>
                                        <li>Basics and Setup</li>
                                        <li>Node JS Console</li>
                                        <li>Command utilities</li>
                                        <li>Node JS Modules</li>
                                        <li>Node JS Concepts</li>
                                        <li>Events</li>
                                        <li>Node JS with Express JS</li>
                                        <li>Database Access</li>
                                    </ul>

                                    <h1 class="post-title h3">Module 6: Databases</h1>
                                    <p class="text-justify">The information is stored in a database server using SQL (Structured Query Language). A full stack developer uses a software package, like MySQL, to access database servers and retrieve quarries. In this module, you will learn the following:</p>
                                    <ul>
                                        <li>SQL Concepts</li>
                                        <li>Create and Manage database</li>
                                        <li>Migration of data</li>
                                        <li>Database with PHP</li>
                                        <li>Database with Node JS</li>
                                        <li>Services offered</li>
                                    </ul>

                                    <h1 class="post-title h3">Module 7: Python</h1>
                                    <p class="text-justify">Learn the basics of python and use it to develop applications. This additional language is a value-added skill as python is increasingly in demand for full stack projects. In this module, you will learn:</p>
                                    <ul>
                                        <li>Python Installation & Configuration</li>
                                        <li>Developing a python application</li>
                                        <li>Connect database with python</li>
                                    </ul>
                                </div>
                                <div class="post-header mt-4">
                                    <div class="post-preview"><img src="assets/img/blog/details1.png" alt="article" class="img-fluid" /></div><br/>
                                    <h1 class="post-title h3">Mini Projects</h1>
                                    <p class="text-justify">Mini projects will be assigned to the learners. They may be module(s) based. You need to work them out and finish within the given time period.
                                     These will help you understand coding and how to work on full stack tools for a specific purpose. </p>
                                    <p>These projects include topics like creating a personal portfolio page or a landing page for a product and shopping sites.</p>

                                    <h1 class="post-title h3">Lab Sessions</h1>
                                    <p class="text-justify">These are hands-on practice sessions organized to help you try coding. There will be few sessions that will be marked labs. 
                                        In this time, you get a chance to work on your coding expertise. Your mentors will help you with the learning process. </p>
                                    <p class="text-justify">You get to try out text resizers using DOM manipulation, logic puzzles using onde.js, random quote generator, 
                                        CRUD ops for node and mongo, google search pages and many more.</p>

                                    <h1 class="post-title h3">Certifications</h1>
                                    <p class="text-justify">Once you have attended the sessions, taken up your tests and completed your assignments and projects on time, you get a certificate of completion. 
                                        This Jhaishna certification for full stack development course is a value addition to your resume and is a proof of your skills.</p>

                                    <h1 class="post-title h3">Sessions Scheduled for the Full Stack Development Course at Jhaishna</h1>
                                    <p class="text-justify">A full-stack development course is one of the ‘hot skills’ to have, catering to the demand of the learners, and we offer a few different batches for learning.</p>
                                    <p class="text-justify">The timings can be very flexible, and we have offered classes to people from different domains such as freelancers, students, working professionals and more.</p>
                                    
                                    <h3 class="post-title">Weekday</h3>
                                    <ul>
                                        <li>Morning- Weekdays Full Stack Web Developer Course</li>
                                        <li>Evening- Weekdays Full Stack Web Developer Course</li>
                                        <li>Regular- Weekdays Full Stack Web Developer Course</li>
                                    </ul>

                                    <h3 class="post-title">Weekend</h3>
                                    <ul>
                                        <li>Weekend Full Stack Web Developer Course</li>
                                    </ul>

                                    <h3 class="post-title">Online</h3>
                                    <ul>
                                        <li>Online Instructor Led Full Stack Web Developer Course</li>
                                        <li>Online Self-paced Full Stack Web Developer Course</li>
                                    </ul>

                                    <h1 class="post-title h3">Placement Assistance</h1>
                                    <p class="text-justify">The full stack developer course with placement support is a special offer for those who complete our program successfully by finishing all the mandated work on time.</p>
                                    <p class="text-justify">Those who take up the course seriously and put in a lot of hard work can easily get placement assistance. 
                                        Once in, you will be trained on aptitude tests, which are part of the placement preparation, and you will also be taught how to present yourself during the interviews and the tricks to crack an interview.</p>
                                    
                                    <h1 class="post-title h3">Mock Interviews</h1>
                                    <p class="text-justify">Mock interview sessions will be organized (if the time and schedule permits) where you will interact with our in-house experts. 
                                        After the sessions, you will get personalized feedback on how to improve your conduct, your general soft skills as well as brush up on subject matters, if any.</p>

                                    <h1 class="post-title h3">FAQs on Jhaishna's Full Stack Development Course</h1>
                                    <h5>Who can take up Jhaishna's full-stack course?</h5>
                                    <p class="text-justify">This course is primarily taken by students from different engineering backgrounds. However, people from non-IT backgrounds and those looking for a career change can also apply. </p>
                                
                                    <h5>What would be the salary range after completing the full stack developer course?</h5>
                                    <p class="text-justify">On average, the salary of a full stack developer is Rs.4,00,000/- per annum. With your educational background, knowledge of the subject and portfolio, along with a bit of negotiation, you can definitely get a good salary close to the average figure.</p>

                                    <h5>Is a full stack developer course at Jhaishna enough to get me a job?</h5>
                                    <p class="text-justify">Yes. This full stack developer course and the certification that you receive will be enough for you to get a job at some good companies. The skills that you gain in our classroom will be useful when working in companies.</p>

                                    <h5>Does the full-stack certification at Jhaishna guarantee a job? </h5>
                                    <p class="text-justify">Jhaishna only offers job-interview assistance, and does not guarantee that you’ll receive a job offer. Finding a job depends totally on a student’s performance and merits. </p>

                                    <h5>Do I have to make full payment for the full stack developer course to start learning?</h5>
                                    <p class="text-justify">No. You don’t have to pay the full fees upfront. We do have easy payment options via EMI wherein you can pay the course fee in 2 installments.</p>

                                    <h5>I live far from your company. How can I take up your course?</h5>
                                    <p class="text-justify">You can choose to enroll into the online full stack development course or the self-paced online full stack development course. And if you are looking to attend sessions physically, then you may need to mail us and get yourself registered. </p>

                                    <h5>Is the Jhaishna certificate recognized by employers?<h5>
                                    <p class="text-justify">Yes. This certificate is very useful and recognized by prospective employers. But, you cannot take this certificate in lieu of college credits. 
                                    With this certificate, you will beef up your resume, get to gloat on facebook and showcase your learning on LinkedIn and strengthen your profile.</p>

                                    <h1 class="post-title h3">Conclusions</h1>
                                    <p class="text-justify">Here you go with the complete full-stack course syllabus. As mentioned earlier, full-stack is a popular field amongst most developers. There has been a sharp rise in the number of developers being hired as well in recent years. 
                                    And full-stack developers top the list. Reach out to us at <a href="tel:9441294345">94412 94345</a>, <a href="tel:9441294647">94412 94647</a> or you can mail us to <a href="mailto:projects@jhaishna.com">projects@jhaishna.com</a> for more information. Our advisors can explain and guide you with your next steps. 
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-12 col-md-12 text-center">
                                    <a href="contact.php" class="btn btn-secondary mt-0">Contact Us</a>
                                </div>
                            </div><br/>
                        </div>
                        <!-- Post end-->
                    </div>
                </div>
            </div>
        </section>-->
        <!--blog section end-->

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

    

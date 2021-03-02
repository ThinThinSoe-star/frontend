<x-frontend>
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <!-- <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div> -->
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Email">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- hero slider -->
<section class="hero-section overlay bg-cover" data-background="frontend/images/banner/1.jpg
">
    <div class="container">
        <div class="hero-slider">
            <!-- slider item -->
            <div class="hero-slider-item">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Your bright future is our mission</h1>
                        <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">
The world's largest selection of courses
Choose from 130,000 online video courses with new additions published every month
</p>
                        <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Apply now</a>
                    </div>
                </div>
            </div>
            <!-- slider item -->
            <div class="hero-slider-item">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Your bright future is our mission</h1>
                        <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">Achieve your goals with ZeeKwat Online Academy</p>
                        <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Apply now</a>
                    </div>
                </div>
            </div>
            <!-- slider item -->
            <div class="hero-slider-item">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Your bright future is our mission</h1>
                        <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">Build skills with courses, certificates, and degrees online from world-class universities and companies.</p>
                        <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Apply now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /hero slider -->

<!-- banner-feature -->
<section class="bg-gray overflow-md-hidden">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-xl-4 col-lg-5 align-self-end">
                <img class="img-fluid w-100" src="images/banner/banner-feature.png" alt="banner-feature">
            </div>
            <div class="col-xl-8 col-lg-7">
                <div class="row feature-blocks bg-gray justify-content-between">
                    <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                        <i class="ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                        <h3 class="mb-xl-4 mb-lg-3 mb-4">Learn the
latest skills</h3>
                        <p>like business analytics, graphic design, Python, and more</p>
                    </div>
                    <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                        <i class="ti-blackboard mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                        <h3 class="mb-xl-4 mb-lg-3 mb-4">Get ready
for a career</h3>
                        <p>in high-demand fields like IT, AI and cloud engineering</p>
                    </div>
                    <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                        <i class="ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                        <h3 class="mb-xl-4 mb-lg-3 mb-4">Become an instructor</h3>
                        <p>

Top instructors from around the world teach millions of students on Udemy. We provide the tools and skills to teach what you love. </p>
                    </div>
                    <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                        <i class="ti-write mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                        <h3 class="mb-xl-4 mb-lg-3 mb-4">Upskill your
organization</h3>
                        <p>with on-demand training and development programs</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /banner-feature -->

<!-- about us -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 order-2 order-md-1">
                <h2 class="section-title">Transform your life through education</h2>
                <p>Zeekwat has plenty to offer for the learner on a budget, from completely free courses taught by experts, professors, entrepreneurs, and professionals, to frequent discounts and class specials. In addition to classes in tech, business, and marketing, you can also explore options in productivity, health, hobbies, and lifestyle.


</p>
                <a href="about.html" class="btn btn-primary-outline">Learn more</a>
            </div>
            <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                <img class="img-fluid w-100" src="frontend/images/banner/2.jpg" alt="about image">
            </div>
        </div>
    </div>
</section>
<!-- /about us -->

<!-- courses -->
<section class="section-sm">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center section-title justify-content-between">
                    <h2 class="mb-0 text-nowrap mr-3">Our Course</h2>
                    <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                    <!-- <div>
                        <a href="courses.html" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see all</a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- course list -->
        <div class="row justify-content-center">
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="frontend/images/banner/web.jpg" alt="course thumb">
                    <div class="card-body">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                            <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
                        </ul>
                        <a href="course-single.html">
                            <h4 class="card-title">Development</h4>
                        </a>
                        <ul>
                            <li>-Python</li>
                            <li>-Web Development</li>
                            <li>-Meachine Learning</li>
                        </ul>
                        <!-- <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna.</p> -->
                        <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
                    </div>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="frontend/images/banner/c.jpg" alt="course thumb">
                    <div class="card-body">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                            <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
                        </ul>
                        <a href="course-single.html">
                            <h4 class="card-title">Programming Language</h4>
                        </a>
                        <ul>
                            <li>-C++</li>
                            <li>-Java</li>
                            <li>-C#</li>
                        </ul>
                        <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
                    </div>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="frontend/images/banner/design.jpg" alt="course thumb">
                    <div class="card-body">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                            <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
                        </ul>
                        <a href="course-single.html">
                            <h4 class="card-title">Design</h4>
                        </a>

                        <ul>
                            <li>-Photoshop</li>
                            <li>-Graphic Design</li>
                            <li>-Drawing</li>
                        </ul>
                        <!-- <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna.</p> -->
                        <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
                    </div>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="frontend/images/banner/f.jpg" alt="course thumb">
                    <div class="card-body">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                            <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
                        </ul>
                        <a href="course-single.html">
                            <h4 class="card-title">Business</h4>
                        </a>
                        <ul>
                            <li>-Financial Analysis</li>
                            <li>-SQL</li>
                            <li>-PMP</li>
                        </ul>
                        <!-- <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna.</p> -->
                        <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
                    </div>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="frontend/images/banner/fc.jpg" alt="course thumb">
                    <div class="card-body">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                            <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
                        </ul>
                        <a href="course-single.html">
                            <h4 class="card-title">Finance And Accounting</h4>
                        </a>
                       <ul>
                           <li>-Accountancy or Finance</li>
                           <li>-Economics</li>
                           <li>-Management</li>
                       </ul>


                        
                        
                        
                        <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
                    </div>
                </div>
            </div>
            <!-- course item -->
            <div class="col-lg-4 col-sm-6 mb-5">
                <div class="card p-0 border-primary rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="frontend/images/banner/cy.jpg" alt="course thumb">
                    <div class="card-body">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                            <li class="list-inline-item"><a class="text-color" href="#">Humanities</a></li>
                        </ul>
                        <a href="course-single.html">
                            <h4 class="card-title">IT and Software</h4>
                        </a>

                        <ul>
                            <li>-AWS Certification</li>
                            <li>-Ethical Hacking</li>
                            <li>-Cyber Security</li>
                        </ul>
                        <!-- <p class="card-text mb-4"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna.</p> -->
                        <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /course list -->
        <!-- mobile see all button -->
       <!--  <div class="row">
            <div class="col-12 text-center">
                <a href="courses.html" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
            </div>
        </div> -->
    </div>
</section>
<!-- /courses -->

<!-- cta -->
<!-- <section class="section bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h6 class="text-white font-secondary mb-0">Click to Join the Advance Workshop</h6>
                <h2 class="section-title text-white">Training In Advannce Networking</h2>
                <a href="contact.html" class="btn btn-secondary">join now</a>
            </div>
        </div>
    </div>
</section> -->
<!-- /cta -->

<!-- success story -->
<!-- <section class="section bg-cover" data-background="images/backgrounds/success-story.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-4 position-relative success-video">
                <a class="play-btn venobox" href="https://youtu.be/nA1Aqp0sPQo" data-vbtype="video">
                    <i class="ti-control-play"></i>
                </a>
            </div>
            <div class="col-lg-6 col-sm-8">
                <div class="bg-white p-5">
                    <h2 class="section-title">Success Stories</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- /success story -->

<!-- events -->
<section class="section bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center section-title justify-content-between">
                    <h2 class="mb-0 text-nowrap mr-3">Upcoming Events</h2>
                    <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                    <!-- <div>
                        <a href="events.html" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see all</a>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- event -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-0 hover-shadow">
                    <div class="card-img position-relative">
                        <img class="card-img-top rounded-0" src="images/events/event-1.jpg" alt="event thumb">
                        <div class="card-date"><span>18</span><br>December</div>
                    </div>
                    <div class="card-body">
                        <!-- location -->
                        <p align="text-center"><i class="ti-location-pin text-primary mr-2"></i></p>
                        <a href="event-single.html"><h6 class="card-title">Become a full-stack web developer with just one course. HTML, CSS, Javascript, Node, React, MongoDB and more!</h6></a>
                    </div>
                </div>
            </div>
            <!-- event -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-0 hover-shadow">
                    <div class="card-img position-relative">
                        <img class="card-img-top rounded-0" src="images/events/event-2.jpg" alt="event thumb">
                        <div class="card-date"><span>21</span><br>December</div>
                    </div>
                    <div class="card-body">
                        <!-- location -->
                        <p><i class="ti-location-pin text-primary mr-2"></i></p>
                        <a href="event-single.html"><h6 class="card-title">The Ultimate Graphic Design Course Which Covers Photoshop, Illustrator, InDesign,Design Theory, Branding and Logo Design</h6></a>
                    </div>
                </div>
            </div>
            <!-- event -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-0 hover-shadow">
                    <div class="card-img position-relative">
                        <img class="card-img-top rounded-0" src="images/events/event-3.jpg" alt="event thumb">
                        <div class="card-date"><span>23</span><br>December</div>
                    </div>
                    <div class="card-body">
                        <!-- location -->
                        <p><i class="ti-location-pin text-primary mr-2"></i></p>
                        <a href="event-single.html"><h6 class="card-title">This Python For Beginners Course Teaches You The Python Language Fast. Includes Python Online Training With Python 3</h6></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile see all button -->
       <!--  <div class="row">
            <div class="col-12 text-center">
                <a href="course.html" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
            </div>
        </div> -->
    </div>
</section>
<!-- /events -->

<!-- teachers -->
<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="section-title">Our Teachers</h2>
            </div>
            <!-- teacher -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="frontend/images/banner/p1.jpg" alt="teacher">
                    <div class="card-body">
                        <a href="teacher-single.html">
                            <h4 class="card-title">Mr.Tun Myint</h4>
                        </a>
                        <p>Teacher</p>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- teacher -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="frontend/images/banner/p2.jpg" alt="teacher">
                    <div class="card-body">
                        <a href="teacher-single.html">
                            <h4 class="card-title">Mr.Aung Nyein Chan</h4>
                        </a>
                        <p>Teacher</p>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- teacher -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card border-0 rounded-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="frontend/images/banner/p3.jpg" alt="teacher">
                    <div class="card-body">
                        <a href="teacher-single.html">
                            <h4 class="card-title">Ms.Shwe Yee Aung</h4>
                        </a>
                        <p>Teacher</p>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-google"></i></a></li>
                            <li class="list-inline-item"><a class="text-color" href="#"><i class="ti-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /teachers -->

<!-- blog -->
<section class="section pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title">Latest News</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- blog post -->
            <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                    <!-- <img class="card-img-top rounded-0" src="images/blog/post-1.jpg" alt="Post thumb"> -->
                    <div class="card-body">
                        <!-- post meta -->
                        <ul class="list-inline mb-3">
                            <!-- post date -->
                            <li class="list-inline-item mr-3 ml-0">August 28, 2018</li>
                            <!-- author -->
                            <li class="list-inline-item mr-3 ml-0">By Somrat Sorkar</li>
                        </ul>
                        <a href="blog-single.html">
                            <h4 class="card-title">JS</h4>
                        </a>
                        <p class="card-text">The modern JavaScript course for everyone! Master JavaScript with projects, challenges and theory. Many courses in one!</p>
                        <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
                    </div>
                </div>
            </article>
            <!-- blog post -->
            <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                    <!-- <img class="card-img-top rounded-0" src="images/blog/post-2.jpg" alt="Post thumb"> -->
                    <div class="card-body">
                        <!-- post meta -->
                        <ul class="list-inline mb-3">
                            <!-- post date -->
                            <li class="list-inline-item mr-3 ml-0">August 13, 2018</li>
                            <!-- author -->
                            <li class="list-inline-item mr-3 ml-0">By Jonathon Drew</li>
                        </ul>
                        <a href="blog-single.html">
                            <h4 class="card-title">Data Science</h4>
                        </a>
                        <p class="card-text">Complete Data Science Training: Mathematics, Statistics, Python, Advanced Statistics in Python, Machine & Deep Learning</p>
                        <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
                    </div>
                </div>
            </article>
            <!-- blog post -->
            <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
                <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                    <!-- <img class="card-img-top rounded-0" src="images/blog/post-3.jpg" alt="Post thumb"> -->
                    <div class="card-body">
                        <!-- post meta -->
                        <ul class="list-inline mb-3">
                            <!-- post date -->
                            <li class="list-inline-item mr-3 ml-0">August 24, 2018</li>
                            <!-- author -->
                            <li class="list-inline-item mr-3 ml-0">By Alex Pitt</li>
                        </ul>
                        <a href="blog-single.html">
                            <h4 class="card-title">Python</h4>
                        </a>
                        <p class="card-text">A complete practical Python course for both beginners & intermediates! Master Python 3 by making 10 amazing Python apps.</p>
                        <a href="blog-single.html" class="btn btn-primary btn-sm">read more</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
<!-- /blog -->
</x-frontend>

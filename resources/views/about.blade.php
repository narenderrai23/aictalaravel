@extends('layouts.app')

@section('slider')
    <x-carousel :items="[
        ['image' => ['src' => '1.jpg']],
        ['image' => ['src' => '2.jpg']],
        ['image' => ['src' => '3.jpg']],
        ['image' => ['src' => '4.jpg']],
    ]" />
@endsection

@section('main')
    <!-- Start Welcome Area section -->
    <section class="Welcome-area" id="welcome-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-12 section-header-box">
                            <div class="section-header section-header-l">
                                <h2>All India Computer Trainer Association</h2>
                            </div><!-- ends: .section-header -->
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-sm-6 img-full-box">
                            <div class="images-box">
                                <img src="images/index-03/welcome.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-6 content-full-box">
                            <div class="wel-content-box">
                                <p>All India Computer Trainer Association (AICTA) is private/public bodies incorporated
                                    in the year 2013 with the aim to overseeing the activities in IT and technical
                                    education institutions in India. At the national level, AICTA have focused to
                                    provide the full potential of India’s IT education sector. The need for organization
                                    is articulated to avoiding the mismatches by a number of committees led by
                                    difference sources.

                                </p>

                                <a class="readmore-btn" href="#">Read More<i
                                        class="fa fa-long-arrow-right readmore-btn-icon"></i></a>
                            </div><!-- Ends: . -->
                        </div>
                    </div>
                </div>

                <div class="col-md-4 event-box">
                    <div class="row">
                        <div class="col-sm-12 section-header-box">
                            <div class="section-header section-header-l">
                                <h2>News & Media</h2>
                            </div><!-- ends: .section-header -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 event-box-padding">
                            <div class="col-sm-3 event-img">
                                <ul class="list-unstyled">
                                    <li><span>01</span></li>
                                    <li><span>Jan</span></li>
                                </ul>
                            </div>
                            <div class="col-sm-9">
                                <div class="event-content">
                                    <h3><a href="#">Happy New Year 2019</a></h3>
                                    <p class="event-time">
                                        <span>
                                            <i class="fa fa-clock-o event-icon"></i>
                                            8.00 Am - 11.00 Am
                                        </span>
                                        <span>
                                            <i class="fa fa-map-marker"></i>
                                            New York
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 event-box-padding">
                            <div class="col-sm-3 event-img">
                                <ul class="list-unstyled">
                                    <li><span>01</span></li>
                                    <li><span>Jan</span></li>
                                </ul>
                            </div>
                            <div class="col-sm-9">
                                <div class="event-content">
                                    <h3><a href="#">Happy New Year 2019</a></h3>
                                    <p class="event-time">
                                        <span>
                                            <i class="fa fa-clock-o event-icon"></i>
                                            8.00 Am - 11.00 Am
                                        </span>
                                        <span>
                                            <i class="fa fa-map-marker"></i>
                                            New York
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 event-box-padding">
                            <div class="col-sm-3 event-img">
                                <ul class="list-unstyled">
                                    <li><span>01</span></li>
                                    <li><span>Jan</span></li>
                                </ul>
                            </div>
                            <div class="col-sm-9">
                                <div class="event-content">
                                    <h3><a href="#">Happy New Year 2019</a></h3>
                                    <p class="event-time">
                                        <span>
                                            <i class="fa fa-clock-o event-icon"></i>
                                            8.00 Am - 11.00 Am
                                        </span>
                                        <span>
                                            <i class="fa fa-map-marker"></i>
                                            New York
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 readmore-btn-box">
                            <a class="readmore-btn" href="#">View All Events<i
                                    class="fa fa-long-arrow-right readmore-btn-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Ends: . -->
    <!-- ./ End Welcome Area section -->



    <!--Start Courses Area Section-->
    <section class="Courses-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-header-box">
                    <div class="section-header">
                        <h2>AICTA - a Four step's solution</h2>
                    </div><!-- ends: .section-header -->
                </div>
            </div>

            <div class="row courses-r-margin-bottom">

                <div class="col-sm-3 single-courses-box">

                    <div class="tt">
                        <div class="image">

                            <img src="images/images/b1.png">
                        </div>
                        <div class="text">
                            <h3>Computer Training</h3>

                        </div>

                    </div>
                    <p style="padding-top:10px;">Training and Job Placement department is dedicated towards proper
                        placement of students</p>
                    <a class="readmore-btn" href="#">Read More <i
                            class="fa fa-long-arrow-right readmore-btn-icon"></i></a>
                </div><!-- Ends: . -->


                <div class="col-sm-3 single-courses-box">

                    <div class="tt">

                        <div class="image">

                            <img src="images/images/b2.png">
                        </div>
                        <div class="text">
                            <h3>E-Learning</h3>

                        </div>

                    </div>
                    <p style="padding-top:10px;">In the continuation of our activities, AICTA has been introduced
                        "Computer Training Scholarship"</p>
                    <a class="readmore-btn" href="#">Read More <i
                            class="fa fa-long-arrow-right readmore-btn-icon"></i></a>
                </div><!-- Ends: . -->



                <div class="col-sm-3 single-courses-box">

                    <div class="tt">
                        <div class="image">

                            <img src="images/images/b3.png">
                        </div>
                        <div class="text">
                            <h3>Our Courses</h3>

                        </div>

                    </div>
                    <p style="padding-top:10px;">AICTA has regularly launching many programs, "Computer Training
                        Awareness Campaign"</p>
                    <a class="readmore-btn" href="#">Read More <i
                            class="fa fa-long-arrow-right readmore-btn-icon"></i></a>
                </div><!-- Ends: . -->



                <div class="col-sm-3 single-courses-box">

                    <div class="tt">
                        <div class="image">

                            <img src="images/images/b4.png">
                        </div>
                        <div class="text">
                            <h3>Student Zone</h3>

                        </div>

                    </div>
                    <p style="padding-top:10px;">It is a paradisematic country, in which roasted parts of sentences fly
                        into your mouth.</p>
                    <a class="readmore-btn" href="#">Read More <i
                            class="fa fa-long-arrow-right readmore-btn-icon"></i></a>
                </div><!-- Ends: . -->



            </div><!--End .row-->
        </div>
        </div>
    </section>
    <!-- ./ End Courses Area section -->

    <!--Start Courses Area Section-->
    <section class="Courses-area">
        <div class="container">


            <div class="row courses-r-margin-bottom">
                <x-card class="ttt" :image="['src' => 'b5.png']" :body="[
                    'title' => 'Women Empowerment',
                    'dec' =>
                        'Learn about AICTA contribution towards the socio-economic development of women programmes.',
                ]" />

                <x-card class="tttt" :image="['src' => 'b6.png']" :body="[
                    'title' => 'Facilities for Differently',
                    'dec' =>
                        'Learn about AICTA contribution towards the socio-economic development of women programmes.',
                ]" />

                <x-card class="ttttt" :image="['src' => 'b7.png']" :body="[
                    'title' => 'Research Funds',
                    'dec' =>
                        'Learn about AICTA contribution towards the socio-economic development of women programmes.',
                ]" />


            </div><!--End .row-->
        </div>
        </div>
    </section>
    <!-- ./ End Courses Area section -->

    <!-- Start achievment Area Section -->
    <section class="achievment-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-header-box">
                    <div class="section-header">
                        <h2>OUR ACHIEVEMENT</h2>
                    </div><!-- ends: .section-header -->
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3 counters-item">
                    <div class="section counter-box">
                        <img src="images/index-03/counter-icon-01.png" alt="">
                        <div class="project-count counter">7096</div>
                        <span>active students</span>
                    </div>
                </div>

                <div class="col-sm-3 counters-item">
                    <div class="section counter-box">
                        <img src="images/index-03/counter-icon-02.png" alt="">
                        <div class="project-count counter">90</div>
                        <span>Professional courses</span>
                    </div>
                </div>

                <div class="col-sm-3 counters-item">
                    <div class="section counter-box">
                        <img src="images/index-03/counter-icon-03.png" alt="">
                        <div class="project-count counter">12</div>
                        <span>Year of history</span>
                    </div>
                </div>

                <div class="col-sm-3 counters-item">
                    <div class="section counter-box">
                        <img src="images/index-03/counter-icon-04.png" alt="">
                        <div class="project-count counter">15</div>
                        <span>Achievment</span>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ./ End Information Area section -->






    <!-- Start Student Count Area Section -->
    <section class="bg-danger">
        <div class="container">
            <div>
                <h2 style="color:#FFFFFF; padding-top:20px; text-decoration:underline;">WHY US?</h2>
                <p style="color:#FFFFFF; text-align:center;">6 Reasons to choose AICTA training</p>
            </div>
            <div class="row">

                <div class="col-sm-6" style="padding-top:15px;">
                    <div class="col-sm-2">
                        <img src="images/Why Us/1.png" alt="" class="img-responsive">
                    </div>


                    <div class="col-sm-10">
                        <h3 style="color:#FFFFFF;">International Certifications</h3>
                        <p style="color:#fff">All our courses and training programmes are either offered directly by an
                            International Certification Body or benched-marked to allow you sit for international
                            certifications.</p>
                    </div>
                </div>



                <div class="col-sm-6" style="padding-top:15px;">
                    <div class="col-sm-2">
                        <img src="images/Why Us/2.png" alt="" class="img-responsive">
                    </div>

                    <div class="col-sm-10">
                        <h3 style="color:#FFFFFF;">Highly skilled and qualified trainers</h3>
                        <p style="color:#fff">Our trainers are experienced developers or professionals and certified as
                            trainers Our trainers are experienced developers or professionals and certified as trainers.
                        </p>
                    </div>
                </div>

                <div class="col-sm-6" style="padding-top:15px;">
                    <div class="col-sm-2">
                        <img src="images/Why Us/3.png" alt="" class="img-responsive">
                    </div>

                    <div class="col-sm-10">
                        <h3 style="color:#FFFFFF;">Innovative approach to training in High-Tech </h3>
                        <p style="color:#fff">Setup and state of the art computing resource allow teaching and learning
                            to be as close a possible to a professional work environment.</p>
                    </div>
                </div>


                <div class="col-sm-6" style="padding-top:15px;">
                    <div class="col-sm-2">
                        <img src="images/Why Us/4.png" alt="" class="img-responsive">
                    </div>

                    <div class="col-sm-10">
                        <h3 style="color:#FFFFFF;">Industry focused courses</h3>
                        <p style="color:#fff">Research and industry partners forecast of trends, determine which
                            programmes are rolled out. Our course offerings addresses the needs of the market.</p>
                    </div>
                </div>


                <div class="col-sm-6" style="padding-top:15px;">
                    <div class="col-sm-2">
                        <img src="images/Why Us/5.png" alt="" class="img-responsive">
                    </div>

                    <div class="col-sm-10">
                        <h3 style="color:#FFFFFF;">Practical / hands-on sessions &amp; projects</h3>
                        <p style="color:#fff">The Center focuses on practical way of solving problems through projects
                            whiles transferring knowledge to the participant. Every participant is given assignments
                            that require them to produce solutions.</p>
                    </div>
                </div>


                <div class="col-sm-6" style="padding-top:15px;">
                    <div class="col-sm-2">
                        <img src="images/Why Us/6.png" alt="" class="img-responsive">
                    </div>

                    <div class="col-sm-10">
                        <h3 style="color:#FFFFFF;">Assisted industry attachment</h3>
                        <p style="color:#fff">Participants who complete our professional course offerings are given an
                            opportunity to intern with our partners for a minimum of three months.</p>
                    </div>
                </div>


            </div>
        </div>

    </section>
    <!-- ./ End Information Area section -->

    <br>

    <!--Start Courses Area Section-->
    <section class="teachers-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-header-box">
                    <div class="section-header">
                        <h2>Our Associates & Partners:</h2>
                        <p>The institution also takes pride in being affiliated to respectable government bodies working
                            in the field of training and education.</p>
                    </div><!-- ends: .section-header -->
                </div>
            </div>

            <marquee width="100%">
                <img src="images/index/Accreditation/digital-india.jpg"> <img
                    src="images/index/Accreditation/FICCI_logo.jpg"> <img src="images/index/Accreditation/icm-logo.jpg">
                <img src="images/index/Accreditation/nielit-logo.jpg"> <img src="images/index/Accreditation/pmkvy.jpg">
                <img src="images/index/Accreditation/RASCI.jpg"> <img src="images/index/Accreditation/Skill-India.jpg">
            </marquee>


        </div>
    </section>
    <!-- ./ End Courses Area section -->
@endsection

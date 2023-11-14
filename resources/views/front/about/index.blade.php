@extends('front.layouts.master')
@section('contact')


    <!--====== Page Title start ======-->
    <section class="page-title-area">
        <div class="container">
            <h2 class="title changestyleabout">About Us</h2>
            <ul class="breadcrumb-nav">
                <li><a href="{{route('home.index')}}" class="activecolorstyle">Home</a></li>
                <li class="active activecolorstyle">About</li>
            </ul>
        </div>
    </section>
    <!--====== Page Title End ======-->

    <!--====== Experience Area Start ======-->
    <section class="experience-section section-gap">
        <div class="container">
            <div class="row dirctionsaboutus">
                <div class="col-lg-5 col-md-8 wow fadeInLeft dirctionsaboutus" data-wow-delay="0.3s">
                    <div class="section-title with-right-border mb-md-gap-30">
                        <span class="title-tag abdf">25 Years Of Experience</span>
                        <h2 class="title">Not only explore for job done.</h2>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 wow fadeInRight dirctionsaboutus" data-wow-delay="0.3s">
                    <div class="experience-text">
                        <p class="fs-16 text-color-2">Does any industry face a more complex audience journey and
                            marketing sales process than B2B technology? Consider the number of people who influence a
                            sale, the length of the decision-making cycle, the competing interests of the people who
                            purchase, implement, manage, and use the technology. It’s a lot meaningful content here.</p>
                        <a href="#" class="font-weight-bold mt-10 dflexend">Read More</a>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-50">
                <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-box mt-30 thismarginnone">
                        <img src="{{asset('front/assets/img/feature-1.jpg')}}" alt="">
                        <div class="feature-overlay">
                            <div class="content">
                                <h5 class="title">Design & Development</h5>
                                <p>The functional goal of technical content is to help people use a product.</p>
                                <a href="#">Read More</a>
                                <i class="fal fa-laptop-code"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="feature-box mt-30 thismarginnone">
                        <img src="{{asset('front/assets/img/feature-2.jpg')}}" alt="">
                        <div class="feature-overlay">
                            <div class="content">
                                <h5 class="title">Technical Support</h5>
                                <p>The functional goal of technical content is to help people use a product.</p>
                                <a href="#">Read More</a>
                                <i class="fal fa-headphones-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-box mt-30 thismarginnone">
                        <img src="{{asset('front/assets/img/feature-3.jpg')}}" alt="">
                        <div class="feature-overlay">
                            <div class="content">
                                <h5 class="title">Digital Marketing</h5>
                                <p>The functional goal of technical content is to help people use a product.</p>
                                <a href="#">Read More</a>
                                <i class="fal fa-analytics"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Experience Area End ======-->

    <!--====== Intro Video Start ======-->
    <section class="about-intro-video section-gap soft-blue-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="intro-video-with-shape mb-md-gap-50">
                        <img class="imagestyleabout" src="{{asset('front/assets/img/about-intro-thumb.jpg')}}" alt="Image">
                        <a href="#" class="video-popup"><i class="fas fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 directionslider">
                    <div class="feature-text-block">
                        <div class="section-title with-right-border mb-20">
                            <span class="title-tag">Intro Video</span>
                            <h2 class="title">How we growth our business.</h2>
                        </div>
                        <p class="big-text mb-30"> The introduction of cloud and mobile technologies into enterprise
                            software. </p>
                        <p>
                            hether you are building an enterprise web portal or a state-of-the-art website, you always
                            need the right modern tools. Well-built and maintained PHP frameworks provide those tools in
                            abundance, allowing maintained PHP frameworks provide those tools in abundance, allowing
                            developers to save time, re-use code, and streamline the back end. As software development
                            tools continuously.
                        </p>
                        <a class="main-btn mt-30" href="{{route('home.about')}}">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Intro Video End ======-->

    <!--====== History Area Start ======-->
    <section class="history-section section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center mb-80">
                        <h2 class="title mb-10">Our History</h2>
                        <p class="text-color-2">
                            Does any industry face a more complex audience journey and marketing sales process than B2B
                            technology.
                        </p>
                    </div>
                </div>
            </div>
            <div class="history-timeline history-isotope">
                <div class="history-item wow fadeInUp" data-wow-delay="0.3s">
                    <div class="history-thumb" style="background-image: url({{asset('front/assets/img/history-1.jpg')}});"></div>
                    <div class="history-content">
                        <span class="history-year">1990 - Startup</span>
                        <h4 class="title">Technical content may have per suasive objectives.</h4>
                    </div>
                    <div class="number-box">
                        <span>01</span>
                    </div>
                </div>
                <div class="history-item wow fadeInUp" data-wow-delay="0.3s">
                    <div class="history-thumb" style="background-image: url({{asset('front/assets/img/history-2.jpg')}});"></div>
                    <div class="history-content">
                        <span class="history-year">1990 - Startup</span>
                        <h4 class="title">Technical content may have per suasive objectives.</h4>
                    </div>
                    <div class="number-box">
                        <span>02</span>
                    </div>
                </div>
                <div class="history-item wow fadeInUp" data-wow-delay="0.3s">
                    <div class="history-thumb" style="background-image: url({{asset('front/assets/img/history-3.jpg')}});"></div>
                    <div class="history-content">
                        <span class="history-year">1990 - Startup</span>
                        <h4 class="title">Technical content may have per suasive objectives.</h4>
                    </div>
                    <div class="number-box">
                        <span>03</span>
                    </div>
                </div>
                <div class="history-item wow fadeInUp" data-wow-delay="0.3s">
                    <div class="history-thumb" style="background-image: url({{asset('front/assets/img/history-4.jpg')}});"></div>
                    <div class="history-content">
                        <span class="history-year">1990 - Startup</span>
                        <h4 class="title">Technical content may have per suasive objectives.</h4>
                    </div>
                    <div class="number-box">
                        <span>04</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== History Area End ======-->

    <!--====== FAQ Section Start ======-->
    <div class="page-title-answer">
        <section class="faq-section section-gap">
            <div class="container">
                <div class="row arabicstyle">
                    <div class="col-xl-6 col-lg-7">
                        <div class="section-title with-right-border mb-50">
                            <span class="title-tag abdf">FAQ</span>
                            <h2 class="title">Get Every answer from here.</h2>
                        </div>

                        <div class="accordion-four" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <a class="" href="" data-toggle="collapse" data-target="#collapseOne"
                                       aria-expanded="true" aria-controls="collapseOne">
                                        <span class="textltr">Technical content may have persuasive objectives</span>
                                        <i class="fal fa-magic"></i>
                                    </a>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Today, the term Information Technology (IT) has ballooned to encompass is
                                            real.
                                            Today, the term Information Technology (IT) has ballooned to encompass is
                                            real.Today, the term Information Technology (IT) has ballooned to encompass
                                            is
                                            real. </p>
                                    </div>
                                </div>
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <a class="collapsed" href="" data-toggle="collapse" data-target="#collapseTwo"
                                       aria-expanded="false" aria-controls="collapseTwo">
                                        <span class="textltr">Technical content may have persuasive objectives</span>
                                        <i class="fal fa-magic"></i>
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Today, the term Information Technology (IT) has ballooned to encompass is
                                            real.
                                            Today, the term Information Technology (IT) has ballooned to encompass is
                                            real.Today, the term Information Technology (IT) has ballooned to encompass
                                            is
                                            real. </p>
                                    </div>
                                </div>
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <a class="collapsed" href="" data-toggle="collapse" data-target="#collapseThree"
                                       aria-expanded="false" aria-controls="collapseThree">
                                        <span class="textltr">Technical content may have persuasive objectives</span>
                                        <i class="fal fa-magic"></i>
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Today, the term Information Technology (IT) has ballooned to encompass is
                                            real.
                                            Today, the term Information Technology (IT) has ballooned to encompass is
                                            real.Today, the term Information Technology (IT) has ballooned to encompass
                                            is
                                            real. </p>
                                    </div>
                                </div>
                            </div> <!-- card -->
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <a class="collapsed" href="" data-toggle="collapse" data-target="#collapseFour"
                                       aria-expanded="false" aria-controls="collapseFour">
                                        <span class="textltr">Technical content may have persuasive objectives</span>
                                        <i class="fal fa-magic"></i>
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Today, the term Information Technology (IT) has ballooned to encompass is
                                            real.
                                            Today, the term Information Technology (IT) has ballooned to encompass is
                                            real.Today, the term Information Technology (IT) has ballooned to encompass
                                            is
                                            real. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFive">
                                    <a class="collapsed" href="" data-toggle="collapse" data-target="#collapseFive"
                                       aria-expanded="false" aria-controls="collapseFive">
                                        <span class="textltr">Technical content may have persuasive objectives</span>
                                        <i class="fal fa-magic"></i>
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>Today, the term Information Technology (IT) has ballooned to encompass is
                                            real.
                                            Today, the term Information Technology (IT) has ballooned to encompass is
                                            real.Today, the term Information Technology (IT) has ballooned to encompass
                                            is
                                            real. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!--====== FAQ Section End ======-->

    <!--====== Back to top start ======-->
    <div class="back-to-top">
        <a href="#"> <i class="fas fa-arrow-up"></i> </a>
    </div>
@endsection

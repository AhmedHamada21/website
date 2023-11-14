@extends('front.layouts.master')
@section('contact')

    <!--====== Banner Start ======-->
    <section class="banner-section-three" style="background-image: url({{asset('front/assets/img/banner/banner-03.jpg')}});">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="banner-content text-center">
                        <span class="title-tag wow fadeInDown" data-wow-delay="0.3s">Get Quality Item & Goods</span>
                        <h1 class="title wow fadeInLeft" data-wow-delay="0.5s">SILVER-TRINGLE</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.7s">Make your products with good & professionals</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shapes">
            <img class="shape-one" src="{{asset('front/assets/img/banner/banner-shape-1.png')}}" alt="">
            <img class="shape-two" src="{{asset('front/assets/img/banner/banner-shape-2.png')}}" alt="">
        </div>
        <div class="brand-slider row">
            <div class="col">
                <div class="brand-item">
                    <a href="#"><img class="brandstyle" src="{{asset('front/assets/img/brand/brand-1.png')}}" alt="brand name"></a>
                </div>
            </div>
            <div class="col">
                <div class="brand-item">
                    <a href="#"><img class="brandstyle" src="{{asset('front/assets/img/brand/brand-2.png')}}" alt="brand name"></a>
                </div>
            </div>
            <div class="col">
                <div class="brand-item">
                    <a href="#"><img class="brandstyle" src="{{asset('front/assets/img/brand/brand-3.png')}}" alt="brand name"></a>
                </div>
            </div>
            <div class="col">
                <div class="brand-item">
                    <a href="#"><img class="brandstyle" src="{{asset('front/assets/img/brand/brand-4.png')}}" alt="brand name"></a>
                </div>
            </div>
            <div class="col">
                <div class="brand-item">
                    <a href="#"><img class="brandstyle" src="{{asset('front/assets/img/brand/brand-5.png')}}" alt="brand name"></a>
                </div>
            </div>
            <div class="col">
                <div class="brand-item">
                    <a href="#"><img class="brandstyle" src="{{asset('front/assets/img/brand/brand-1.png')}}" alt="brand name"></a>
                </div>
            </div>
            <div class="col">
                <div class="brand-item">
                    <a href="#"><img class="brandstyle" src="{{asset('front/assets/img/brand/brand-2.png')}}" alt="brand name"></a>
                </div>
            </div>
            <div class="col">
                <div class="brand-item">
                    <a href="#"><img class="brandstyle" src="{{asset('front/assets/img/brand/brand-3.png')}}" alt="brand name"></a>
                </div>
            </div>
            <div class="col">
                <div class="brand-item">
                    <a href="#"><img class="brandstyle" src="{{asset('front/assets/img/brand/brand-4.png')}}" alt="brand name"></a>
                </div>
            </div>
            <div class="col">
                <div class="brand-item">
                    <a href="#"><img class="brandstyle" src="{{asset('front/assets/img/brand/brand-5.png')}}" alt="brand name"></a>
                </div>
            </div>
        </div>
    </section>
    <!--====== Banner End ======-->

    <!--====== Feature Area Start ======-->
    <section class="feature-section section-gap">
        <div class="container">
            <div class="feature-text-block with-absolute-image row">
                <div class="divdirection col-lg-6 col-md-6 directionslider">
                    <div class="section-title-two mb-20">
                        <span class="title-tag">CORE FEATURES</span>
                        <h2 class="title">Get more fun on safe trips.</h2>
                    </div>
                    <p class="big-text mb-30"> Our knowledge of computers will help us </p>
                    <p>
                        Does any industry face a more complex audience journey and marketing sales process than B2B
                        technology? Consider the number of people who influence a sale, the length of the
                        decision-making cycle, the competing interests of the people who purchase, implement,
                        manage, and use the technology. It’s a lot meaningful content here.
                    </p>
                    <ul class="feature-btn mt-30">
                        <li>
                            <a class="main-btn" href="{{route('home.about')}}">Learn More</a>
                        </li>
                        <li>
                            <a class="main-btn main-btn-2" href="{{route('home.about')}}"><i class="fal fa-video"></i> Intro
                                Video</a>
                        </li>
                    </ul>
                </div>
                <div class="absolute-img wow fadeInLeft col-lg-6 col-md-6" data-wow-delay="0.3s"
                     style="background-image: url({{asset('front/assets/img/features-thumb.jpg')}});">
                </div>
            </div>
            <div class="row service-items justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="service-item-seven mt-30">
                        <div class="icon policystyle">
                            <img src="{{asset('front/assets/img/Vehicles/services-1.jpg')}}" alt="Icon">
                        </div>
                        <div class="informationsinimge">
                            <h4 class="title">Policy and Guidelines</h4>
                            <p>These policies outline the rules and responsibilities for employees who drive company
                                vehicles.</p>
                            <a href="{{route('home.show-services')}}" class="service-link">
                                <i class="fal fa-angle-right transformrotates"></i> Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item-seven mt-30">
                        <div class="icon policystyle">
                            <img src="{{asset('front/assets/img/Vehicles/services-2.jpg')}}" alt="Icon">
                        </div>
                        <div class="informationsinimage">
                            <h4 class="title driverstyle">Vehicle Maintenance and Inspections</h4>
                            <p>Regular maintenance and inspections are essential to ensure the safety and reliability of
                                company vehicles.</p>
                            <a href="{{route('home.show-services')}}" class="service-link">
                                <i class="fal fa-angle-right transformrotates"></i> Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-10 wow fadeInRight" data-wow-delay="0.7s">
                    <div class="features-sub mt-30">
                        <div class="textalighnrights">
                            <h5 class="title">Submit complaint Now</h5>
                            <p>Silver-Triangle say to you apologize for any bad experience you have on the travel site.
                            </p>
                        </div>
                        <form action="#">
                            <div class="input-box">
                                <input type="text" autofocus placeholder="Enter your email...." />
                                <button>Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Feature Area End ======-->

    <!--====== Why Choose Us Start ======-->
    <section class="whu-section section-gap soft-blue-bg dirctionsaboutus">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div class="col-lg-6 col-md-10 order-lg-2">
                    <div class="tile-gallery-two mb-md-gap-50">
                        <div class="img-one wow fadeInRight" data-wow-delay="0.3s">
                            <img class="stylecarssafes" src="{{asset('front/assets/img/tile-gallery/choose-thumb-1.jpg')}}" alt="Image">
                        </div>
                        <div class="img-two text-right wow fadeInUp" data-wow-delay="0.5s">
                            <img class="stylecarssafe" src="{{asset('front/assets/img/tile-gallery/choose-thumb-2.jpg')}}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 order-lg-1 textalighnrights">
                    <div class="section-title mb-50 wow fadeInUp bottomspciale" data-wow-delay="0.3s">
                        <span class="title-tag">Ensuring the safety of passengers in the car</span>
                        <h2 class="title fontspciale">is of utmost importance</h2>
                    </div>
                    <ul class="feature-list">
                        <li class="wow fadeInUp marginspcieal" data-wow-delay="0.5s">
                            <h4>Travel insurance</h4>
                            <p>
                                When planning company trips or outings, it's essential to consider and address safety
                                conditions for the travelers.
                            </p>
                        </li>
                        <li class="wow fadeInUp marginspcieal" data-wow-delay="0.6s">
                            <h4>Emergency contacts</h4>
                            <p>
                                including local emergency services, the company's emergency contact, and any relevant
                                local contacts at the destination..
                            </p>
                        </li>
                        <li class="wow fadeInUp marginspcieal" data-wow-delay="0.7s">
                            <h4>Personal belongings and valuables</h4>
                            <p>
                                Educate travelers on safety precautions for their personal belongings and valuables.
                                Encourage them to keep important documents secur.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="feature-intro-video mt-100">
                <img src="{{asset('front/assets/img/intro-video-img.jpg')}}" class="simpelvedio" alt="Images">
                <a href="#" class="video-popup"><i class="fal fa-play"></i></a>
            </div>
        </div>
    </section>
    <!--====== Why Choose Us End ======-->

    <!--====== Portfolio Section Start ======-->
    <section class="portfolio-area section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8 col-sm-10">
                    <div class="section-title-two text-center mb-50">
                        <span class="title-tag">driving portfolio</span>
                        <h2 class="title drivingstyle">here are some of our important journeys</h2>
                    </div>
                </div>
            </div>

            <div class="portfolio-items justify-content-center row">
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="portfolio-item-two mt-30">
                        <div class="portfolio-img" style="background-image: url({{asset('front/assets/img/portfolio/08.jpg')}});"> </div>
                        <div class="portfolio-content textalighnrights">
                            <span class="category">References and Recommendations </span>
                            <h5 class="title"><a href="#">Consider including references from previous employers or
                                    clients</a></h5>
                            <p>
                                Positive feedback from trusted sources can add credibility to your leadership group.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="portfolio-item-two mt-30">
                        <div class="portfolio-img" style="background-image: url({{asset('front/assets/img/portfolio/09.jpg')}});"> </div>
                        <div class="portfolio-content textalighnrights">
                            <span class="category">Guided Tours and Excursions</span>
                            <h5 class="title"><a href="#">Assisting travelers with visa applications</a></h5>
                            <p>
                                Tourism services may provide knowledgeable guides, transportation, and arrangements for
                                entry tickets or permits.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="portfolio-item-two mt-30">
                        <div class="portfolio-img" style="background-image: url({{asset('front/assets/img/portfolio/10.jpg')}});"> </div>
                        <div class="portfolio-content textalighnrights">
                            <span class="category">Guided Tours and Excursions </span>
                            <h5 class="title"><a href="#">Providing comprehensive information about the destination </a>
                            </h5>
                            <p>
                                Tourism services may provide knowledgeable guides, transportation, and arrangements for
                                entry tickets or permits.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="portfolio-item-two mt-30">
                        <div class="portfolio-img" style="background-image: url({{asset('front/assets/img/portfolio/11.jpg')}});"> </div>
                        <div class="portfolio-content textalighnrights">
                            <span class="category">Customer Service </span>
                            <h5 class="title"><a href="#"> If you have experience with specific roads or geographic
                                    areas</a></h5>
                            <p>
                                This can be useful for roles such as delivery drivers or truck drivers who need
                                knowledge of routes and efficient navigation systems
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="portfolio-item-two mt-30">
                        <div class="portfolio-img" style="background-image: url({{asset('front/assets/img/portfolio/12.jpg')}});"> </div>
                        <div class="portfolio-content textalighnrights">
                            <span class="category">Customer Service </span>
                            <h5 class="title"><a href="#">highlight your customer service skills</a></h5>
                            <p>
                                This is especially important if you have worked as a driver, taxi driver, or in any role
                                that involves direct interaction with customers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="portfolio-item-two mt-30">
                        <div class="portfolio-img" style="background-image: url({{asset('front/assets/img/portfolio/13.jpg')}});"> </div>
                        <div class="portfolio-content styleheronly textalighnrights">
                            <span class="category">Safety Awareness </span>
                            <h5 class="title"><a href="#">Aspects of computing and technology </a></h5>
                            <p>
                                Employers look for drivers who prioritize safety and follow best practices for defensive
                                driving, preventing accidents, and complying with safety regulations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Portfolio Section Ends ======-->

    <!--====== Counter Part Start ======-->
    <section class="counter-section-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box-five counter-active mb-50">
                        <div class="icon"><i class="fal fa-box styleicons"></i></div>
                        <div class="content">
                            <span class="counter styletitelsspans">869</span>
                            <h6 class="title styletitelsspans">Project We Have Done </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box-five counter-active mb-50">
                        <div class="icon"><i class="fal fa-users styleicons"></i></div>
                        <div class="content">
                            <span class="counter styletitelsspans">100</span>
                            <h6 class="title styletitelsspans">People Involved With Us</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box-five counter-active mb-50">
                        <div class="icon"><i class="fal fa-globe styleicons"></i></div>
                        <div class="content">
                            <span class="counter styletitelsspans">50</span>
                            <h6 class="title styletitelsspans">We Are Worldwide</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="counter-box-five counter-active mb-50">
                        <div class="icon"><i class="fal fa-award styleicons"></i></div>
                        <div class="content">
                            <span class="counter styletitelsspans">20</span>
                            <h6 class="title styletitelsspans">We Got Too Much Awards</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Counter Part End ======-->

    <!--====== Faq Section Start ======-->
    <section class="faq-section section-gap">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10 wow fadeInLeft" data-wow-delay="0.3s">
                    <div class="tile-gallery-three mb-md-gap-50">
                        <div class="img-one">
                            <img src="{{asset('front/assets/img/tile-gallery/tile-gallery-05.jpg')}}" alt="Image">
                        </div>
                        <div class="img-two text-right imgmovent">
                            <img src="{{asset('front/assets/img/tile-gallery/tile-gallery.jpg')}}" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 wow fadeInRight textalighnrights " data-wow-delay="0.3s">
                    <div class="section-title-two mb-50">
                        <span class="title-tag">FAQ</span>
                        <h2 class="title">Get Every Single Answers Here.</h2>
                    </div>
                    <div class="accordion-three" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <a class="" href="" data-toggle="collapse" data-target="#collapseOne"
                                   aria-expanded="true" aria-controls="collapseOne">
                                    Today, the term Information Technology
                                </a>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Today, the term Information Technology (IT) has ballooned to encompass is real.
                                        Today, the term Information Technology (IT) has ballooned to encompass is
                                        real.Today, the term Information Technology (IT) has ballooned to encompass is
                                        real. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <a class="collapsed" href="" data-toggle="collapse" data-target="#collapseTwo"
                                   aria-expanded="false" aria-controls="collapseTwo">
                                    Over the years, a wide range of developments
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Today, the term Information Technology (IT) has ballooned to encompass is real.
                                        Today, the term Information Technology (IT) has ballooned to encompass is
                                        real.Today, the term Information Technology (IT) has ballooned to encompass is
                                        real. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <a class="collapsed" href="" data-toggle="collapse" data-target="#collapseThree"
                                   aria-expanded="false" aria-controls="collapseThree">
                                    As a result, most of us need to know
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Today, the term Information Technology (IT) has ballooned to encompass is real.
                                        Today, the term Information Technology (IT) has ballooned to encompass is
                                        real.Today, the term Information Technology (IT) has ballooned to encompass is
                                        real. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <a class="collapsed" href="" data-toggle="collapse" data-target="#collapseFour"
                                   aria-expanded="false" aria-controls="collapseFour">
                                    Our knowledge of computers will help us
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                 data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>Today, the term Information Technology (IT) has ballooned to encompass is real.
                                        Today, the term Information Technology (IT) has ballooned to encompass is
                                        real.Today, the term Information Technology (IT) has ballooned to encompass is
                                        real. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Faq Section End ======-->

    <!--====== Contact section start ======-->
    <section class="conatct-section-three soft-blue-bg section-gap">
        <div class="container">
            <div class="row align-items-center justify-content-center dirctionsaboutus">
                <div class="col-lg-6 col-md-10 direction">
                    <div class="section-title-two text-left mb-45 textalighnrights directionslider">
                        <span>Get In Touch</span>
                        <h2 class="title">Estimate For Your Projects.</h2>
                    </div>
                    <div class="form-area">
                        <form action="#">
                            <div class="input-box">
                                <input class="dirctionswordsinputs" type="text" placeholder="Enter your name">
                            </div>
                            <div class="input-box mt-20">
                                <input class="dirctionswordsinputs" type="email" placeholder="Enter your email">
                            </div>
                            <div class="input-box mt-20">
                                <textarea class="dirctionswordsinputs" placeholder="Enter your message"></textarea>
                            </div>
                            <div class="input-box mt-20 displayflexbutt">
                                <button class="main-btn" type="submit">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="contact-map-two mt-md-gap-50">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993207.564767118!2d-77.9807899414373!3d42.92219345357043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1569310771254!5m2!1sen!2sbd"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Contact section End ======-->

    <!--====== Back to top start ======-->
    <div class="back-to-top">
        <a href="#"> <i class="fas fa-arrow-up"></i> </a>
    </div>
    <!--====== Back to top start ======-->
@endsection

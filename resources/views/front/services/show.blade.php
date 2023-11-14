@extends('front.layouts.master')
@section('contact')

    <!--====== Page Title start Services ======-->
    <section class="page-services-area">
        <div class="container">
            <h2 class="title changestyleabout">Services Details</h2>
            <ul class="breadcrumb-nav">
                <li><a href="{{route('home.index')}}" class="activecolorstyle">Home</a></li>
                <li class="active activecolorstyle">Services Details</li>
            </ul>
        </div>
    </section>
    <!--====== Page Title End ======-->

    <!--====== Service Section Start ======-->
    <section class="service-details-section section-gap">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10 wwww">
                    <div class="services-details-imgs mb-md-gap-50">
                        <div class="img-one">
                            <img src="{{asset('front/assets/img/service-img/services-op-1.jpg')}}" alt="img">
                        </div>
                        <div class="img-two text-right">
                            <img src="{{asset('front/assets/img/service-img/services-op-2.jpg')}}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 positionheight">
                    <div class="service-details-text-block">
                        <div class="section-title arabicwiththis with-right-border mb-40">
                            <span class="title-tag">Search Enging Optimization</span>
                            <h2 class="title">Nothing to do anything.</h2>
                        </div>
                        <p class="text-color-2">
                            Does any industry face a more complex audience journey and marketing sales process than B2B
                            technology? Consider the number of people who influence a sale, the length of the
                            decision-making cycle, the competing interests of the people who purchase, implement,
                            manage, and use the technology. It’s a lot meaningful content here.
                        </p>
                        <div class="service-support-btn">
                            <div class="scouerthis">
                                <div class="iconphone">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="makecall">
                                    <p>Make A Call</p>
                                    <p>201111579400</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Service Section End ======-->

    <!--====== Intro vide Start ======-->
    <section class="intro-video-area dirctionsaboutus" style="background-image: url({{asset('front/assets/img/intro-video-bg.jpg.jpg')}});">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10 arabicstyle">
                    <div class="intro-video-content mb-md-gap-50">
                        <span>Intro Video</span>
                        <h2 class="title">How we growth our business.</h2>
                        <p class="text-1">The introduction of cloud and mobile technologies into enterprise software.
                        </p>
                        <p class="text-2">hether you are building an enterprise web portal or a state-of-the-art
                            website, you always need the right modern tools. Well-built and maintained PHP frameworks
                            provide those tools in abundance, allowing maintained PHP frameworks provide those tools in
                            abundance, allowing developers to save time, re-use code, and streamline the back end. As
                            software development tools continuously.</p>

                        <a class="main-btn wow fadeInLeft" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="intro-thumb">
                        <img src="{{asset('front/assets/img/intro-thumb (2).jpg')}}" alt="">
                        <a class="video-popup" href="https://www.youtube.com/watch?v=t8mvutAh4AE"><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Intro vide End ======-->

    <!--====== Pricing Section Start ======-->
    <section class="pricing-section section-gap soft-blue-bg dirctionsaboutus">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="section-title with-right-border mb-50">
                        <span class="title-tag abdf">plans</span>
                        <h2 class="title">Here is plans</h2>
                    </div>
                </div>
                <div class="col-auto">
                    <ul class="nav nav-pills pricing-tab-btn" id="pricingOneTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#monthly-item" role="tab">Monthly</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#yearly-item">Yearly</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tab-content" id="pricingOneTabContent">
                <div class="tab-pane fade show active" id="monthly-item" role="tabpanel">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6 col-sm-8 mt-30">
                            <div class="pricing-plan-item"
                                 style="background-image: url({{asset('front/assets/img/portfolio/case-07.jpg')}});">
                                <p class="plan-name">Early Birds</p>
                                <h3 class="price">$ <span>9</span></h3>
                                <span class="plan-duration">Per Month</span>
                                <p>The functional goal of technical content is to help people use a product
                                    successfully.</p>
                                <a class="plans-btn" href="{{route('home.checkout')}}">Purchase Now</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8 mt-30">
                            <div class="pricing-plan-item"
                                 style="background-image: url({{asset('front/assets/img/portfolio/case-07.jpg')}});">
                                <p class="plan-name">Team</p>
                                <h3 class="price">$ <span>32</span></h3>
                                <span class="plan-duration">Per Month</span>
                                <p>The functional goal of technical content is to help people use a product
                                    successfully.</p>
                                <a class="plans-btn" href="{{route('home.checkout')}}">Purchase Now</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8 mt-30">
                            <div class="pricing-plan-item"
                                 style="background-image: url({{asset('front/assets/img/portfolio/case-07.jpg')}});">
                                <p class="plan-name">Personal</p>
                                <h3 class="price">$ <span>69</span></h3>
                                <span class="plan-duration">Per Month</span>
                                <p>The functional goal of technical content is to help people use a product
                                    successfully.</p>
                                <a class="plans-btn" href="{{route('home.checkout')}}">Purchase Now</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8 mt-30">
                            <div class="pricing-plan-item"
                                 style="background-image: url({{asset('front/assets/img/portfolio/case-07.jpg')}});">
                                <p class="plan-name">Plutinum</p>
                                <h3 class="price">$ <span>99</span></h3>
                                <span class="plan-duration">Per Month</span>
                                <p>The functional goal of technical content is to help people use a product
                                    successfully.</p>
                                <a class="plans-btn" href="{{route('home.checkout')}}">Purchase Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="yearly-item" role="tabpanel">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6 col-sm-8 mt-30">
                            <div class="pricing-plan-item"
                                 style="background-image: url({{asset('front/assets/img/portfolio/case-07.jpg')}});">
                                <p class="plan-name">Early Birds</p>
                                <h3 class="price">$ <span>56</span></h3>
                                <span class="plan-duration">Per Year</span>
                                <p>The functional goal of technical content is to help people use a product
                                    successfully.</p>
                                <a class="plans-btn" href="{{route('home.checkout')}}">Purchase Now</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8 mt-30">
                            <div class="pricing-plan-item"
                                 style="background-image: url({{asset('front/assets/img/portfolio/case-07.jpg')}});">
                                <p class="plan-name">Team</p>
                                <h3 class="price">$ <span>99</span></h3>
                                <span class="plan-duration">Per Year</span>
                                <p>The functional goal of technical content is to help people use a product
                                    successfully.</p>
                                <a class="plans-btn" href="{{route('home.checkout')}}">Purchase Now</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8 mt-30">
                            <div class="pricing-plan-item"
                                 style="background-image: url({{asset('front/assets/img/portfolio/case-07.jpg')}});">
                                <p class="plan-name">Personal</p>
                                <h3 class="price">$ <span>133</span></h3>
                                <span class="plan-duration">Per Year</span>
                                <p>The functional goal of technical content is to help people use a product
                                    successfully.</p>
                                <a class="plans-btn" href="{{route('home.checkout')}}">Purchase Now</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8 mt-30">
                            <div class="pricing-plan-item"
                                 style="background-image: url({{asset('front/assets/img/portfolio/case-07.jpg')}});">
                                <p class="plan-name">Plutinum</p>
                                <h3 class="price">$ <span>599</span></h3>
                                <span class="plan-duration">Per Year</span>
                                <p>The functional goal of technical content is to help people use a product
                                    successfully.</p>
                                <a class="plans-btn" href="{{route('home.checkout')}}">Purchase Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Pricing Section End ======-->

    <!--====== Latest News Start ======-->
    <section class="latest-news section-gap secondary-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-7">
                    <div class="section-title white-color text-center mb-40">
                        <h2 class="title mb-10">News Feeds</h2>
                        <p class="text-color-2">
                            Does any industry face a more complex audience journey and marketing sales process than B2B
                            technology.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8 arabicstyle">
                    <div class="latest-news-box-three mt-30">
                        <img src="{{asset('front/assets/img/latest-news/04.jpg')}}" alt="Image">
                        <div class="post-content">
                            <span class="cat">Design/SEO</span>
                            <h5 class="title directionslider">
                                <a href="{{route('home.blog-show')}}">A series of iOS 7 inspired vector icons.</a>
                            </h5>
                        </div>
                        <a href="{{route('home.blog-show')}}" class="news-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 arabicstyle">
                    <div class="latest-news-box-three mt-30">
                        <img src="{{asset('front/assets/img/latest-news/05.jpg')}}" alt="Image">
                        <div class="post-content">
                            <span class="cat">Design/SEO</span>
                            <h5 class="title directionslider">
                                <a href="{{route('home.blog-show')}}">A series of iOS 7 inspired vector icons.</a>
                            </h5>
                        </div>
                        <a href="{{route('home.blog-show')}}" class="news-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 arabicstyle">
                    <div class="latest-news-box-three mt-30">
                        <img src="{{asset('front/assets/img/latest-news/06.jpg')}}" alt="Image">
                        <div class="post-content">
                            <span class="cat">Design/SEO</span>
                            <h5 class="title directionslider">
                                <a href="{{route('home.blog-show')}}">A series of iOS 7 inspired vector icons.</a>
                            </h5>
                        </div>
                        <a href="{{route('home.blog-show')}}" class="news-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Latest News End ======-->

    <!--====== Back to top start ======-->
    <div class="back-to-top">
        <a href="#"> <i class="fas fa-arrow-up"></i> </a>
    </div>
    <!--====== Back to top start ======-->

@endsection

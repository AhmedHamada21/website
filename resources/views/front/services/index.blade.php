@extends('front.layouts.master')
@section('contact')

    <!--====== Page Title start ======-->
    <section class="page-services-area">
        <div class="container">
            <h2 class="title changestyleabout">Services</h2>
            <ul class="breadcrumb-nav">
                <li><a href="{{route('home.index')}}" class="activecolorstyle">Home</a></li>
                <li class="active activecolorstyle">Services</li>
            </ul>
        </div>
    </section>
    <!--====== Page Title End ======-->

    <!--====== Service Section Start ======-->
    <section class="service-section-two section-gap-top pb-90">
        <div class="container">
            <div class="row service-items justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="service-item-eight mb-30">
                        <div class="service-img">
                            <img src="{{asset('front/assets/img/service-img/07.jpg')}}" alt="Image">
                        </div>
                        <div class="services-overlay">
                            <div class="icon"><i class="fal fa-eye-dropper"></i></div>
                            <h4 class="title dirctionsaboutus"><a href="#">UI/UX Design.</a></h4>
                            <p class="dirctionsaboutus">The functional goal of technical content is to help people use a product successfully.
                                The business goal must tie the content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="service-item-eight mb-30">
                        <div class="service-img">
                            <img src="{{asset('front/assets/img/service-img/08.jpg')}}" alt="Image">
                        </div>
                        <div class="services-overlay">
                            <div class="icon"><i class="fal fa-gavel"></i></div>
                            <h4 class="title dirctionsaboutus"><a href="#">IT Consultancy.</a></h4>
                            <p class="dirctionsaboutus">The functional goal of technical content is to help people use a product successfully.
                                The business goal must tie the content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="service-item-eight mb-30">
                        <div class="service-img">
                            <img src="{{asset('front/assets/img/service-img/09.jpg')}}" alt="Image">
                        </div>
                        <div class="services-overlay">
                            <div class="icon"><i class="fal fa-map-marked-alt"></i></div>
                            <h4 class="title dirctionsaboutus"><a href="#">Technology Prof.</a></h4>
                            <p class="dirctionsaboutus">The functional goal of technical content is to help people use a product successfully.
                                The business goal must tie the content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="service-item-eight mb-30">
                        <div class="service-img">
                            <img src="{{asset('front/assets/img/service-img/10.jpg')}}" alt="Image">
                        </div>
                        <div class="services-overlay">
                            <div class="icon"><i class="fal fa-hurricane"></i></div>
                            <h4 class="title dirctionsaboutus"><a href="#">Web Development.</a></h4>
                            <p class="dirctionsaboutus">The functional goal of technical content is to help people use a product successfully.
                                The business goal must tie the content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="service-item-eight mb-30">
                        <div class="service-img">
                            <img src="{{asset('front/assets/img/service-img/11.jpg')}}" alt="Image">
                        </div>
                        <div class="services-overlay">
                            <div class="icon"><i class="fal fa-bezier-curve"></i></div>
                            <h4 class="title dirctionsaboutus"><a href="#">Web Development.</a></h4>
                            <p class="dirctionsaboutus">The functional goal of technical content is to help people use a product successfully.
                                The business goal must tie the content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="service-item-eight mb-30">
                        <div class="service-img">
                            <img src="{{asset('front/assets/img/service-img/12.jpg')}}" alt="Image">
                        </div>
                        <div class="services-overlay">
                            <div class="icon"><i class="fal fa-umbrella"></i></div>
                            <h4 class="title dirctionsaboutus"><a href="#">Game Design.</a></h4>
                            <p class="dirctionsaboutus">The functional goal of technical content is to help people use a product successfully.
                                The business goal must tie the content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Service Section End ======-->

    <!--====== Pricing Section Start ======-->
    <section class="pricing-section section-gap soft-blue-bg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="section-title with-right-border mb-50">
                        <span class="title-tag">plans</span>
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
                            <div class="pricing-plan-item" style="background-image: url({{asset('front/assets/img/portfolio/case-07.jpg')}});">
                                <p class="plan-name">Early Birds</p>
                                <h3 class="price">$ <span>9</span></h3>
                                <span class="plan-duration">Per Month</span>
                                <p>The functional goal of technical content is to help people use a product
                                    successfully.</p>
                                <a class="plans-btn" href="#">Purchase Now</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8 mt-30">
                            <div class="pricing-plan-item" style="background-image: url({{asset('front/assets/img/portfolio/case-07.jpg')}});">
                                <p class="plan-name">Team</p>
                                <h3 class="price">$ <span>32</span></h3>
                                <span class="plan-duration">Per Month</span>
                                <p>The functional goal of technical content is to help people use a product
                                    successfully.</p>
                                <a class="plans-btn" href="#">Purchase Now</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8 mt-30">
                            <div class="pricing-plan-item" style="background-image: url({{asset('front/assets/img/portfolio/case-07.jpg')}});">
                                <p class="plan-name">Personal</p>
                                <h3 class="price">$ <span>69</span></h3>
                                <span class="plan-duration">Per Month</span>
                                <p>The functional goal of technical content is to help people use a product
                                    successfully.</p>
                                <a class="plans-btn" href="#">Purchase Now</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8 mt-30">
                            <div class="pricing-plan-item" style="background-image: url({{asset('front/assets/img/portfolio/case-07.jpg')}});">
                                <p class="plan-name">Plutinum</p>
                                <h3 class="price">$ <span>99</span></h3>
                                <span class="plan-duration">Per Month</span>
                                <p>The functional goal of technical content is to help people use a product
                                    successfully.</p>
                                <a class="plans-btn" href="#">Purchase Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="yearly-item" role="tabpanel">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6 col-sm-8 mt-30">
                            <div class="pricing-plan-item" style="background-image: url({{asset('front/assets/img/portfolio/case-07.jpg')}});">
                                <p class="plan-name">Early Birds</p>
                                <h3 class="price">$ <span>56</span></h3>
                                <span class="plan-duration">Per Year</span>
                                <p>The functional goal of technical content is to help people use a product
                                    successfully.</p>
                                <a class="plans-btn" href="#">Purchase Now</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8 mt-30">
                            <div class="pricing-plan-item" style="background-image: url({{asset('front/assets/img/portfolio/case-07.jpg')}});">
                                <p class="plan-name">Team</p>
                                <h3 class="price">$ <span>99</span></h3>
                                <span class="plan-duration">Per Year</span>
                                <p>The functional goal of technical content is to help people use a product
                                    successfully.</p>
                                <a class="plans-btn" href="#">Purchase Now</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8 mt-30">
                            <div class="pricing-plan-item" style="background-image: url({{asset('front/assets/img/portfolio/case-07.jpg')}});">
                                <p class="plan-name">Personal</p>
                                <h3 class="price">$ <span>133</span></h3>
                                <span class="plan-duration">Per Year</span>
                                <p>The functional goal of technical content is to help people use a product
                                    successfully.</p>
                                <a class="plans-btn" href="#">Purchase Now</a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-8 mt-30">
                            <div class="pricing-plan-item" style="background-image: url({{asset('front/assets/img/portfolio/case-07.jpg')}});">
                                <p class="plan-name">Plutinum</p>
                                <h3 class="price">$ <span>599</span></h3>
                                <span class="plan-duration">Per Year</span>
                                <p>The functional goal of technical content is to help people use a product
                                    successfully.</p>
                                <a class="plans-btn" href="#">Purchase Now</a>
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
                        <p class="text-color-2 dirctionsaboutus">
                            Does any industry face a more complex audience journey and marketing sales process than B2B
                            technology.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="latest-news-box-three mt-30">
                        <img src="{{asset('front/assets/img/latest-news/04.jpg')}}" alt="Image">
                        <div class="post-content">
                            <span class="cat">Design/SEO</span>
                            <h5 class="title dirctionsaboutus">
                                <a href="{{route('home.blog-show')}}">A series of iOS 7 inspired vector icons.</a>
                            </h5>
                        </div>
                        <a href="{{route('home.blog-show')}}" class="news-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="latest-news-box-three mt-30">
                        <img src="{{asset('front/assets/img/latest-news/05.jpg')}}" alt="Image">
                        <div class="post-content">
                            <span class="cat">Design/SEO</span>
                            <h5 class="title dirctionsaboutus">
                                <a href="{{route('home.blog-show')}}">A series of iOS 7 inspired vector icons.</a>
                            </h5>
                        </div>
                        <a href="{{route('home.blog-show')}}" class="news-link"><i class="fal fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="latest-news-box-three mt-30">
                        <img src="{{asset('front/assets/img/latest-news/06.jpg')}}" alt="Image">
                        <div class="post-content">
                            <span class="cat">Design/SEO</span>
                            <h5 class="title dirctionsaboutus">
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

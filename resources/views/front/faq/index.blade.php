@extends('front.layouts.master')
@section('contact')

    <!--====== Page Title start ======-->
    <section class="page-FAQ-area">
        <div class="container">
            <h2 class="title changestyleabout">FAQ</h2>
            <ul class="breadcrumb-nav">
                <li><a href="{{route('home.index')}}" class="activecolorstyle">Home</a></li>
                <li class="active activecolorstyle">Faq</li>
            </ul>
        </div>
    </section>
    <!--====== Page Title End ======-->

    <!--====== Faq Section Start ======-->
    <section class="faq-section section-gap ">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="accordion-three accordion-three-two" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne"> <a class="" href="" data-toggle="collapse"
                                                                         data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <p class="textalignltr">Technical content may have persuasive objectives</p>
                                </a> </div>
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
                            <div class="card-header" id="headingTwo"> <a class="collapsed" href=""
                                                                         data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                                         aria-controls="collapseTwo">
                                    <p class="textalignltr">Technical content may have persuasive objectives</p>
                                </a> </div>
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
                            <div class="card-header" id="headingThree"> <a class="collapsed" href=""
                                                                           data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                                                           aria-controls="collapseThree">
                                    <p class="textalignltr">Technical content may have persuasive objectives</p>
                                </a> </div>
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
                            <div class="card-header" id="headingFour"> <a class="collapsed" href=""
                                                                          data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                                                          aria-controls="collapseFour">
                                    <p class="textalignltr">Technical content may have persuasive objectives</p>
                                </a> </div>
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
                        <div class="card">
                            <div class="card-header" id="headingFive"> <a class="collapsed" href=""
                                                                          data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                                                          aria-controls="collapseFive">
                                    <p class="textalignltr">Technical content may have persuasive objectives</p>
                                </a> </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
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
                            <div class="card-header" id="headingSix"> <a class="collapsed" href=""
                                                                         data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                                                                         aria-controls="collapseSix">
                                    <p class="textalignltr">Technical content may have persuasive objectives</p>
                                </a> </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
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
                <div class="col-lg-6 col-md-10">
                    <div class="tile-gallery-three mt-md-gap-50">
                        <div class="img-one"> <img src="{{asset('front/assets/img/tile-gallery/tile-gallery-05.jpg')}}" alt="Image"> </div>
                        <div class="img-two text-right"> <img src="{{asset('front/assets/img/tile-gallery/tile-gallery-06.jpg')}}"
                                                              alt="Image"> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Faq Section End ======-->

    <!--====== Faq Section Start ======-->
    <section class="faq-section-two soft-blue-bg section-gap dirctionsaboutus">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="intro-video-with-shape mb-md-gap-60"> <img src="{{asset('front/assets/img/about-intro-thumb.jpg')}}"
                                                                           alt="Image"> <a href="#" class="video-popup"><i class="fas fa-play"></i></a> </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="accordion-four dirctionsaboutus" id="accordionExampleTwo">
                        <div class="card">
                            <div class="card-header" id="headingOne-2">
                                <a class="" href="" data-toggle="collapse" data-target="#collapseOne-2"
                                   aria-expanded="true" aria-controls="collapseOne-2">
                                    <span class="textltr">Technical content may have persuasive objectives</span>
                                    <i class="fal fa-magic"></i>
                                </a>
                            </div>
                            <div id="collapseOne-2" class="collapse show" aria-labelledby="headingOne-2"
                                 data-parent="#accordionExampleTwo">
                                <div class="card-body">
                                    <p>Today, the term Information Technology (IT) has ballooned to encompass is real.
                                        Today, the term Information Technology (IT) has ballooned to encompass is
                                        real.Today, the term Information Technology (IT) has ballooned to encompass is
                                        real. </p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <div class="card-header" id="headingTwo-2">
                                <a class="collapsed" href="" data-toggle="collapse" data-target="#collapseTwo-2"
                                   aria-expanded="false" aria-controls="collapseTwo-2">
                                    <span class="textltr">Technical content may have persuasive objectives</span>
                                    <i class="fal fa-magic"></i>
                                </a>
                            </div>
                            <div id="collapseTwo-2" class="collapse" aria-labelledby="headingTwo-2"
                                 data-parent="#accordionExampleTwo">
                                <div class="card-body">
                                    <p>Today, the term Information Technology (IT) has ballooned to encompass is real.
                                        Today, the term Information Technology (IT) has ballooned to encompass is
                                        real.Today, the term Information Technology (IT) has ballooned to encompass is
                                        real. </p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <div class="card-header" id="headingThree-2">
                                <a class="collapsed" href="" data-toggle="collapse" data-target="#collapseThree-2"
                                   aria-expanded="false" aria-controls="collapseThree-2">
                                    <span class="textltr">Technical content may have persuasive objectives</span>
                                    <i class="fal fa-magic"></i>
                                </a>
                            </div>
                            <div id="collapseThree-2" class="collapse" aria-labelledby="headingThree-2"
                                 data-parent="#accordionExampleTwo">
                                <div class="card-body">
                                    <p>Today, the term Information Technology (IT) has ballooned to encompass is real.
                                        Today, the term Information Technology (IT) has ballooned to encompass is
                                        real.Today, the term Information Technology (IT) has ballooned to encompass is
                                        real. </p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <div class="card-header" id="headingFour-2">
                                <a class="collapsed" href="" data-toggle="collapse" data-target="#collapseFour-2"
                                   aria-expanded="false" aria-controls="collapseFour-2">
                                    <span class="textltr">Technical content may have persuasive objectives</span>
                                    <i class="fal fa-magic"></i>
                                </a>
                            </div>
                            <div id="collapseFour-2" class="collapse" aria-labelledby="headingFour-2"
                                 data-parent="#accordionExampleTwo">
                                <div class="card-body">
                                    <p>Today, the term Information Technology (IT) has ballooned to encompass is real.
                                        Today, the term Information Technology (IT) has ballooned to encompass is
                                        real.Today, the term Information Technology (IT) has ballooned to encompass is
                                        real. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive-2">
                                <a class="collapsed" href="" data-toggle="collapse" data-target="#collapseFive-2"
                                   aria-expanded="false" aria-controls="collapseFive-2">
                                    <span class="textltr">Technical content may have persuasive objectives</span>
                                    <i class="fal fa-magic"></i>
                                </a>
                            </div>
                            <div id="collapseFive-2" class="collapse" aria-labelledby="headingFive-2"
                                 data-parent="#accordionExampleTwo">
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

    <!--====== Contact Section Start ======-->
    <section class="conatct-section-two section-gap" style="background-image: url({{asset('front/assets/img/contact-bg-2.jpg')}});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="section-title white-color text-center mb-40">
                        <h2 class="title mb-10">Get A Free Quote</h2>
                        <p class="text-color-2 dirctionsaboutus"> Does any industry face a more complex audience journey
                            and marketing
                            sales process than B2B technology. </p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="contact-form">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group mt-30">
                                        <input type="text" placeholder="Full Name Here" autofocus> <span class="icon"><i
                                                class="fal fa-user"></i></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group mt-30">
                                        <input type="email" placeholder="Email Here"> <span class="icon"><i
                                                class="fal fa-envelope-open"></i></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group textarea-group mt-30">
                                        <textarea placeholder="Message Us"></textarea> <span class="icon"><i
                                                class="fal fa-pencil"></i></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-group textarea-group mt-30">
                                        <button class="main-btn small-size ml-auto mr-auto">Get A Free Quote</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Contact Section End ======-->

    <!--====== Service Section Start ======-->
    <section class="service-section-two section-gap-top pb-90">
        <div class="container">
            <div class="row service-items justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="service-item-eight mb-30">
                        <div class="service-img"> <img src="{{asset('front/assets/img/service-img/07.jpg')}}" alt="Image"> </div>
                        <div class="services-overlay">
                            <div class="icon"><i class="fal fa-eye-dropper"></i></div>
                            <h4 class="title dirctionsaboutus" ><a href="#">UI/UX Design.</a></h4>
                            <p >The functional goal of technical content is to help people use a
                                product successfully.
                                The business goal must tie the content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="service-item-eight mb-30">
                        <div class="service-img"> <img src="{{asset('front/assets/img/service-img/08.jpg')}}" alt="Image"> </div>
                        <div class="services-overlay">
                            <div class="icon"><i class="fal fa-gavel"></i></div>
                            <h4 class="title dirctionsaboutus" ><a href="#">IT Consultancy.</a></h4>
                            <p >The functional goal of technical content is to help people use a
                                product successfully.
                                The business goal must tie the content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="service-item-eight mb-30">
                        <div class="service-img"> <img src="{{asset('front/assets/img/service-img/09.jpg')}}" alt="Image"> </div>
                        <div class="services-overlay">
                            <div class="icon"><i class="fal fa-map-marked-alt"></i></div>
                            <h4 class="title dirctionsaboutus" ><a href="#">Technology Prof.</a></h4>
                            <p >The functional goal of technical content is to help people use a
                                product successfully.
                                The business goal must tie the content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="service-item-eight mb-30">
                        <div class="service-img"> <img src="{{asset('front/assets/img/service-img/10.jpg')}}" alt="Image"> </div>
                        <div class="services-overlay">
                            <div class="icon"><i class="fal fa-hurricane"></i></div>
                            <h4 class="title dirctionsaboutus" ><a href="#">Web Development.</a></h4>
                            <p >The functional goal of technical content is to help people use a
                                product successfully.
                                The business goal must tie the content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="service-item-eight mb-30">
                        <div class="service-img"> <img src="{{asset('front/assets/img/service-img/11.jpg')}}" alt="Image"> </div>
                        <div class="services-overlay">
                            <div class="icon"><i class="fal fa-bezier-curve"></i></div>
                            <h4 class="title dirctionsaboutus" ><a href="#">Web Development.</a></h4>
                            <p >The functional goal of technical content is to help people use a
                                product successfully.
                                The business goal must tie the content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="service-item-eight mb-30">
                        <div class="service-img"> <img src="assets/img/service-img/12.jpg" alt="Image"> </div>
                        <div class="services-overlay">
                            <div class="icon"><i class="fal fa-umbrella"></i></div>
                            <h4 class="title dirctionsaboutus" ><a href="#">Game Design.</a></h4>
                            <p >The functional goal of technical content is to help people use a
                                product successfully.
                                The business goal must tie the content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Service Section End ======-->

    <!--====== Back to top start ======-->
    <div class="back-to-top">
        <a href="#"> <i class="fas fa-arrow-up"></i> </a>
    </div>
    <!--====== Back to top start ======-->
@endsection

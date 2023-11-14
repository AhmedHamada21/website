@extends('front.layouts.master')
@section('contact')

    <!--====== Banner Slider Start ======-->
    <section class="banner-slider banner-slider-one banner-slider-active">

        <div class="single-banner">
            <div class="container-fluid container-1470">
                <div class="row align-items-center">

                    <div class="col-lg-7">
                        <div class="banner-text">
                            <div class="banner-content">
                <span data-animation="fadeInUp" data-delay="0.3s" class="title-tag">
                  IT Business Consulting
                </span>
                                <h1 data-animation="fadeInLeft" data-delay="0.6s" class="title">
                                    Best IT Soluations Provider Agency
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".9s">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremda
                                    tium totam rem aperiam eaque ipsa quae ab illo inventore veritatis
                                </p>
                                <a data-animation="fadeInUp" data-delay="1.1s" class="main-btn rounded-btn icon-right small-size"
                                   href="{{route('home.services')}}">
                                    Our Services <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 d-none d-lg-block positiona">
                        <div class="banner-img hexagon" data-animation="fadeInRight" data-delay="0.5s">
                            <div class="shape">
                                <img src="{{asset('front/assets/img/Legalbackground.jpg')}}" alt="Banner">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="single-banner">
            <div class="container-fluid container-1470">
                <div class="row align-items-center ">

                    <div class="col-lg-7">
                        <div class="banner-text">
                            <div class="banner-content">
                <span data-animation="fadeInUp" data-delay="0.3s" class="title-tag">
                  IT Business Consulting
                </span>
                                <h1 data-animation="fadeInLeft" data-delay="0.6s" class="title">
                                    Best IT Soluations Provider Agency
                                </h1>
                                <p data-animation="fadeInLeft" data-delay=".9s">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremda
                                    tium totam rem aperiam eaque ipsa quae ab illo inventore veritatis
                                </p>
                                <a data-animation="fadeInUp" data-delay="1.1s" class="main-btn rounded-btn icon-right small-size"
                                   href="{{route('home.services')}}">
                                    Our Services <i class="fal fa-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="banner-img hexagon" data-animation="fadeInRight" data-delay="0.5s">
                            <div class="shape">
                                <img class="" height="100%" src="{{asset('front/assets/img/Legalbackground2.jpg')}}" alt="Banner">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--====== Banner Slider End ======-->

    <!-- section spicieal Start -->
    <section class="pricing-section section-gap soft-blue-bg directionstyle">

        <div class="container">

            <div class="row align-items-center justify-content-between">

                <div class="col-auto">

                    <ul class="nav nav-pills pricing-tab-btn" id="pricingOneTab" role="tablist">

                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#privacy-policy" role="tab"
                               aria-selected="true">privacy policy</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#Terms-Conditions">Terms-Conditions</a>
                        </li>

                    </ul>

                </div>

            </div>

            <div class="tab-content" id="pricingOneTabContent">

                <div class="tab-pane fade active show" id="privacy-policy" role="tabpanel" tabindex="-1">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 mt-10 arabicwiththis">

                            <div class="legal-plan-item dirctionsaboutus">

                                <h3>some key components typically found in a privacy policy</h3>

                                <p class="plans-btn">This section provides an overview of the purpose and scope of the
                                    privacy policy</p>

                                <blockquote>

                                    <div class="privacy">

                                        <p>

                                            Types of Data Collected: The policy should specify what types of personal information are
                                            collected, such as names, email addresses, phone numbers, and more.
                                        </p>
                                        <p>

                                            Methods of Data Collection: It should describe how the data is collected, whether through
                                            website
                                            forms, cookies, or other means.
                                        </p>
                                        <p>

                                            Purposes of Data Collection: The policy should explain why the organization collects the data
                                            and
                                            how it intends to use it, such as for marketing, customer support, or analytics.
                                        </p>
                                        <p>

                                            Data Sharing: This section explains whether and with whom the collected data is shared. It may
                                            include information about third-party service providers.
                                        </p>
                                        <p>

                                            Data Security: A privacy policy should outline the measures taken to secure the collected data
                                            and
                                            protect it from unauthorized access or breaches.
                                        </p>
                                        <p>

                                            User Rights: It should detail the rights users have regarding their personal data, such as the
                                            right to access, correct, or delete their information.
                                        </p>
                                        <p>

                                            Cookies and Tracking Technologies: If the website uses cookies or similar technologies for
                                            tracking user behavior, this should be disclosed in the privacy policy.
                                        </p>
                                        <p>

                                            Third-Party Links: If the website contains links to third-party websites or services, it should
                                            clarify that the privacy policy does not apply to those external sites.
                                        </p>
                                        <p>

                                            Policy Updates: The policy should explain how and when updates or changes to the policy will be
                                            communicated to users.
                                        </p>
                                        <p>

                                            Contact Information: Provide contact information for users to reach out if they have questions
                                            or
                                            concerns about their data and privacy.
                                        </p>
                                        <p>

                                            Compliance with Legal Requirements: Mention compliance with relevant data protection laws, such
                                            as
                                            the General Data Protection Regulation (GDPR) in Europe or the California Consumer Privacy Act
                                            (CCPA) in the United States.
                                        </p>

                                    </div>

                                </blockquote>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="tab-pane fade" id="Terms-Conditions" role="tabpanel" tabindex="-1">

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 mt-10 arabicwiththis">

                            <div class="legal-plan-item dirctionsaboutus">

                                <h3>This section explains that by using the service, users agree to abide by the terms and conditions.
                                </h3>

                                <p class="plans-btn">The T&C outline the responsibilities and obligations of users.</p>

                                <blockquote>

                                    <div class="Conditions">

                                        <p>

                                            Use of the Service: Details on how the service should be used, including any restrictions or
                                            prohibited uses.
                                        </p>
                                        <p>

                                            Intellectual Property: Explains who owns the intellectual property (e.g., copyrights,
                                            trademarks) related to the service and any permissions or restrictions on use.
                                        </p>
                                        <p>

                                            Privacy Policy: Typically, terms and conditions reference the organization's privacy policy,
                                            which details how user data is collected, used, and protected.
                                        </p>
                                        <p>

                                            Payment and Billing (if applicable): If the service involves payments, this section covers
                                            pricing, billing terms, and cancellation policies.
                                        </p>
                                        <p>

                                            Termination and Suspension: Outlines the circumstances under which the service provider can
                                            terminate or suspend a user's account or access to the service.
                                        </p>
                                        <p>

                                            Dispute Resolution: Information on how disputes or conflicts will be resolved, which may include
                                            arbitration or mediation clauses.
                                        </p>
                                        <p>

                                            Liability and Disclaimers: Describes the limits of the service provider's liability and includes
                                            disclaimers that state the service is provided "as is" and without warranties.
                                        </p>
                                        <p>

                                            Governing Law: Specifies the jurisdiction and laws that govern the agreement.
                                        </p>
                                        <p>

                                            Changes to Terms and Conditions: Explains how and when changes to the terms and conditions will
                                            be communicated to users.
                                        </p>
                                        <p>

                                            Contact Information: Provides contact details for users to reach out with questions, concerns,
                                            or issues related to the service.
                                        </p>

                                    </div>

                                </blockquote>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- section spicieal End -->

    <!--====== Back to top start ======-->
    <div class="back-to-top">
        <a href="#"> <i class="fas fa-arrow-up"></i> </a>
    </div>
    <!--====== Back to top start ======-->
@endsection

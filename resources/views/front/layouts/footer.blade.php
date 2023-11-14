<!--====== Footer PART START ======-->
<footer class="footer-area">
    <div class="container">
        <div class="row footer-widgets ">

            <div class="col-lg-4 col-md-6 col-md-7">
                <div class="widget about-widget ">
                    <div class="footer-left">
                        <img class="footer-logo" src="{{asset('front/assets/img/logo/logo.png')}}" alt="Omnivus">
                        <div class="word-footer directionslider">
                            لقد تغير الويب كثيرًا منذ أن نشر فيتالي مقالته الأولى في عام 2006. الفريق
                            في
                            لقد تغير التحطيم أيضًا
                            ، وكذلك الأشياء التي نحضرها إلى مجتمعاتنا،
                            الكتب، وأضيفت عضويتنا إلى المجلة الإلكترونية.
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="widget nav-widget d-flex spacebetween">

                    <div class="servieces">
                        <h4 class="widget-title"> خدماتنا </h4>
                        <div class="footer-list">
                            <ul>
                                <li><a href="{{route('home.services')}}"><i class="fal fa-angle-right"></i> خدماتنا </a></li>
                                <li><a href="{{route('home.show-services')}}"><i class="fal fa-angle-right"></i> تفاصيل خدماتنا </a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="pagesthinge">
                        <h4 class="widget-title"> صفحات أخرى </h4>
                        <div class="footer-list">
                            <ul>
                                <li><a href="{{route('home.OurPortfolio')}}"><i class="fal fa-angle-right"></i> لدينا-محفظة </a></li>
                                <li><a href="{{route('home.faq')}}"><i class="fal fa-angle-right"></i> التعليمات </a></li>
                                <li><a href="{{route('home.checkout')}}"><i class="fal fa-angle-right"></i> الدفع </a></li>
                                <li><a href="{{route('home.team')}}"><i class="fal fa-angle-right"></i> فريق </a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="widget nav-widget textcenter">
                    <h4 class="widget-title"> المدونة </h4>
                    <div class="footer-list">
                        <ul>
                            <li><a href="{{route('home.blog-show')}}"><i class="fal fa-angle-right"></i> تفاصيل-المدونه </a></li>
                            <li><a href="{{route('home.blog')}}"><i class="fal fa-angle-right"></i> أخبار-المدونة </a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget contact-widget">
                    <h4 class="widget-title"> ساعات العمل </h4>
                    <ul>
                        <li> الاحد - الحميس : 5:00 - 10:00</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p> حقوق النشر بواسطة @ <a href="#"> المثلث الفضي </a> - {{date('Y')}} - {{date('Y')+1}}</p>
        </div>
    </div>
</footer>
<!--====== Footer PART ENDS ======-->

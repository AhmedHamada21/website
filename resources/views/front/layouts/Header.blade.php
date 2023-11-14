<!--====== Header Part Start ======-->
<header class="header-two header-full-width sticky-header">
    <!-- ======= Top Bar ======== -->
    <div class="header-topbar d-none d-sm-block">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-auto col-12">
                    <ul class="contact-info text-center">
                        <li><a href="mailto:info@tripu.net"><i class="fal fa-envelope"></i> البريد الإلكتروني: info@tripu.net</a></li>
                        <li><a href="tel:201111579400"><i class="fal fa-phone"></i> الهاتف: 01111579400</a></li>

                    </ul>
                </div>
                <div class="col-sm-auto col-12">
                    <div class="social-icon text-center">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==== nav header ==== -->
    <div class="header-navigation">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <!-- === logo === -->
            <div class="header-left">
                <div class="site-logo">
                    <a href="{{route('home.index')}}" data-toggle="dropdown" aria-expanded="false">
                        <!-- <h1 class="LogoWord">Silver</h1> -->
                        <img src="{{asset('front/assets/img/logo/logo.png')}}" alt="Omnivus">
                    </a>
                </div>
            </div>

            <!-- === nav bar === -->
            <div class="site-nav-menu">
                <ul class="primary-menu">
                    <li class="{{request()->routeIs('home.index') ? ' current' : null}}">
                        <a href="{{route('home.index')}}">الصفحه الرئيسيه</a>
                    </li>
                    <li class="{{request()->routeIs('home.about') ? ' current' : null}}">
                        <a class="nav-link" href="{{route('home.about')}}">من نحن </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{route('home.ourCompany')}}">شركتنا</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="dropdown" aria-expanded="false">خدماتنا</a>
                        <ul class="submenu">
                            <li><a href="{{route('home.services')}}">الخدمات</a></li>
                            <li><a href="{{route('home.show-services')}}">تفاصيل الخدمات</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="dropdown" aria-expanded="false"> المدونة</a>
                        <ul class="submenu">
                            <li><a href="{{route('home.blog-show')}}"> تفاصيل-المدونه</a></li>
                            <li><a href="{{route('home.blog')}}"> أخبار-المدونة </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" data-toggle="dropdown" aria-expanded="false"> صفحات أخؤى</a>
                        <ul class="submenu">
                            <li><a href="{{route('home.OurPortfolio')}}"> لدينا-محفظة</a></li>
                            <li><a href="{{route('home.faq')}}">التعليمات</a></li>
                            <li><a href="{{route('home.checkout')}}">الدفع</a></li>
                            <li><a href="{{route('home.team')}}">فريق</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('home.contact')}}"> اتصل-بنا</a>
                    </li>
                </ul>
                <a href="#" class="nav-close"><i class="fal fa-times"></i></a>
            </div>

            <!-- === login/register === -->
            <div class="header-extra d-flex align-items-center">

                <!-- === button header === -->
                <div class="nav-toggler">
                    <span></span><span></span><span></span>
                </div>

                <!-- === box login / register === -->
                <div class="navbar-btn hoverstyle">

                    <a type="button" class="main-btn rounded-btn icon-right small-size lgri"
                       data-animation="fadeInUp" data-toggle="modal" data-target="#loginForm"
                       data-whatever="@mdo">تسجيل-دخول / تسجيل عضويه<i
                            class="fal fa-long-arrow-right transformrotate"></i></a>

                    <a type="button" class="d-none main-btn rounded-btn icon-right small-size neww"
                       data-animation="fadeInUp" data-toggle="modal" data-target="#loginForm" data-whatever="@mdo">
                        <i class="fas fa-user cdnfont"></i></a>

                    <div class="modal fade model-lg" id="loginForm" style="top: 8%;" tabindex="-1"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">

                        <div class="modal-dialog">

                            <div class="modal-content" style="border-radius: 1%;">

                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                                <main class="login-main">
                                    <div class="box">
                                        <div class="inner-box">
                                            <div class="forms-wrap">
                                                <!-- === box login === -->
                                                <form autocomplete="off" class="sign-in-form">
                                                    <div class="logobox">
                                                        <h1 class="LogoWord">Silver Tringle </h1>
                                                        <!-- <img src="./img/logo.png" alt="easyclass" /> -->

                                                    </div>

                                                    <div class="heading">
                                                        <h2>مرحبًا-بعودتك</h2>
                                                        <h6> لم يتم تسجيله بعد </h6>
                                                        <a href="#" class="toggle-box" data-toggle="dropdown"
                                                           aria-expanded="false">إنشاء حساب</a>
                                                    </div>

                                                    <div class="actual-form">
                                                        <div class="input-wrap">
                                                            <input type="text" minlength="4" class="input-field"
                                                                   autocomplete="off" required />
                                                            <label>الأسم</label>
                                                        </div>

                                                        <div class="input-wrap">
                                                            <input type="password" minlength="4" class="input-field"
                                                                   autocomplete="off" required />
                                                            <label>كلمة السر</label>
                                                        </div>

                                                        <input type="submit" value="تسجيل الدخول"
                                                               class="sign-btn" />

                                                        <p class="text">

                                                            <a href="#"
                                                               class="toggelBox main-btn rounded-btn icon-right small-size">
                                                                احصل على مساعدة</a>
                                                        </p>
                                                    </div>
                                                </form>

                                                <!-- === box register === -->
                                                <form autocomplete="off" class="sign-up-form">
                                                    <div class="logobox">
                                                        <h1 class="LogoWord"> Silver Tringle </h1>
                                                        <!-- <img src="./img/logo.png" alt="easyclass" /> -->

                                                    </div>

                                                    <div class="heading">
                                                        <h2>البدء </h2>
                                                        <h6> هل لديك حساب </h6>
                                                        <a href="#" class="toggle-box" data-toggle="dropdown"
                                                           aria-expanded="false"> تسجيل الدخول
                                                        </a>
                                                    </div>

                                                    <div class="actual-form">
                                                        <div class="input-wrap">
                                                            <input type="text" minlength="4" class="input-field"
                                                                   autocomplete="off" required />
                                                            <label> الإسم </label>
                                                        </div>

                                                        <div class="input-wrap">
                                                            <input type="email" class="input-field"
                                                                   autocomplete="off" required />
                                                            <label> بريد إلكتروني </label>
                                                        </div>

                                                        <div class="input-wrap">
                                                            <input type="password" minlength="4" class="input-field"
                                                                   autocomplete="off" required />
                                                            <label> كلمة السر </label>
                                                        </div>

                                                        <input type="submit" value=" اشتراك " class="sign-btn" />

                                                        <p class="text">

                                                            <a href="{{route('home.legal')}}"
                                                               class="toggelBox main-btn rounded-btn icon-right small-size">
                                                                قانوني </a>
                                                        </p>
                                                    </div>
                                                </form>

                                            </div>
                                            <!-- === box image === -->
                                            <div class="carousel">

                                                <div class="images-wrapper">
                                                    <img src="{{asset('front/assets/img/inside/image1.png')}}" class="image img-1 show"
                                                         alt="" />
                                                    <img src="{{asset('front/assets/img/inside/image2.png')}}" class="image img-2"
                                                         alt="" />
                                                    <img src="{{asset('front/assets/img/inside/image3.png')}}" class="image img-3"
                                                         alt="" />
                                                </div>

                                                <div class="text-slider">

                                                    <div class="text-wrap">
                                                        <div class="text-group">
                                                            <h2> إنشاء الدورات الخاصة بك </h2>
                                                            <h2> تخصيص كما تريد </h2>
                                                            <h2> قم بدعوة أصدقائك هنا </h2>
                                                        </div>
                                                    </div>

                                                    <div class="bullets">
                                                        <span class="active" data-value="1"></span>
                                                        <span data-value="2"></span>
                                                        <span data-value="3"></span>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </main>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</header>
<!--====== Header Part End ======-->

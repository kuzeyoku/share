<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    {!! SEO::generate() !!}
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />

    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{ themeAsset('front', 'css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/twentytwenty.css') }}" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/module-css/footer.css') }}" />
    @stack('style')
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/module-css/slider.css') }}" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/module-css/product.css') }}" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/module-css/features.css') }}" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/module-css/counter.css') }}" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/module-css/project.css') }}" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/module-css/contact.css') }}" />

    <link rel="stylesheet" href="{{ themeAsset('front', 'css/style.css') }}" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/responsive.css') }}" />
</head>

<body>



    {{-- <div class="preloader">
        <div class="preloader__image"></div>
    </div> --}}
    <!-- /.preloader -->

    <div class="theme-border-left"></div>
    <div class="theme-border-right"></div>


    <div class="page-wrapper">

        @include('layout.header')
        @yield('content')
        @include('layout.footer')

    </div>


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image">
                    <img src="assets/images/resources/logo-2.png" width="140" alt="" />
                </a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:{{ config('contact.email') }}">{{ config('contact.email') }}</a>
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    <a href="tel:{{ config('contact.phone') }}">{{ config('contact.phone') }}</a>
                </li>
            </ul>
        </div>
    </div>
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        <span class="scroll-to-top__text"> Yukarı Git</span>
    </a>

    <script src="{{ themeAsset('front', 'js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ themeAsset('front', 'js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ themeAsset('front', 'js/jarallax.min.js') }}"></script>
    <script src="{{ themeAsset('front', 'js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ themeAsset('front', 'js/jquery.appear.min.js') }}"></script>
    <script src="{{ themeAsset('front', 'js/swiper.min.js') }}"></script>
    <script src="{{ themeAsset('front', 'js/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ themeAsset('front', 'js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ themeAsset('front', 'js/jquery.validate.min.js') }}"></script>
    <script src="{{ themeAsset('front', 'js/odometer.min.js') }}"></script>
    <script src="{{ themeAsset('front', 'js/wNumb.min.js') }}"></script>
    <script src="{{ themeAsset('front', 'js/wow.js') }}"></script>
    <script src="{{ themeAsset('front', 'js/isotope.js') }}"></script>
    <script src="{{ themeAsset('front', 'js/owl.carousel.min.js') }}"></script>
    <script src="{{ themeAsset('front', 'js/jquery-ui.js') }}"></script>
    <script src="{{ themeAsset('front', 'js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ themeAsset('front', 'js/countdown.min.js') }}"></script>
    <script src="{{ themeAsset('front', 'js/gsap/gsap.js') }}"></script>
    <script src="{{ themeAsset('front', 'js/gsap/ScrollTrigger.js') }}"></script>
    <script src="{{ themeAsset('front', 'js/gsap/SplitText.js') }}"></script>

    <!-- template js -->
    <script src="{{ themeAsset('front', 'js/script.js') }}"></script>
    @stack('script')
</body>

</html>

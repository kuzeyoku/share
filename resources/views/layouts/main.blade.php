<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1.0, maximum-scale=5, minimal-ui">
    <meta name="applicable-device" content="pc,mobile">
    <meta name="format-detection" content="telephone=no" />
    <link rel="shortcut icon" href="{{ themeAsset('front', 'img/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/animate.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/ModuleStyleMobile.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/ModuleMobileNavTpl.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/slick-theme.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/slick.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/swiper.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/caidan25.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ themeAsset('front', 'css/PageCss.css') }}" type="text/css" />
    <script>
        var SiteType = "1";
        var CanDesign = "False";
        var CanEditFront = 'False';
        var SkinType = "3" || "2";
        var GridWidth = "1200px";
        var PageType = "1";
        var DesignType = "";
        window.ScriptCdn = "https://cdn-cloudflare.meidianbang.cn";
    </script>
    <script src="{{ themeAsset('front', 'js/PageJs.js?act=MobileJs&v=20240812-1') }}"></script>
</head>

<body id="page_310701" class="module_bg_color">
    @include('layouts.mobilenav')
    <div id='userbar'></div>
    <div id="pagebody" class="siteStyle pageStyle container-fluid pagebody_nav pagebody_nav_1 ">
        <div id="BodyMainZoneContainer" class="BodyMainZoneContainer">
            @include('layouts.header')
            <div id='BodyMain1Zone' ismodulecontainer='true'
                class='BodyContainer BodyZoneContainer ZoneContainer ModuleContainer BodyMain1Zone clearfix '>
                @yield('content')
            </div>
            @include('layouts.footer')
        </div>
    </div>
    <div class="ModuleItem" id="module_416824219">
        <div class="ModuleOnLineServiceGiant layout-107 layout-color-blue module_416824219 clearfix">
            <div class='BodyCenter BodyCenter416824219 clearfix'>
                <div class="online-service-giant-container pos-left">
                    <style>
                        #module_416824219 {

                            position: fixed !important;
                            bottom: 100px;
                            top: auto !important;

                            left: 20px;
                            right: auto;
                            display: inline-block;
                            width: auto !important;
                            z-index: 4001;
                            height: auto !important;
                        }
                    </style>
                    <div class="online-service-giant-btn online-service-giant-Contacts-btn" target="contact"><i
                            class="iconfont icon-dianhua2"></i></div>
                    <div class="online-service-giant-btn online-service-giant-ToTop-btn" style="">@svg('fas-chevron-up')</div>
                    <div class="online-service-giant">
                        <div
                            class="online-service-giant-hidden online-service-giant-content online-service-giant-contact">
                            <div class="contact-item">
                                <div class="contact-item-name">
                                    -Contact us-
                                </div>
                                <div class="contact-item-content">
                                    {{ config('contact.phone') }}
                                </div>
                            </div>
                            <div class="contact-item">
                                <div class="contact-item-name">
                                    E-mail
                                </div>
                                <div class="contact-item-content">
                                    {{ config('contact.email') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    addScript('/skinp/modules/ModuleOnLineServiceGiant/onlineServiceGiant.js', function() {
                        onlineServiceGiantInit('416824219', '107', {
                            PopupTips: '',
                            PTFrequency: '',
                            PTFrequencyUnit: '0',
                            PTInterval: '3',
                            PTFrequencyType: '0',
                            CanDesign: '0',
                            CanEditFront: '0'
                        });
                    });
                </script>
            </div>
        </div>

    </div>
    <script type="text/javascript" src="{{ themeAsset('front', 'js/swiper.min.js') }}"></script>
    <script type="text/javascript" src="{{ themeAsset('front', 'js/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>

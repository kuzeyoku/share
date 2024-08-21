<div class="ModuleItem wow fadeIn StaticModule" wo="2970" id="module_451372788" data-wow-duration="2.5s">
    <div class="ModuleImageTextGiant layout-101 layout-color-orange module_451372788 clearfix">
        <div class='BodyCenter BodyCenter451372788 clearfix'>
            <div class="imageTextGiant-Container imageTextContainer clearfix" show_more='Show More' hasresponsive="1"
                autohideype="0" autohide="0" hideheight="150" hidewidth="760">
                <div class="ModuleImageTextGiantContent ModuleImageTextContent">
                    <p style="text-align: center;">
                        <span style="font-family:arial,helvetica,sans-serif;"><span
                                style="text-align: center; color: rgb(216, 216, 216); font-size: 30px;">&mdash;</span>
                            <span style="text-align: center; font-size: 36px; color: rgb(63, 63, 63);">&nbsp;
                                &nbsp;</span>
                            <span style="font-size:24px;">
                                <span style="line-height:2;">
                                    <strong>Profesyonel Hava Araştırma Kamerası</strong>
                                </span></span><span style="text-align: center; font-size: 36px;">
                                <span style="color: rgb(14, 107, 192); font-size: 32px;">&nbsp;&nbsp;
                                    <span style="color: rgb(216, 216, 216); font-size: 30px;">&mdash;</span>
                                </span>
                            </span>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="ModuleItem StaticModule mb-5" wo="2970" id="module_504703326">
    <div class="ModuleGridGiant layout-101 layout-color-module_504703326 clearfix">
        <div class='BodyCenter BodyCenter504703326 clearfix'>
            <div class='ModuleGridContainer  ModuleGridContainer504703326' gridswidthmode='0'>
                <div class='row ModuleSubContainer'>
                    <div id='Sub504703326_1'
                        class='ModuleContainer SubContainer ModuleGridItem col-xs-12 col-sm-12 col-md-12 col-lg-12'
                        positiontype='2' ismodulecontainer='true'>
                        <div class="ModuleItem wow fadeInUp StaticModule" wo="1920" id="module_502817948"
                            data-wow-delay="0.2s" data-wow-duration="1.5s">
                            <div class="ModuleSiteGalleryV2Giant layout-109 layout-color- module_502817948 clearfix">
                                <div class='BodyCenter BodyCenter502817948 clearfix'>
                                    <div class="gallery-list gallery-giant gallery-container album-item clearfix"
                                        layout="109" data-expandir="1" style="display: block">
                                        @foreach ($product as $product)
                                            <a href="{{ $product->url }}" target="_self"
                                                class="album-img col-xs-4 col-sm-5 col-md-5 col-lg-5">
                                                <div class="album-img-c">
                                                    <div class="dummy"></div>
                                                    <div class="mobile_picBox">
                                                        <img src="https://cdn-cloudflare.meidianbang.cn/images/imgbg.png"
                                                            data-src="{{ $product->getFirstMediaUrl('cover') }}"
                                                            alt="{{ $product->title }}" title="{{ $product->title }}"
                                                            class="mobile_pic mobile_pic_B">
                                                    </div>
                                                    <div class="rectborder"></div>
                                                </div>
                                                <div class="titleBox">
                                                    <div class="abstract">
                                                        {{ $product->title }}
                                                    </div>
                                                </div>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class='clearfix visible-lg'></div>
                    <div class='clearfix visible-xs'></div>
                </div>
            </div>
        </div>
    </div>

</div>

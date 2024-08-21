<div class="ModuleItem wow fadeIn StaticModule  " wo="2970" id="module_416824423" data-wow-duration="2.5s">
    <div class="ModuleSlideV2Giant layout-103 layout-color-cyan module_416824423 clearfix">
        <div class='BodyCenter BodyCenter416824423 clearfix'>
            <style>
                #module_416824423 .SubContainer {
                    position: absolute;
                    top: 0;
                    left: 50%;
                    width: 100%;

                    height: 100% !important;
                    z-index: 99;
                    max-width: 1200px;
                    transform: translateX(-50%);
                }

                .module_416824423 .ModuleItem {
                    position: absolute;
                    top: 0;
                    left: 40%;
                    width: 200px;
                    height: 200px;
                    z-index: 99;
                }

                .module_416824423 .ModuleItem[moduletype='ModuleHotSpotGiant'] {
                    width: 50px;
                    height: 50px;
                }
            </style>
            <div class="slider-layout-box slider-layout-103 module-slide-container" is-exist-module="false">
                @foreach ($slider as $slider)
                    <div class="slider-layout-content">
                        <a href="{{ $slider->url }}" title="" target="_self">
                            <div class="slide-box">
                                <img class="swiperImg" src="{{ $slider->getFirstMediaUrl('cover') }}"
                                    data-src="{{ $slider->getFirstMediaUrl('cover') }}" alt="{{ $slider->title }}"
                                    title="{{ $slider->title }}" />
                            </div>
                        </a>
                        <div id="Sub416824423_{{ $loop->iteration }}" isModuleContainer="true"
                            class="ModuleContainer SubContainer ModuleSlideContainer module_416824423"
                            module-container-type="ModuleSlide" a-link-value="{{ $slider->url }}" a-link-target="_self"
                            style="cursor: pointer;">

                        </div>
                    </div>
                @endforeach

            </div>
            <script>
                addScript('/skinp/modules/ModuleSlideV2Giant/commonSlideV2.js', function() {
                    var option = {
                        autoplay: "1",
                        pauseOnHover: "1",
                        autoplaySpeed: "4",
                        isCurrentPageHide: "0",
                        isLoadPage: "0",
                        currentPageDisplay: "",
                        isfull: "0"
                    };
                    initCommonSlideV2Giant("416824423", "103", option);
                });
            </script>
        </div>
    </div>

</div>

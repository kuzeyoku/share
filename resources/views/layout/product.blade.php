<section class="services-one">
    <div class="container-fluid">
        <div clasws="services-one__inner">
            <div class="row">
                @foreach ($product as $product)
                    <div class="col-lg custom-col">
                        <div class="product-container">
                            <a href="{{ $product->url }}">
                                <img width="300" height="300" class="product-image"
                                    src="{{ $product->getFirstMediaUrl('cover') }}" alt="">
                            </a>
                            <p class="product-title">{{ $product->title }}</p>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg custom-col">
                    <div class="product-container">
                        <a href="#">
                            <img width="300" height="300" class="product-image"
                                src="https://cdn-cloudflare.meidianbang.cn/comdata/81833/gallery/292c420180fe965e40db19db96a4a12f.png"
                                alt="">
                        </a>
                        <p class="product-title">SHARE 102S PRO V2</p>
                    </div>
                </div>
                <div class="col-lg custom-col">
                    <div class="product-container">
                        <a href="#">
                            <img class="product-image"
                                src="https://cdn-cloudflare.meidianbang.cn/comdata/81833/gallery/35536005f53a6d35f163fe9eb0245b0d.png"
                                alt="">
                        </a>
                        <p class="product-title">SHARE 202S RPO V2</p>
                    </div>
                </div>
                <div class="col-lg custom-col">
                    <div class="product-container">
                        <a href="#">
                            <img class="product-image"
                                src="https://cdn-cloudflare.meidianbang.cn/comdata/81833/gallery/5cd6ee11c3606d61009a7dbdcf6a4c2d.png"
                                alt="">
                        </a>
                        <p class="product-title">SHARE 303S PRO V2</p>
                    </div>
                </div>
                <div class="col-lg custom-col">
                    <div class="product-container">
                        <a href="#">
                            <img class="product-image"
                                src="https://cdn-cloudflare.meidianbang.cn/comdata/81833/gallery/9dcdb48a9d0b942d0f246ee66e145854.png"
                                alt="">
                        </a>
                        <p class="product-title">SHARE T2</p>
                    </div>
                </div>
                <div class="col-lg custom-col">
                    <div class="product-container">
                        <a href="#">
                            <img class="product-image"
                                src="https://cdn-cloudflare.meidianbang.cn/comdata/81833/gallery/0373fab94b0921b812471ce0c1589e4b.png"
                                alt="">
                        </a>
                        <p class="product-title">PSDK 102S V3</p>
                    </div>
                </div>
                <div class="col-lg custom-col">
                    <div class="product-container">
                        <a href="#">
                            <img class="product-image"
                                src="https://cdn-cloudflare.meidianbang.cn/comdata/81833/gallery/98a7afcd94a9b2dff32834ef0c537648.png"
                                alt="">
                        </a>
                        <p class="product-title">SHARE 203S PRO</p>
                    </div>
                </div>
                <div class="col-lg custom-col">
                    <div class="product-container">
                        <a href="#">
                            <img class="product-image"
                                src="https://cdn-cloudflare.meidianbang.cn/comdata/81833/gallery/7fcfba0d05b8a2cec55ac29754cb598e.png"
                                alt="">
                        </a>
                        <p class="product-title">SHARE 304S PRO</p>
                    </div>
                </div>
                <div class="col-lg custom-col">
                    <div class="product-container">
                        <a href="#">
                            <img class="product-image"
                                src="https://cdn-cloudflare.meidianbang.cn/comdata/81833/gallery/b84d00663891ba817833307872efee1d.png"
                                alt="">
                        </a>
                        <p class="product-title">SHARE 2600 SDK</p>
                    </div>
                </div>
                <div class="col-lg custom-col">
                    <div class="product-container">
                        <a href="#">
                            <img class="product-image"
                                src="https://cdn-cloudflare.meidianbang.cn/comdata/81833/gallery/080c1d68829059a5f74f6b3edb50917d.png"
                                alt="">
                        </a>
                        <p class="product-title">SHARE 6100X</p>
                    </div>
                </div>
                <div class="col-lg custom-col">
                    <div class="product-container">
                        <a href="#">
                            <img class="product-image"
                                src="https://cdn-cloudflare.meidianbang.cn/comdata/81833/gallery/7df4ff2d0b3f0cf0e61966647da5d966.png"
                                alt="">
                        </a>
                        <p class="product-title">SHARE 100M PRO</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>

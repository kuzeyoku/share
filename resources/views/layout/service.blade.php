<style>
    .product-image {
        background-image: linear-gradient(355deg, rgba(233, 233, 233, 0.31) 0%, rgb(252, 252, 252) 34%);
        width: 100%;
        height: 400px;
        object-fit: cover;
        transition: background-color 0.5s;
    }

    .product-image:hover {
        background-color: #adadad
    }

    .product-container {
        text-align: center;
        margin-bottom: 20px;
        position: relative;
        overflow: hidden;
    }

    .product-title {
        font-size: 18px;
        color: #333;
        margin-top: 10px;
        position: absolute;
        bottom: 0;
        width: 100%;
        transition: bottom 0.5s;
        padding: 10px;
        background-color: rgba(255, 255, 255, 0.5);
    }

    .product-container:hover .product-title {
        bottom: 20px;
        /* Hover durumunda yukarı taşı */
    }

    .custom-col {
        flex: 0 0 20%;
        max-width: 20%;
    }

    @media (min-width: 1200px) {
        .custom-col {
            flex: 0 0 20%; /* Her bir sütun için */
            max-width: 20%; /* Her bir sütun için */
        }
    }

    /* Orta boy ekranlar için */
    @media (min-width: 992px) and (max-width: 1199px) {
        .custom-col {
            flex: 0 0 25%; /* Her bir sütun için */
            max-width: 25%; /* Her bir sütun için */
        }
    }

    /* Küçük ekranlar için */
    @media (min-width: 768px) and (max-width: 991px) {
        .custom-col {
            flex: 0 0 33.33333%; /* Her bir sütun için */
            max-width: 33.33333%; /* Her bir sütun için */
        }
    }

    /* Çok küçük ekranlar için */
    @media (max-width: 767px) {
        .custom-col {
            flex: 0 0 50%; /* Her bir sütun için */
            max-width: 50%; /* Her bir sütun için */
        }
    }

    /* Ekstra küçük ekranlar için, her sütun tam genişlik alır */
    @media (max-width: 575px) {
        .custom-col {
            flex: 0 0 100%; /* Her bir sütun için */
            max-width: 100%; /* Her bir sütun için */
        }
    }
</style>
<section class="services-one">
    <div class="container-fluid">
        <div clasws="services-one__inner">
            <div class="row">
                <div class="col-lg custom-col">
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
                </div>
            </div>
        </div>
    </div>
</section>

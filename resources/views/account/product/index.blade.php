<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('javacript/javascript.js') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Di Động Việt</title>
</head>

<body>
    @include('account.layout.header');
    <!-- ---------------------------------------SLIDER---------------------------- -->
    <div class="banner">
        <a href="#"> <img src="./Images_Logo/Laptop-banner-big-desk-2-min-1920x450.webp" alt=""></a>
    </div>
    <section class="main_content">
        <section class="slider">
            <div class="container_slider">
                <div class="slider_content">
                    <div class="slider_content_left">
                        <div class="container_left_top">
                            <div class="slider_content_left_top">
                                <a href="#"><img src="./Images_Logo/slider1.webp" alt=""></a>
                                <a href="#"><img src="./Images_Logo/slider2.webp" alt=""></a>
                                <a href="#"><img src="./Images_Logo/slider3.webp" alt=""></a>
                                <a href="#"><img src="./Images_Logo/slider4.webp" alt=""></a>
                            </div>
                            <div class="btn_chevron">
                                <i class="fas fa-chevron-left"></i>
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                        <div class="slider_content_left_bottom">
                            <li class="active"><a href="#">Đổi 2G lên Smartphone 4G</a></li>
                            <li><a href="#">Đồng hồ giá sốc</a></li>
                            <li><a href="#">Giảm từ 25% Từ 12.29 triệu</a></li>
                            <li><a href="#">Giảm đến 50%++</a></li>
                        </div>
                    </div>
                    <div class="slider_content_right">
                        <div class="img"><a href="#"><img src="./Images_Logo/img1.webp" alt=""></a>
                        </div>
                        <div class="img"><a href="#"><img src="./Images_Logo/img2.webp" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- -----------------------------------------BANNER MID----------------------------- -->
        <div class="banner_mid">
            <a href="#"><img src="./Images_Logo/logotop.webp" alt=""></a>
        </div>
        <!-- -----------------------------------------SLIDER PRODUCTS------------------------ -->
        <section class="slider_products">
            <div class="container_items">
                <div class="container_main_products">
                    <div class="container_slider_main_products">
                        <div class="main_products">
                            @foreach ($products1 as $p1)
                                <div class="item_content">
                                    <img src="./Image_products/{{ $p1->img }}" alt="">
                                    <div class="item_text">
                                        <li><img src="./Image_products/icon_222" alt="">
                                            <p></p>
                                        </li>
                                        <li><a href="/detailsproduct/{{ $p1->id }}">
                                                <h3>{{ $p1->name }}</h3>
                                            </a></li>
                                        <li><a href="#">Online giá rẻ</a></li>
                                        <li><a
                                                href="/detailsproduct/{{ $p1->id }}">{{ number_format($p1->getDiscountedPrice(), 0, ',', '.') }}<sup>đ</sup></a>
                                        </li>
                                        <li><a href="">
                                                <del>{{ number_format($p1->price, 0, '.', '.') }}</del><sup>đ</sup></a><span>-{{ $p1->sale }}%</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="main_products">
                            @foreach ($products2 as $p2)
                                <div class="item_content">
                                    <img src="./Image_products/{{ $p2->img }}" alt="">
                                    <div class="item_text">
                                        <li><img src="./Image_products/icon_2_1.jpg" alt="">
                                            <p></p>
                                        </li>
                                        <li><a href="#">
                                                <h3>{{ $p2->name }}</h3>
                                            </a></li>
                                        <li><a href="#">Online giá rẻ</a></li>
                                        <li><a href="#">29.590.000 <sup>đ</sup></a></li>
                                        <li><a href=""> <del>2.950.000</del><sup>đ</sup></a><span>-10%</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="main_products">
                            @foreach ($products3 as $p3)
                                <div class="item_content">
                                    <img src="./Image_products/{{ $p3->img }}" alt="">
                                    <div class="item_text">
                                        <li><img src="./Image_products/icon_2_1.jpg" alt="">
                                            <p></p>
                                        </li>
                                        <li><a href="#">
                                                <h3>{{ $p1->name }}</h3>
                                            </a></li>
                                        <li><a href="#">Online giá rẻ</a></li>
                                        <li><a href="#">29.590.000 <sup>đ</sup></a></li>
                                        <li><a href=""> <del>2.950.000</del><sup>đ</sup></a><span>-10%</span>
                                        </li>
                                        <li>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="btn_chevron_2">
                    <i class="fas fa-chevron-left fa-chevron-left_2"></i>
                    <i class="fas fa-chevron-right fa-chevron-right_2"></i>
                </div>
            </div>
            <!-- -------------------BUTTON--------------------------- -->
            </div>
        </section>
        <!-- -----------------------------------XU HƯỚNG MUA SẮM ------------------------------->
        <section class="buy_trend">
            <div class="container_buy_trend">
                <div class="content_title"><strong>XU HƯỚNG MUA SẮM</strong></div>
                <div class="xu_huong_mua_sam">
                    <div class="main_content_buy_trend">
                        <img src="./Images_Logo/trend1.webp" alt="">
                        <div class="content_text">
                            <h3>iPhone 11</h3>
                            <strong>Chỉ từ 8.990.000 <sup>đ</sup></strong>
                        </div>
                    </div>
                    <div class="main_content_buy_trend">
                        <img src="./Images_Logo/trend2.webp" alt="">
                        <div class="content_text">
                            <h3>Laptop Gaming</h3>
                            <strong>Chỉ từ 15.990.000 <sup>đ</sup></strong>
                        </div>
                    </div>
                    <div class="main_content_buy_trend">
                        <img src="./Images_Logo/trend3.webp" alt="">
                        <div class="content_text">
                            <h3>Sạc dự phòng giá rẻ</h3>
                            <strong>Chỉ từ 190.000 <sup>đ</sup></strong>
                        </div>
                    </div>
                    <div class="main_content_buy_trend">
                        <img src="./Images_Logo/trend4.webp" alt="">
                        <div class="content_text">
                            <h3>Xiaomi Watch mới</h3>
                            <strong>Chỉ từ 1.590.000 <sup>đ</sup></strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery">
            <div class="container_gallery">
                <div class="title_gallery"><strong>DANH MỤC NỔI BẬT</strong></div>
                <div class="contain_gallery">
                    @foreach ($category_trend as $ctg)
                        <div class="content_gallery">
                            <img src="./Image_products/gallery1.webp" alt="">
                            <span><?php echo $ctg->name; ?></span>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- ------------------------------BANNER KHUYEN MAI--------------------- -->
        </section>
        <section class="banner_sale">
            <div class="container_banner_sale">
                <strong class="name-box">KHUYẾN MÃI CHỈ CÓ TRÊN ONLINE</strong><br>
                <img src="./Images_Logo/banner_discount.png" alt="#">
            </div>
        </section>
        <footer>
            <div class="container_footer">
                <div class="content_footer">
                    <ul>
                        <li>Tích điểm Quà tặng VIP</li>
                        <li>Lịch sử mua hàng</li>
                        <li>Tìm hiểu về mua trả góp</li>
                        <li>Chính sách bảo hành</li>
                        <li>Xem thêm</li>
                    </ul>
                </div>
                <div class="content_footer">
                    <ul>
                        <li>Giới thiệu công ty (MWG.vn)</li>
                        <li> Tuyển dụng</li>
                        <li>Gửi góp ý, khiếu nại</li>
                        <li>Tìm siêu thị (3.158 shop)</li>
                        <li> Xem bản mobile</li>
                    </ul>
                </div>
                <div class="content_footer">
                    <ul>
                        <li><strong>Tổng đài hỗ trợ</strong></li>
                        <li>Gọi mua: <a href="#">1900 232 460</a> (7:30 - 22:00)</li>
                        <li>Khiếu nại: <a href="#">1800.1062</a> (8:00 - 21:30)</li>
                        <li> Bảo hành: <a href="#">1900 232 464</a> (8:00 - 21:00)</li>
                    </ul>
                </div>
                <div class="content_footer_col">
                    <div class="content_footer_col_text">
                        <a href="#"><i class="fa-brands fa-facebook" style="color: #3F68AF;"></i>3886.8k
                            Fan</a>
                        <a href="#"><i class="fa-brands fa-youtube" style="color: red;"></i>866k Đăng ký</a>
                        <a href="#"><img src="./Images_Logo/icon_zalo.webp" alt=""
                                style="width: 18px;height: 18px;">ZaloTGDD</a>
                    </div>
                    <div class="content_footer_col_image">
                    </div>
                </div>
            </div>
            <div class="copy_right">
                <p>© 2018. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM cấp ngày
                    02/01/2007. GPMXH: 238/GP-BTTTT do Bộ Thông Tin và Truyền Thông cấp ngày 04/06/2020.
                    Địa chỉ: 128 Trần Quang Khải, P.Tân Định, Q.1, TP.Hồ Chí Minh. Địa chỉ liên hệ và gửi chứng từ: Lô
                    T2-1.2, Đường D1, Đ. D1, P.Tân Phú, TP.Thủ Đức, TP.Hồ Chí Minh. Điện thoại: 028 38125960. Email:
                    cskh@thegioididong.com. Chịu trách nhiệm nội dung: Huỳnh Văn Tốt. Email:
                    hotrotmdt@thegioididong.com. <a href="#">Xem chính sách sử dụng</a></p>
            </div>
        </footer>
        <!-- ----------------------------------END----------------------------------- -->
    </section>
    <!-- ---------------------------------END---------------------------------- -->
    <script src="{{ asset('javacript/javascript.js') }}"></script>
</body>

</html>

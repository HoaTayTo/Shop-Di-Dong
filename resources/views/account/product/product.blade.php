<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="products.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('javacript/javascript.js') }}">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
@include('account.layout.header')

<body>
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
                        <div class="img"><a href="#"><img src="./Images_Logo/img4.webp" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="menu_brand_products">
                <ul>
                    <li><a href="/search?key=samsung"><img src="./Images_Logo/samsung.png" alt=""></a></li>
                    <li><a href="/search?key=iphone"><img src="./Images_Logo/iphone.png" alt=""></a></li>
                    <li><a href="/search?key=oppo"><img src="./Images_Logo/oppo.jpg" alt=""></a></li>
                    <li><a href="/search?key=xiaomi"><img src="./Images_Logo/xiaomi.png" alt=""></a></li>
                    <li><a href="/search?key=vivo"><img src="./Images_Logo/vivo.png" alt=""></a></li>
                    <li><a href="/search?key=realme"><img src="./Images_Logo/realme.png" alt=""></a></li>
                    <li><a href="/search?key=honor"><img src="./Images_Logo/honor.png" alt=""></a></li>
                    <li><a href="/search?key=TCL"><img src="./Images_Logo/tcl.jpg" alt=""></a></li>
                    <li><a href="/search?key=nokia"><img src="./Images_Logo/okia.jpg" alt=""></a></li>
                    <li><a href="/search?key=masstel"><img src="./Images_Logo/masstel.png" alt=""></a></li>
                    <li><a href="/search?key=mobell"><img src="./Images_Logo/mobell.jpg" alt=""></a></li>
                    <li><a href="/search?key=itel"><img src="./Images_Logo/itel.jpg" alt=""></a></li>
                </ul>
            </div>
            {{-- <div class="text_nhu_cau_mua">
                <p style="font-size: 14px;font-family: Arial, Helvetica, sans-serif;">Chọn điện thoại theo nhu cầu:</p>
            </div>
            <div class="menu_mua_theo_nhu_cau">
                <ul>
                    <li><a href="#">Chơi game / Cấu hình cao</a></li>
                    <li><a href="#">Pin khủng trên 5000 mAh</a></li>
                    <li><a href="#">Chụp ảnh, quay phim</a></li>
                    <li><a href="#">Livestream</a></li>
                    <li><a href="#">Mỏng nhẹ</a></li>
                </ul>
            </div> --}}
            <div class="menu_checkbox_locSP">
                <form id="filterForm" method="GET" action="{{ route('product.Sort') }}">
                    <ul>
                        <li><strong>{{ $productCount }} điện thoại</strong></li>
                        <li>
                            <input type="checkbox" name="discount" id="discount" onchange="submitForm()">Giảm giá
                        </li>
                        <li>
                            <input type="checkbox" name="asc" id="tangdan" onchange="submitForm()">Giá tăng
                            dần
                        </li>
                        <li>
                            <input type="checkbox" name="desc" id="giamdan" onchange="submitForm()">Giá giảm
                            dần
                        </li>
                    </ul>
                </form>
            </div>

            <script>
                function submitForm() {
                    document.getElementById('filterForm').submit();
                }
            </script>
            <section class="slider_products">
                <div class="container">
                    <div class="container_items">
                        <div class="container_main_products">
                            <div class="container_slider_main_products">
                                <div class="main_products">
                                    @foreach ($product as $item)
                                        <div class="item_content">
                                            <a href="./detailsproduct/{{ $item->id }}"><img src="./Image_products/{{ $item->img }}" alt="" style="width: 100%"></a>
                                            <div class="item_text">
                                                {{-- <li class="tro_gia"><img src="./Image_products/icon_2.jpg"
                                                        alt="">
                                                    <p>Trợ giá hấp dẫn</p>
                                                </li> --}}
                                                <li><a href="./detailsproduct/{{ $item->id }}">
                                                        <h3>{{ $item->name }}</h3>
                                                    </a></li>
                                                    <div class="item-compare gray-bg">
                                                        @foreach ($item->config_Products as $config)
                                                            <span>{{ $config->screen }}</span>
                                                            <span>{{ $config->led }}</span>
                                                        @endforeach
                                                    </div>
                                                    <div class="dung_luong_iphone">
                                                        <ul>
                                                            @foreach ($item->config_Products as $config)
                                                                <li><a href="#">{{ $config->ram }}</a></li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <div class="dung_luong_iphone">
                                                        <span>{{ $item->mota }}</span>
                                                    </div>
                                                <li><a
                                                        href=""><del>{{ number_format($item->price, 0, '.', '.') }}</del><sup>đ</sup></a><span>-{{ $item->sale }}%</span>
                                                </li>
                                                <li><a
                                                        href="#">{{ number_format($item->getDiscountedPrice(), 0, '.', '.') }}<sup>đ</sup></a>
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
                    </div>
                </div>
            </section>
            <nav aria-label="Page navigation example">
                {{ $product->links() }}
            </nav>
        </section>
        <!-- ---------------------------------FOOTER---------------------------------- -->
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
        <!-- ---------------------------------END---------------------------------- -->
        <script src="{{ asset('javacript/javascript.js') }}"></script>
    </section>
</body>

</html>

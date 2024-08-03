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
    <title>Document</title>
</head>

<body>
    <header>
        <img src="./Images_Logo/logotop2.webp" alt="">
    </header>
    <nav>
        <div class="header_top">
            <ul>
                <li> <img src="./Images_Logo/logotgdd.png" style="width: 300px;" alt=""></li>
                <li id="address_form"><a href="#"><span>Xem giá tồn kho tại:</span><br>Hồ Chí Minh<i
                            class="fas fa-sort-down"></i></a>
                    <div class="address_form">
                        <div class="address_form_content">
                            <h2>Chọn địa chỉ giao hàng <span id="close_form">x Đóng</span></h2>
                            <form action="">
                                <p>Chọn đầy đủ địa chỉ nhận hàng để biết chính xác thời gian giao</p>
                                <select name="" id="">
                                    <option value="">Hồ Chí Minh</option>
                                    <option value="">Hà Nội</option>
                                    <option value="">Hải Phòng</option>
                                </select>
                                <select name="" id="">
                                    <option value="">Đống Đa</option>
                                    <option value="">Quận 1</option>
                                    <option value="">Bình Thạnh</option>
                                </select>
                                <select name="" id="">
                                    <option value="">Phường 15</option>
                                    <option value="">Thống Nhất</option>
                                    <option value="">Thanh Đa</option>
                                </select>
                                <input type="text" name="text" placeholder="Số nhà, tên đường(không bắt buộc)">
                                <button>XÁC NHẬN</button>
                            </form>
                        </div>
                    </div>
                </li>
                <form role="search" name="search" action="/search" id="searchform" method="GET">
                    <li>
                        <input type="text" name="key" id="search" placeholder="Bạn tìm gì...?"
                               style="font-size: 14px;">
                        <button class="fas fa-search" type="submit" id="searchsubmit"></button>
                    </li>
                </form>

                <li><a href=""></a><button><i class="fas fa-shopping-cart"></i>Giỏ hàng</button></li>
                <li><a href="">Tài khoản &<br> Đơn hàng</a></li>
                <li><a href=""><span class="btn_in"><span class="btn_out"></span></span>Mua thẻ nạp ngay!</a>
                </li>
                <li><a href="">24h<br>Công nghệ</a></li>
                <li><a href="">Hỏi đáp</a></li>
                <li><a href="">Game App</a></li>
            </ul>
        </div>
    </nav>
    <section class="menu-bar">
        <div class="container">
            <div class="content_menu">
                <ul>
                    <li><a href=""><i class="fas fa-mobile-alt"></i>Điện thoại</a></li>
                    <li><a href=""><i class="fas fa-laptop"></i>Laptop</a></li>
                    <li><a href=""><i class="fas fa-tablet"></i>Tablet</a></li>
                    <li><a href=""><i class="fas fa-headphones-alt" style="color: black;"></i>Phụ kiện<i
                                style="font-size: 20px;margin-left: 5px;" class="fas fa-sort-down"></i></a>
                        <div class="sub_menu">
                            <ul>
                                <li><a href="">
                                        <h3>PHỤ KIỆN DI ĐỘNG</h3>
                                    </a></li>
                                <li><a href="">Phụ kiện A</a></li>
                                <li><a href="">Phụ kiện A</a></li>
                                <li><a href="">Phụ kiện A</a></li>
                                <li><a href="">Phụ kiện A</a></li>
                                <li><a href="">Phụ kiện A</a></li>
                                <li><a href="">Phụ kiện A</a></li>
                                <li><a href="">Phụ kiện A</a></li>
                                <li><a href="">Phụ kiện A</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href=""><i class="fas fa-stopwatch-20"></i>SmartWatch</a></li>
                    <li><a href=""><i class="fas fa-mobile-alt"></i>Đồng hồ</a></li>
                    <li><a href="">Máy cũ, Thu cũ<i style="font-size: 20px;margin-left: 5px;"
                                class="fas fa-sort-down"></i></a>
                        <div class="sub_menu">
                            <ul>
                                <li><a href="">Máy cũ giá rẻ</a></li>
                                <li><a href="">Thu cũ đổi mới</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="">PC, Máy in<i style="font-size: 20px;margin-left: 5px;"
                                class="fas fa-sort-down"></i></a>
                        <div class="sub_menu">
                            <ul>
                                <li><a href="">Máy in</a></li>
                                <li><a href="">Mực in</a></li>
                                <li><a href="">Màn hình máy tính</a></li>
                                <li><a href="">Máy tính để bàn</a></li>
                                <li><a href="">Máy chơi game cầm tay</a></li>
                                <li><a href="">Phần mềm</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="">Sim, Thẻ cào</a></li>
                    <li><a href="">Dịch vụ tiện ích<i style="font-size: 20px;margin-left: 5px;"
                                class="fas fa-sort-down"></i></a></li>
                </ul>
            </div>
        </div>
    </section> <!-- ---------------------------------------SLIDER---------------------------- -->
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
                        <div class="img"><a href="#"><img src="./Images_Logo/img3.webp" alt=""></a>
                            </li>
                        </div>
                        <div class="img"><a href="#"><img src="./Images_Logo/img4.webp" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="filter_container">
                <ul>
                    <li><i class="fas fa-filter"></i>Bộ lọc</li>
                    <li>Hãng</li>
                    <li>Giá</li>
                    <li style="width: 120px;">Loại điện thoại</li>
                    <li>Nhu cầu</li>
                    <li>RAM</li>
                    <li style="width: 150px;">Dung lượng lưu trữ</li>
                    <li style="width: 150px;">Tính năng sạc</li>
                    <li style="width: 150px;">Tính năng đặc biệt</li>
                </ul>
            </div>
            <div class="menu_brand_products">
                <ul>
                    <li><a href="#"><img src="./Images_Logo/samsung.png" alt=""></a></li>
                    <li><a href="#"><img src="./Images_Logo/iphone.png" alt=""></a></li>
                    <li><a href="#"><img src="./Images_Logo/oppo.jpg" alt=""></a></li>
                    <li><a href="#"><img src="./Images_Logo/xiaomi.png" alt=""></a></li>
                    <li><a href="#"><img src="./Images_Logo/vivo.png" alt=""></a></li>
                    <li><a href="#"><img src="./Images_Logo/realme.png" alt=""></a></li>
                    <li><a href="#"><img src="./Images_Logo/honor.png" alt=""></a></li>
                    <li><a href="#"><img src="./Images_Logo/tcl.jpg" alt=""></a></li>
                    <li><a href="#"><img src="./Images_Logo/okia.jpg" alt=""></a></li>
                    <li><a href="#"><img src="./Images_Logo/masstel.png" alt=""></a></li>
                    <li><a href="#"><img src="./Images_Logo/mobell.jpg" alt=""></a></li>
                    <li><a href="#"><img src="./Images_Logo/itel.jpg" alt=""></a></li>
                </ul>
            </div>
            <div class="text_nhu_cau_mua">
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
            </div>
            <div class="menu_checkbox_locSP">
                <ul>
                    <li><strong>{{ $productCount }} điện thoại</strong></li>
                    <li><input type="checkbox" name="discount">Giảm giá</li>
                    <li><input type="checkbox" name="limit" id="limit">Sản phẩm đặc quyền</li>
                    <li><input type="checkbox" name="new" id="new">Mới</li>
                </ul>
            </div>
            <section class="slider_products">
                <div class="container">
                    <div class="container_items">
                        <div class="container_main_products">
                            <div class="container_slider_main_products">
                                <div class="main_products">
                                    @foreach ($product as $item)
                                        <div class="item_content">
                                            <img src="./Image_products/{{ $item->img }}" alt="">
                                            <div class="item_text">
                                                <li class="tro_gia"><img src="./Image_products/icon_2.jpg"
                                                        alt="">
                                                    <p>Trợ giá hấp dẫn</p>
                                                </li>
                                                <li><a href="./details.html">
                                                        <h3>{{ $item->name }}</h3>
                                                    </a></li>
                                                <div class="item-compare gray-bg">
                                                    <span>6.7"</span>
                                                    <span>Super Retina XDR</span>
                                                </div>
                                                <div class="dung_luong_iphone">
                                                    <ul>
                                                        <li><a href="#">256GB</a></li>
                                                        <li><a href="#">512GB</a></li>
                                                        <li><a href="#">1TB</a></li>
                                                    </ul>
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
            <div class="button_show_all">
                <button name="show_all"><a href="#">Xem thêm kết quả</a></button>
            </div>
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

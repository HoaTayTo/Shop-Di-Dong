<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/54f0cb7e4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('javacript/javascript.js') }}">
    <link rel="stylesheet" href="{{ asset('css/details.css') }}">
    <link rel="stylesheet" href="{{ asset('css/thong_tin_san_pham.css') }}">
    <link rel="stylesheet" href="{{ asset('javacript/detail.js') }}">
    <link rel="stylesheet" href="{{ asset('javacript/thong_tin_san_pham.js') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<style>
    .mua_ngay {
        width: 40%;
        height: 50px;
    }

    .mua_ngay button {
        width: 100%;
        height: 100%;
        background-color: #FB6E2E;
        color: #fff;
        border: none;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        cursor: pointer;
    }
</style>

<body>
    @include('account.layout.header');
    <div class="div">
        <h3 style="margin:20px 0px;margin-left:12%; font-size: 18px">Điện thoại {{ $product->name }}</h3>
        <hr style="width: 1300px;margin: 20px auto;">
    </div>
    <session>
        <div class="box_main">
            <div class="box_left">
                {{-- ----------------ẢNH LIÊN QUAN ĐẾN ẢNH CHÍNH---------------- --}}
                <!-- details.blade.php -->
                <!-- details.blade.php -->
                <div class="product-gallery">
                    <div style="width: 500px; height: 500px;">
                        <img class="main-image" id="mainImage" src="{{ asset('Image_products/' . $product->img) }}"
                            alt="Main Product Image" style="object-fit: cover">
                    </div>
                    <div class="thumbnails">
                        <!-- Hiển thị ảnh chính -->
                        <img src="{{ asset('Image_products/' . $product->img) }}" alt="Thumbnail 1"
                            onclick="changeImage('{{ asset('Image_products/' . $product->img) }}')">
                        <!-- Hiển thị các ảnh liên quan -->
                        @foreach ($product->images_Related as $item)
                            <img class="main-image" src="{{ asset('Image_products/' . $item->img) }}"
                                alt="Thumbnail {{ $item->id }}"
                                onclick="changeImage('{{ asset('Image_products/' . $item->img) }}')">
                        @endforeach
                    </div>
                    <div class="controls">
                        <button class="prev" onclick="prevImage()"><i class="fas fa-chevron-left"></i></button>
                        <button class="next" onclick="nextImage()"><i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
                <div class="chinh_sach_bao_hanh">
                    <div class="chinh_sach_bao_hanh_top">
                        <ul>
                            <li>Hư gì đổi nấy 12 tháng tại 3158 siêu thị toàn quốc (miễn phí tháng đầu)</li>
                            <li>Bảo hành chính hãng điện thoại 1 năm tại các trung tâm bảo hành hãng </li>
                        </ul>
                    </div>
                    <div class="chinh_sach_bao_hanh_bottom">
                        <ul>
                            <li>Bộ sản phẩm gồm: Hộp, Sách hướng dẫn, Cây lấy sim, Cáp Type C</li>
                        </ul>
                    </div>
                </div>
                <div class="tieu_de_san_pham_lien_quan">
                    <strong style="font-size: 14px; margin-left: 10px;">Phụ kiện nên có cho
                        {{ $product->name }}</strong>
                    <div class="container_san_pham_lien_quan">
                        @foreach ($product->phukien as $item)
                            <div class="san_pham_lien_quan">
                                <div class="main_san_pham_lien_quan">
                                    <div class="noi_dung_san_pham">
                                        <img src="{{ asset('Phu_kien/' . $item->img) }}" alt="">
                                        <div class="noi_dung">
                                            <li><img src="{{ asset('Image_products/icon_2.jpg') }}" alt="">
                                                <p>Trợ giá hấp dẫn</p>
                                            </li>
                                            <li><a href="./detailsproduct/{{ $item->id }}">
                                                    <h3>{{ $item->name }}</h3>
                                                </a></li>
                                            <li><a
                                                    href="./detailsproduct/{{ $item->id }}">{{ number_format($item->getDiscountedPrice(), 0, '.', '.') }}<sup>đ</sup></a>
                                            </li>
                                            <li><a href="./detailsproduct/{{ $item->id }}">
                                                    <del>{{ $item->price }}</del><sup>đ</sup></a><span>-10%</span>
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
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="review-section">
                    <h2>Đánh giá Điện thoại {{ $product->name }}</h2>
                    <div class="overall-rating">
                        <span class="rating-number">4.0</span>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="total-reviews">126 đánh giá</span>
                    </div>
                    <div class="rating-distribution">
                        <div class="rating-bar">
                            <span>5 <i class="fas fa-star"></i></span>
                            <div class="bar">
                                <div class="filled" style="width: 56%;"></div>
                            </div>
                            <span>56%</span>
                        </div>
                        <div class="rating-bar">
                            <span>4 <i class="fas fa-star"></i></span>
                            <div class="bar">
                                <div class="filled" style="width: 10%;"></div>
                            </div>
                            <span>10%</span>
                        </div>
                        <div class="rating-bar">
                            <span>3 <i class="fas fa-star"></i></span>
                            <div class="bar">
                                <div class="filled" style="width: 19%;"></div>
                            </div>
                            <span>19%</span>
                        </div>
                        <div class="rating-bar">
                            <span>2 <i class="fas fa-star"></i></span>
                            <div class="bar">
                                <div class="filled" style="width: 10%;"></div>
                            </div>
                            <span>10%</span>
                        </div>
                        <div class="rating-bar">
                            <span>1 <i class="fas fa-star"></i></span>
                            <div class="bar">
                                <div class="filled" style="width: 6%;"></div>
                            </div>
                            <span>6%</span>
                        </div>
                    </div>
                    <div class="user-reviews">
                        <div class="review">
                            <div class="user-info">
                                <img src="{{ asset('Images_Logo/p1.jpg') }}" alt="User Image">
                                <span>Trần Văn Niên</span>
                                <span class="verified"><i class="fas fa-check-circle"></i> Đã mua tại TGDD</span>
                            </div>
                            <div class="user-review">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <p>Sẽ giới thiệu cho bạn bè, người thân. Mới sạc có 25 lần đã tụt 1% pin rồi.</p>
                                <div class="review-images">
                                    <img src="{{ asset('Image_products/1.jpg') }}" alt="Review Image">
                                    <img src="{{ asset('Image_products/sam-sung-1.webp') }}" alt="Review Image">
                                </div>
                                <div class="review-footer">
                                    <span class="helpful"><i class="fas fa-thumbs-up"></i> Hữu ích</span>
                                    <span class="time">Đã dùng khoảng 1 tháng</span>
                                </div>
                            </div>
                        </div>
                        <div class="review">
                            <div class="user-info">
                                <img src="{{ asset('Images_Logo/p2.jpg') }}" alt="User Image">
                                <span>Cao Lê Hoàng Nhi</span>
                                <span class="verified"><i class="fas fa-check-circle"></i> Đã mua tại TGDD</span>
                            </div>
                            <div class="user-review">
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <p>Sẽ giới thiệu cho bạn bè, người thân. Mua hàng ở tgdd xem trên web có ưu đãi mà ra
                                    tiệm thì lại không có, quá tệ.</p>
                                <div class="review-images">
                                    <img src="{{ asset('Image_products/2.jpg') }}" alt="Review Image">
                                </div>
                                <div class="review-footer">
                                    <span class="helpful"><i class="fas fa-thumbs-up"></i> Hữu ích (7)</span>
                                    <span class="time">Đã dùng khoảng 1 ngày</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review-buttons">
                        <button class="view-all-reviews">Xem 126 đánh giá</button>
                        <button class="write-review">Viết đánh giá</button>
                    </div>
                </div>
            </div>
            <div class="box_right">

                {{-- <div class="dung_luong">
                    @foreach ($product->config_Products as $item)
                        <a href="">{{ $item->capacity }}</a>
                    @endforeach
                </div> --}}
                {{-- <div class="mau_sac">
                    <a href="">Titan xanh</a>
                    <a href="">Titan đen</a>
                    <a href="">Titan tự nhiên</a>
                    <a href="">Titan trắng</a>
                </div> --}}
                <div class="gia_san_pham">
                    <strong
                        style="color: #D0021C;">{{ number_format($product->getDiscountedPrice(), 0, '.', '.') }}<sup>đ</sup></strong>
                    <p><del>{{ number_format($product->price, 0, '.', '.') }}<sup>đ</sup></del></p>
                    <p style="color: #f14e64;">-{{ $product->sale }}%</p>
                    <span>Trả góp 0%</span>
                </div>
                <div class="khuyen_mai">
                    <div class="top_khuyen_mai">
                        <p style="font-weight: bold;padding: 5px 5px;">Khuyến mãi</p>
                        <i style="padding:5px 5px;">Giá và khuyến mãi dự kiến áp dụng đến 23:00 | 31/05</i>
                    </div>
                    <div class="bottom_khuyen_mai">
                        <p>1</p>
                        <span>Ốp lưng chính hãng Apple giảm thêm 300K khi mua kèm iPhone (áp dụng tuỳ model)</span>
                    </div>
                    <div class="bottom_khuyen_mai">
                        <p>2</p>
                        <span>Thu cũ Đổi mới: Giảm đến 2 triệu (Tuỳ model máy cũ,thanh toán qua cổng online) <a
                                href="#">Xem chi tiết</a></span><br>

                    </div>
                    <div class="bottom_khuyen_mai">
                        <p>3</p>
                        <span>
                            Cơ hội trúng 10 xe máy Yamaha Sirius mỗi tháng, tổng giải thưởng lên đến 390 Triệu <a
                                href="#">Xem chi tiết</a></span>
                    </div>
                </div>
                <div class="box_main">
                    <!-- Your existing HTML code -->
                    <div class="mua_ngay">
                        <button id="btnMuaNgay">MUA NGAY</button>
                    </div>
                </div>
                <!-- The Modal -->
                <div id="myModal" class="modal">
                    <form method="POST" action="{{ route('addToCart') }}">
                        @csrf
                        <div class="modal-content">
                            <span class="close">&times;</span>
                            <p style="font-size: 14px; margin-bottom:15px;">{{ $product->name }}</p>
                            <p style="color: red; font-size: 18px;">
                                {{ number_format($product->getDiscountedPrice(), 0, '.', '.') }}<sup>đ</sup></p>
                            <hr style="width: 100%">

                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <div class="form-group">
                                {{-- <label for="color">Chọn màu:</label> --}}
                                <div class="color-selector">
                                    <label>
                                        <img src="{{ asset('Image_products/' . $product->img) }}" alt="Xanh lá"
                                            style="width: 50px; height: 50px;">
                                        {{-- <input type="radio" name="color" value="Xanh lá">
                                        <p> <span>Xanh lá</span></p> --}}
                                    </label>
                                    <!-- Add more colors as needed -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Chọn số lượng:</label>
                                <div class="quantity-selector">
                                    <button type="button" class="quantity-button" id="decrement">−</button>
                                    <input type="text" id="quantity" name="quantity" value="1"
                                        class="quantity-input" readonly>
                                    <button type="button" class="quantity-button" id="increment">+</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="#">Xem tất cả khuyến mãi</a>
                            </div>
                            <div class="addtoCart">
                                @if (@session('UserName'))
                                <button type="submit" class="btn_mua">THÊM VÀO GIỎ HÀNG</button>
                                <div class="showCart">
                                    <a href="{{ route('cart.showCart') }}" class="btn-secondary">Xem giỏ hàng</a>
                                </div>
                                @else
                                <div class="btn_mua">
                                <a href="{{ route('user.login') }}">THÊM VÀO GIỎ HÀNG</a>
                                </div>
                                <div class="show_cart2">
                                <a href="{{ route('user.login') }}" class="btn-secondary">Xem giỏ hàng</a>
                                </div>
                                @endif
                            </div>

                        </div>
                    </form>

                </div>
                <script>
                     function showLoginAlert() {
                        Swal.fire({
                            title: 'Thông báo',
                            text: 'Vui lòng đăng nhập để xem giỏ hàng!',
                            icon: 'warning',
                            confirmButtonText: 'OK'
                        });
                    }

                    document.addEventListener('DOMContentLoaded', function() {
                        const decrementButton = document.getElementById('decrement');
                        const incrementButton = document.getElementById('increment');
                        const quantityInput = document.getElementById('quantity');

                        decrementButton.addEventListener('click', function() {
                            let currentValue = parseInt(quantityInput.value, 10);
                            if (currentValue > 1) {
                                quantityInput.value = currentValue - 1;
                            }
                        });

                        incrementButton.addEventListener('click', function() {
                            let currentValue = parseInt(quantityInput.value, 10);
                            quantityInput.value = currentValue + 1;
                        });
                    });
                    // Get the modal
                    var modal = document.getElementById("myModal");

                    // Get the button that opens the modal
                    var btn = document.getElementById("btnMuaNgay");

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks the button, open the modal
                    btn.onclick = function() {
                        modal.style.display = "flex";
                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                        modal.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>
                {{-- <div class="btn_mua_tra_gop">
                    <div class="btn_left"><a href="#">MUA TRẢ GÓP 0%</a><br><span>Duyệt hồ sơ trong vòng 5
                            phút</span>
                    </div>
                    <div class="btn_right"><a href="#">TRẢ GÓP 0 đồng qua thẻ</a><br><span>Visa, Mastercard,
                            JCB,
                            Amex</span></div>
                </div> --}}
                <div class="goi_mua_hang"><span style="font-size: 14px;margin-top: 10px;">Gọi đặt mua <a
                            href="#">1900 232
                            460</a> (7:30
                        - 22:00)</span>
                </div>
                {{-- <div class="container_uu_dai">
                    <h3>ƯU ĐÃI HẤP DẪN KHI MUA KÈM</h3>
                    <hr>
                    <div class="san_pham_mua_sam">
                        <img src="{{ asset('Image_products/' . $product->img) }}" alt="">
                        <div class="san_pham_di_kem">
                            <div class="content_top">
                                <p>{{ $product->name }}</p>
                            </div>
                            <div class="content_bottom">
                                <p style="color: #D0021C;font-weight: bold;margin-right: 5px;">
                                    {{ number_format($product->getDiscountedPrice()) }}<sup>đ</sup>
                                </p>
                                <span><del>{{ number_format($product->price) }}<sup>đ</sup></del></span>
                            </div>
                        </div>
                    </div>
                    @foreach ($product->phukien->take(4) as $item)
                        <div class="mua_sam_uu_dai">
                            <img src="{{ asset('Phu_kien/' . $item->img) }}" alt="">
                            <div class="discount-label">Giảm {{ $item->sale }}%</div>
                            <div class="san_pham_di_kem">
                                <div class="content_top">
                                    <input type="checkbox" class="product-checkbox"
                                        data-price="{{ $item->getDiscountedPrice() }}">
                                    <p>{{ $item->name }}</p>
                                </div>
                                <div class="content_bottom">
                                    <p style="color: #D0021C;font-weight: bold;margin-right: 5px;">
                                        {{ number_format($item->getDiscountedPrice(), 0, ',', '.') }}<sup>đ</sup>
                                    </p>
                                    <span><del>{{ number_format($item->price, 0, ',', '.') }}<sup>đ</sup></del></span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="tong_tien" style="text-align: center;font-size: 14px;">
                        <p>Tổng tiền: <strong style="color: #D0021C;font-size: 25px;"
                                id="total-amount">0<sup>đ</sup></strong></p>
                    </div>
                    <div class="mua_theo_combo">
                        <a href="#" style="color: #fff;font-size: 20px;">MUA 1 SẢN PHẨM</a>
                    </div>
                </div> --}}
                <div class="container_khuyen_mai">
                    <div class="khuyen_mai">
                        <div class="top_khuyen_mai">
                            <p style="font-weight: bold; padding: 5px 5px;">7 ưu đãi thêm</p>
                            <i style="padding: 5px 5px;">Giá và khuyến mãi dự kiến áp dụng đến 23:00 | 31/05</i>
                        </div>
                        <div class="bottom_khuyen_mai">
                            <p>1</p>
                            <span>Mua kèm sim Vina Thoại 6T giảm giá 30%</span>
                        </div>
                        <div class="bottom_khuyen_mai">
                            <p>2</p>
                            <span>Apple Watch giảm thêm đến 1,500,000đ (Tùy Model) khi mua kèm Iphone/iPad/Macbook/iMac
                                <a href="#" style="color: rgb(65, 183, 226);">Xem chi tiết</a></span><br>
                        </div>
                        <div class="bottom_khuyen_mai">
                            <p>3</p>
                            <span>Mua 1 số iPad giảm đến 20% (Không kèm khuyến mãi khác của iPad)</span>
                        </div>
                        <div class="extra_khuyen_mai" style="display: none;">
                            <div class="bottom_khuyen_mai">
                                <p>4</p>
                                <span>Mua Miếng Dán/ Tai nghe Apple giảm đến 50% (Không áp dụng khuyến mãi khác)</span>
                            </div>
                            <div class="bottom_khuyen_mai">
                                <p>5</p>
                                <span>Mua Adapter sạc/Cáp sạc Apple giảm đến 20% (Không áp dụng khuyến mãi khác)</span>
                            </div>
                            <div class="bottom_khuyen_mai">
                                <p>6</p>
                                <span>Mua Ốp lưng/Bao da/miếng dán mặt sau/Kính bảo vệ camera giảm đến 70% (Không áp
                                    dụng)</span>
                            </div>
                            <div class="bottom_khuyen_mai">
                                <p>7</p>
                                <span>Mua đồng hồ thời trang giảm 40% (không áp dụng khuyến mãi khác)</span>
                            </div>
                        </div>
                        <a href="#" id="xemThem"
                            style="color: rgb(65, 183, 226); display: block; margin: 10px 0;text-align: center;">Xem
                            thêm</a>
                    </div>
                </div>
                <div class="cau_hinh_san_pham">
                    <h3 style="margin: 20px 0px;text-align: center;font-size: 22px;">Cấu hình điện thoại
                        {{ $product->name }}</h3>
                    <div class="container_cau_hinh_san_pham">
                        @foreach ($product->config_Products as $item)
                            <div class="content_cau_hinh_san_pham">
                                <ul>
                                    <li>
                                        <p>CPU: </p> <span>{{ $item->screen }}</span>
                                    </li>
                                    <li>
                                        <p>RAM: </p><span>{{ $item->operating_system }}</span>
                                    </li>
                                    <li>
                                        <p>Ổ cứng:</p><span>{{ $item->camera_behind }}</span>
                                    </li>
                                    <li>
                                        <p>Màn hình:</p><span>{{ $item->camera_front }}</span>
                                    </li>
                                    <li>
                                        <p>Card màn hình:</p><span>{{ $item->chip }}</span>
                                    </li>
                                    <li>
                                        <p>Cổng kết nối:</p><span>{{ $item->ram }}</span>
                                    </li>
                                    <li>
                                        <p>Hệ điều hành:</p><span>{{ $item->capacity }}</span>
                                    </li>
                                    <li>
                                        <p>Kích thước, khối lương:</p><span>{{ $item->pin }}</span>
                                    </li>
                                    <li>
                                        <p>Thời điểm ra mắt:</p><span>{{ $item->pin }}</span>
                                    </li>
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- ---------------------------------FOOTER---------------------------------- -->
            </div>
        </div>
    </session>
    <section class="slider_products">
        <div class="container">
            <div class="container_items">
                <h3 style="font-size: 22px">Sản phẩm thường mua cùng</h3>
                <div class="container_main_products">
                    <div class="container_slider_main_products">
                        <div class="main_products">
                            @foreach ($product->phukien as $item)
                                <div class="item_content">
                                    <img src="{{ asset('Phu_kien/' . $item->img) }}" alt="">
                                    <div class="item_text">
                                        <li><img src="{{ asset('Image_products/icon_2.jpg') }}" alt="">
                                            <p>Trợ giá hấp dẫn</p>
                                        </li>
                                        <li><a href="#">
                                                <h3>{{ $item->name }}</h3>
                                            </a></li>
                                        <li><a
                                                href="#">{{ number_format($item->getDiscountedPrice(), 0, '.', '.') }}<sup>đ</sup></a>
                                        </li>
                                        <li><a href="">
                                                <del>{{ $item->price }}</del><sup>đ</sup></a><span>-10%</span>
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
            <!-- -------------------BUTTON--------------------------- -->
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
                    <a href="#"><i class="fa-brands fa-youtube" style="color: red;"></i>866k Đăng
                        ký</a>
                    <a href="#"><img src="./Images_Logo/icon_zalo.webp" alt=""
                            style="width: 18px;height: 18px;">ZaloTGDD</a>
                </div>
                <div class="content_footer_col_image">
                </div>
            </div>
        </div>
        <div class="copy_right">
            <p>© 2018. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM cấp ngày
                02/01/2007.
                GPMXH: 238/GP-BTTTT do Bộ Thông Tin và Truyền Thông cấp ngày 04/06/2020.
                Địa chỉ: 128 Trần Quang Khải, P.Tân Định, Q.1, TP.Hồ Chí Minh. Địa chỉ liên hệ và gửi chứng từ:
                Lô
                T2-1.2, Đường D1, Đ. D1, P.Tân Phú, TP.Thủ Đức, TP.Hồ Chí Minh. Điện thoại: 028 38125960. Email:
                cskh@thegioididong.com. Chịu trách nhiệm nội dung: Huỳnh Văn Tốt. Email:
                hotrotmdt@thegioididong.com. <a href="#">Xem chính sách sử dụng</a></p>
        </div>
    </footer>
    <!-- ---------------------------------END---------------------------------- -->
    <script src="{{ asset('javacript/detail.js') }}"></script>
    <script src="{{ asset('javacript/javascript.js') }}"></script>
    <script src="{{ asset('javacript/thong_tin_san_pham.js') }}"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('javacript/javascript.js') }}">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    <link rel="stylesheet" href="{{ asset('css/details.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('javacript/cart.js') }}">
    <link rel="stylesheet" href="{{ asset('css/thong_tin_san_pham.css') }}">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/status_order.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>

<body>
    @if (session('success'))
    <script>
        Swal.fire({
            title: "The Internet?",
            text: " {{ session('success') }}",
            icon: "success"
        });
    </script>
@endif

{{-- Hiển thị thông báo lỗi chung nếu có --}}
@if (session('error'))
    <script>
        Swal.fire({
            title: "The Internet?",
            text: "  {{ session('error') }}",
            icon: "error"
        });
    </script>
@endif
<header>
    <img src="{{ asset('Images_Logo/logotop2.webp') }}" alt="">
</header>
<nav>
    <div class="header_top">
        <ul>
            <li> <img src="{{ asset('./Images_Logo/logotgdd.png') }}" style="width: 300px;" alt=""></li>
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
            <li >
                <form role="search" name="search" action="/search" id="searchform" method="GET">
                    <input type="text" name="key" id="search" placeholder="Bạn tìm gì...?"
                        style="font-size: 14px;">
                    <button type="submit" id="searchsubmit"style="position: absolute;font-size: 15px;right: 10px;line-height: 30px;cursor: pointer;border:none;background-color:white;">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </li>
            <li>
                <a href="{{ route('cart.showCart') }}"><button><i class="fas fa-shopping-cart"></i>Giỏ hàng</button>
                </a></li>
            <li>
                @if(@session('UserName'))
                <a href="{{ route('statusOrder') }}">Đơn hàng <br> {{ session('UserName') }} </a>
                @else
                <a href="{{ route('user.login') }}">Tài khoản &<br> Đơn hàng</a>
                @endif
            </li>
            <li><a href=""><span class="btn_in"><span class="btn_out"></span></span>Mua thẻ nạp ngay!</a>
            </li>
            <li><a href="">24h<br>Công nghệ</a></li>
            <li><a href="">Hỏi đáp</a></li>
            {{-- <li>
                @if (session('UserName'))
                    <div class="dropdown">
                        <button style="padding: 0px 10px" class="dropbtn"
                            onclick="toggleDropdown()">{{ session('UserName') }}</button>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="{{ route('user.logout') }}">Log out</a>
                        </div>
                    </div>
                @else
                    <a href="{{ route('user.login') }}"><i class="fa-solid fa-right-to-bracket"></i></a>
                @endif
            </li> --}}
                <script>
                    function toggleDropdown() {
                        document.getElementById("myDropdown").classList.toggle("show");
                    }

                    // Close the dropdown if the user clicks outside of it
                    window.onclick = function(event) {
                        if (!event.target.matches('.dropbtn')) {
                            var dropdowns = document.getElementsByClassName("dropdown-content");
                            for (var i = 0; i < dropdowns.length; i++) {
                                var openDropdown = dropdowns[i];
                                if (openDropdown.classList.contains('show')) {
                                    openDropdown.classList.remove('show');
                                }
                            }
                        }
                    }
                </script>
            </ul>
        </div>
    </nav>
    <section class="menu-bar">
        <div class="container">
            <div class="content_menu">
                <ul>
                    <li><a href="/product"><i class="fas fa-mobile-alt"></i>Điện thoại</a></li>
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
    <div class="container_status">
        <div class="sidebar">
            <h2 style="margin-right: 30px">Anh {{ session('UserName') }}</h2>
            <a href="{{ route('status.State7') }}" class="filter-button">Đơn hàng đã mua</a>
            <a href="#" class="menu-button" class="filter-button">Thông tin và sổ địa chỉ</a>
            <a href="#" class="logout-button"class="filter-button">Đăng Xuất</a>
        </div>
        <div class="main-content">
            <div class="order-filters">
                <a href="{{ route('statusOrder') }}" class="filter-button">Tất cả</a>
                <a href="{{ route('status.State2') }}" class="filter-button">Chờ xử lý</a>
                <a href="{{ route('status.State3') }}" class="filter-button">Đã xác nhận</a>
                <a href="{{ route('status.State4') }}" class="filter-button">Đang chuyển hàng</a>
                <a href="{{ route('status.State5') }}" class="filter-button">Đang giao hàng</a>
                <a href="{{ route('status.State6') }}" class="filter-button">Đã hủy</a>
                <a href="{{ route('status.State7') }}" class="filter-button">Giao thành công</a>
            </div>
            <div class="order-list">
                @foreach ($donhang as $dh)
                    <p>Đơn hàng: #{{ $dh->orderCode }}</p>
                    @foreach ($dh->orders as $order)
                        <div class="order-item">
                            <div class="product-info">
                                <div class="information_left">
                                    <img style="width: 75px; height: 75px;"
                                        src="./Image_products/{{ $order->Product->img }}" alt="">
                                    <p>{{ $order->Product->name }}</p>
                                </div>
                                <div class="information_right">
                                    <div class="price-status">
                                        <p class="total-price">
                                            <span style="font-size: 18px;">Tổng tiền:
                                                {{ number_format($order->Product->price_sale, 0, '.', '.') }}<sup>đ</sup></span>
                                        </p>
                                    </div>
                                    <div class="status">
                                        <p style="font-size: 15px" class="status">{{ $dh->status }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>

    @include('account.layout.footer')
    <script src="{{ asset('javacript/cart.js') }}"></script>
</body>

</html>

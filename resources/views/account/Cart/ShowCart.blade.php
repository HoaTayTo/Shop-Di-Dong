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
                    @if(@session('UserName'))
                    <a href="{{ route('cart.showCart') }}"><button><i class="fas fa-shopping-cart"></i>Giỏ hàng</button>
                    </a>
                    @else
                    <p>Vui lòng đăng nhập để xem giỏ hàng!</p>
                    @endif
                </li>
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
    <div class="container_cart">
        <?php
        $total_money = 0;
        $total_product = 0;
        ?>
        @foreach ($cart as $cart_item)
            <?php
            $item_total = $cart_item->Product->getDiscountedPrice() * $cart_item->quality; // Tính tiền từng sản phẩm
            $total_money += $item_total; // Cộng tổng tiền sản phẩm
            $total_product++;
            ?>
            <div class="cart_item" data-price="{{ $item_total }}">
                <div class="image_item_cart">
                    <img src="{{ asset('Image_products/' . $cart_item->Product->img) }}" alt="">
                    <div class="btn_dlt">
                        <form action="{{ route('cart.delete') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input hidden type="text" name="cartID" value="{{ $cart_item->cartID }}">
                            <button type="submit" class="btn btn-danger delete-button"><i class="fa-regular fa-circle-xmark"></i>Xóa</button>
                        </form>
                    </div>
                </div>
                <div class="information_item_cart">
                    <ul>
                        <li style="color:black; font-weight:bold">
                            <a href="#">{{ $cart_item->Product->name }}</a>
                        </li>
                        <li style="font-size: 13px">
                            <a href="#">4 khuyến mãi</a>
                        </li>
                        <li style="font-size: 13px">
                            <a href="#">Màu: Titan xanh</a>
                        </li>
                    </ul>
                </div>
                <div class="price_item_cart">
                    <ul>
                        <li>{{ number_format($cart_item->Product->getDiscountedPrice(), 0, '.', '.') }}<sup>đ</sup></li>
                        <li><del>{{ number_format($cart_item->Product->price, 0, '.', '.') }}</del><sup>đ</sup></li>
                        <li>
                            <div class="form-group">
                                <div class="quantity-selector">
                                    <form action="{{ route('cart.UpDateCartTru') }}" method="POST">
                                        @csrf
                                        <input name="cartID" type="text" hidden value="{{ $cart_item->cartID }}">
                                        <button type="submit" class="quantity-button increment">-</button>
                                    </form>
                                    <input type="text" id="quantity" name="quantity" value="{{ $cart_item->quality }}" class="quantity-input" readonly>
                                    <form action="{{ route('cart.UpDateCartAdd') }}" method="POST">
                                        @csrf
                                        <input name="cartID" type="text" hidden value="{{ $cart_item->cartID }}">
                                        <button type="submit" class="quantity-button decrement">+</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        @endforeach
        <div class="total_price">
            @if ($cart->isEmpty())
            <p>Giỏ hàng của bạn đang trống</p>
            @else
            <p>Tạm tính ({{ $total_product }} sản phẩm): <span id="total_money">{{ number_format($total_money, 0, '.', '.') }}</span><sup>₫</sup></p>
            @endif
        </div>
        <hr>
        <div class="row">
            <div class="col-75">
                <div class="contaner_checkout">
                    <form action="{{ route('order.addToOrder') }}" method="POST">
                        @csrf
                        @foreach ($cart as $cart_item)
                            <input hidden name="Cart[{{ $loop->index }}][product_id]" value="{{ $cart_item->ProductID }}">
                            <input hidden name="Cart[{{ $loop->index }}][quantity]" type="text" value="{{ $cart_item->quality }}">
                            <input hidden name="Cart[{{ $loop->index }}][price]" value="{{ $cart_item->Product->price }}">
                        @endforeach
                        <div class="row">
                            <div class="col-50">
                                <h3 style="text-align: center;">THÔNG TIN TÀI KHOẢN</h3>
                                <label for="fname"><i class="fa fa-user"></i> Họ và tên</label>
                                <input type="text" id="fname" name="firstname" placeholder="" value="{{ session('UserName') }}">

                                <input type="hidden" value="{{ $total_money }}" name="money">

                                <label for="phone"><i class="fa fa-envelope"></i> Số điện thoại</label>
                                <input type="text" id="phone" name="phone" value="{{ session('Phone') }}">

                                <label for="adr"><i class="fa fa-address-card-o"></i> Địa chỉ</label>
                                <input type="text" id="adr" name="address" value="{{ session('Address') }}" >
                            </div>
                        </div>
                        <label>
                            <input type="checkbox" checked="checked" name="sameadr"> Giao hàng nhận nơi
                        </label>
                        <input type="submit" value="Tiếp tục đặt hàng" class="btn_checkout">
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('account.layout.footer')
    <script src="{{ asset('javacript/cart.js') }}"></script>
</body>

</html>

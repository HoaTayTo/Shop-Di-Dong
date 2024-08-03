<header>
    <img src="{{ asset('Images_Logo/logotop2.webp') }}" alt="">
</header>
<nav>
    <div class="header_top">
        <ul>
            <li>
                <a href="/"><img src="{{ asset('./Images_Logo/logotgdd.png') }}" style="width: 300px;" alt=""></a>
            </li>
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
            <li>
                <form role="search" name="search" action="/search" id="searchform" method="GET">
                    <input type="text" name="key" id="search" placeholder="Bạn tìm gì...?"
                        style="font-size: 14px;">
                    <button type="submit"
                        id="searchsubmit"style="position: absolute;font-size: 15px;right: 10px;line-height: 30px;cursor: pointer;border:none;background-color:white;">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </li>
            <li>
                @if (@session('UserName'))
                <a href="{{ route('cart.showCart') }}"><button><i class="fas fa-shopping-cart"></i>Giỏ hàng</button></a>
                @else
                <button onclick="showLoginAlert()"><i class="fas fa-shopping-cart"></i>Giỏ hàng</button>
                @endif
            <li>
                @if (@session('UserName'))
                    <a class="top_cart" style="background-color: #FFC602;" href="{{ route('statusOrder') }}">Đơn hàng <br> {{ session('UserName') }}</a>
                @else
                    <a style="background-color: #FFC602; width:100px; height:40px; border-radius:5px;" href="{{ route('user.login') }}">Tài khoản &<br> Đơn hàng</a>
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
                function showLoginAlert() {
                        Swal.fire({
                            title: 'Thông báo',
                            text: 'Vui lòng đăng nhập để xem giỏ hàng!',
                            icon: 'warning',
                            confirmButtonText: 'OK'
                        });
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
                <li><a href="{{route('product.laptop') }}"><i class="fas fa-laptop"></i>Laptop</a></li>
                <li><a href=""><i class="fas fa-tablet"></i>Tablet</a></li>
                <li><a href=""><i class="fas fa-headphones-alt" style="color: black;"></i>Phụ kiện<i
                            style="font-size: 20px;margin-left: 5px;" class="fas fa-sort-down"></i></a>
                    {{-- <div class="sub_menu">
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
                    </div> --}}
                </li>
                <li><a href=""><i class="fas fa-stopwatch-20"></i>SmartWatch</a></li>
                <li><a href=""><i class="fas fa-mobile-alt"></i>Đồng hồ</a></li>
                <li><a href="">Máy cũ, Thu cũ<i style="font-size: 20px;margin-left: 5px;"
                            class="fas fa-sort-down"></i></a>
                    {{-- <div class="sub_menu">
                        <ul>
                            <li><a href="">Máy cũ giá rẻ</a></li>
                            <li><a href="">Thu cũ đổi mới</a></li>
                        </ul>
                    </div> --}}
                </li>
                <li><a href="">PC, Máy in<i style="font-size: 20px;margin-left: 5px;"
                            class="fas fa-sort-down"></i></a>
                    {{-- <div class="sub_menu">
                        <ul>
                            <li><a href="">Máy in</a></li>
                            <li><a href="">Mực in</a></li>
                            <li><a href="">Màn hình máy tính</a></li>
                            <li><a href="">Máy tính để bàn</a></li>
                            <li><a href="">Máy chơi game cầm tay</a></li>
                            <li><a href="">Phần mềm</a></li>
                        </ul>
                    </div> --}}
                </li>
                <li><a href="">Sim, Thẻ cào</a></li>
                <li><a href="">Dịch vụ tiện ích<i style="font-size: 20px;margin-left: 5px;"
                            class="fas fa-sort-down"></i></a></li>
            </ul>
        </div>
    </div>
</section> <!-- ---------------------------------------SLIDER---------------------------- -->

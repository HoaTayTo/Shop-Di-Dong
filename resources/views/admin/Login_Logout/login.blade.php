<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/products.css') }}">
    <link rel="stylesheet" href="{{ asset('css/details.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<style>
    body {
        background-color: #F4F6F9;
    }

    .container_image {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 10% auto;
    }

    .container_image img {
        width: 540px;
        height: 270px;
    }

    .login {
        width: 500px;
        height: 369px;
        border: 1px solid #e0e0e0;
        border-radius: 12px;
        text-align: center;
        background-color: #fff;
        box-shadow: 0 0 16px rgba(0, 0, 0, .11);

        border: 1px solid;
    }

    .header_top ul {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .header_top ul li {
        margin-right: 20px;
    }

    .header_top ul li form {
        position: relative;
    }

    .card {
        width: 500px;
        height: 369px;
        border: 1px solid #e0e0e0;
        border-radius: 12px;
        background-color: #fff;
        box-shadow: 0 0 16px rgba(0, 0, 0, .11);
    }

    .card-header {
        text-align: center;
        margin: 40px 20px auto;
        font-size: 20px
    }

    .card-body {
        padding: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 8px;
        border: 1px solid #e0e0e0;
        border-radius: 4px;
    }

    .btn {
       max-width: 250px;
       height: 40px;
       margin-left: 100px;
       border-radius: 20px;
       color: #fff;
       background-color: #F96F3A;
       border: none;
       cursor: pointer;
    }

    .btn-block {
        width: 100%;
    }

    .signup {
        margin-top: 20px;
        text-align: center;
    }

    .signup p {
        margin: 0;
        margin-bottom: 5px;
    }

    .signup a {
        color: #007bff;
        text-decoration: none;
    }

    .signup a:hover {
        text-decoration: underline;
    }
    .form-group{
        max-width: 350px;
        height: 50px;
        margin: 20px auto;
    }
</style>

<body>
    <header>
        <img src="{{ asset('Images_Logo/logotop2.webp') }}" alt="">
    </header>
    <nav>
        <div class="header_top">
            <ul>
                <li><img src="{{ asset('./Images_Logo/logotgdd.png') }}" style="width: 300px;" alt=""></li>
                <li id="address_form"><a href="#"><span>Xem giá tồn kho tại:</span><br>Hồ Chí Minh<i class="fas fa-sort-down"></i></a>
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
                        <input type="text" name="key" id="search" placeholder="Bạn tìm gì...?" style="font-size: 14px;">
                        <button type="submit" id="searchsubmit" style="position: absolute;font-size: 15px;right: 10px;line-height: 30px;cursor: pointer;border:none;background-color:white;">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </li>
                <li><a href="{{ route('cart.showCart') }}"><button><i class="fas fa-shopping-cart"></i>Giỏ hàng</button></a></li>
                <li>
                    @if(@session('UserName'))
                    <a href="{{ route('statusOrder') }}">Đơn hàng <br> {{ session('UserName') }} </a>
                    @else
                    <a href="{{ route('user.login') }}" style="background-color: #FFC602;width:100px; height:40px; border-radius:5px;">Tài khoản &<br> Đơn hàng</a>
                    @endif
                </li>
                <li><a href=""><span class="btn_in"><span class="btn_out"></span></span>Mua thẻ nạp ngay!</a></li>
                <li><a href="">24h<br>Công nghệ</a></li>
                <li><a href="">Hỏi đáp</a></li>
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
                    <li><a href=""><i class="fas fa-headphones-alt" style="color: black;"></i>Phụ kiện<i style="font-size: 20px;margin-left: 5px;" class="fas fa-sort-down"></i></a>
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
                    <li><a href="">Máy cũ, Thu cũ<i style="font-size: 20px;margin-left: 5px;" class="fas fa-sort-down"></i></a>
                        <div class="sub_menu">
                            <ul>
                                <li><a href="">Máy cũ giá rẻ</a></li>
                                <li><a href="">Thu cũ đổi mới</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="">PC, Máy in<i style="font-size: 20px;margin-left: 5px;" class="fas fa-sort-down"></i></a>
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
                    <li><a href="">Dịch vụ tiện ích<i style="font-size: 20px;margin-left: 5px;" class="fas fa-sort-down"></i></a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ---------------------------------------SLIDER---------------------------- -->
    <div class="container_image">
        <div class="content_left">
            <img src="./Images_Logo/TGDD-540x270.png" alt="">
        </div>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <p class="text-center" style="font-size: 24px">Tra cứu thông tin đơn hàng</p>
                        </div>
                        <div class="card-body">
                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <form action="{{ route('user.login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input required type="email" name="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Mật khẩu</label>
                                    <input required type="password" name="password" class="form-control" id="password">
                                </div>
                                <button type="submit" name="login" class="btn btn-primary btn-block">Đăng Nhập</button>
                                <div class="signup">
                                    <p>Bạn chưa có tài khoản ?</p>
                                    <a href="{{ route('register') }}">Đăng Ký Ngay</a>
                                    <a href="{{ route('getForm') }}">Quên mật khẩu</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

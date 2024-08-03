@extends('account.layout.app')
@section('content')
    @include('account.layout.slider')

    <div class="banner2"><img src="{{ asset('Images_Logo/banner2.png') }}" alt=""></div>
    {{-- ---------------------------SAN PHAM 1------------------------- --}}
    <div class="banner" style="width: 1300px; margin:-10px auto;">
        <img style="width: 1300px; margin:0 auto;" src="{{ asset('Images_Logo/flashsale.gif') }}" alt="">
    </div>
    <div class="container_items" style="background-color: #EC7C00">
        <div class="container_main_products">
            <div class="container_slider_main_products">
                <div class="main_products">
                    @foreach ($products1 as $p1)
                        <div class="item_content">
                            <img src="./Image_products/{{ $p1->img }}" alt="">
                            <div class="item_text">
                                <li><img src="./Image_products/icon_2.jpg" alt="">
                                    <p>Trợ giá hấp dẫn</p>
                                </li>
                                <li>
                                    <a href="/detailsproduct/{{ $p1->id }}">
                                        <h3>{{ $p1->name }}</h3>
                                    </a>
                                </li>
                                <li><a href="#">Online giá rẻ</a></li>
                                <li>
                                    <a
                                        href="/detailsproduct/{{ $p1->id }}">{{ number_format($p1->getDiscountedPrice(), 0, ',', '.') }}<sup>đ</sup>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <del>{{ number_format($p1->price, 0, '.', '.') }}</del><sup>đ</sup>
                                    </a>
                                    <span>-{{ $p1->sale }}%</span>
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
                                <li><img src="./Image_products/icon_2.jpg" alt="">
                                    <p>Trợ giá hấp dẫn</p>
                                </li>
                                <li><a href="/detailsproduct/{{ $p2->id }}">
                                        <h3>{{ $p2->name }}</h3>
                                    </a></li>
                                <li><a href="#">Online giá rẻ</a></li>
                                <li><a
                                        href="/detailsproduct/{{ $p2->id }}">{{ number_format($p2->getDiscountedPrice(), 0, ',', '.') }}<sup>đ</sup></a>
                                </li>
                                <li><a href="">
                                        <del>{{ number_format($p2->price, 0, '.', '.') }}</del><sup>đ</sup></a><span>-{{ $p2->sale }}%</span>
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
                                <li><img src="./Image_products/icon_2.jpg" alt="">
                                    <p>Trợ giá hấp dẫn</p>
                                </li>
                                <li><a href="/detailsproduct/{{ $p3->id }}">
                                        <h3>{{ $p1->name }}</h3>
                                    </a></li>
                                <li><a href="#">Online giá rẻ</a></li>
                                <li><a
                                        href="/detailsproduct/{{ $p3->id }}">{{ number_format($p3->getDiscountedPrice(), 0, ',', '.') }}<sup>đ</sup></a>
                                </li>
                                <li><a href="">
                                        <del>{{ number_format($p3->price, 0, '.', '.') }}</del><sup>đ</sup></a><span>-{{ $p3->sale }}%</span>
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
    {{-- ---------------------------END------------------- ------------ --}}

    {{-- ---------------------------SAN PHAM 2------------------------- --}}
    <div class="banner" style="width: 1300px; margin:-10px auto; margin-top:20px">
        <img style="width: 1300px; margin:0 auto;" src="{{ asset('Images_Logo/banner3.png') }}" alt="">
    </div>
    <div class="container_items_1" style="background-color: #EC7C00">
        <div class="container_main_products_1">
            <div class="container_slider_main_products_1">
                <div class="main_products_1">
                    @foreach ($laptop as $p1)
                        <div class="item_content_1">
                            <a href="/detailsproduct/{{ $p1->id }}"><img style="width: 227.39px; height:210.26px"
                                    src="./Image_products/{{ $p1->img }}" alt=""></a>
                            <div class="item_text_1">
                                <li><img src="./Image_products/icon_2.jpg" alt="">
                                    <p>Trợ giá hấp dẫn</p>
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
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="main_products_1">
                    @foreach ($laptop as $p2)
                        <div class="item_content_1">
                            <a href="/detailsproduct/{{ $p2->id }}"><img style="width: 227.39px; height:216.26px"
                                    src="./Image_products/{{ $p2->img }}" alt=""></a>
                            <div class="item_text_1">
                                <li><img src="./Image_products/icon_2.jpg" alt="">
                                    <p>Trợ giá hấp dẫn</p>
                                </li>
                                <li><a href="/detailsproduct/{{ $p2->id }}">
                                        <h3>{{ $p2->name }}</h3>
                                    </a></li>
                                <li><a href="#">Online giá rẻ</a></li>
                                <li><a
                                        href="/detailsproduct/{{ $p2->id }}">{{ number_format($p2->getDiscountedPrice(), 0, ',', '.') }}<sup>đ</sup></a>
                                </li>
                                <li><a href="">
                                        <del>{{ number_format($p2->price, 0, '.', '.') }}</del><sup>đ</sup></a><span>-{{ $p2->sale }}%</span>
                                </li>

                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="main_products_1">
                    @foreach ($laptop as $p1)
                        <div class="item_content_1">
                            <a href="/detailsproduct/{{ $p1->id }}"><img style="width: 227.39px; height:216.26px"
                                    src="./Image_products/{{ $p1->img }}" alt=""></a>
                            <div class="item_text_1">
                                <li><img src="./Image_products/icon_2.jpg" alt="">
                                    <p>Trợ giá hấp dẫn</p>
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

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="btn_chevron_3">
            <i class="fas fa-chevron-left fa-chevron-left_3"></i>
            <i class="fas fa-chevron-right fa-chevron-right_3"></i>
        </div>
        <div class="button_show_all"> <button name="show_all"><a href="{{ route('product.laptop') }}">Xem thêm kết
                    quả</a></button> </div>

    </div>
    {{-- ---------------------------END-------------------------------- --}}


    {{-- ---------------------------SAN PHAM 3------------------------ --}}
    <div class="banner" style="width: 1300px; margin:-10px auto; margin-top:20px">
        <img style="width: 1300px; margin:0 auto;" src="{{ asset('Images_Logo/banner4.png') }}" alt="">
    </div>
    <div class="container_items_2" style="background-color: #920101">
        <div class="container_main_products_2">
            <div class="container_slider_main_products_2">
                <div class="main_products_2">
                    @foreach ($products2 as $p2)
                        <div class="item_content_2">
                            <img src="./Image_products/{{ $p2->img }}" alt="">
                            <div class="item_text_2">
                                <li><img src="./Image_products/icon_2.jpg" alt="">
                                    <p>Trợ giá hấp dẫn</p>
                                </li>
                                <li><a href="/detailsproduct/{{ $p2->id }}">
                                        <h3>{{ $p2->name }}</h3>
                                    </a></li>
                                <li><a href="#">Online giá rẻ</a></li>
                                <li><a
                                        href="/detailsproduct/{{ $p2->id }}">{{ number_format($p2->getDiscountedPrice(), 0, ',', '.') }}<sup>đ</sup></a>
                                </li>
                                <li><a href="">
                                        <del>{{ number_format($p2->price, 0, '.', '.') }}</del><sup>đ</sup></a><span>-{{ $p2->sale }}%</span>
                                </li>

                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="main_products_2">
                    @foreach ($products2 as $p2)
                        <div class="item_content_2">
                            <img src="./Image_products/{{ $p2->img }}" alt="">
                            <div class="item_text_2">
                                <li><img src="./Image_products/icon_2.jpg" alt="">
                                    <p>Trợ giá hấp dẫn</p>
                                </li>
                                <li><a href="/detailsproduct/{{ $p2->id }}">
                                        <h3>{{ $p2->name }}</h3>
                                    </a></li>
                                <li><a href="#">Online giá rẻ</a></li>
                                <li><a
                                        href="/detailsproduct/{{ $p2->id }}">{{ number_format($p2->getDiscountedPrice(), 0, ',', '.') }}<sup>đ</sup></a>
                                </li>
                                <li><a href="">
                                        <del>{{ number_format($p2->price, 0, '.', '.') }}</del><sup>đ</sup></a><span>-{{ $p2->sale }}%</span>
                                </li>

                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="main_products_2">
                    @foreach ($products2 as $p2)
                        <div class="item_content_2">
                            <img src="./Image_products/{{ $p2->img }}" alt="">
                            <div class="item_text_2">
                                <li><img src="./Image_products/icon_2.jpg" alt="">
                                    <p>Trợ giá hấp dẫn</p>
                                </li>
                                <li><a href="/detailsproduct/{{ $p2->id }}">
                                        <h3>{{ $p2->name }}</h3>
                                    </a></li>
                                <li><a href="#">Online giá rẻ</a></li>
                                <li><a
                                        href="/detailsproduct/{{ $p2->id }}">{{ number_format($p2->getDiscountedPrice(), 0, ',', '.') }}<sup>đ</sup></a>
                                </li>
                                <li><a href="">
                                        <del>{{ number_format($p2->price, 0, '.', '.') }}</del><sup>đ</sup></a><span>-{{ $p2->sale }}%</span>
                                </li>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="btn_chevron_4">
            <i class="fas fa-chevron-left fa-chevron-left_4"></i>
            <i class="fas fa-chevron-right fa-chevron-right_4"></i>
        </div>
    </div>
    {{-- ---------------------------END------------------------------- --}}


    {{-- --------------------------SAN PHAM 4------------------------- --}}
    {{-- <div class="banner" style="width: 1300px; margin:-10px auto; margin-top:20px">
        <img style="width: 1300px; margin:0 auto;" src="{{ asset('Images_Logo/banner5.png') }}" alt="">
    </div>
    <div class="container_items_3" style="background-color: #EC7C00">
        <div class="container_main_products_3">
            <div class="container_slider_main_products_3">
                <div class="main_products_3">
                    @foreach ($products3 as $p3)
                        <div class="item_content_3">
                            <img src="./Image_products/{{ $p3->img }}" alt="">
                            <div class="item_text_3">
                                <li><img src="./Image_products/icon_2.jpg" alt="">
                                    <p>Trợ giá hấp dẫn</p>
                                </li>
                                <li><a href="/detailsproduct/{{ $p3->id }}">
                                        <h3>{{ $p3->name }}</h3>
                                    </a></li>
                                <li><a href="#">Online giá rẻ</a></li>
                                <li><a
                                        href="/detailsproduct/{{ $p3->id }}">{{ number_format($p3->getDiscountedPrice(), 0, ',', '.') }}<sup>đ</sup></a>
                                </li>
                                <li><a href="">
                                        <del>{{ number_format($p3->price, 0, '.', '.') }}</del><sup>đ</sup></a><span>-{{ $p3->sale }}%</span>
                                </li>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="btn_chevron_5">
            <i class="fas fa-chevron-left fa-chevron-left_5"></i>
            <i class="fas fa-chevron-right fa-chevron-right_5"></i>
        </div>
    </div> --}}
    {{-- --------------------------END-------------------------------- --}}
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
                        <img src="./Images_Logo/{{ $ctg->link }}" alt="">
                        <span><?php echo $ctg->name; ?></span>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- ----------------------------------DỊCH VỤ TIỆN ÍCH---------------------- -->
        <section class="dich_vu_tien-ich">
            <div class="container_service">
                <div class="content_service">
                    <img src="{{ asset('Images_Logo/banner6.png') }}" alt="">
                </div>
            </div>
        </section>
        <section class="suggestion">
            <div class="container_suggestion">
                <div class="title_gallery"><strong>GỢI Ý HÔM NAY</strong></div>
                <div class="title_suggestion">
                    <img src="{{ asset('Images_Logo/banner7.png') }}" alt="">
                    <img src="{{ asset('Images_Logo/banner8.png') }}" alt="">
                    <img src="{{ asset('Images_Logo/banner9.png') }}" alt="">
                    <img src="{{ asset('Images_Logo/banner10.png') }}" alt="">
                </div>
            </div>
        </section>
        <div class="container_content">
            @foreach ($products1 as $p3)
                <div class="content_items">
                    <img src="/Image_products/{{ $p3->img }}" alt="">

                    <li><a href="/detailsproduct/{{ $p3->id }}">
                            <h3>{{ $p3->name }}</h3>
                        </a></li>
                    <li><a href="#">Online giá rẻ</a></li>
                    <li><a
                            href="/detailsproduct/{{ $p3->id }}">{{ number_format($p3->getDiscountedPrice(), 0, ',', '.') }}<sup>đ</sup></a>
                    </li>
                    <li><a href="">
                            <del>{{ number_format($p3->price, 0, '.', '.') }}</del><sup>đ</sup></a><span>-{{ $p3->sale }}%</span>
                    </li>
                    <li>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </li>
                </div>
            @endforeach
        </div>
        <div class="clock_model">
            <img src="{{ asset('Images_Logo/banner11.png') }}" alt="">
        </div>
        <div class="container_suggestion">
            <div class="title_gallery"><strong>CHUYÊN TRANG CÔNG NGHỆ</strong></div>
            <div class="page_tech">
                <a href="/"><img src="{{ asset('Images_Logo/banner12.png') }}" alt=""></a>
                <a href="/"> <img src="{{ asset('Images_Logo/banner13.png') }}" alt=""></a>
                <a href="/"><img src="{{ asset('Images_Logo/banner14.png') }}" alt=""></a>
            </div>
        </div>
        <div class="container_suggestion">
            <div class="title_gallery"><strong>CHUỖI MỚI DEAL KHỦNG</strong></div>
            <div class="page_tech">
                <a href="/"><img src="{{ asset('Images_Logo/banner15.png') }}" alt=""></a>
                <a href="/"> <img src="{{ asset('Images_Logo/banner16.png') }}" alt=""></a>
                <a href="/"><img src="{{ asset('Images_Logo/banner17.png') }}" style="height: 221.05px"
                        alt=""></a>
            </div>
        </div>
    </section>
@endsection

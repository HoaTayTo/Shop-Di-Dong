<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets\img\logo-fav.png">
    <title>Beagle</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/lib/material-design-icons/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/jqvmap/jqvmap.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="be-wrapper be-fixed-sidebar">
        <nav class="navbar navbar-expand fixed-top be-top-header">
            <div class="container-fluid">
                <div class="be-navbar-header"><a class="navbar-brand" href="index.html"></a>
                </div>
                {{-- <div class="page-title"><span>Dashboard</span></div> --}}
                <div class="be-right-navbar">
                    <ul class="nav navbar-nav float-right be-user-nav">
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                data-toggle="dropdown" role="button" aria-expanded="false"><img
                                    src="assets\img\avatar.png" alt="Avatar"><span class="user-name">Túpac
                                    Amaru</span></a>
                            <div class="dropdown-menu" role="menu">
                                <div class="user-info">
                                    <div class="user-name">Túpac Amaru</div>
                                    <div class="user-position online">Available</div>
                                </div><a class="dropdown-item" href="pages-profile.html"><span
                                        class="icon mdi mdi-face"></span>Account</a><a class="dropdown-item"
                                    href="#"><span class="icon mdi mdi-settings"></span>Settings</a><a
                                    class="dropdown-item" href="pages-login.html"><span
                                        class="icon mdi mdi-power"></span>Logout</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right be-icons-nav">
                        <li class="nav-item dropdown"><a class="nav-link be-toggle-right-sidebar" href="#"
                                role="button" aria-expanded="false"><span class="icon mdi mdi-settings"></span></a>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                data-toggle="dropdown" role="button" aria-expanded="false"><span
                                    class="icon mdi mdi-notifications"></span><span class="indicator"></span></a>
                            <ul class="dropdown-menu be-notifications">
                                <li>
                                    <div class="title">Notifications<span class="badge badge-pill">3</span></div>
                                    <div class="list">
                                        <div class="be-scroller-notifications">
                                            <div class="content">
                                                <ul>
                                                    <li class="notification notification-unread"><a href="#">
                                                            <div class="image"><img src="assets\img\avatar2.png"
                                                                    alt="Avatar"></div>
                                                            <div class="notification-info">
                                                                <div class="text"><span class="user-name">Jessica
                                                                        Caruso</span> accepted your invitation to join
                                                                    the team.</div><span class="date">2 min ago</span>
                                                            </div>
                                                        </a></li>
                                                    <li class="notification"><a href="#">
                                                            <div class="image"><img src="assets\img\avatar3.png"
                                                                    alt="Avatar"></div>
                                                            <div class="notification-info">
                                                                <div class="text"><span class="user-name">Joel
                                                                        King</span> is now following you</div><span
                                                                    class="date">2 days ago</span>
                                                            </div>
                                                        </a></li>
                                                    <li class="notification"><a href="#">
                                                            <div class="image"><img src="assets\img\avatar4.png"
                                                                    alt="Avatar"></div>
                                                            <div class="notification-info">
                                                                <div class="text"><span class="user-name">John
                                                                        Doe</span> is watching your main repository
                                                                </div><span class="date">2 days ago</span>
                                                            </div>
                                                        </a></li>
                                                    <li class="notification"><a href="#">
                                                            <div class="image"><img src="assets\img\avatar5.png"
                                                                    alt="Avatar"></div>
                                                            <div class="notification-info"><span class="text"><span
                                                                        class="user-name">Emily Carter</span> is now
                                                                    following you</span><span class="date">5 days
                                                                    ago</span></div>
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                data-toggle="dropdown" role="button" aria-expanded="false"><span
                                    class="icon mdi mdi-apps"></span></a>
                            <ul class="dropdown-menu be-connections">
                                <li>
                                    <div class="list">
                                        <div class="content">
                                            <div class="row">
                                                <div class="col"><a class="connection-item" href="#"><img
                                                            src="assets\img\github.png"
                                                            alt="Github"><span>GitHub</span></a></div>
                                                <div class="col"><a class="connection-item" href="#"><img
                                                            src="assets\img\bitbucket.png"
                                                            alt="Bitbucket"><span>Bitbucket</span></a></div>
                                                <div class="col"><a class="connection-item" href="#"><img
                                                            src="assets\img\slack.png"
                                                            alt="Slack"><span>Slack</span></a></div>
                                            </div>
                                            <div class="row">
                                                <div class="col"><a class="connection-item" href="#"><img
                                                            src="assets\img\dribbble.png"
                                                            alt="Dribbble"><span>Dribbble</span></a></div>
                                                <div class="col"><a class="connection-item" href="#"><img
                                                            src="assets\img\mail_chimp.png"
                                                            alt="Mail Chimp"><span>Mail Chimp</span></a></div>
                                                <div class="col"><a class="connection-item" href="#"><img
                                                            src="assets\img\dropbox.png"
                                                            alt="Dropbox"><span>Dropbox</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer"> <a href="#">More</a></div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="be-left-sidebar">
            <div class="left-sidebar-wrapper">
                {{-- <a class="left-sidebar-toggle" href="#">Dashboard</a> --}}
                <div class="left-sidebar-spacer">
                    <div class="left-sidebar-scroll">
                        <div class="left-sidebar-content">
                            <ul class="sidebar-elements">
                                <li class="divider">Menu</li>
                                <li class="active"><a href="{{ route('home.index') }}"><i
                                            class="icon mdi mdi-home"></i>
                                        <span>Dashboard</span></a>
                                </li>
                                <li class="parent"><a><i class="icon mdi mdi-face"></i><span>Product</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('product.index') }}">Danh sách sản phẩm</a>
                                        </li>
                                    </ul>

                                </li>
                                <li class="parent"><a><i
                                            class="icon mdi mdi-chart-donut"></i><span>Category</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('category.showCategory') }}">Danh sách danh mục</a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="parent"><a><i
                                            class="icon mdi mdi-chart-donut"></i><span>Customer</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('customer.index') }}">Danh sách Customer</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a href=""><i
                                            class="icon mdi mdi-chart-donut"></i><span>Order</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('order.index') }}">Danh sách Order</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a href=""><i
                                            class="icon mdi mdi-chart-donut"></i><span>Banner</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('slider.index') }}">Danh sách Banner</a>
                                        </li>
                                    </ul>
                                </li>
                                </li>
                                <li class="parent"><a href=""><i
                                            class="icon mdi mdi-chart-donut"></i><span>Images Relate</span></a>

                                </li>
                                </li>
                                <li class="parent"><a href=""><i
                                            class="icon mdi mdi-chart-donut"></i><span>Config</span></a>

                                </li>
                                <li class="parent"><a href=""><i
                                            class="icon mdi mdi-chart-donut"></i><span>Producer</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('producer.home') }}">Danh sách Producer</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="progress-widget">
                    <div class="progress-data"><span class="progress-value">60%</span><span class="name">Current
                            Project</span></div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" style="width: 60%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="be-content">
            <div class="main-content container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-3">
                        <div class="widget widget-tile">
                            <div class="chart sparkline" id="spark1"></div>
                            <div class="data-info">
                                <div class="desc">Users</div>
                                <div class="value"><span
                                        class="indicator indicator-equal mdi mdi-chevron-right"></span><span
                                        class="number" data-toggle="counter"
                                        data-end="{{ $countCustomer }}">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3">
                        <div class="widget widget-tile">
                            <div class="chart sparkline" id="spark2"></div>
                            <div class="data-info">
                                <div class="desc">Total number of orders</div>
                                <div class="value"><span
                                        class="indicator indicator-positive mdi mdi-chevron-up"></span><span
                                        class="number" data-toggle="counter" data-end="{{ $demDonHang }}">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3">
                        <div class="widget widget-tile">
                            <div class="chart sparkline" id="spark3"></div>
                            <div class="data-info">
                                <div class="desc">Total number of products</div>
                                <div class="value"><span
                                        class="indicator indicator-positive mdi mdi-chevron-up"></span><span
                                        class="number" data-toggle="counter" data-end="{{ $tongSanPham }}"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-3">
                        <div class="widget widget-tile">
                            <div class="chart sparkline" id="spark4"></div>
                            <div class="data-info">
                                <div class="desc">Total revenue</div>
                                <div class="value"><span
                                        class="number" data-toggle="counter" data-end="{{ $tinhTongTien }}"><sup>d</sup></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget widget-fullwidth be-loading">
                            <div class="widget-head">
                                <div class="tools">
                                    <div class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><span
                                                class="icon mdi mdi-more-vert d-inline-block d-md-none"></span></a>
                                        <div class="dropdown-menu" role="menu"><a class="dropdown-item"
                                                href="#">Week</a><a class="dropdown-item"
                                                href="#">Month</a><a class="dropdown-item"
                                                href="#">Year</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item"
                                                href="#">Today</a>
                                        </div>
                                    </div><span class="icon mdi mdi-chevron-down"></span><span
                                        class="icon toggle-loading mdi mdi-refresh-sync"></span><span
                                        class="icon mdi mdi-close"></span>
                                </div>
                                <div class="button-toolbar d-none d-md-block">
                                    <div class="btn-group">
                                        <button class="btn btn-secondary" type="button">Week</button>
                                        <button class="btn btn-secondary active" type="button">Month</button>
                                        <button class="btn btn-secondary" type="button">Year</button>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-secondary" type="button">Today</button>
                                    </div>
                                </div><span class="title">Recent Movement</span>
                            </div>
                            <div class="widget-chart-container">
                                <div style="height: 260px; padding: 0px; position: relative;">
                                    <canvas id="orderStatusChart"></canvas>
                                </div>
                                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        var ctx = document.getElementById('orderStatusChart').getContext('2d');
                                        var orderStatusChart = new Chart(ctx, {
                                            type: 'pie',
                                            data: {
                                                labels: ['Delivering', 'Order canceled', 'Delivered successfully'],
                                                datasets: [{
                                                    label: 'Phần trăm đơn hàng',
                                                    data: [
                                                        {{ $deliverPercentage }},
                                                        {{ $canceledPercentage }},
                                                        {{ $successfulPercentage }}
                                                    ],
                                                    backgroundColor: [
                                                        'rgba(255, 99, 132, 0.6)', // Màu cho Delivering
                                                        'rgba(54, 162, 235, 0.6)', // Màu cho Order canceled
                                                        'rgba(75, 192, 192, 0.6)' // Màu cho Delivered successfully
                                                    ],
                                                    borderColor: [
                                                        'rgba(255, 99, 132, 1)',
                                                        'rgba(54, 162, 235, 1)',
                                                        'rgba(75, 192, 192, 1)'
                                                    ],
                                                    borderWidth: 1
                                                }]
                                            },
                                            options: {
                                                plugins: {
                                                    legend: {
                                                        display: true,
                                                        position: 'bottom'
                                                    },
                                                    title: {
                                                        display: true,
                                                        text: 'Order percentage pie chart'
                                                    }
                                                }
                                            }
                                        });
                                    });
                                </script>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-striped table-borderless">
                        <thead>
                            <tr>
                                <th>CustomerID</th>
                                <th>Fullname</th>
                                <th >Phone</th>
                                <th>Money</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody class="no-border-x">
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->customerid }}</td>
                                    <td >{{ $order->fullname }}</td>
                                    <td>{{  $order->phone }}</td>
                                    <td>{{  number_format($order->money,0,'.','.') }}<sup>đ</sup></td>
                                    <td class="text-success">{{ $order->status }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="col-12 col-lg-6">
                        <div class="card card-table">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-4">
                        {{-- <div class="card">
                            <div class="card-header card-header-divider pb-3">Current Progress</div>
                            <div class="card-body pt-5">
                                <div class="row user-progress user-progress-small">
                                    <div class="col-lg-5"><span class="title">Bootstrap Admin</span></div>
                                    <div class="col-lg-7">
                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width: 40%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row user-progress user-progress-small">
                                    <div class="col-lg-5"><span class="title">Custom Work</span></div>
                                    <div class="col-lg-7">
                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width: 65%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row user-progress user-progress-small">
                                    <div class="col-lg-5"><span class="title">Clients Module</span></div>
                                    <div class="col-lg-7">
                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width: 30%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row user-progress user-progress-small">
                                    <div class="col-lg-5"><span class="title">Email Templates</span></div>
                                    <div class="col-lg-7">
                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width: 80%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row user-progress user-progress-small">
                                    <div class="col-lg-5"><span class="title">Plans Module</span></div>
                                    <div class="col-lg-7">
                                        <div class="progress">
                                            <div class="progress-bar bg-success" style="width: 45%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-12 col-lg-4">
                        {{-- <div class="widget be-loading">
                            <div class="widget-head">
                                <div class="tools"><span class="icon mdi mdi-chevron-down"></span><span
                                        class="icon mdi mdi-refresh-sync toggle-loading"></span><span
                                        class="icon mdi mdi-close"></span></div>
                                <div class="title">Top Sales</div>
                            </div>
                            <div class="widget-chart-container">
                                <div id="top-sales" style="height: 178px;"></div>
                                <div class="chart-pie-counter">36</div>
                            </div>
                            <div class="chart-legend">
                                <table>
                                    <tr>
                                        <td class="chart-legend-color"><span data-color="top-sales-color1"></span>
                                        </td>
                                        <td>Premium Purchases</td>
                                        <td class="chart-legend-value">125</td>
                                    </tr>
                                    <tr>
                                        <td class="chart-legend-color"><span data-color="top-sales-color2"></span>
                                        </td>
                                        <td>Standard Plans</td>
                                        <td class="chart-legend-value">1569</td>
                                    </tr>
                                    <tr>
                                        <td class="chart-legend-color"><span data-color="top-sales-color3"></span>
                                        </td>
                                        <td>Services</td>
                                        <td class="chart-legend-value">824</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="be-spinner">
                                <svg width="40px" height="40px" viewbox="0 0 66 66"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle class="circle" fill="none" stroke-width="4" stroke-linecap="round"
                                        cx="33" cy="33" r="30"></circle>
                                </svg>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-12 col-lg-4">
                        {{-- <div class="widget widget-calendar">
                            <div id="calendar-widget"></div>
                        </div> --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        {{-- <div class="card">
                            <div class="card-header">Latest Activity</div>
                            <div class="card-body">
                                <ul class="user-timeline user-timeline-compact">
                                    <li class="latest">
                                        <div class="user-timeline-date">Just Now</div>
                                        <div class="user-timeline-title">Create New Page</div>
                                        <div class="user-timeline-description">Vestibulum lectus nulla, maximus in eros
                                            non, tristique.</div>
                                    </li>
                                    <li>
                                        <div class="user-timeline-date">Today - 15:35</div>
                                        <div class="user-timeline-title">Back Up Theme</div>
                                        <div class="user-timeline-description">Vestibulum lectus nulla, maximus in eros
                                            non, tristique.</div>
                                    </li>
                                    <li>
                                        <div class="user-timeline-date">Yesterday - 10:41</div>
                                        <div class="user-timeline-title">Changes In The Structure</div>
                                        <div class="user-timeline-description">Vestibulum lectus nulla, maximus in eros
                                            non, tristique. </div>
                                    </li>
                                    <li>
                                        <div class="user-timeline-date">Yesterday - 3:02</div>
                                        <div class="user-timeline-title">Fix the Sidebar</div>
                                        <div class="user-timeline-description">Vestibulum lectus nulla, maximus in eros
                                            non, tristique.</div>
                                    </li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <nav class="be-right-sidebar">
            <div class="sb-content">
                <div class="tab-navigation">
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#tab1"
                                aria-controls="tab1" role="tab" data-toggle="tab">Chat</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tab2"
                                aria-controls="tab2" role="tab" data-toggle="tab">Todo</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#tab3"
                                aria-controls="tab3" role="tab" data-toggle="tab">Settings</a></li>
                    </ul>
                </div>
                <div class="tab-panel">
                    <div class="tab-content">
                        <div class="tab-pane tab-chat active" id="tab1" role="tabpanel">
                            <div class="chat-contacts">
                                <div class="chat-sections">
                                    <div class="be-scroller-chat">
                                        <div class="content">
                                            <h2>Recent</h2>
                                            <div class="contact-list contact-list-recent">
                                                <div class="user"><a href="#"><img
                                                            src="assets\img\avatar1.png" alt="Avatar">
                                                        <div class="user-data"><span class="status away"></span><span
                                                                class="name">Claire Sassu</span><span
                                                                class="message">Can you share the...</span></div>
                                                    </a></div>
                                                <div class="user"><a href="#"><img
                                                            src="assets\img\avatar2.png" alt="Avatar">
                                                        <div class="user-data"><span class="status"></span><span
                                                                class="name">Maggie jackson</span><span
                                                                class="message">I confirmed the info.</span></div>
                                                    </a></div>
                                                <div class="user"><a href="#"><img
                                                            src="assets\img\avatar3.png" alt="Avatar">
                                                        <div class="user-data"><span
                                                                class="status offline"></span><span
                                                                class="name">Joel King </span><span
                                                                class="message">Ready for the meeti...</span></div>
                                                    </a></div>
                                            </div>
                                            <h2>Contacts</h2>
                                            <div class="contact-list">
                                                <div class="user"><a href="#"><img
                                                            src="assets\img\avatar4.png" alt="Avatar">
                                                        <div class="user-data2"><span class="status"></span><span
                                                                class="name">Mike Bolthort</span></div>
                                                    </a></div>
                                                <div class="user"><a href="#"><img
                                                            src="assets\img\avatar5.png" alt="Avatar">
                                                        <div class="user-data2"><span class="status"></span><span
                                                                class="name">Maggie jackson</span></div>
                                                    </a></div>
                                                <div class="user"><a href="#"><img
                                                            src="assets\img\avatar6.png" alt="Avatar">
                                                        <div class="user-data2"><span
                                                                class="status offline"></span><span
                                                                class="name">Jhon Voltemar</span></div>
                                                    </a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-input">
                                    <input type="text" placeholder="Search..." name="q"><span
                                        class="mdi mdi-search"></span>
                                </div>
                            </div>
                            <div class="chat-window">
                                <div class="title">
                                    <div class="user"><img src="assets\img\avatar2.png" alt="Avatar">
                                        <h2>Maggie jackson</h2><span>Active 1h ago</span>
                                    </div><span class="icon return mdi mdi-chevron-left"></span>
                                </div>
                                <div class="chat-messages">
                                    <div class="be-scroller-messages">
                                        <div class="content">
                                            <ul>
                                                <li class="friend">
                                                    <div class="msg">Hello</div>
                                                </li>
                                                <li class="self">
                                                    <div class="msg">Hi, how are you?</div>
                                                </li>
                                                <li class="friend">
                                                    <div class="msg">Good, I'll need support with my pc</div>
                                                </li>
                                                <li class="self">
                                                    <div class="msg">Sure, just tell me what is going on with your
                                                        computer?</div>
                                                </li>
                                                <li class="friend">
                                                    <div class="msg">I don't know it just turns off suddenly</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-input">
                                    <div class="input-wrapper"><span class="photo mdi mdi-camera"></span>
                                        <input type="text" placeholder="Message..." name="q"
                                            autocomplete="off"><span class="send-msg mdi mdi-mail-send"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane tab-todo" id="tab2" role="tabpanel">
                            <div class="todo-container">
                                <div class="todo-wrapper">
                                    <div class="be-scroller-todo">
                                        <div class="todo-content"><span class="category-title">Today</span>
                                            <ul class="todo-list">
                                                <li>
                                                    <div class="custom-checkbox custom-control custom-control-sm"><span
                                                            class="delete mdi mdi-delete"></span>
                                                        <input class="custom-control-input" type="checkbox"
                                                            checked="" id="tck1">
                                                        <label class="custom-control-label" for="tck1">Initialize
                                                            the project</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-checkbox custom-control custom-control-sm"><span
                                                            class="delete mdi mdi-delete"></span>
                                                        <input class="custom-control-input" type="checkbox"
                                                            id="tck2">
                                                        <label class="custom-control-label" for="tck2">Create the
                                                            main structure </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-checkbox custom-control custom-control-sm"><span
                                                            class="delete mdi mdi-delete"></span>
                                                        <input class="custom-control-input" type="checkbox"
                                                            id="tck3">
                                                        <label class="custom-control-label" for="tck3">Updates
                                                            changes to GitHub </label>
                                                    </div>
                                                </li>
                                            </ul><span class="category-title">Tomorrow</span>
                                            <ul class="todo-list">
                                                <li>
                                                    <div class="custom-checkbox custom-control custom-control-sm"><span
                                                            class="delete mdi mdi-delete"></span>
                                                        <input class="custom-control-input" type="checkbox"
                                                            id="tck4">
                                                        <label class="custom-control-label" for="tck4">Initialize
                                                            the project </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-checkbox custom-control custom-control-sm"><span
                                                            class="delete mdi mdi-delete"></span>
                                                        <input class="custom-control-input" type="checkbox"
                                                            id="tck5">
                                                        <label class="custom-control-label" for="tck5">Create the
                                                            main structure </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-checkbox custom-control custom-control-sm"><span
                                                            class="delete mdi mdi-delete"></span>
                                                        <input class="custom-control-input" type="checkbox"
                                                            id="tck6">
                                                        <label class="custom-control-label" for="tck6">Updates
                                                            changes to GitHub </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-checkbox custom-control custom-control-sm"><span
                                                            class="delete mdi mdi-delete"></span>
                                                        <input class="custom-control-input" type="checkbox"
                                                            id="tck7">
                                                        <label class="custom-control-label" for="tck7"
                                                            title="This task is too long to be displayed in a normal space!">This
                                                            task is too long to be displayed in a normal space! </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-input">
                                    <input type="text" placeholder="Create new task..." name="q"><span
                                        class="mdi mdi-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane tab-settings" id="tab3" role="tabpanel">
                            <div class="settings-wrapper">
                                <div class="be-scroller-settings"><span class="category-title">General</span>
                                    <ul class="settings-list">
                                        <li>
                                            <div class="switch-button switch-button-sm">
                                                <input type="checkbox" checked="" name="st1"
                                                    id="st1"><span>
                                                    <label for="st1"></label></span>
                                            </div><span class="name">Available</span>
                                        </li>
                                        <li>
                                            <div class="switch-button switch-button-sm">
                                                <input type="checkbox" checked="" name="st2"
                                                    id="st2"><span>
                                                    <label for="st2"></label></span>
                                            </div><span class="name">Enable notifications</span>
                                        </li>
                                        <li>
                                            <div class="switch-button switch-button-sm">
                                                <input type="checkbox" checked="" name="st3"
                                                    id="st3"><span>
                                                    <label for="st3"></label></span>
                                            </div><span class="name">Login with Facebook</span>
                                        </li>
                                    </ul><span class="category-title">Notifications</span>
                                    <ul class="settings-list">
                                        <li>
                                            <div class="switch-button switch-button-sm">
                                                <input type="checkbox" name="st4" id="st4"><span>
                                                    <label for="st4"></label></span>
                                            </div><span class="name">Email notifications</span>
                                        </li>
                                        <li>
                                            <div class="switch-button switch-button-sm">
                                                <input type="checkbox" checked="" name="st5"
                                                    id="st5"><span>
                                                    <label for="st5"></label></span>
                                            </div><span class="name">Project updates</span>
                                        </li>
                                        <li>
                                            <div class="switch-button switch-button-sm">
                                                <input type="checkbox" checked="" name="st6"
                                                    id="st6"><span>
                                                    <label for="st6"></label></span>
                                            </div><span class="name">New comments</span>
                                        </li>
                                        <li>
                                            <div class="switch-button switch-button-sm">
                                                <input type="checkbox" name="st7" id="st7"><span>
                                                    <label for="st7"></label></span>
                                            </div><span class="name">Chat messages</span>
                                        </li>
                                    </ul><span class="category-title">Workflow</span>
                                    <ul class="settings-list">
                                        <li>
                                            <div class="switch-button switch-button-sm">
                                                <input type="checkbox" name="st8" id="st8"><span>
                                                    <label for="st8"></label></span>
                                            </div><span class="name">Deploy on commit</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <script src="assets\lib\jquery\jquery.min.js" type="text/javascript"></script>
    <script src="assets\lib\perfect-scrollbar\js\perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets\lib\bootstrap\dist\js\bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets\js\app.js" type="text/javascript"></script>
    <script src="assets\lib\jquery-flot\jquery.flot.js" type="text/javascript"></script>
    <script src="assets\lib\jquery-flot\jquery.flot.pie.js" type="text/javascript"></script>
    <script src="assets\lib\jquery-flot\jquery.flot.time.js" type="text/javascript"></script>
    <script src="assets\lib\jquery-flot\jquery.flot.resize.js" type="text/javascript"></script>
    <script src="assets\lib\jquery-flot\plugins\jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="assets\lib\jquery-flot\plugins\curvedLines.js" type="text/javascript"></script>
    <script src="assets\lib\jquery-flot\plugins\jquery.flot.tooltip.js" type="text/javascript"></script>
    <script src="assets\lib\jquery.sparkline\jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="assets\lib\countup\countUp.min.js" type="text/javascript"></script>
    <script src="assets\lib\jquery-ui\jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets\lib\jqvmap\jquery.vmap.min.js" type="text/javascript"></script>
    <script src="assets\lib\jqvmap\maps\jquery.vmap.world.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //-initialize the javascript
            App.init();
            App.dashboard();

        });
    </script>
</body>

</html>

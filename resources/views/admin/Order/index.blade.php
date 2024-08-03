@extends('admin.layout.index')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4" style="text-align: center; font-weight:bold">DANH SÁCH ĐƠN HÀNG</h1>

        <!-- Hiển thị tổng số đơn hàng -->
        <div class="mb-4" style="text-align: center;">
        </div>

        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>OrderCode</th>
                    <th>CustomerID</th>
                    <th>Order Date</th>
                    <th>Full name</th>
                    <th>Phone</th>
                    <th>Total</th>
                    <th>Ship</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->orderCode }}</td>
                        <td>{{ $order->customerid }}</td>
                        <td>{{ $order->orderdate }}</td>
                        <td>{{ $order->fullname }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ number_format($order->money,0,'.','.') }}<sup>đ</sup></td>
                        <td>{{ number_format($order->price_ship ,0,'.','.') }}<sup>đ</sup></td>
                        <td>{{ $order->address }}</td>
                        <td>
                            <form action="{{ route('update_status', $order->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <select name="status" onchange="this.form.submit()">
                                    <option value="Chờ xử lý" {{ $order->status == 'Chờ xử lý' ? 'selected' : '' }}>Chờ xử lý</option>
                                    <option value="Đã xác nhận" {{ $order->status == 'Đã xác nhận' ? 'selected' : '' }}>Đã xác nhận</option>
                                    <option value="Đang chuyển hàng" {{ $order->status == 'Đang chuyển hàng' ? 'selected' : '' }}>Đang chuyển hàng</option>
                                    <option value="Đang giao hàng"{{ $order->status == 'Đang giao hàng' ? 'selected' : '' }}>Đang giao hàng</option>
                                    <option value="Đã hủy"{{ $order->status == 'Đã hủy' ? 'selected' : '' }}>Đã hủy</option>
                                    <option value="Giao thành công"{{ $order->status == 'Giao thành công' ? 'selected' : '' }}>Giao thành công</option>
                                </select>
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="" style="display: inline-block;">
                                @csrf
                                <input type="hidden" name="id_ct" value="">
                                <button type="submit" class="btn btn-primary">Sửa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <nav aria-label="Page navigation example" class="d-flex justify-content-center">
            {{ $orders->links() }}
        </nav>
    </div>
@endsection

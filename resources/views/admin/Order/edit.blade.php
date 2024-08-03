@extends('admin.layout.index')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4" style="text-align: center; font-weight:bold">SỬA ĐƠN HÀNG</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('orders.update', $order->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="fullname">Họ và Tên</label>
                <input type="text" id="fullname" name="fullname" value="{{ $order->fullname }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="phone">Số điện thoại</label>
                <input type="text" id="phone" name="phone" value="{{ $order->phone }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="money">Tổng tiền</label>
                <input type="text" id="money" name="money" value="{{ $order->money }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="address">Địa chỉ</label>
                <input type="text" id="address" name="address" value="{{ $order->address }}" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="status">Trạng thái</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="Chờ xử lý" {{ $order->status == 'Chờ xử lý' ? 'selected' : '' }}>Chờ xử lý</option>
                    <option value="Đã xác nhận" {{ $order->status == 'Đã xác nhận' ? 'selected' : '' }}>Đã xác nhận</option>
                    <!-- Thêm các option khác tương ứng với trạng thái của bạn -->
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Cập nhật đơn hàng</button>
        </form>
    </div>
@endsection

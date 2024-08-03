@extends('admin.layout.index')
@section('content')
<div class="container mt-5">
    @if (session('success'))
    <script>
        Swal.fire({
            title: 'Successful!',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
@endif
    <h1 class="mb-4" style="text-align: center">Tạo Khách Hàng Mới</h1>
    <form method="POST" action="{{ route('customer.createCustomer') }}">
        @csrf
        <div class="mb-3">
            <label for="fullname" class="form-label">Name</label>
            <input type="text" id="fullname" name="fullname" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">UserName</label>
            <input type="text" id="username" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" id="address" name="address" class="form-control">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" id="phone" name="phone" class="form-control">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tạo mới</button>
    </form>
</div>
@endsection

@extends('admin.layout.index')
@section('content')
    <div class="container mt-5">
        <!-- Hiển thị thông báo từ session -->
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
        <form method="POST" action="{{ route('customer.updateCustomer') }}">
            @csrf
            <input type="hidden" name="id_ct" value="{{ $customer->id }}">
            <div class="mb-3">
                <label for="fullname" class="form-label">Name</label>
                <input type="text" id="fullname" name="fullname" value="{{ $customer->fullname }}" class="form-control"
                    required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">UserName</label>
                <input type="text" id="username" name="username" value="{{ $customer->username }}" class="form-control"
                    required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" id="address" name="address" value="{{ $customer->address }}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" id="phone" name="phone" value="{{ $customer->phone }}" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" value="{{ $customer->email }}" class="form-control"
                    required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" value="{{ $customer->status }}" name="status" required>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Customer</button>
        </form>
    </div>
@endsection

@extends('admin.layout.index')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4"style="text-align: center; font-weight:bold">DANH SÁCH KHÁCH HÀNG</h1>
        <a href="{{ route('customer.showFormCustomer') }}" class="btn btn-success">Thêm khách hàng</a>
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>UserName</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Active</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->fullname }}</td>
                        <td>{{ $customer->username }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->status }}</td>
                        <td>
                            <form method="POST" action="{{ route('customer.formUpdateCustomer', $customer->id) }}"
                                style="display: inline-block;">
                                @csrf
                                <input type="hidden" name="id_ct" value="{{ $customer->id }}">
                                <button type="submit" class="btn btn-primary">Sửa</button>
                            </form>
                            <!-- Nút xóa -->
                            <button class="btn btn-danger" onclick="confirmDelete({{ $customer->id }})">Xóa</button>
                            <form id="delete-form-{{ $customer->id }}" action="{{ route('customer.delete') }}"
                                method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id_ct" value="{{ $customer->id }}">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <nav aria-label="Page navigation example" class="d-flex justify-content-center">
            {{ $customer->links() }}
        </nav> --}}
        <script>
            function confirmDelete(id) {
                Swal.fire({
                    title: 'Bạn có chắc chắn?',
                    text: "Bạn sẽ không thể khôi phục lại danh mục này!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Xóa',
                    cancelButtonText: 'Hủy bỏ'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('delete-form-' + id).submit();
                    }
                })
            }
        </script>
    </div>

@endsection

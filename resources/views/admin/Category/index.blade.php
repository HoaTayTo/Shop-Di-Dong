@extends('admin.layout.index')

@section('content')
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
    <h2 style="text-align: center; font-weight: bold">DANH SÁCH DANH MỤC</h2>
    <a href="{{ route('category.showFormCategory') }}" class="btn btn-success">Thêm danh mục</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>
                        <!-- Nút sửa -->
                        <form method="POST" action="{{ route('category.edit', $item->id) }}" style="display: inline-block;">
                            @csrf
                            <input type="hidden" name="id_ct" value="{{ $item->id }}">
                            <button type="submit" class="btn btn-primary">Sửa</button>
                        </form>
                        <!-- Nút xóa -->
                        <button class="btn btn-danger" onclick="confirmDelete({{ $item->id }})">Xóa</button>
                        <form id="delete-form-{{ $item->id }}" action="{{ route('category.destroy') }}" method="POST"
                            style="display: none;">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id_ct" value="{{ $item->id }}">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <nav aria-label="Page navigation example" class="d-flex justify-content-center">
        {{ $category->links() }}
    </nav>
{{-- ------------------THÊM SCRIPT THÔNG BÁO NGƯỜI DÙNG TRƯỚC KHI XÓA --}}
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
@endsection

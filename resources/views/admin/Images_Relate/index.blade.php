{{-- @extends('admin.layout.index')
@section('content')
    <h2 style="text-align: center; font-weight: bold">HÌNH ẢNH LIÊN QUAN CỦA CÁC SẢN PHẨM</h2>
    <a href="{{ route('producer.showFormProducer') }}" class="btn btn-success">Thêm danh mục</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($img_rel as $rel)
                <tr>
                    <td>{{ $rel->id }}</td>
                    <td>{{ $rel->product ? $rel->product->name : 'N/A' }}</td>
                    <td><img style="width:150px;height:180px" src="./Image_products/{{ $rel->img }}" alt="">
                    </td>

                    <td>
                        <!-- Nút sửa -->
                        <form method="POST" action="{{ route('producer.edit') }}" style="display: inline-block;">
                            @csrf
                            <input type="hidden" name="id_ct" value="{{ $rel->id }}">
                            <button type="submit" class="btn btn-primary">Sửa</button>
                        </form>
                        <!-- Nút xóa -->
                        <button class="btn btn-danger" onclick="confirmDelete({{ $rel->id }})">Xóa</button>
                        <form id="delete-form-{{ $rel->id }}" action="{{ route('producer.destroy') }}" method="POST"
                            style="display: none;">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id_ct" value="{{ $rel->id }}">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <nav aria-label="Page navigation example" class="d-flex justify-content-center">
        {{ $img_rel->links() }}
    </nav>
    {{-- <script>
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
    </script> --}}
{{-- @endsection --}} 

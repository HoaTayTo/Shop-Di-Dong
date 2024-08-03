@extends('admin.layout.index')

@section('content')
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
    <h2 style="text-align: center;font-weight:bold">DANH SÁCH SẢN PHẨM</h2>
    <div class="btn btn-success">
        <a href="{{ route('product.showFormProduct') }}" class="btn btn-success">Thêm sản phẩm</a>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>MASP</th>
                <th>Name</th>
                <th>Image</th>
                <th>Number</th>
                <th>Price</th>
                <th>Sale</th>
                <th>Actions</th> <!-- Thêm cột mới cho các thao tác -->
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->name }}</td>
                    <td><img style="width: 75px;height:75px;" src="Image_products/{{ $item->img }}" alt=""></td>
                    <td>{{ $item->number }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->sale }}</td>
                    <td>
                        <!-- Nút sửa -->
                        <a href="{{ route('product.edit', $item->id) }}" class="btn btn-primary" style="display: inline-block;">
                            <i class='bx bx-edit'>Sửa</i>
                        </a>

                        <!-- Nút xóa -->
                        <form id="delete-form-{{ $item->id }}" action="{{ route('product.destroy') }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="id_pd" value="{{ $item->id }}">
                            <button class="btn btn-danger" onclick="return confirmDelete({{ $item->id }})">Xóa</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    <nav aria-label="Page navigation example" class="d-flex justify-content-center">
        {{ $product->links() }}
    </nav>
@endsection

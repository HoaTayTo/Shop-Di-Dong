@extends('admin.layout.index')
@section('content')
    <div>
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
        {{-- // chỗ này là lấy router submit á. nó đưa dữ liệu từ view xuống controller createSubmit  ấy --}}
        <form method="POST" action="{{ route('product.createSubmit') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="catid">Category ID</label>
                {{-- <input type="text" id="catid" name="catid" class="form-control">
                @error('catid')
                    <span class="text-danger">{{ $message }}</span>
                @enderror --}}
                <select name="catid" id="catid" class="form-control">
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="img">Image</label>
                <input type="file" id="img" name="img">
                @error('img')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="sortDesc">Short Description</label>
                <textarea id="sortDesc" name="sortDesc" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="detail">Detail</label>
                <textarea id="detail" name="detail" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="select">Producer</label>
                <select name="producer" id="producer" class="form-control">
                    @foreach ($producer as $producer)
                        <option value="{{ $producer->id }}">{{ $producer->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="number">Number</label>
                <input type="number" id="number" name="number" class="form-control">
                @error('number')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" id="price" name="price" class="form-control">
                @error('price')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="sale">Sale (%)</label>
                <input type="text" id="sale" name="sale" class="form-control">
                @error('sale')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
@endsection

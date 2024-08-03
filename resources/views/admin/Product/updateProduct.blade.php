@extends('admin.layout.index')
@section('content')
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        {{-- // chỗ này là lấy router submit á. nó đưa dữ liệu từ view xuống controller createSubmit  ấy --}}
        <form method="POST" action="/updateProduct" enctype="multipart/form-data">
            @csrf
            <input hidden name="id_pd" type="text" value="{{ $product->id }}">
            <div class="form-group">
                <label for="catid">Category ID</label>
                <select name="catid" class="form-control" id="catid" required>
                    @foreach($category as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $product->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input value="{{ $product->name }}" type="text" id="name" name="name" class="form-control">
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
                <input value="{{ $product->sortDesc }}" type="text" id="sortDesc" name="sortDesc" class="form-control">
            </div>
            <div class="form-group">
                <label for="producer">Producer</label>
                <select name="producer" class="form-control" id="producer" required>
                    @foreach($producer as $producer)
                        <option value="{{ $producer->id }}" {{ $producer->id == $product->id ? 'selected' : '' }}>{{ $producer->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="number">Number</label>
                <input value="{{ $product->number }}" type="number" id="number" name="number" class="form-control">
                @error('number')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input value="{{ $product->price }}" type="number" id="price" name="price" class="form-control">
                @error('price')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="sale">Sale (%)</label>
                <input value="{{ $product->sale }}" type="number" id="sale" name="sale" class="form-control">
                @error('sale')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
@endsection

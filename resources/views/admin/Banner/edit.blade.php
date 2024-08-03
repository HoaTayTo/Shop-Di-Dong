<!-- resources/views/banners/edit.blade.php -->

@extends('admin.layout.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Edit Banner</div>

                    <div class="card-body">
                        <form action="{{ route('banners.update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $banner->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="img">Image</label>
                                <input type="file" name="img" id="img" class="form-control-file">
                                <img src="{{ asset('images/' . $banner->img) }}" alt="{{ $banner->name }}" width="100">
                            </div>
                            <button type="submit" class="btn btn-primary">Update Banner</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

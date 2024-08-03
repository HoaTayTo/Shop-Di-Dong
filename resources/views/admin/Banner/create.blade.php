<!-- resources/views/banners/create.blade.php -->

@extends('admin.layout.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Add Banner</div>

                    <div class="card-body">
                        <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="img">Image</label>
                                <input type="file" name="img" id="img" class="form-control-file" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Banner</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

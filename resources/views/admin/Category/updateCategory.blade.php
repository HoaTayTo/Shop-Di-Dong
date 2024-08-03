@extends('admin.layout.index')

@section('content')
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <form method="POST" action="/updateCategory">
            @csrf
            <div class="form-group">
                <input type="hidden" name="id_ct" value="{{ $category->id }}">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $category->name }}" required>
            </div>
            <div class="form-group">
                <label for="created_at">Created At</label>
                <input type="datetime-local" id="created_at" name="created_at" class="form-control" value="{{ $category->created_at }}">
            </div>
            <div class="form-group">
                <label for="updated_at">Updated At</label>
                <input type="datetime-local" id="updated_at" name="updated_at" class="form-control" value="{{ $category->updated_at }}">
            </div>
            <div class="form-group">
                <label for="updated_by">Updated By</label>
                <input type="text" id="updated_by" name="updated_by" class="form-control" value="{{ $category->updated_by }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
    </div>
@endsection

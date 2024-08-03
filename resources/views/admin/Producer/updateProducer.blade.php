@extends('admin.layout.index')

@section('content')
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <form method="POST" action="/updateProducer">
            @csrf
            <div class="form-group">
                <input type="hidden" name="id_ct" value="{{ $producer->id }}">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $producer->name }}" required>
            </div>
            <div class="form-group">
                <label for="created_at">Code</label>
                <input type="text" id="code" name="code" class="form-control" value="{{ $producer->code }}">
            </div>
            <div class="form-group">
                <label for="keyword">KeyWord</label>
                <input type="text" id="keyword" name="keyword" class="form-control" value="{{ $producer->keyword }}">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="number" id="status" name="status" class="form-control" value="{{ $producer->status }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
    </div>
@endsection

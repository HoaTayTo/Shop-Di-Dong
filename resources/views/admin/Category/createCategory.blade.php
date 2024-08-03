@extends('admin.layout.index')

@section('content')
    <div>
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
        <form method="POST" action="{{ route('category.createCategory') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="level">Level</label>
                <input type="number" id="level" name="level" class="form-control">
            </div>
            <div class="form-group">
                <label for="created_at">Created At</label>
                <input type="datetime-local" id="created_at" name="created_at" class="form-control">
            </div>
            <div class="form-group">
                <label for="updated_at">Updated At</label>
                <input type="datetime-local" id="updated_at" name="updated_at" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Add Category</button>
        </form>
    </div>
@endsection

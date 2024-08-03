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
        <form method="POST" action="{{ route('producer.createProducer') }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="code">Code</label>
                <input type="number" id="code" name="code" class="form-control">
            </div>
            <div class="form-group">
                <label for="keyword">Create At</label>
                <input type="date" id="keyword" name="keyword" class="form-control">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="number" id="status" name="status" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Add Producer</button>
        </form>
    </div>
@endsection

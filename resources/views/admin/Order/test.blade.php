@foreach ($donhang as $dh)
    @foreach ($dh->orders as $order)
        {{ $order->Product->name }}

    @endforeach
    {{ $dh->status }}
@endforeach

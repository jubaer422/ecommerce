@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="mb-4">Your Cart</h2>

    @if(count($cart) > 0)
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Product</th>
                <th>Image</th>
                <th>Price (৳)</th>
                <th>Quantity</th>
                <th>Total (৳)</th>
            </tr>
        </thead>
        <tbody>
            @php $grandTotal = 0; @endphp
            @foreach($cart as $item)
            @php
                $total = $item['price'] * $item['quantity'];
                $grandTotal += $total;
            @endphp
            <tr>
                <td>{{ $item['name'] }}</td>
                <td><img src="{{ $item['image'] }}" width="60" class="rounded"></td>
                <td>{{ $item['price'] }}</td>
                <td>{{ $item['quantity'] }}</td>
                <td>{{ $total }}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="4" class="text-end"><strong>Grand Total:</strong></td>
                <td><strong>৳{{ $grandTotal }}</strong></td>
            </tr>
        </tbody>
    </table>
    @else
    <p>Your cart is empty.</p>
    @endif
</div>
@endsection

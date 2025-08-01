@extends('layouts.app')

@section('content')

<style>
    .shadow {
    box-shadow: none!important;
}
</style>

<!-- Hero Section -->
<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="d-flex align-items-center flex-wrap gap-3">
                <div>
                    <h1 class="display-4 fw-bold">Discover Trendy Styles</h1>
                    <p class="lead">Shop the latest collections for Men, Women, and Kids.</p>
                    <a href="#" class="btn btn-dark btn-lg mt-2">Shop Now</a>
                </div>
                <!-- <div>
                    <img src="{{ asset('images/shop_now.gif') }}" alt="Shop Now GIF" style="max-height: 100px;" class="img-fluid">
                </div> -->
            </div>
        </div>
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/shop_now.gif') }}" alt="Fashion" class="img-fluid rounded shadow" style="max-height: 400px;">
        </div>
    </div>
</div>

<!-- Product Listing -->
<div class="container my-5">
    <h2 class="mb-4">Featured Products</h2>

    <!-- Show success message after adding to cart -->
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(isset($products) && count($products))
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">৳{{ $product->price }}</p>

                    <!-- Add to Cart Button -->
                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-dark w-100">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
        <p>No products found.</p>
    @endif
</div>

@endsection

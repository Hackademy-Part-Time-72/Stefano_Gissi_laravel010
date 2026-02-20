@extends('components.app')

@section('content')
<div class="container mt-5">
    <h1>Product Details</h1>
    <p><strong>ID:</strong> {{ $product->id }}</p>
    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Description:</strong> {{ $product->description }}</p>
    <p><strong>Price:</strong> {{ $product->price }}</p>
    <p><strong>Category:</strong> {{ $product->category->name ?? '-' }}</p>
    <p>
        <strong>Image:</strong><br>
        @if($product->image)
            <img src="{{ asset('storage/'.$product->image) }}" width="150" alt="Image">
        @else
            No image
        @endif
    </p>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
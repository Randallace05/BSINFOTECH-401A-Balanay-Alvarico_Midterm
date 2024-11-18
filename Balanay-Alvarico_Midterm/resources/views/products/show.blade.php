<!DOCTYPE html>
<html>
<head>
    <title>View Product</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
    }
    .container {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    h1 {
        color: #333;
    }
    img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
        margin-bottom: 20px;
    }
    a {
        color: #007bff;
        text-decoration: none;
    }
</style>
<body>
    <div class="container">
        <h1>{{ $product->name }}</h1>
        <img src="{{ asset('storage/ ' . $product->image) }}" alt="Product Image">
        <p>Price: {{ $product->price }}</p>
        <p>Description: {{ $product->description }}</p>
        <a href="{{ route('products.index') }}">Back</a>
    </div>
</body>
</html>

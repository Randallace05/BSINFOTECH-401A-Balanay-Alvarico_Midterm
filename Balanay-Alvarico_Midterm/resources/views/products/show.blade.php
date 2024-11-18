<!DOCTYPE html>
<html>
<head>
    <title>View Product</title>
</head>
<style>
    body {
        font-family: 'Roboto', Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 700px;
        margin: 30px auto;
        padding: 20px;
        background: #ffffff;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        text-align: center;
    }
    h1 {
        color: #2c3e50;
        font-size: 2.5rem;
        margin-bottom: 20px;
    }
    img {
        max-width: 100%;
        height: auto;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }
    p {
        font-size: 1.2rem;
        color: #555;
        margin: 10px 0;
    }
    p span {
        font-weight: bold;
        color: #e74c3c;
    }
    a {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        font-size: 1rem;
        color: #ffffff;
        background: #3498db;
        text-decoration: none;
        border-radius: 25px;
        transition: background 0.3s ease;
    }
    a:hover {
        background: #2980b9;
    }
    .price {
        font-size: 1.8rem;
        font-weight: bold;
        color: #e74c3c;
        margin-top: 10px;
    }
</style>
<body>
    <div class="container">
        <h1>{{ $product->name }}</h1>
        <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image">
        <p class="price">Price: $<span>{{ $product->price }}</span></p>
        <p>Description: {{ $product->description }}</p>
        <a href="{{ route('products.index') }}">Back to Shop</a>
    </div>
</body>
</html>

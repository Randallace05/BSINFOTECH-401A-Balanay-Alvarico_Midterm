<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
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
    form label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    form input, form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    form button {
        background-color: #28a745;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
<body>
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>
        <br>
        <label>Price:</label>
        <input type="number" step="0.01" name="price" value="{{ $product->price }}" required>
        <br>
        <label>Description:</label>
        <textarea name="description">{{ $product->description }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>

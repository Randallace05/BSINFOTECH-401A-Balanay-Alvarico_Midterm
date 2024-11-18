<!DOCTYPE html>
<html>
<head>
    <title>Edit Product - Chili Garlic Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff5e6;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #ff3300;
            font-family: 'Georgia', serif;
            margin-bottom: 20px;
        }
        form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #444;
        }
        form input, form textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        form input:focus, form textarea:focus {
            border-color: #ff4500;
            outline: none;
            box-shadow: 0 0 5px rgba(255, 69, 0, 0.5);
        }
        form button {
            background-color: #ff6600;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.2s;
        }
        form button:hover {
            background-color: #cc5200;
            transform: scale(1.05);
        }
        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #28a745;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
            transition: color 0.3s ease;
        }
        .back-link:hover {
            color: #1e7e34;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Product</h1>
        <a href="{{ route('products.index') }}" class="back-link">← Back to Products</a>
        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" value="{{ $product->name }}" required>
            
            <label for="price">Price (₱):</label>
            <input type="number" id="price" name="price" step="0.01" value="{{ $product->price }}" required>
            
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="5" required>{{ $product->description }}</textarea>
            
            <button type="submit">Update Product</button>
        </form>
    </div>
</body>
</html>

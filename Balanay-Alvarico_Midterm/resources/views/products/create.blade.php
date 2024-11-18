<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fff5e6; /* Warm, spicy tone */
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 450px;
            width: 100%;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
            border-top: 5px solid #e63946; /* Vibrant chili red */
        }
        h1 {
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 20px;
            color: #e63946; /* Matching chili red */
        }
        form label {
            display: block;
            margin-bottom: 8px;
            font-size: 1rem;
            font-weight: bold;
            color: #555;
        }
        form input, form textarea, form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }
        form input:focus, form textarea:focus {
            border-color: #e63946;
            outline: none;
            box-shadow: 0 0 5px rgba(230, 57, 70, 0.5);
        }
        form button {
            background-color: #e63946;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        form button:hover {
            background-color: #c62c3e;
            transform: translateY(-2px);
        }
        form input[type="file"] {
            padding: 5px;
        }
        .footer {
            text-align: center;
            font-size: 0.85rem;
            color: #777;
            margin-top: 15px;
        }
        .footer a {
            color: #e63946;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add Chili Garlic Product</h1>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter product name" required>

            <label for="price">Price (₱):</label>
            <input type="number" id="price" step="0.01" name="price" placeholder="Enter price" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" placeholder="Describe your spicy delight..."></textarea>

            <label for="image">Product Image:</label>
            <input type="file" name="image" id="image" accept="image/*">

            <button type="submit">Add Product</button>
        </form>
        <div class="footer">
            <p><a href="{{ route('products.index') }}">Back to Shop</a></p>
        </div>
    </div>
</body>
</html>

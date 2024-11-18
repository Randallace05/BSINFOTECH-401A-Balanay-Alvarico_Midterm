<!DOCTYPE html>
<html>
<head>
    <title>Chili Garlic Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff5e6;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #ff3300;
            margin-bottom: 20px;
            font-family: 'Georgia', serif;
        }
        .add-product {
            display: inline-block;
            margin-bottom: 20px;
            background-color: #ff6600;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .add-product:hover {
            background-color: #cc5200;
        }
        .product-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .product-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            width: 300px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease;
        }
        .product-card:hover {
            transform: scale(1.05);
        }
        .product-card img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .product-card .no-image {
            font-style: italic;
            color: #aaa;
            margin: 20px 0;
        }
        .product-card h3 {
            color: #ff3300;
            margin: 10px 0;
        }
        .product-card p {
            margin: 5px 0;
            color: #555;
        }
        .product-card .actions a, .product-card .actions form button {
            display: inline-block;
            margin: 5px;
            padding: 8px 15px;
            text-decoration: none;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 14px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .product-card .actions a.view {
            background-color: #28a745;
        }
        .product-card .actions a.view:hover {
            background-color: #1e7e34;
        }
        .product-card .actions a.edit {
            background-color: #ffc107;
        }
        .product-card .actions a.edit:hover {
            background-color: #e0a800;
        }
        .product-card .actions form button {
            background-color: #dc3545;
        }
        .product-card .actions form button:hover {
            background-color: #c82333;
        }
        @media (max-width: 768px) {
            .product-card {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Chili Garlic Store</h1>
        <a href="{{ route('products.create') }}" class="add-product">Add New Product</a>
        @if(session('success'))
            <p style="color: green; font-weight: bold;">{{ session('success') }}</p>
        @endif
        <div class="product-list">
            @foreach ($products as $product)
            <div class="product-card">
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                @else
                    <div class="no-image">No Image</div>
                @endif
                <h3>{{ $product->name }}</h3>
                <p>Price: ${{ $product->price }}</p>
                <p>{{ $product->description }}</p>
                <div class="actions">
                    <a href="{{ route('products.show', $product) }}" class="view">View</a>
                    <a href="{{ route('products.edit', $product) }}" class="edit">Edit</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        li strong {
            margin-right: 10px;
        }

        img {
            max-width: 100%;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 10px;
        }

        a {
            display: inline-block;
            padding: 10px;
            margin-top: 10px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h2>Product Details</h2>
    <ul>
        <li><strong>Libelle:</strong> {{ $product['libelle'] }}</li>
        <li><strong>Marque:</strong> {{ $product['marque'] }}</li>
        <li><strong>Prix:</strong> {{ $product['prix'] }}</li>
        <li><strong>Stock:</strong> {{ $product['stock'] }}</li>
        <li><strong>Image:</strong> <img src="{{ asset($product['image']) }}" alt="Product Image"></li>
    </ul>
    <a href="/products">Back to Products</a>
</body>

</html>

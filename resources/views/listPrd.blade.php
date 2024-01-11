<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    
    a {
        text-decoration: none;
        display: inline-block;
        padding: 10px;
        margin: 10px;
        background-color: #c5db34;
        color: #fff;
        border-radius: 5px;
    }
    
    table {
        border-collapse: collapse;
        width: 50%;
        margin: 20px auto;
        background-color: #afb29e
    }
    caption {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            background-color: #706f6b;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
    
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    
    th {
        background-color: #706f6b;
        color: #fff;
    }
    
    button {
        padding: 8px;
        background-color: #4f4443;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    
    button a {
        text-decoration: none;
        color: #fff;
    }
    
    button:hover {
        background-color: #c0392b;
    }
    
    img {
        max-width: 100px;
        max-height: 100px;
    }
</style>    
</head>

<body>
    <a href="/create">Create</a>
    
    <table border="1" width="50%">
        <caption>List des Produits</caption>
        <tr>
            <th>libelle</th>
            <th>Marque</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Image</th>
            <th>Supprimer</th>
            <th>Details</th>
            <th>Modifier</th>
        </tr>

        @foreach($Products as $value)
        <tr>
            <td>
                {{$value["libelle"]}}
            </td>
            <td>
                {{$value["marque"]}}
            </td>
            <td>
                {{$value["prix"]}}
            </td>
            <td>
                {{$value["stock"]}}
            </td>
            <td>
                <img src="{{ asset($value['image']) }}" alt="Product Image">
            </td>
            <td>
                <button>Supprimer</button>
            </td>
            <td>
                <button><a href="/products/{{ $loop->index }}">Details</a></button>
            </td>
            <td>
                <button><a href="/modify1">modifier</a></button>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>

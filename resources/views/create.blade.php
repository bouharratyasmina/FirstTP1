<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        fieldset {
            width: 50%;
            margin: 50px auto;
            border: 2px solid #333;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
        }

        table {
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            padding: 10px;
            background-color: #8cb807;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        div {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Add Products:</legend>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <table style="height: 200px">
                <tr>
                    <td><label>Libelle:</label></td>
                    <td><input type="text" name="libelle"></td>
                    @error("libelle")
                    <div>
                        {{$message}}
                    </div>
                    @enderror
                </tr>
                <tr>
                    <td><label>Marque:</label></td>
                    <td><input type="text" name="marque"></td>
                </tr>
                @error("marque")
                <div>
                    {{$message}}
                </div>
                @enderror
                <tr>
                    <td><label>prix:</label></td>
                    <td><input type="number" name="prix"></td>
                </tr>
                @error("prix")
                <div>
                    {{$message}}
                </div>
                @enderror
                <tr>
                    <td><label>Stock:</label></td>
                    <td><input type="number" name="stock"></td>
                </tr>
                @error("stock")
                <div>
                    {{$message}}
                </div>
                @enderror
                <tr>
                    <td><label>image:</label></td>
                    <td><input type="file" name="image"></td>
                </tr>
                <tr>
                    <td><button type="submit">Ajouter</button></td>
                </tr>
                @error("image")
                <div>
                    {{$message}}
                </div>
                @enderror
            </table>
        </form>
    </fieldset>
</body>
</html>

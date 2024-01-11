<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Product</title>
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

        legend {
            font-size: 20px;
            color: #333;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            padding: 10px;
            background-color: #a934db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Update</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <td><label>Libelle:</label></td>
                    <td><input type="text" name="libelle"></td>
                </tr>
                <tr>
                    <td><label>Marque:</label></td>
                    <td><input type="text" name="marque"></td>
                </tr>
                <tr>
                    <td><label>prix:</label></td>
                    <td><input type="number" name="prix"></td>
                </tr>
                <tr>
                    <td><label>Stock:</label></td>
                    <td><input type="number" name="stock"></td>
                </tr>
                <tr>
                    <td><label>image:</label></td>
                    <td><input type="file" name="image"></td>
                </tr>
                <tr>
                    <td><button type="submit">Update</button></td>
            </table>
          
           
           
        </form>
    </fieldset>
</body>
</html>
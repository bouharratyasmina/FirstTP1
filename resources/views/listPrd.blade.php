
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage de traitement</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <style>
        body {
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dee2e6;
            padding: 8px;
            text-align: center;
        }

        img {
            display: block;
            margin: 0 auto;
            max-width: 100px;
            height: auto;
        }

    </style>
    <a href="/stagiaire/create" class="btn btn-primary btn-sm">create</a>
    <table border="1" width="50%" rule="all" class="table">
        <h1>les Stagiaires</h1>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>bio</th>
            <th>image</th>
            <th>Details</th>
            <th>Supprimer</th>
            <th>Modifier</th>
           
        </tr>

        @foreach($stagiaire as $value)
        <tr>
            <td>
                {{$value["id"]}}
            </td>
            <td>
                {{$value["name"]}}
            </td>

            <td>
                {{$value["email"]}}
            </td>
            <td>
                {{ $value["bio"]}}
            </td>
            <td>
                <img class="card-img-top mx-auto" src="{{ asset('storage/' . $value['image']) }}" alt="Image title" style="width: 100px">

            </td>
            <td>
                <a  class="btn btn-primary btn-sm float-end" href="{{route('stagiaire.show',$value["id"])}}">details</a>
                
            </td>
           
            <td>
                <form action="{{route("stagiaire.destroy",$value["id"])}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm float-end" >supprimer</button>
                </form>
            </td>
            <td>
                <a href="{{route('stagiaire.edit',$value["id"])}}" class="btn btn-primary btn-sm float-end">modiffier</a>

            </td>
        </tr>
        @endforeach
       
    </table>
   
</body>
</html>

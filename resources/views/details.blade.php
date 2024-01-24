<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
<body>
    <h1>Stagiaire</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="card m-50 p-50 text-center">
                <img class="card-img-top mx-auto" src="{{ asset('storage/' . $stagiaire['image']) }}" alt="Image title" style="width: 200px;">
                <div class="card body text-center">
                    <h4 class="card-title">{{$stagiaire["id"]}} {{$stagiaire["name"]}}</h4>
                    <p class="card-text">{{$stagiaire["bio"]}}</p>
                </div>  
            </div>
        </div>
    </div>
</body>
</html>

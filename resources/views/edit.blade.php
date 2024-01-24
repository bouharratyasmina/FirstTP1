<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
   <h1>Modifier Stagiaire</h1>
   <form  method="POST" action="{{route('stagiaire.update',$stagiaire["id"])}}" class="form-label" enctype="multipart/form-data">
     @csrf
     @method('PUT')
   <label for="" class="form-label">Name:</label>
   <input type="text" name="name" id="" class="form-control" value="{{old('name',$stagiaire["name"])}}">
   @error('name')
   <div class="text-danger"> {{$message}}</div>
      
   @enderror
   <label for="" class="form-label">Email:</label>
   <input type="email" name="email" id="" class="form-control" value="{{old('email',$stagiaire["email"])}}">
   @error('email')
   <div class="text-danger"> {{$message}}</div>
@enderror
   <label for="" class="form-label">Password:</label>
   <input type="password" name="password" id="" class="form-control" value="{{old('password',$stagiaire["password"])}}">
   @error('password')
   <div class="text-danger"> {{$message}}</div>
@enderror
<label for="" class="form-label">Confirmer password:</label>
   <input type="password" name="password_confirmation" id="" class="form-control" >
   @error('password_confirmation')
   <div class="text-danger"> {{$message}}</div>
@enderror
   <label for="" class="form-label">Bio</label>
   <textarea  name="bio" id="" class="form-control" >{{old('bio',$stagiaire["bio"])}}</textarea>
   @error('bio')
   <div class="text-danger"> {{$message}}</div>
@enderror
<label for="" class="form-label">Image</label>
<input type="file" name="image" id="" class="form-control">
    <div class="class d-grid">
        <input type="submit" value="modifier" class="btn btn-primary btn-block">
    </div>
   
</form>


</body>
</html>
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
    <style>
        body {
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        
    </style>
   
    <h1>Ajouter stagiaire</h1>
  
    <div class="class conatiner ">
        <form  method="POST" action="{{route('stagiaire.store')}}" class="form-label" enctype="multipart/form-data">
            @csrf
          <label for="" cl
          ass="form-label">Name:</label>
          <input type="text" name="name" id="" class="form-control">
          @error('name')
          <div class="text-danger"> {{$message}}</div>
             
          @enderror
          <label for="" class="form-label">Email:</label>
          <input type="email" name="email" id="" class="form-control" value="{{old("email")}}">
          @error('email')
          <div class="text-danger"> {{$message}}</div>
       @enderror
          <label for="" class="form-label">Password:</label>
          <input type="password" name="password" id="" class="form-control" value="{{old("password")}}">
          @error('password')
          <div class="text-danger"> {{$message}}</div>
       @enderror
       <label for="" class="form-label">Confirmer password:</label>
          <input type="password" name="password_confirmation" id="" class="form-control" value="{{old("password_confirmation")}}">
          @error('password_confirmation')
          <div class="text-danger"> {{$message}}</div>
       @enderror
          <label for="" class="form-label">Bio</label>
          <textarea  name="bio" id="" class="form-control" >{{old("bio")}}</textarea>
          @error('bio')
          <div class="text-danger"> {{$message}}</div>
       @enderror
       <label for="" class="form-label">Image</label>
       <input type="file" name="image" id="" class="form-control">
           <div class="class d-grid">
               <input type="submit" value="Ajouter" class="btn btn-primary btn-block">
           </div>
          
       </form> 
    
    </div>                                                          
  
 

</body>
</html>
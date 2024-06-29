<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<header class="p-3 bg-info text-white sticky-top">
@if(session()->has('message'))    
<div class="alert alert-sucess">
        {{session()->get('message')}}
</div>
@endif    
        <div class="row">
            <div class="col-12 col-md-6">
                <h1>The Blog</h1>
            </div>
            <div class="col-12 col-md-6 mt-2 d-flex justify-content-start justify-content-md-end">
                <nav>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a   href="{{route('home.create')}}" class="text-white text-decoration-none">create</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
   
    
         @foreach($blog as $key =>$users) 
                 <h2 class="mb-3 px-4"> {{$users->title}}</h2>
                 <h5 class="px-4">{{$users->date}}</h5>
                 <p class="px-4" >{{$users->blog}}</p><br>
             @endforeach
            
         
         {{$blog->links()}}
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>                
</body>
</html> 
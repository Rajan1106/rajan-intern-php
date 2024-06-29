<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <div class="container  pt-4 pb-3 py-3">
        <div class="row p-3">
            <div class="col-12 col-lg-6 bg-white p-3">
            <h1>create your blog </h1>
            <form action="{{route('home.store')}}" method="post">
                @csrf
                <div class="form-group mt-3 mb-4">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control " name="title" id="title" required>
              
                </div>
                <div class="form-group mt-3 mb-4">
                    <label for="date">date:</label>
                    <input type="date" class="form-control " name="date" id="date"required >  
                   
                </div>
                <div class="form-group mt-3 mb-4">
                <label for="blog">Blog:</label>
                <textarea name="blog" id="blog" cols="30" rows="10"class="form-control" required></textarea>
                </div>
                <div class="text-center"> 
                <button class="btn btn-primary mt-4 mb-2 ">submit</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
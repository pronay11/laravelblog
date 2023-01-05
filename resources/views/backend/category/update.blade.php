<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Create Post</title>
  </head>
  <body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">
                        <h1>Update Category</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update',$edits->id)}}" method="post">
                            @csrf
                            <div class="form-group mt-2">
                                <label for="cat_name">Category Name:</label>
                                <input type="text" name="cat_name" value={{$edits->cat_name}} class="form-control" >                           
                            </div>
                            <button class="btn btn-success m-3">Update</button>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </div>

 

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
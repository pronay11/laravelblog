<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update Post</title>
  </head>
  <body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <div class="card-header">
                        <h1>Update Post</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{route('post.update',$edits->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-2">
                                <label for="user_name">User Name:</label>
                                <input type="text" name="user_name" value={{$edits->user_name}} class="form-control" >                           
                            </div>

                            <div class="form-group mt-2">
                                <label for="cat_name">Category Name:</label>
                                <select name="cat_name" id="">
                                    @foreach($catshows as $catshow)
                                    <option value="{{$catshow->id}}">{{$catshow->cat_name}}</option>
                                    @endforeach
                                </select>                      
                            </div>

                            <div class="form-group mt-2">
                                <label for="title">Post Title:</label>
                                <input type="text" name="title" value={{$edits->title}} class="form-control" >                           
                            </div>
                            
                            <div class="form-group mt-2">
                                <img src="{{ asset('backend/productimage/'.$edits->image) }}" height="100" alt="">
                            </div>

                            <div class="form-group mt-2">
                                <label for="photo">Image</label>
                                <input type="file" name="photo" class="form-control" >
                            </div>

                            <div class="form-group mt-2">
                                <label for="tag_name">Tag:</label>
                                <select name="tag_name" id="">
                                    @foreach($tagshows as $tagshow)
                                    <option value="{{$tagshow->id}}">{{$tagshow->tag_name}}</option>
                                    @endforeach
                                </select>                            
                            </div>

                            <div class="form-group mt-2">
                                <label for="short_des">Short Description:</label>
                                <input type="text" name="short_des" value={{$edits->short_des}} class="form-control" >                           
                            </div>

                            <div class="form-group mt-2">
                                <label for="long_des">Long Description:</label>
                                <input type="text" name="long_des" value={{$edits->long_des}} class="form-control" >                           
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
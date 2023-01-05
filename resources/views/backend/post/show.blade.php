<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Show Post</title>
  </head>
  <body>
    <div class="container m-4">
        <div class="row-md-12">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">
                        <h1>Show Post</h1>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                <th >#</th>
                                <th >User Name</th> 
                                <th >Category Name</th> 
                                <th >Title</th> 
                                <th >Photo</th> 
                                <th >Tag</th> 
                                <th >Short Description</th> 
                                <th >Long Description</th>                          
                                <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @php $sl=1  @endphp

                                 {{-- $shows come from show() function --}}
                                @foreach($postshows as $show)
                                    <tr>
                                    <td>{{ $sl }}</td>
                                    <td>{{$show->user_name}}</td>
                                    <td>{{$show->cat_name}}</td>
                                    <td>{{$show->title}}</td>
                                    <td><img src=" {{ asset('backend/postimage/'.$show->photo) }} " alt="" height="40"></td>
                                    <td>{{$show->tag}}</td>
                                    <td>{{$show->short_des}}</td>
                                    <td>{{$show->long_des}}</td>
                                    <td><a class="btn btn-sm btn-info" href="{{route('post.edit',$show->id)}}">Edit</a> </td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#delete{{ $show->id }}" class="btn btn-sm btn-danger" href="">Delete</button></td>
                                    </tr>     
                                    <div class="modal" id="delete{{ $show->id }}" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Confirmation Message</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are sure want tot delete this Product?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <a type="button" href="{{ route('post.delete', $show->id) }}" class="btn btn-primary">Delete</a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>            
                                    @php $sl++  @endphp
                
                                @endforeach    
                            </tbody>
                
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

 

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
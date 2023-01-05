<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Page</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- my css file -->
	   <link rel="stylesheet" type="text/css" href="frontend.style.css">
    </head>
    <body>
        <!-- Page header with logo and tagline-->
        <header class="py-5  border-bottom mb-4">
            <div class="container">
                <img src="{{ asset('frontend/photo/Rectangle.png') }}" alt="Snow" style="width:100%;">
                <div class="centered">
                    <h1>Our Blog</h1>
                    <p>News from WiztecBD and Around The World of Digital Services Agency</p>
                </div>
            </div>
              <style>
                .container {
                  position: relative;
                  text-align: center;
                  color: black;
                } 
                .centered {
                  position: absolute;
                  top: 50%;
                  left: 50%;
                  transform: translate(-50%, -50%);
                }
                </style>
        </header>
        
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                     {{-- @php dd($post); @endphp   --}}
                    @foreach($post as $posts)
                    
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="{{ asset('backend/postimage/'.$posts->photo) }}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{$posts->created_at}}</div>
                            <h2 class="card-title">{{$posts->title}}</h2>
                              
                            <p class="card-text">{{$posts->short_des}}</p>
                            <a class="btn btn-primary" href="{{route('front.blogdetail')}}">Read more →</a>
                        </div>
                    </div>
                    @endforeach

                  
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    @foreach($cat as $cats)
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!" class="text-decoration-none">{{$cats->cat_name}}</a></li>
                                        
                                    </ul>
                                    @endforeach
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Popular Tag</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    @foreach($tag as $tags)
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!" class=" text-decoration-none">{{$tags->tag_name}}</a></li>
                                        
                                    </ul>
                                    @endforeach
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

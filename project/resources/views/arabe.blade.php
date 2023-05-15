<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <link rel="stylesheet" href="{{ asset('css/home1.css') }}">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Advent+Pro:wght@200&family=Dancing+Script&family=Russo+One&display=swap');
        </style>
        <body>
            <div class="image-container text-white">
                <nav class="navbar navbar-expand-sm navbar-light ">
                    <div class="container">
                        <a class="navbar-brand text-white" href="#"><img src="images/zozor_logo.png"  width="50px" height="50px" alt="#">ZH</a>
                        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse  navbar-collapse" id="collapsibleNavId">
                            <ul class="nav navbar-nav w-100 justify-content-end me-auto mt-2 mt-lg-0">
                                
                                
                                <li class="nav-item">
                                    <a class="nav-link text-white"  href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="/se">Services</a>
                                </li>
                                <li class="nav-item">
                                    @if (Route::has('login'))
 
                                    <a class="nav-link text-white" href="{{ route('login') }}">Log in</a>
                                    @endif
                                </li>
                                <li class="nav-item">
                                        @if (Route::has('register'))
                                            <a class="nav-link text-white" href="{{ route('register') }}" >Register</a>
                                        @endif
                                    
                                    
                                </li>
                            </ul>
                            
                        </div>
                    </div>
                </nav>
                <div class="content">
                    <h1 class="pt-5">Zohour bibliothèque </h1>
                    <h3>Bienvenue</h3>
                </div>
            </div>
            <div class="container">
                <div class=" mt-5 mb-5 d-flex justify-content-center align-items-center">
                    <form class="col-7  d-flex justify-content-center align-items-center my-2" action='{{ url('/search') }}' method="get">
                        <input class="form-control  " name="search_name"  type="text" id="search" placeholder="Search">
                        <button class="btn btn-outline-success " type="submit">Search</button>
                    </form>
                </div>
                <div>
                    <h2 class="a">Unique place for Unique reading </h2>
                    <p class="B">Recusandae voluptates atque ratione accusantium quae,  dolorum provident et dignissimos deleniti impedit exercitationem mollitia asperiores. Architecto deleniti tenetur harum possimus odio consequuntur, dicta, perspiciatis quisquam voluptas maiores nemo nam. Voluptate non labore ratione corporis et neque, praesentium aliquid maiores maxime repellat beatae earum! Id vel maiores totam eum, adipisci aut veniam omnis quas harum, minima, sunt quae excepturi nulla!</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($cr as $s )
                    @if ($s->radmk== 'arabe')
                    <div class="col-3  mb-2">
                        <div class="card text-start">
                            <a href="{{route("showimage2",['id'=>$s->id])}}"><img class="img-card-top img-fluid" style="width: 300px; height: 350px; object-fit: cover;"  src="{{asset('image/'.$s->image)}}"></a>
                            <div class="card-body">
                                <h4 class="card-title">{{$s->nom}}</h4>
                                <p>{{$s->radmk}}</p>
                                <p class="card-text">Les informations</p>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        
        
            
        
        <footer >
            <div class="container">

                <div class="container row text-center">
                    
                    <div class="col-6">
                        <p >Fix :</p>
                        <a href="#">0542167896</a>
                    </div>
                    
                    <div class="ih">
                        <a  class="nav-link" href="http://www.twitter.ma"><i class="fa fa-twitter"></i> twitter </a>
                        <a  class="nav-link" href="http://www.facebook.ma"><i class="fa fa-facebook"> </i>facebook</a>
                        <a  class="nav-link" href="http://www.instagram.ma"><i class="fa fa-instagram"> </i>instagram</a>
                    </div>
                </div>
                
            </div>
            </footer> 
       </body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Document</title>
  <!-- Button trigger modal -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])






</head>
<body class="body">
  <nav class="navbar navbar-expand-sm navbar-light bg-dark">
      <div class="container">
          <a class="navbar-brand text-white" href="#"><img src="images/zozor_logo.png"  width="50px" height="50px" alt="#">ZH</a>
          <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse  navbar-collapse" id="collapsibleNavId">
              <ul class="nav navbar-nav w-100 justify-content-end me-auto mt-2 mt-lg-0">
                  <li class="nav-item">
                      <a class="nav-link text-white" href="/home">HOME</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="/admin/aff">Services</a>
                  </li>
                  <li class="nav-item">
                      @guest
                          @if (Route::has('login'))
                          <h5>    
                              <a class="nav-link " href="{{ route('login') }}"></a>
                          </h5>
                          @endif
                      @else
                          <li class="nav-item ">
                          <div id="demox" >
                              
                                  <h5>
                                      <a class="nav-link text-white text-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                          logout
                                      </a>
                                  </h5>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class=" d-none">
                                  @csrf
                              </form>
                          </div>
                          </li>
                      @endguest 
                      
                  </li>
              </ul>
              
          </div>
      </div>
  </nav>
<div  >
  

  </div>
<article>
  
    
    <div  class="container">
    <table class="table table-bordered text-center table-hover mt-5">
      
        <thead>
          <tr class="table-primary">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">modifier</th>
            <th scope="col">supprimer</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($cr as $s)
          <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->name }}</td>
            <td>{{ $s->email }}</td>
            <td>{{ $s->password }}</td>
            <td><a href="/admin/edit{{ $s->id }}">
                <button class='btn btn-primary'>modifier
                </button>
            </a></td>
            <td><button class="btn btn-danger">supprimer</button></td>
            {{-- <td>
                <a href="{{ url('admin/d', $s->id)}}"><button class="btn btn-primary">Modifier</button></a>
            </td>
            <tr><button class="btn btn-danger">supprimer</button></tr>
          </tr> --}}
        </tbody>
        
        @endforeach
      </table>
    </div>
</article>
</body>
</html>
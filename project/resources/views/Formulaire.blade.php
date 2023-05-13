<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Document</title>
  <!-- Button trigger modal -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
<style>
  *
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.full-page
{
    height: 100%;
    width: 100%;
    background-position: center;
    background-size: cover;
    position: absolute;
}
.navbar
{
    display: flex;
    background-color:rgb(129, 193, 241);
    align-items: center;
    padding: 20px;
    padding-left: 50px;
    padding-right: 30px;
    padding-top: 50px;
}

nav
{
    flex: 1;
    text-align: right;
}
nav ul
{
    display: inline-block;
    list-style: none;
}
nav ul li
{
    display: inline-block;
    margin-right: 70px;
}
nav ul li a
{
    text-decoration: none;
    font-size: 20px;
    color: white;
    font-family: sans-serif;
}
nav ul li button
{
    font-size: 20px;
    color: white;
    outline: none;
    border: none;
    background: transparent;
    cursor: pointer;
    font-family: sans-serif;
}
nav ul li button:hover
{
    color: aqua;
}
nav ul li a:hover
{
    color: aqua;
}

    </style>
</head>
<body class="body"></body>
<div class="">
  <div  class="navbar bg-info">
      <div class="bn">
          <img src="images/fond_jaune.png"  width="50px" height="50px" alt="#">
      </div>
      <Div>
          <a href='#'style=" font-family : 'Dancing Script', cursive ; font-size : 50px ;">ZH</a>
      </div>

      <nav>
          <ul id='MenuItems'>
              <li><a href='/url'>Home</a></li>
              <li><a href='/create'>Services</a></li>
              <li><div>
                  @if (Route::has('login'))
                      <div >
                          @auth
                              <a href="{{ url('/home') }}" >Home</a>
                          @else
                              <a href="{{ route('login') }}">Log in</a>
                      </li><li>
                              @if (Route::has('register'))
                                  <a href="{{ route('register') }}" >Register</a>
                              @endif
                          @endauth
                          </li>
                      </div>
                  @endif
              </div></li>
              
          </ul>
      </nav>

  </div>

 <!-- Button trigger modal -->
<article class="container">
  <div>
    <div class="d-flex justify-content-between mt-3">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
      Ajouter un Livre
      </button>
      <button class="btn btn-primary"><a class="nav-link" href="/urr" > Lit Adminstauer</a></button>
    </div>
    <div class="mt-4">
      <div class="table-responsive">
        <table class="table table-bordered  table-hover">
          <thead>
            <tr class="table-primary">
              <th>Les class</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td>Les roman</td>
            </tr>
            <tr><td>Arabe</td></tr>
            <tr><td >Arabe</td></tr>
            <tr><td>Arabe</td></tr>
            <tr><td >Arabe</td></tr>
            <tr><td>Arabe</td></tr>
          </tbody>
        </table>
      </div>
      
    </div>
  </div>
  
  
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header modal-header-sm" >
            <h5 class="modal-title">LES INFORMATIONs</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
    
  
          <div class="ima"> 
            
              <div class="container">
                <form action="{{Route('url.store')}}" method="POST">  
                  @csrf              
                    <div class="mb-2  container d-flex align-items-center justify-content-center row">
                      <label for="inputName" class="col-3 col-form-label">Auteur :</label>
                      <div class="col-8">
                        <input type="text" class="form-control form-control-sm" name="n" id="inputName" placeholder="Auteur">
                      </div>
                    </div>
                    <div class="mb-2  container d-flex align-items-center justify-content-center row">
                      <label for="inputName" class="col-3 col-form-label">image:</label>
                      <div class="col-8">
                        <input type="text" class="form-control form-control-sm" name="i" id="inputName" placeholder="image">
                      </div>
                    </div>
                    <div class="mb-2  container d-flex align-items-center justify-content-center row">
                      <label for="inputName" class="col-3 col-form-label">La langue:</label>
                      <div class="col-8">
                        <input type="text" class="form-control form-control-sm" name="l" id="inputName" placeholder="langue">
                      </div>
                    </div>
                    <div class="mb-2  container d-flex align-items-center justify-content-center row">
                      <label for="inputName" class="col-3 col-form-label">Class:</label>
                      <div class="col-8">
                        <input type="text" class="form-control form-control-sm" name="c" id="inputName" placeholder="Class">
                      </div>
                    </div>
                    <div class="mb-2  container d-flex align-items-center justify-content-center row">
                      <label for="inputName" class="col-3 col-form-label">societe:</label>
                      <div class="col-8">
                        <input type="text" class="form-control form-control-sm" name="s" id="inputName" placeholder="societe">
                      </div>
                    </div>
                    <div class="mb-2  container d-flex align-items-center justify-content-center row">
                      <label for="inputName" class="col-3 col-form-label">Edituer:</label>
                      <div class="col-8">
                        <input type="text" class="form-control form-control-sm" name="r" id="inputName" placeholder="Edituer">
                      </div>
                    </div>
                    <div class="mb-2  container d-flex align-items-center justify-content-center row">
                      <label for="inputName" class="col-3 col-form-label">Date d'émission: </label>
                      <div class="col-8">
                        <input type="date" class="form-control form-control-sm" name="di" id="inputName" placeholder="Date d'émission">
                      </div>
                    </div>
                  
                    <div class="mb-2  container d-flex align-items-center justify-content-center row">
                      <label for="inputName" class="col-3 col-form-label">Les page:</label>
                      <div class="col-8">
                        <input type="number" class="form-control form-control-sm" name="p" id="inputName" placeholder="page">
                      </div>
                    </div>
                  
                    <div class="mb-2  container d-flex align-items-center justify-content-center row">
                      <label for="inputName" class="col-3 col-form-label">Taille de fichier:</label>
                      <div class="col-8">
                        <input type="text" class="form-control form-control-sm" name="v" id="inputName" placeholder="Taille de fichier">
                      </div>
                    </div>
                    <div class="mb-2  container d-flex align-items-center justify-content-center row">
                      <label for="inputName" class="col-3 col-form-label">Type de fichier:</label>
                      <div class="col-8">
                        <input type="text" class="form-control form-control-sm" name="t" id="inputName" placeholder="type de fichier">
                      </div>
                    </div>
                    <div class="mb-2  container d-flex align-items-center justify-content-center row">
                      <label for="inputName" class="col-3 col-form-label">Date crée:</label>
                      <div class="col-8">
                        <input type="date" class="form-control form-control-sm" name="d" id="inputName" placeholder="Date crée">
                      </div>
                    </div>
                  
                  <div class="mb-2  container d-flex align-items-center justify-content-center row">
                    <div class="offset-sm-4 col-sm-8">
                      <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>
                  </div>
                </form>
              </div>
            
            </div>  
        </div>
      </div>
    </div>
</article>
</body>
</html>
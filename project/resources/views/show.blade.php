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
            <div>
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
            {{-- <table>
                <tr>
                    <th>Image:</th>
                    <td>{{$m->image}}</td>
                </tr>
                <tr>
                    <th>nom</th>
                    <td>{{$m->nom}}</td>
                </tr>
                <tr>
                    <th>class:</th>
                    <td>{{$m->class}}</td>
                </tr>
                <tr>
                    <th>longage:</th>
                    <td>{{$m->longage}}</td>
                </tr>
                <tr>
                    <th>societe</th>
                    <td>{{ $m->societe }}</td>
                </tr>
                <tr>
                    <th>radmk:</th>
                    <td>{{ $m->radmk }}</td>
                </tr>
                <tr>
                    <th>type:</th>
                    <td>{{ $m->type }}</td>
                </tr>
                <tr>
                    <th>volum:</th>
                    <td>{{ $m->volum }}</td>
                </tr>

            </table><br>
            <button  class='b' type="submit">Lit</button>
        </div> --}}
        
        <div class="gg">
    
            <div class="img">
            <img src="photo8.webp" alt="DFG"   width="150px" height="200px"style="border: 2px solid  black;">
          </div>
            <div class="aa">
              TITRE                   <br><br>
           Auteur: {{$m->class}} <br><br>
           La langue: {{$m->class}} <br><br>
           Editeur:     {{$m->class}}<br><br>
           Date d'émission: {{$m->class}} <br><br>
           Les page:      {{$m->class}}  <br><br>
           Taille de fichier:  {{$m->class}} <br><br>
           Type de fichier: {{$m->class}} <br><br>
           Date crée:{{$m->class}}
          </div>
        </div>
          <div class="btn1">
            <button type="submit" class="btn btn-success " >Téléchargé Le Livre</button>
            <button type="submit"  class="btn btn-primary">Lis Le Livre</button>
          
        </div>
        </div>
      </div>
    </div>
</div> 
</div>
</div>
</div>
    
</body>
</html>
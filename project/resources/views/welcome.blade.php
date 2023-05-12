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
        <style>
@import url('https://fonts.googleapis.com/css2?family=Advent+Pro:wght@200&family=Dancing+Script&family=Russo+One&display=swap');
*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.aa{
    text-align: left;
    margin-left: 150px;
    margin-top: 70px;


}
.img{
    margin-top: 20px;
    float: left;

    margin-bottom: 20px;
    margin-right: 15px;
}
.full-page
{
    height: 100%;
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(images/La20OvaleCCCC20A920Ballot20BnF20Oppic.webp);
    background-position: center;
    background-size: cover;
    position: absolute;
}
.navbar
{
    display: flex;
    background-color:rgba(0,0,0,0.3);
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
a
{
    text-decoration: none;
    color: palevioletred;
    font-size: 28px;
}

#imageprincipale{
    padding-top: 60px;
    background: url(age8.jpg) no-repeat fixed 50% 50%;
    background-size: cover;
    height: 799px;
}
h1{
    font-family: 'Dancing Script', cursive;
    text-align: center;
    color:white;
    font-size: 4cm;
    margin-top: 100px;
    text-shadow: 10px 10px 8px rgba(50,245,255,0.5);
}
#premiertrait{
    height: 1px;
    width: 25%;
    margin: -3px auto;
    background-color: rgb(42, 204, 245);
    box-shadow: 1px 3px 2px black;

}
h3{
    text-align: center;
    color:skyblue ;
    font-size: 3cm;
    text-shadow: 1px 3px 2px black;
}
#presentation{
    background-color: #fffAE1;
    padding: 10px px 100px 0;

}
#texteIntro{
    padding:50px 50%;

}
h2{
    text-transform: uppercase;
    text-align: center;
    padding-top: 30px;
    font-size: 40px;
    font-family: 'Avent Pro', sans-serif;
}
div.ui{
    text-align: center;
    margin-left: 200px;
    margin-right:200px ;
    font-size: 15px;


}
article.for{
    background-color: #F3C693;
    margin: 0%;
    padding:0%;
}
.a1{
    display: flex;

}
.a2{
    display: flex;
}
.a3{
    display: flex;
}
.b1{
    margin-right: 9px;
    margin-left: 19px;
}
.b2{
    margin-right: 9px;

}
.b3{
    margin-right: 9px;
}
.b4{
    margin-right: 9px;
}
.l1{
    margin-right: 9px;
    margin-left: 19px;
}
.l2{
    margin-right: 9px;
}
.l3{
    margin-right: 9px;
}
.l4{
    margin-right: 19px;
}
.m1{
    margin-right: 9px;
    margin-left: 19px;
}
.m2{
    margin-right: 9px;
}
.m3{
    margin-right: 9px;
}
.m4{
    margin-right: 9px;
}
div.ha{
    display: flex;
}

footer{
    background-color: salmon;
    color: snow;
    padding: 10px 0 10px 0;

}
#deuxiemetrait{
    height:1px;
    width: 75%;
    background-color: white;
    margin: 60px auto;
}
#copyrightEtcons{
    display: flex;
    margin-bottom: 20px;
    padding:0 10px;

}
#icons{
    width: 50%;

}
#icons a{
    display: inline-block;
    padding: 0 15px;
    font-size: 1.3em;
    color: wheat;
}
#titre_pricipal{
    display: flex;
    flex-direction: column;
}
#logo{
    display: flex;
    flex-direction: row;
    align-items: baseline;
}
#logo img{
    width: 59px;
    height: 60px;
}

#icons a:hover{
    transform: scale(1.5);
    transition: 0.1s;
    color: gray
} */

        </style>
        <body>
        <div class="full-page">
            <div class="navbar" id="titre_principale">
                <div class="bn" id="logo">
                    <img src="images/zozor_logo.png"  width="50px" height="50px" alt="#">
                </div>
                <Div>
                    <a href='#'style=" color:gray ;font-size : 40px ;">ZH</a>
                </div>
                <nav>
                    <ul id='MenuItems'>
                        <li><a href='/'>Home</a></li>
                        <li><a href='/create'>Services</a></li>
                        <li>
                            @if (Route::has('login'))
                                <div >
                                    @auth
                                        <a href="{{ url('/home') }}" >Home</a>
                                    @else
                                        <a href="{{ route('login') }}">Log in</a>
                                </li>
                                <li>
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" >Register</a>
                                        @endif
                                    @endauth
                                    </li>
                                </div>
                            @endif</li>
                        </ul>
                </nav>
    
            </div>
            <header style="background-color: beige">
            <div id="imageprincipale">
                <h1>Zohour bibliothèque </h1>
                <div id="premiertrait"></div><br><br>
                    <h3>Bienvenue</h3>
            </div>
            </header>
        <section id="presentation " style="background-color: beige ">
            <form action="">
                <input type="search" name="search" id="search" style="margin-left: 35% ;padding-left:100px;padding-right:100px ;padding-top:20px ;border-radius:20px">
                <button type="submit" style="border-radius:30px ">search</button>
            </form>
            <div id=" texteIntro">
                <h2 id="iv">Unique place for Unique reading </h2><br><br>
                <div class="ui">
                    <p><em> Recusandae voluptates atque ratione accusantium quae,  dolorum provident et dignissimos deleniti impedit exercitationem mollitia asperiores. Architecto deleniti tenetur harum possimus odio consequuntur, dicta, perspiciatis quisquam voluptas maiores nemo nam. Voluptate non labore ratione corporis et neque, praesentium aliquid maiores maxime repellat beatae earum! Id vel maiores totam eum, adipisci aut veniam omnis quas harum, minima, sunt quae excepturi nulla!</em></p>
                </div>
            </div>
        </section><br><br>
        <article style="background-color: beige">
            <div class="row">
                @foreach ($cr as $s )
                <div class="col-sm-3" >
                    <div class="border" style="margin-left:15px;margin-right: 15px">
                        <p><a href="{{route("url.index",['id'=>$s->id])}}"><img src="{{asset("image/".$s->image)}}"></a></p>
                        <p>{{$s->nom}}</p>
                        <div>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Les information
                          </button>
                          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="staticBackdropLabel">LES INFORMATION</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <div class="img">
                                  <img src="51961637.jpg" alt="DFG"   width="150px" height="200px"style="border: 2px solid  black;">
                                </div>
                                  <div class="aa">
                                    TITRE                          <br><br>
                                 Auteur:                           <br><br>
                                 La langue:                          <br><br>
                                 Editeur:                            <br><br>
                                 Date d'émission:                    <br><br>
                                 Les page:                           <br><br>
                                 Taille de fichier:                  <br><br>
                                 Type de fichier:                    <br><br>
                                 Date crée:
                                </div>
                              </div>
                                <div class="modal-footer">
                                  <button type="button" id="btn-print-this "class="btn btn-success " >Téléchargé Le Livre</button>
                                  <button type="button" class="btn btn-primary">Lis Le Livre</button>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>     
                    </div>
                </div>
                @endforeach    
        </article><br>
        <footer>
            <div id="deuxieme trait"></div>
              <div id="copyrightEtIcons">
                  <div id="icons">
                      <a href="http://www.twitter.ma"><i class="fa fa-twitter"> twitter </i></a>
                      <a href="http://www.facebook.ma"><i class="fa fa-facebook"> faceboo</i></a>
                      <a href="http://www.instagram.ma"><i class="fa fa-instagram"> instagram</i></a>
                      <div class="ha">
                      <p style="font-size: 20px;">Fix :</p>
                      <a href="#">0542167896</a>
                      </div>
    
                  </div>
              </div>
    
        </footer>
       </body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
@vite('resources/sass/app.scss','resourcse/js/app.js')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link rel="stylesheet" href="hhh.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

</head>
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
    background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(images/photo.jpg);
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
#icons a:hover{
    transform: scale(1.5);
    transition: 0.1s;
} */



</style>
<body>

    <div class="full-page">
        <div class="navbar">
            <div class="bn">
                <img src="images/fond_jaune.png"  width="50px" height="50px" alt="#">
            </div>
            <Div>
                <a href='#'style=" font-family : 'Dancing Script', cursive ; font-size : 50px ;">MB</a>
            </div>

            <nav>
                <ul id='MenuItems'>
                    <li><a href='url6'>Home</a></li>
                    <li><a href='Services'>Services</a></li>
                    <li><a href='Login'>Login</a></li>
                    <li><a href="Inscription">Inscription</a></li>
                </ul>
            </nav>

        </div>
        <header>
        <div id="imageprincipale">
            {{-- <form>
                <input type="search" name="search" id="search">
                <button type="submit">search</button>
            </form> --}}
            <h1>Magic bibliothèque </h1>
            <div id="premiertrait"></div><br><br>
                <h3>Bienvenue</h3>
        </div>
    </header>
    <section id="presentation ">
        <div id=" texteIntro">
            <h2 id="iv">Unique place for Unique reading </h2><br><br>
            <div class="ui">
                <p><em> Recusandae voluptates atque ratione accusantium quae,  dolorum provident et dignissimos deleniti impedit exercitationem mollitia asperiores. Architecto deleniti tenetur harum possimus odio consequuntur, dicta, perspiciatis quisquam voluptas maiores nemo nam. Voluptate non labore ratione corporis et neque, praesentium aliquid maiores maxime repellat beatae earum! Id vel maiores totam eum, adipisci aut veniam omnis quas harum, minima, sunt quae excepturi nulla!</em></p>
            </div>
        </div>
    </section><br><br>
    <article>
        <div class="row">
            {{-- @foreach ($cr as $s) --}}
            <div class="col-sm-3"   >
                <div class="border" style="padding-left:40px" >
                    <img src="les-image/photo2.jpg" height="220px" style="padding-bottom: 30px" >
                    {{-- <p >{{ $s->nom }}</p> --}}
                    <p>Les information</p>

                </div>
            </div>
            {{-- @endforeach --}}
        </div>

    </article><br>
    <footer>
        <div id="deuxieme trait"></div>
          <div id="copyrightEtIcons">
              <div id="icons">
                  <a href="http://www.twitter.ma"><i class="fa fa-twitter"> twitter </i></a><br>
                  <a href="http://www.facebook.ma"><i class="fa fa-facebook"> faceboo</i></a><br>
                  <a href="http://www.instagram.ma"><i class="fa fa-instagram"> instagram</i></a><br>
                  <div class="ha">
                  <p style="font-size: 20px;">Fix :</p>
                  <a href="#">0542167896</a>
                  </div>

              </div>
          </div>

    </footer>
   </body>
</html>

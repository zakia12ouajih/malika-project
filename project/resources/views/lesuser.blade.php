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
    .ima{
  border: 1px;
  padding-left: 50px;
  margin-top: 20px;
  font-family:
}
.aw{
  background-color: rgb(156, 154, 154);
}

.bb{
  margin-left: 80px;
  border-radius: 20px;
  padding-left: 30px
}
.cc{
  margin-left: 60px;
  border-radius: 20px;
  padding-left: 30px

}

.dd{
  margin-left: 80px;
  border-radius: 20px;
  padding-left: 30px
}
.ee{
  margin-left:20px;
  border-radius: 20px;
  padding-left: 80px
}
.ff{
  margin-left: 70px;
  border-radius: 20px;
  padding-left: 30px
}
.gg{
  margin-left: 30px;
  border-radius: 20px;
  padding-left: 30px
}
.hh{
  margin-left: 30px;
  border-radius: 20px;
  padding-left: 30px
}
.ii{
  margin-left: 70px;
  border-radius: 20px;
  padding-left: 80px
}

.btn{
  margin-left: 150px;
  background-color:dodgerblue;
margin-top: 40px;
margin-bottom: 40px;
color: white;


}

  table{
    margin-left:300px;
  }
  table, th, td {
   
  margin:20px;

  }
  

  .h{
    color: rgb(137, 139, 190);
    margin-left: 150px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;

  }
.topnav .search-container {
  float: right;
  margin-right: 150px;

}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;


}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
color: rgb(171, 167, 167);
  font-size: 17px;
  border: 1px solid black;
  cursor: pointer;
  width: 30px;
  height: 40px;
}
footer{
    background-color: salmon;
    color: snow;
    padding: 10px 0 10px 0;

}
.H3{
  margin-left:100px ;
  color: rgb(82, 173, 238)

}
#copyrightEtcons{
    display: flex;
    margin-bottom: 20px;
    padding:0 10px;

}
    </style>





</head>
<body class="body"></body>
<div  >
  <div class="navbar bg-info">
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
<article>
  
    
    <div  class="container">
    <table class="table table-bordered  table-hover mt-5">
      
        <thead>
          <tr class="table-primary">
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($c as $s)
          <tr>
            <td>{{ $s->id }}</td>
            <td>{{ $s->name }}</td>
            <td>{{ $s->email }}</td>
            <td>{{ $s->password }}</td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
</article>
</body>
</html>
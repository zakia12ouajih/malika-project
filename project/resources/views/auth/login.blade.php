<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
     <link rel="stylesheet" href="../css/test.css">
     <style>
        /* Import Google font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family:  'Times New Roman', Times, serif;
  font-size: 19px;
}
body{
  height: 100vh;
  /* width: 100%; */
  background-image: linear-gradient(rgba(0,0,0,0.1),rgb(252, 255, 57)),url(../image/lo.jpg);
  background-size: cover;
  background-position: center;
}
.container{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  max-width: 430px;
  width: 100%;
  background: #cccccc;
  opacity: 80%;
  border-radius: 7px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.3);
  margin-top: -48px;
}
.container .registration{
  display: none;
}
#check:checked ~ .registration{
  display: block;
}
#check:checked ~ .login{
  display: none;
}
#check{
  display: none;
}
.container .form{
  padding: 2rem;
}
.form header{
  font-size: 2rem;
  font-weight: 500;
  text-align: center;
  margin-bottom: 1.5rem;
}
 .form input{
   height: 60px;
   width: 100%;
   padding: 0 15px;
   font-size: 17px;
   margin-bottom: 1.3rem;
   border: 1px solid #ddd;
   border-radius: 6px;
   outline: none;
 }
 .form input:focus{
   box-shadow: 0 1px 0 rgba(0,0,0,0.2);
 }
.form a{
  font-size: 16px;
  color: #009579;
  text-decoration: none;
}
.form a:hover{
  text-decoration: underline;
}
button{
  color: #fff;
  background: rgb(5, 61, 5);
  font-size: 1.2rem;
  font-weight: 500;
  letter-spacing: 1px;
  margin-top: 1.7rem;
  cursor: pointer;
  transition: 0.4s;
  width: 190px;
  height: 40px;
  border: none;
  border-radius: 6px;
  margin-left: 90px;
}
button:hover{
  background: rgb(5, 61, 5);
  font-size: 1.3rem;

}
.signup{
  font-size: 17px;
  text-align: center;
}
.signup label{
  color: #009579;
  cursor: pointer;
}
.signup label:hover{
  text-decoration: underline;
}



     </style>
 </head>
 <body>

       <div class="container">
         <input type="checkbox" id="check">
         <div class="login form">
           <header>Login</header>
           <form method="POST" action="{{ route('login') }}">
             @csrf

             <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email" >
             @error('email')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
         @enderror
             <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
             @error('password')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
         @enderror
             <button type="submit" class="btn btn-primary">
                 {{ __('Login') }}
             </button>
           </form>
         </div>
       </div>
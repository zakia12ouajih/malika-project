<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
     <link rel="stylesheet" href="../css/test.css">
     <style>
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
  background-image: linear-gradient(rgba(0,0,0,0.1),rgb(239, 245, 248)),url(../image/lo.jpg);
  background-size: cover;
  background-position: center;
}
.container{
  position: absolute;
  top: 57%;
  left: 50%;
  transform: translate(-50%,-50%);
  max-width: 430px;
  width: 100%;
  background: rgb(148, 152, 211);
  opacity: 80%;
  border-radius: 7px;
  box-shadow: 0 5px 10px white;
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
   height: 50px;
   width: 100%;
   padding: 0 15px;
   font-size: 17px;
   margin-bottom: 1.3rem;
   border: 1px solid #ddd;
   border-radius: 6px;
   outline: none;
 }
 .form input:focus{
   box-shadow: 0 1px 0 white;
 }
.form a{
  font-size: 16px;
  color: #110095;
  text-decoration: none;
}
.form a:hover{
  text-decoration: underline;
}
button{
  color: #fff;
  background: blue;
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
  background: rgb(187, 204, 237);
  font-size: 1.3rem;

}
.signup{
  font-size: 17px;
  text-align: center;
}

.signup label:hover{
  text-decoration: underline;
}


.full-page
{
    height: 100%;
    width: 100%;
    background-position: center;
    background-size: cover;
    position: absolute;
}
.dont_have_acc{
    text-align: center;
}
.dont_have_acc a{
    font-size: 20px
}



  </style>
 </head>
 <body >
<div class="container">
    
    <input type="checkbox" id="check">
        <div class="login form">
            <header>Modifier</header>
                    <form action='{{ URL('/admin/modiUser',$md->id) }}' method="POST">
                        @csrf
                        @method('put')
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="name" value={{ $md->name }} required autocomplete="name" autofocus>

    
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control " name="email" value={{ $md->email }} required autocomplete="email">

                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Modifier') }}
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


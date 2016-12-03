<!DOCTYPE html>
<html lang="en">
<head>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="/css/fondo.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link  type="text/css" rel="stylesheet" href="/fonts/Lato">

    <!-- Styles -->
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <style>
        .margen {
            margin-left:-100px;
        }
        .fa-btn {
            margin-right: 30px;
        }
        .top{
            margin-top:0px;
            padding-top:10px;
        }
        
    </style>
</head>

<body id="app-layout">
    <nav class="navbar-default navbar-static-top color-nav top">
        <div class="container top">
            <div class="navbar-header ">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

           
                  <a href="{{ url('/bienvenidos') }}">
                <img class="logotipoo" src="/images/Isologotipo.png" > <!--Modificar en este solamente borrar los .. que estan el tuyo seguro-->
                </a>
     

            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                     
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right ">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/Contacto') }}"><p class="naranja Lato pequenio top-letras">Contacto</p></a></li>
                        <li><a href="{{ url('/login') }}"><p class="naranja Lato pequenio top-letras">Iniciar Sesión</p></a></li>
                        <li><a href="{{ url('/register') }}"><p class="naranja Lato pequenio top-letras">Registrarse</p></a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
     @if(session('notice'))
    <div class="alert alert-sucess">
        <strong>{{session('notice')}}</strong>
    </div>
    @endif
     @if(session('error'))
    <div class="alert alert-danger">
        <strong>{{session('error')}}</strong>
    </div>
    @endif
    @yield('content')
     
       
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
    <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> 
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
   {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}



</body>
</html>

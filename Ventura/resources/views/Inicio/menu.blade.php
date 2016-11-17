@extends('layouts.app')

@section('content')
 <style>

body, html {height: 100%}


</style>
   
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav" id="sidebar">  
          <li><a><img src="../images/BotónHome.png"></a></li>   
          <div class="naranja Lato chico top-left">MENU</div>          
          <li><a><img src="../images/Amigos.png"></a></li>
          <div class="naranja Lato chico top-left">AMIGOS</div>
          <li><a><img src="../images/Chat.png"></a></li>
          <div class="naranja Lato chico top-left">CHAT</div>
          <li><a><img src="../images/Logros.png"></a></li>
          <div class="naranja Lato chico top-left">LOGROS</div>
          <li><a><img src="../images/Rancking.png"></a></li>
          <div class="naranja Lato chico top-left">RANCKING</div>
          
        </ul>
       </div>
    <div class="menues">
     <div id="container"> 
       <div id="menu">
        <div id="centro">
        
        <div class="item">
          <a href="{{ url('/papel') }}">
            <img src="../images/BotonPapel.png" alt="">
            <div class="titulo">PAPEL</div>
          </a>
          
        </div>

        <div class="item">
          <a href="{{ url('/organicos') }}">
            <img src="../images/Botonorg.png" alt="">
            <div class="titulo">Organicos</div>
          </a>
          
        </div>

        <div class="item">
          <a href="{{ url('/vidrio') }}">
             <img src="../images/BotonVidrio.png" alt="">
            <div class="titulo">Vidrios</div>
          </a>
          
        </div>

        <div class="item">
          <a href="{{ url('/baterias') }}">
            <img src="../images/BotonBateria.png" alt="">
            <div class="titulo">Baterias</div>
          </a>
          
        </div>

        <div class="item">
          <a href="{{ url('/plasticos') }}">
            <img src="../images/BotonPlasticos.png"  alt="">
            <div class="titulo">Plasticos</div>
          </a>
      </div>
    </div>
  </div>
</div>
      
      </div>          
      
      
  
@endsection

 
@extends('layouts.app')

@section('content')
  <div class="bgimg-1">
  <div class="abajo-derecha Lato pequenio">
	<div class="text-center">
    	<div class="w3-conteiner">
			<p class="animated bounce Lato mediano naranja">¿Que es Ventura?</p>         
			  <p class="LatoR  naranja">Ventura es un juego que pone a prueba <br> 
			  	                      tus conocimientos acerca del<strong> mundo del reciclaje</strong><br>
			  	                en forma de trivia el cual contiene 5 categorias</p>
			  	                     


			    <p class="LatoR chico verde"> Obtén las 5 medallas para ganar<br> el premio de oro <strong>"RECICLARTE"</strong></p>
            
                 <center>
                 	<div class="foto"><a href="{{ url('/menu') }}"><img src="../images/boton.png" alt="foto" /><p>COMENZAR</p></a></div>
			     
			     <a href="{{ url('/reglas') }}"><p class="naranja LatoLi">¿Como Jugar?</p></a>
			     </center>
        </div>
     </div>
  </div>
</div>


  @endsection




  

  
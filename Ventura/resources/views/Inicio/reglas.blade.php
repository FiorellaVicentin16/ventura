@extends('layouts.app')

@section('content')
<style >
  body, html {height: 100%}
</style>
   <div class="Img" >
   <div class="text-center">
   <div class="col-md-12 container-reglas">
        <p class="LatoR naranja media ">Reglas Del Juego</p>
        <p class="divider"></p>
        <br>
        <br>
        <div class="container-fluid" id="conten-contenido">         
            <p class="Lato-Regular verde pequenio" size=6>Se inicia el juego dando una breve informacion sobre el reciclaje. 
            <br>
            El objetivo del juego es promover el reciclaje mediante las distintas preguntas
            <br>Te mostraremos una breve informacion del reciclaje en una de las secciones,<br>Tendras 30 segundos para leerlo despues aparecera una pregunta <br>en forma de trivia, si la repuesta es corretas pasaras de nivel <br>si no es correcta tendras dos oportunidades más,<br> si pierdes todas las oportunidades tendras<br> que esperar 15 minutos que se vuelvan a recargar las oportunidades<br>Luego de pasar los 5 niveles de una categorias <br>se desbloqueara la siguiente y asi sucedera con todas las categorias 
            </p>
            
	 </div>
	 </div>
    <center>
	  <div class="foto"><a href="{{ url('/menu') }}"><img src="../images/Inicio.png" alt="foto" /><p class="LatoBlack pequenio">INICIAR</p></a></div>
	 </center>
   </div>
	 </div>

   
@endsection
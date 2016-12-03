@extends('layouts.app')

@section('content')
 <style>

body, html {height: 100%}
.Img{
    background-image: url('../images/Contacto.png');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
.espacio{
	margin-top:0px;
}
</style>
   <div class="Img">

      <div class="container Lato pequenio">
	<div class="row">
    	<div class="col-sm-6">
    		 
           
  <div class="text-center">
  <p class="animated bounce Lato mediano naranja">¿Quienes Somos?</p>
  <p class="verde">Somos un grupo de desarrolladores de sitios web, que pertenece al <strong class="verde">Informatorio.</strong><br>El Informatorio es un Curso Avanzado de Desarrollo de Aplicaciones Informáticas  destinado a jóvenes sin conocimientos previos de programación y se propone formarlos con la capacidad semejante a la de un técnico informático en el plazo de un año.<br>Se pretende potenciar la formación de los jóvenes en herramientas  específicas requeridas por la Industria, promoviendo el desarrollo de ciertas habilidades y características personales además de incentivar su preparación en idioma Inglés.
  </p>    
  </div>
   			
            <p class="Lato chico animated bounceInLeft naranja">Nuestro correo es:</p><span class="azul"><i class="fa fa-envelope-o" aria-hidden="true"></i> <a class="azul"href="mailto:Learningroup@gmail.com">Learningroup16@gmail.com</a></span>
        </div>  
    </div>
  </div>

  
  
        


   </div>
@endsection
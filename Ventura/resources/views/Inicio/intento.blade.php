@extends('layouts.app')

@section('content')
<style >
  body, html {height: 100%}
</style>
<div class="fondoCategorias fondo{{ucwords($categoriaNombre)}}">

  <center>
  <div class="contento center LatoR pequenio naranja INFO{{ucwords($categoriaNombre)}}">
    <strong>vamos intenatalo de nuevo!!!... voy a desaparecer en segundos!!</strong>
    
  </div>

  <div class="cuadro LatoR pequenio naranja" style="display:none;">
 
   {!! Form::open(['route' => 'respuesta', 'method' => 'post']) !!}
       @foreach($preguntas as $pregunta)
         <div class="col-slg-9"><strong>{{$pregunta['descripcion']}}</strong></div>
       		@foreach($pregunta->respuestas as $respuesta)
        
              
            
      <div class="col-slg-3 verdesito ">
         
           <input type="radio" name="{{$pregunta['id']}}" value="{{$respuesta['id']}}" >{{$respuesta['opciones']}}
         
      </div>
              

            @endforeach


       @endforeach
      
       <input type="submit" value="contestar" />
      {!! Form::close() !!}

    
</div>
</div>
</div>

 <script type="text/javascript" src="/jquery-3.1.1.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $(".contento").fadeOut(1500);
        },3000);
    });
    </script>
     <script type="text/javascript" src="../jquery.js"></script>
      <script type="text/javascript">
      $(document).ready(function() {   
       setTimeout(function() {
        $(".cuadro").fadeIn(1500);
         },4000);
      });
</script>
@endsection
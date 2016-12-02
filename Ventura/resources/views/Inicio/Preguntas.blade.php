@extends('layouts.app')

@section('content')
<style >
  body, html {height: 100%}
</style>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

</div>
<div class="fondoCategorias fondo{{ucwords($categoriaNombre)}}">

  <center>
  <div class="contento center LatoR pequenio naranja INFO{{ucwords($categoriaNombre)}}">
    <strong>Hola,Rápido!!... voy a desaparecer en segundos!!</strong>
      @include('Inicio.'.ucwords($categoriaNombre))
    
  </div>

  <div class="cuadro LatoR pequenio naranja" style="display:none;">
 
   {!! Form::open(['route' => 'respuesta', 'method' => 'post']) !!}
       @foreach($preguntas as $pregunta)
         <div class="col-slg-9 "><strong>{{$pregunta['descripcion']}}</strong></div>
       		@foreach($pregunta->respuestas as $respuesta)

            
      <div class="col-slg-3 center verdesito ">
        <center>
          <input type="radio" name="{{$pregunta['id']}}" value="{{$respuesta['id']}}" {{(in_array($respuesta['id'],$correctas)?'checked="checked"':"")}}>{{$respuesta['opciones']}}
        </center>
      </div>
              

            @endforeach


       @endforeach
      
       <input type="submit" value="Jugar" class="Botton{{ucwords($categoriaNombre)}}"/>
      {!! Form::close() !!}
          
    
</div>
</div>
</div>

 <script type="text/javascript" src="/jquery-3.1.1.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $(".contento").fadeOut(1500);
        },23000);
    });
    </script>
     <script type="text/javascript" src="../jquery.js"></script>
      <script type="text/javascript">
      $(document).ready(function() {   
       setTimeout(function() {
        $(".cuadro").fadeIn(1500);
         },24000);
      });
</script>
@endsection
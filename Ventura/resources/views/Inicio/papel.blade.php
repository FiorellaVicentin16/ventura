@extends('layouts.app')

@section('content')
<style>
body, html {height: 100%}
.fondo {
    background-image: url('../images/Fondo Papel.png');
    min-height: 170%;
    background-position:center;
    background-size:cover;

}

</style>

<div class="Img-Fonde">
    <div class="container">
        <div class="table-responsive">

        <table class="table table-condensed">
        <thead>
      <tr>
        <th>pregunta</th>
        

      </tr>
    </thead>
    <tbody>
      @foreach ($preguntas as $pregunta)
      <tr>
      
        <td>{{$pregunta['descripcion']}}</td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>  
@endsection
@extends('layouts.app')

@section('content')
<style>
body, html {height: 100%}
.fondo {
    background-image: url('../images/FondoOrganico.png');
    min-height: 150%;
    background-position:center;
    background-size:cover;

}

</style>

<div class="fondo">
<div class="text-center">
<div class="container top-letras">         
 <p class="Lato-Regular naranja pequenio margen-derecho margen-izquierdo espacio-arriba" size=6>
 Aunque es difícil encontrar un contenedor de color naranja,<br>
estos se utilizan exclusivamente para material orgánico.
 <br> En caso de no disponer de este tipo de contenedor,utilizaríamos el gris.<br>
Residuo orgánico: Todo desecho de origen biológico,
que alguna vez estuvo vivo o fue parte de un ser vivo, <br>
 por ejemplo: hojas, ramas, cáscaras y residuos de la fabricación de alimentos en el hogar, etc..<br>
Son los que por sus características químicas sufren una descomposición natural muy lenta.
 <br> Muchos de ellos son de origen natural poer no son biodegradables, por ejemplo los envases de plástico.<br>
  Generalmente se reciclan a través de métodos artificiales y mecánicos,como las latas, vidrios, plásticos, gomas.
  <br> En muchos casos es imposible su transformación o reciclaje; esto ocurre con el telgopor, que seguirá presente
   en el planeta dentro de 500 años. Otros, como las pilas, son peligrosos y contaminantes.
<br>Hay diferentes formas de reciclar la basura orgánica pero la más conocida es mediante el proceso de compost,<br>
 que es un tipo de abono orgánico.

El compost convierte los desechos orgánicos generados en tu hogar, como ser los desechos de frutas y verduras,<br>
 cáscaras de huevos, restos de poda, etc, en un abono que permite mejorar la tierra de tu jardín. 
	<center>
	  
	 <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	  <div class="boton1"><a><img src="../images/ButtonOrg.png" alt="boton1" /><p class="LatoBlack peque">JUGAR</p></a></div>
  
</button>
</center>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">PREGUNTA</h4>
        <div>
          <div><h5 class="modal-title" id="myModalLabel">Pregunta....</h5></div>
          <div class="radio">
             <label><input type="radio" name="optradio">Option 1</label>
          </div>
          <div class="radio">
            <label><input type="radio" name="optradio">Option 2</label>
          </div>
          <div class="radio disabled">
              <label><input type="radio" name="optradio" disabled>Option 3</label>
          </div>






        </div>
     
    </div>
  </div>
</div>
</div>


<div class="tooltip"></div>

</div>
@endsection
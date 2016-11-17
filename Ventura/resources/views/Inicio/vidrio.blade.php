@extends('layouts.app')

@section('content')
<style>

.fondo {
    background-image: url('../images/FondoVidrio.png');
    min-height: 150%;
    background-position:center;
    background-size:cover;

}

</style>

<div class="fondo">
<div class="text-center">
<div class="container top-letras">         
 <p class="Lato-Regular naranja pequenio margen-derecho margen-izquierdo espacio-arriba" size=6>
  NO todos los vidrios son reciclables. Hoy en día existen al menos 3 maneras<br>
   muy diferentes de desemparejar y reciclar vidrio.<br>
El vidrio es un material ideal para ser reciclado, ya que puede reciclarse<br>
 infinidad de veces sin perder sus propiedades.
<br>El uso de vidrio reciclado ayuda a ahorrar energía, es menos costoso,<br> 
además de reducir residuos y el consumo de materias primas.
<br>La mayor parte del vidrio reciclado se puede utilizar para hacer nuevos envases y <br>
una pequeña proporción se utiliza para la fabricación de otros materiales de construcción, <br>
como ladrillos, cerámicas, asfaltos, etc.
 
	<center>
	  
	 <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	  <div class="boton1"><a><img src="../images/Button.png" alt="boton1" /><p class="LatoBlack peque">JUGAR</p></a></div>

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
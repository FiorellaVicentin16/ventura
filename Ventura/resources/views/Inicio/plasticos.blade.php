@extends('layouts.app')

@section('content')
<style>
body, html {height: 100%}
.fondo {
    background-image: url('../images/FondoPlastico.png');
    min-height: 170%;
    background-position:center;
    background-size:cover;

}

</style>

<div class="fondo">
<div class="text-center">
<div class="container top-letras">         
 <p class="Lato-Regular naranja pequenio margen-derecho margen-izquierdo espacio-arriba" size=6>
  El plástico tiene una gran ventaja que es 100% reciclable y sólo tienes que seguir 5 pasos:<br>
  1- Lava. 2-Seca. 3-Separa. 4-Aplasta. 5-Recicla.
<br>PET - Tereftalato de Polietileno son los Envases de bebidas gaseosas, jugos, jarabes,<br>
 aceites comestibles, bandejas, artículos de farmacia, medicamentos.
<br>PEAD - Polietileno de alta densidad son los Envases de leche, detergentes, champú, baldes,<br>
 bolsas, tanques de agua, cajones para pescado, entre otros.
<br>PVC - Policloruro de vinilo son los Tuberías de agua, desagües, aceites, mangueras, cables, <br>
simil cuero, usos médicos como catéteres, bolsas de sangre, etc.<br>
PEBD - Polietileno de baja densidad son las Bolsas para residuos, usos agrícolas, etc.<br>
PP - Polipropileno son los Envases de alimentos, industria automotriz,<br> artículos de bazar y menaje,
 bolsas de uso agrícola.
<br>PS - Poliestireno son los Envases de alimentos congelados, aislante para heladeras, juguetes, relleno.


Existen dos familias de plásticos: 
Termoplásticos:son plásticos fácilmente reciclables ya que funden <br>
cuando se calientan y por tanto se pueden moldear repetidas veces.
Termoestables:son difíciles de reciclar ya que están formados por polímeros con cadenas ligadas químicamente<br>
 (con enlaces transversales) que hacen necesaria la destrucción de su estructura molecular para poder fundirlos y<br>
  esto conlleva a una alteración grande de sus propiedades originales. <br>
  Existen distintos termoestables como por ejemplo:resinas fenólicas, resinas ureicas, etc...
 
	<center>
	  
	 <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	  <div class="boton1"><a><img src="../images/ButtonPlasticos.png" alt="boton1" /><p class="LatoBlack peque">JUGAR</p></a></div>
  
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
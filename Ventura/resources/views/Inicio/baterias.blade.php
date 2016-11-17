@extends('layouts.app')

@section('content')
<style>
body, html {height: 100%}
.fondo {
    background-image: url('../images/FondoBateria.png');
    min-height: 150%;
    background-position:center;
    background-size:cover;

}

</style>

<div class="fondo">
<div class="text-center">
<div class="container top-letras">         
 <p class="Lato-Regular naranja pequenio margen-derecho margen-izquierdo espacio-arriba" size=6>
 Baterías de plomo y ácido son las baterías de automóvil, de carritos de golf, sistemas de alimentación ininterrumpida, 
 baterías de maquinaria industrial, baterías de motocicletas, y otras baterías comerciales.<br>
  Pueden ser normales de plomo ácido, selladas de plomo ácido, de tipo gel, o de matriz absorbente. <br>
  Estas se reciclan trozándolas, neutralizando su ácido, y separando los polímeros del plomo.<br>
 Los materiales recuperados se usan en para diversos fines, incluyendo la fabricación de baterías y pilas nuevas.<br>
Pilas botón: son pilas que se caracterizan por tener una dimensión reducida y generalmente forma de botón.<br>
 Se utilizan en aparatos pequeños y como ejemplo se debe citar las pilas de mercurio y de litio.<br>
  Pese a su medida, son las más contaminantes ya que contienen una mayor cantidad de metales pesados.<br>
Las pilas grandes: estas pilas se caracterizan por sus grandes dimensiones y su utilización en aparatos más voluminosos.
 Las más comunes son las pilas bastón por sus dimensiones y las pilas de petaca<br>
  (ej. pilas salinas o de Leclanché, las pilas alcalinas ...) y en menor cantidad encontramos las de petaca.<br>
   Contienen menos metales pesantes pero se producen muchas más.<br>
Las baterías de móvil: finalmente se debe tener en cuenta las baterías de móvil. <br>
Éstas son pilas recargables que se pueden utilizar durante mucho tiempo.<br> Las más frecuentes son las de níquel-cadmio.
<br>El proceso de tratamiento y reciclaje de las pilas consta de dos unidades diferenciadas:<br>
1-La unidad de tratamiento y reciclaje de pilas convencionales.<br>
2-La unidad de tratamiento y reciclaje de pilas botón.
  <center>
    
   <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
    <div class="boton1"><a><img src="../images/ButtonBateria.png" alt="boton1" /><p class="LatoBlack peque">JUGAR</p></a></div>
  
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
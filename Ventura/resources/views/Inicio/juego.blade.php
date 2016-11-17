@extends('layouts.app')

@section('content')
<style>
body, html {height: 100%}
.fondo {
    background-image: url('../images/FondoPapel.png');
    min-height: 100%;
    background-position:center;
    background-size:cover;

}

</style>

<div class="fondo">
<center>
   <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Jugar
</button>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">PREGUNTA</h4>
       <div>
        <div><h5 class="modal-title" id="myModalLabel">¿Como Se LLamaba......?</h5></div>
        <div class="radio"><label><input type="radio" name="optradio">Option 1</label></div>
        <div class="radio"><label><input type="radio" name="optradio">Option 2</label></div>
        <div class="radio"><label><input type="radio" name="optradio">Option 3</label></div>
       </div>
     
      </div>
    </div>
  </div>
  </div>
</center>
</div>

     
 @endsection
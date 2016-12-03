@extends('layouts.app')

@section('content')
 <style>

body, html {height: 100%}
.Img{
    background-image:url('/images/FondoMenu.png');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>
      <div class="Img">
        <div class="menues">
            <div id="centro">
                  @foreach($categorias as $categoria) 
                      <div class="item">
                         <a href="{{ URL::route('categoria',['id'=>$categoria['id']]) }}">
                          <img src="/images/{{ucwords($categoria['nombre'])}}.png" alt="">
                          <div class="titulo">{{$categoria['nombre']}}</div>
                        </a>
                      </div>
                  @endforeach
            </div>
         </div>

      </div>
         
      
      
  
@endsection

 
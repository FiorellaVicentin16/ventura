<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\pregunta as pregunta;

use App\respuesta as respuesta;

use App\categoria as categoria;

class PreguntaController extends Controller
{
    public function index($id)
    {

    	$pregunta=pregunta::with('respuestas')->where('categoria_id',$id)->get();
    	$categoria=categoria::find($id);
      $correctas=\Session::get('correctas',[]);;

    	return view("Inicio.Preguntas",['preguntas'=>$pregunta,'categoriaNombre'=>$categoria->nombre,'correctas'=>$correctas]);
    }


      public function ganaste()
   {
      return view("inicio.ganaste");

   }

    public function formPreguntas(Request $request) {


         $idsRptas = $request->all();  

         $respuestas = respuesta::whereIn('id',array_values($idsRptas))->get(); 
      
         
         $categoriaId = $respuestas[0]['pregunta']['categoria']['id']; 

        $correctas=[];
        
        foreach ($respuestas as $rpta) {
          
             if ($rpta['validacion'] == 1 )
             {
               $correctas[]=$rpta['id'];
              \Session::push('correctas',$rpta['id']);
             
             }

        }
        
         if ($correctas == 5)
           {
             $flashtype='error';
             $msg='Intenta Contestar De Nuevo...';

             request()->session()->flash($flashtype,$msg);
             return redirect()->route('categoria', ['id' => $categoriaId]);
          }

             $flashtype='notice';
             $msg='Felicitaciones ganaste la categoria!!!';

             request()->session()->flash($flashtype,$msg);
             return redirect()->route("ganaste");

             dd($correctas);
    }
}
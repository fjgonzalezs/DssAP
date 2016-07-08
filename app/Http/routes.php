<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
   // return view('welcome');
	return view('index');
});

Route::get('prueba',function(){

	return "hola prueba  asdasd:D";
});

Route::get('MostrarEstudiantes',function(){

 $estudiantes = \DB::table('estudiantes')->get();


	return view('MostrarEstudiantes', compact('estudiantes'));
});

Route::get('elegirEstudiante','estudiantesController@muestraelegidos');
Route::get('nacionalAbanderado','estudiantesController@nacional');
Route::get('elegirportaciudad','estudiantesController@ciudad');



Route::get('MostrarNota',function(){

 $estudiantes = \DB::table('estudiantes')
 ->join('notas','estudiantes.idNota','=','notas.idNota')
 ->get();
$arreglo = array();

 foreach($estudiantes as $estudiante){

 	$suma = ($estudiante->segundoNota+$estudiante->terceroNota+$estudiante->cuartoNota+$estudiante->quintoNota
 	 			+$estudiante->sextoNota+$estudiante->septimoNota+$estudiante->octavoNota+$estudiante->novenoNota
 	 			+$estudiante->decimoNota+$estudiante->primeroBNota+$estudiante->segundoBNota)/11;
 	$arreglo[] = $suma;


 	\DB::table('notas')
            ->where('notas.idNota', $estudiante->idNota)
            ->whereNull('totalNota')
            ->update(['totalNota' => $suma]);
 }

	return view('MostrarNota', compact('estudiantes'));
 //return var_dump($arreglo);
});
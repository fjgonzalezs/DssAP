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

/*Rutas pais*/
Route::get('nacionalAbanderado','paisController@nacional');
Route::post('dsspais','paisController@dsspais');

Route::get('primerescoltapais','paisController@primerescolta');
Route::post('dssprimerescoltapais','paisController@dssprimerescolta');

Route::get('segundoescoltapais','paisController@segundoescolta');
Route::post('dsssegundoescoltapais','paisController@dssprimerescolta');

/*rutas ciudad*/
Route::get('elegirportaciudad','ciudadController@ciudad');
Route::post('dssciudad','ciudadController@dssciudad');

Route::get('primerescoltaciudad','ciudadController@primerescolta');
Route::post('dssprimerescoltaciudad','ciudadController@dssprimerescolta');

Route::get('segundoescoltaciudad','ciudadController@segundoescolta');
Route::post('dsssegundoescoltaciudad','ciudadController@dssprimerescolta');

/*rutas plantel*/
Route::get('elegirportaplantel','plantelController@plantel');
Route::post('dssplantel','plantelController@dssplantel');

Route::get('primerescoltaplantel','plantelController@primerescolta');
Route::post('dssprimerescoltaplantel','plantelController@dssprimerescolta');

Route::get('segundoescoltaescolta','plantelController@segundoescolta');
Route::post('dsssegundoescoltaplantel','plantelController@dssprimerescolta');
/* rutas parametros*/

Route::get('parametros','parametrosController@index');
Route::get('parametros/{id}','parametrosController@show');
Route::patch('parametros/{id}/editar','parametrosController@editar');

Route::get('actitud/','parametrosController@indexActitud');
Route::post('actitud/calculoTotal','parametrosController@calculoTotal');


/*CRUD estudiante*/

Route::resource('estudiante','estudiantesController');
Route::get('estudiante/{id}/agregarActitud','estudiantesController@agregarActitud');
Route::post('estudiante/{id}/agregarActitud','parametrosController@agregarActitud');



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
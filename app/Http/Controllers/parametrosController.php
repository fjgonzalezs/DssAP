<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class parametrosController extends Controller
{
    

	public function index(){


		/*$parametros = DB::table('localidades')
		->join('actitudes','localidades.idActitud','=', 'actitudes.idActitud')
		->get();*/

		$parametros = DB::table('actitudes')
		->get();

		return view('parametros.parametros',compact('parametros'));
	}


	public function show($id){

		$parametros = DB::table('localidades')
		->join('actitudes','localidades.idActitud','=', 'actitudes.idActitud')
		->where('localidades.idActitud',$id)
		->get();

		$nombreActitud = DB::table('actitudes')
		->select('nombreActitud','totalActitud', 'idActitud')
		->where('idActitud', $id)
		->first();

		$totalActitud = $nombreActitud->totalActitud;



		return view('parametros.editarParametros',compact('parametros','id','nombreActitud','totalActitud'));


	}

	public function editar($id, Request $request){

		$localidadid= DB::table('localidades')
		->select('idLocalidad')
		->where('idActitud',$id)
		->first();

		$arreglo= array();
			
for($i=$localidadid->idLocalidad;$i< $localidadid->idLocalidad+5;$i++){

	$arreglo[]= $request->get('localidad'.$i);

		
	}

			


	$suma = array_sum($arreglo);
	//return dump($arreglo);

if($suma == $request->get('totalActitud')){
	for($i=$localidadid->idLocalidad;$i< $localidadid->idLocalidad+count($arreglo);$i++){

		DB::table('localidades')
		->where([['idActitud',$request->get('idActitud')],
			['idLocalidad',$i]])
		->update(['pesoLocalidad' =>$request->get('localidad'.$i)]);
	}

	return "actualizado";
      }

      else{

      		return "La suma de los parametros deben ser igual a ".$request->get('totalActitud');

      }
	}


/* index de edicion de actitudes*/

public function indexActitud(){

	$parametros = DB::table('actitudes')
				->get();

return view('parametros.parametroEdit',compact('parametros'));

}
	public function calculoTotal(Request $request){

		$arreglo = array($request->get('actitud1'),$request->get('actitud2'),$request->get('actitud3'),
			$request->get('actitud4'),$request->get('actitud5'));


	$suma = array_sum($arreglo);

if($suma == 100){
	for($i=1;$i<=count($arreglo);$i++){

		DB::table('actitudes')
		->where('idActitud',$i)
		->update(['totalActitud' =>$request->get('actitud'.$i)]);
	}

	return "actualizado";
      }

      else{

      		return "La suma de los parametros deben ser igual 100";

      }
	


	

	



	}

	public function agregarActitud(Request $request, $id){

		$idLocalidad = DB::table('localidades')
		->select('idLocalidad')
		->where([['idActitud',$request->get('idActitud')],
				['nombreLocalidad',$request->get('nlocalidad')],
				])
		->first();

		DB::table('estudiantes_actitudes')
		->join('localidades','estudiantes_actitudes.idLocalidad','=','localidades.idLocalidad')
		->where([['idEstudiante', $id], ['localidades.idActitud',$request->get('idActitud')]])->delete();

		switch ($request->get('nlocalidad')) {
			case 'País':
				for ($i=$idLocalidad->idLocalidad; $i <= $idLocalidad->idLocalidad+3 ; $i++) { 
					
					DB::table('estudiantes_actitudes')
					->insert(['idEstudiante' => $id, 'idLocalidad' => $i]);
				}
				break;
			case 'Provincia':
				for ($i=$idLocalidad->idLocalidad; $i <= $idLocalidad->idLocalidad+2 ; $i++) { 
					
					DB::table('estudiantes_actitudes')
					->insert(['idEstudiante' => $id, 'idLocalidad' => $i]);
				}
				break;
				case 'Ciudad':
				for ($i=$idLocalidad->idLocalidad; $i <= $idLocalidad->idLocalidad+1 ; $i++) { 
					
					DB::table('estudiantes_actitudes')
					->insert(['idEstudiante' => $id, 'idLocalidad' => $i]);
				}
				break;
				case 'Establecimiento educativo':
				for ($i=$idLocalidad->idLocalidad; $i <= $idLocalidad->idLocalidad ; $i++) { 
					
					DB::table('estudiantes_actitudes')
					->insert(['idEstudiante' => $id, 'idLocalidad' => $i]);
				}
				break;
			default:
				return 'Eliminadas las actividades';
				break;
		}

		

		return back();

	}


}

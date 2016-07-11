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


	}


}

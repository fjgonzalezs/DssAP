<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class estudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function muestraelegidos(){


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

 $estudiantes = \DB::table('estudiantes')
 ->join('notas','estudiantes.idNota','=','notas.idNota')
  ->orderBy('totalNota', 'desc')
 ->get();

$contar = DB::table('notas')
                ->select(DB::raw('count(totalNota) as cuenta'))
                ->groupBy('totalNota')
                ->havingRaw('count(totalNota) > 1')
                ->get();


    return view('elegirEstudiante', compact('estudiantes','contar'));
               // return var_dump($users);
    }

    public function nacional()
    {
         $estudiantes = \DB::table('estudiantes')
 ->join('notas','estudiantes.idNota','=','notas.idNota')
 ->orderBy('totalNota', 'desc')
 ->get();
$ids = array();

 foreach($estudiantes as $estudiante){

    
    $ids[] = $estudiante->idEstudiante;


    
 }



 $abanderado = \DB::table('estudiantes')
 ->join('notas','estudiantes.idNota','=','notas.idNota')
  ->orderBy('totalNota', 'desc')
  ->where('idEstudiante',$ids[0]) // 0 es el mejor
 ->first();

 foreach($estudiantes as $estudiante){

    if($estudiante->idEstudiante <> $abanderado->idEstudiante && $estudiante->totalNota == $abanderado->totalNota)
    {
        return "se repite hacer uso del dss";
    }
    else{

  \DB::table('estudiantes')
 ->join('notas','estudiantes.idNota','=','notas.idNota') //creo que no es necesario el join
 ->where('idEstudiante',$ids[0])
 ->update(['idElegido' => 'Abanderado nacional']);
 
    return "elegido abanderado nacional";

    }
 }

 //return var_dump($abanderado);



    }
}

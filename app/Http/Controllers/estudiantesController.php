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
        $estudiantes=DB::table('estudiantes')->get();

        return view('estudiantes.estudiantes',compact('estudiantes'));
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudiante = DB::table('estudiantes')
        ->where('idEstudiante',$id)
        ->first();

        return view('estudiantes.editarEstudiante',compact('estudiante', 'id'));
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
        DB::table('estudiantes')
        ->where('idEstudiante',$id)
        ->update(['nombreEstudiante' =>$request->get('nombre'), 'apellidoEstudiante' => $request->get('apellido'),
        'cedulaEstudiante' => $request->get('cedula'), 'emailEstudiante' => $request->get('email'),
            'telefonoEstudiante' => $request->get('telefono'), 'domicilioEstudiante' => $request->get('domicilio')
            ]);

        return "se actualizo";
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
                ->select('totalNota',DB::raw('count(totalNota) as cuenta'))
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

 $repetidos = array();
 foreach($estudiantes as $estudiante){

    if($estudiante->idEstudiante <> $abanderado->idEstudiante && $estudiante->totalNota == $abanderado->totalNota)
    {
         $repetidos[] = $estudiante->idEstudiante;
    }

   

 }

 if(count($repetidos)>0){

    return "llamar al dss se repiten ". count($repetidos);

 }

 else{

    \DB::table('estudiantes')
 ->join('notas','estudiantes.idNota','=','notas.idNota') //creo que no es necesario el join
 ->where('idEstudiante',$ids[0])
 ->update(['idElegido' => 'abanderado nacional']);
 
    return "elegido abanderado nacional";

 }



 
 }

     

     public function ciudad()
    {

        $comprobar = DB::table('estudiantes')
        ->select('idElegido')
        ->where('idElegido','Portaestandarte de la ciudad')
        ->first();

        //return var_dump($comprobar);

       // return var_dump(is_null($comprobar));

        if(is_null($comprobar)){

        

       // return var_dump($comprobar);

         $estudiantes = \DB::table('estudiantes')
 ->join('notas','estudiantes.idNota','=','notas.idNota')
 ->whereNull('idElegido')
 ->orderBy('totalNota', 'desc')
 ->get();
$ids = array();

 foreach($estudiantes as $estudiante){



    
    $ids[] = $estudiante->idEstudiante;


    
 }



 $abanderado = \DB::table('estudiantes')
 ->join('notas','estudiantes.idNota','=','notas.idNota')
  ->orderBy('totalNota', 'desc')
  ->where('idEstudiante',$ids[0]) 
 ->first();
$repetidos = array();
 foreach($estudiantes as $estudiante){

    if($estudiante->idEstudiante <> $abanderado->idEstudiante && $estudiante->totalNota == $abanderado->totalNota)
    {
         $repetidos[] = $estudiante->idEstudiante;
    }

   

 }

 if(count($repetidos)>0){

      $empatados = DB::table('notas')
       ->join('estudiantes','notas.idNota','=','estudiantes.idNota')
       ->join('estudiantes_actitudes','estudiantes.idEstudiante','=','estudiantes_actitudes.idEstudiante')
       ->join('localidades','estudiantes_actitudes.idLocalidad','=','localidades.idLocalidad')
       ->select('estudiantes.*','notas.totalNota',DB::raw('sum(pesoLocalidad) as peso'))
       ->where('notas.totalNota',$abanderado->totalNota)
       ->groupBy('estudiantes.nombreEstudiante')
       ->get();

       $notaRepetida=$abanderado->totalNota;

   //$empatados = $this->dssciudad($abanderado->idEstudiante,$repetidos,$abanderado->totalNota);
   return view('nacional.ciudad',compact('empatados','notaRepetida'));
   //return $estudiante->totalNota;
   //return var_dump($empatados);

    //return "llamar al dss se repiten ". count($repetidos);

 }

 else{

    \DB::table('estudiantes')
 ->join('notas','estudiantes.idNota','=','notas.idNota') //creo que no es necesario el join
 ->where('idEstudiante',$ids[0])
 ->update(['idElegido' => 'Portaestandarte de la ciudad']);
 
    return "elegido Portaestandarte de la ciudad ";

 }

 //return var_dump($abanderado);


 }

 else{
    return "ya se ha elegido esto";
 }
    }

    public function dssciudad(Request $request){

       $notaRepetida = $request->get('notaRepetida');

        $empatados = DB::table('notas')
       ->join('estudiantes','notas.idNota','=','estudiantes.idNota')
       ->join('estudiantes_actitudes','estudiantes.idEstudiante','=','estudiantes_actitudes.idEstudiante')
       ->join('localidades','estudiantes_actitudes.idLocalidad','=','localidades.idLocalidad')
       ->select('estudiantes.*','notas.totalNota',DB::raw('sum(pesoLocalidad) as peso'))
       ->where('notas.totalNota',$notaRepetida)
       ->groupBy('estudiantes.nombreEstudiante')
       ->get();

       $umbral = DB::table('umbral')
       ->select('valorUmbral')
       ->first();

       //var_dump($umbral);

       $contador = array();
       foreach($empatados as $estudiante){

        if($estudiante->peso>= $umbral->valorUmbral){

            $contador[] = $estudiante->idEstudiante;
        }
       }

       if(count($contador) ==1){

        DB::table('estudiantes')
        ->where('idEstudiante',$contador[0])
        ->update((['idElegido' => 'Portaestandarte de la ciudad ']));

        return "portaestandarte de la ciudad elegido";

       }

       elseif(count($contador) >1){
        return "lanzar una moneda, todos son aptos para ser elegidos";
       }
       elseif(count($contador) ==0){
        return "ninguno cuenta con el porcentaje para ser elegido, lanzar una moneda o actualizar aptitudes de los estudiantes";
       }

       return $notaRepetida;



    }
}

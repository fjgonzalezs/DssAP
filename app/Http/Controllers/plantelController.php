<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class plantelController extends Controller
{
       public function plantel()
    {

        $comprobar = DB::table('estudiantes')
        ->select('idElegido')
        ->where('idElegido','Portaestandarte del plantel')
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
   return view('plantel.plantel',compact('empatados','notaRepetida'));
   //return $estudiante->totalNota;
   //return var_dump($empatados);

    //return "llamar al dss se repiten ". count($repetidos);

 }

 else{

    \DB::table('estudiantes')
 ->join('notas','estudiantes.idNota','=','notas.idNota') //creo que no es necesario el join
 ->where('idEstudiante',$ids[0])
 ->update(['idElegido' => 'Portaestandarte del plantel']);
 
    return "Portaestandarte del plantel";

 }

 //return var_dump($abanderado);


 }

 else{
    return "ya se ha elegido esto";
 }
    }

    public function dssplantel(Request $request){

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
        ->update((['idElegido' => 'Portaestandarte del plantel']));

        return "portaestandarte del plantel elegido";

       }

       elseif(count($contador) >1){
        return "lanzar una moneda, todos son aptos para ser elegidos";
       }
       elseif(count($contador) ==0){
        return "ninguno cuenta con el porcentaje para ser elegido, lanzar una moneda o actualizar aptitudes de los estudiantes";
       }

       return $notaRepetida;



    }

       public function primerescolta()
    {

        $comprobar = DB::table('estudiantes')
        ->select('idElegido')
        ->where('idElegido','Primer escolta del estandarte del plantel')
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
   return view('plantel.primerescolta',compact('empatados','notaRepetida'));
   //return $estudiante->totalNota;
   //return var_dump($empatados);

    //return "llamar al dss se repiten ". count($repetidos);

 }

 else{

    \DB::table('estudiantes')
 ->join('notas','estudiantes.idNota','=','notas.idNota') //creo que no es necesario el join
 ->where('idEstudiante',$ids[0])
 ->update(['idElegido' => 'Primer escolta del estandarte del plantel']);
 
    return "elegido Primer escolta del estandarte del plantel ";

 }

 //return var_dump($abanderado);


 }

 else{
    return "ya se ha elegido esto";
 }
    }

    public function dssprimerescolta(Request $request){

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
        ->update((['idElegido' => 'Primer escolta del estandarte del plantel']));

        return "Primer escolta del estandarte del plantel elegido";

       }

       elseif(count($contador) >1){
        return "lanzar una moneda, todos son aptos para ser elegidos";
       }
       elseif(count($contador) ==0){
        return "ninguno cuenta con el porcentaje para ser elegido, lanzar una moneda o actualizar aptitudes de los estudiantes";
       }

       return $notaRepetida;



    }

      public function segundoescolta()
    {

        $comprobar = DB::table('estudiantes')
        ->select('idElegido')
        ->where('idElegido','Segundo escolta del estandarte del plantel')
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
   return view('plantel.segundoescolta',compact('empatados','notaRepetida'));
   //return $estudiante->totalNota;
   //return var_dump($empatados);

    //return "llamar al dss se repiten ". count($repetidos);

 }

 else{

    \DB::table('estudiantes')
 ->join('notas','estudiantes.idNota','=','notas.idNota') //creo que no es necesario el join
 ->where('idEstudiante',$ids[0])
 ->update(['idElegido' => 'Segundo escolta del estandarte del plantel']);
 
    return "elegido Segundo escolta del estandarte del plantel ";

 }

 //return var_dump($abanderado);


 }

 else{
    return "ya se ha elegido esto";
 }
    }

    public function dsssegundoescolta(Request $request){

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
        ->update((['idElegido' => 'Segundo escolta del estandarte del plantel']));

        return "Segundo escolta del estandarte del plantel elegido";

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

@extends('master')
 
@section('contenido')

<section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Segundo</th>
        <th>Tercero</th>
        <th>Cuarto</th>
        <th>Quinto</th>
        <th>Sexto</th>
        <th>Septimo</th>
        <th>Octavo</th>
        <th>Noveno</th>
        <th>Decimo</th>
         <th>Primero Bachiller</th>
        <th>Segundo Bachiller</th>
        <th>Total Nota</th>
        
      </tr>
    </thead>
    <tbody>

    	@foreach($estudiantes as $estudiante)
	<tr>
        <td class="text-left">{{$estudiante->nombreEstudiante}}</td>
        <td class="text-left">{{$estudiante->apellidoEstudiante}}</td>
        <td class="text-left">{{$estudiante->segundoNota}}</td>
        <td class="text-left">{{$estudiante->terceroNota}}</td>
        <td class="text-left">{{$estudiante->cuartoNota}}</td>
        <td class="text-left">{{$estudiante->quintoNota}}</td>
        <td class="text-left">{{$estudiante->sextoNota}}</td>
        <td class="text-left">{{$estudiante->septimoNota}}</td>
        <td class="text-left">{{$estudiante->octavoNota}}</td>
        <td class="text-left">{{$estudiante->novenoNota}}</td>
        <td class="text-left">{{$estudiante->decimoNota}}</td>
        <td class="text-left">{{$estudiante->primeroBNota}}</td>
        <td class="text-left">{{$estudiante->segundoBNota}}</td>
        <td class="text-left">{{$estudiante->totalNota}}</td>
      </tr>
	
	@endforeach	
      
    </tbody>
  </table>
                </div>
            </div>
        </div>
    </section>

 @endsection
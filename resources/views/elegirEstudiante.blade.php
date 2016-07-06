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
        <th>Cedula</th>
        <th>Nota promedio</th>
      </tr>
    </thead>
    <tbody>

    	@foreach($estudiantes as $estudiante)
	<tr>
        <td class="text-left">{{$estudiante->nombreEstudiante}}</td>
        <td class="text-left">{{$estudiante->apellidoEstudiante}}</td>
        <td class="text-left">{{$estudiante->cedulaEstudiante}}</td>
        <td class="text-left"> {{$estudiante->totalNota}}</td>
      </tr>
	
	@endforeach	
      
    </tbody>
  </table>


   <table class="table table-striped">
    <thead>
      <tr>
        <th>contar</th>
       
      </tr>
    </thead>
    <tbody>

    	@foreach($contar as $cuenta)
	<tr>
        <td class="text-left">{{$cuenta->cuenta}}</td>
        
      </tr>
	
	@endforeach	
      
    </tbody>
  </table>
                </div>
            </div>
        </div>
    </section>



@endsection
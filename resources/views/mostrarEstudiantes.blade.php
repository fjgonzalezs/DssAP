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
      </tr>
    </thead>
    <tbody>

    	@foreach($estudiantes as $estudiante)
	<tr>
        <td class="text-left">{{$estudiante->nombreEstudiante}}</td>
        <td class="text-left">{{$estudiante->apellidoEstudiante}}</td>
        <td class="text-left">{{$estudiante->cedulaEstudiante}}</td>
      </tr>
	
	@endforeach	
      
    </tbody>
  </table>
                </div>
            </div>
        </div>
    </section>


@endsection


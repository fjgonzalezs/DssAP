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
        <th>editar Estudiante</th>
        <th>Agregar Actitudes</th>
      </tr>
    </thead>
    <tbody>

    	@foreach($estudiantes as $estudiante)
	<tr>
        <td class="text-left">{{$estudiante->nombreEstudiante}}</td>
        <td class="text-left">{{$estudiante->apellidoEstudiante}}</td>
        <td class="text-left">{{$estudiante->cedulaEstudiante}}</td>
        <td>
        <a href="{{action('estudiantesController@show',['id' => $estudiante->idEstudiante])}}">
			
			<button type ='button' class = "btn btn-default" aria-label="Left-Align">
			
			<span class ="glyphicon glyphicon-pencil" aria-hidden ='true'></span>

		 </button>

        </a>
		
        </td>

        <td>
        <a href="{{action('estudiantesController@agregarActitud',['id' => $estudiante->idEstudiante])}}">
            
            <button type ='button' class = "btn btn-default" aria-label="Left-Align">
            
            <span class ="glyphicon glyphicon-plus" aria-hidden ='true'></span>

         </button>


        </a>

        
        </td>
      </tr>
	
	@endforeach	
      
    </tbody>
  </table>
                </div>
            </div>
        </div>
    </section>


@endsection
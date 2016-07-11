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
        <th>porta estandarte</th>
      </tr>
    </thead>
    <tbody>

    	@foreach($estudiantes as $estudiante)
	<tr>
        <td class="text-left">{{$estudiante->nombreEstudiante}}</td>
        <td class="text-left">{{$estudiante->apellidoEstudiante}}</td>
        <td class="text-left">{{$estudiante->cedulaEstudiante}}</td>
        <td class="text-left"> {{$estudiante->totalNota}}</td>
        <td class = "text-left">{{$estudiante->idElegido}}</td>
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

            <div class="row">
	<div class="col-lg-2">
		<!-- Single button -->
<div>
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Nacional
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><a href="{{url('nacionalAbanderado')}}">Abanderado Nacional</a></li>
    <li><a href="{{url('elegirportaciudad')}}">Primer escolta nacional</a></li>
    <li><a href="#">Segundo escolta nacional</a></li>
    
  </ul>
</div>


	</div>
</div>
        </div>
    </section>


@endsection
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
        <th>peso</th>
      </tr>
    </thead>
    <tbody>

    	@foreach($empatados as $estudiante)
	<tr>
        <td class="text-left">{{$estudiante->nombreEstudiante}}</td>
        <td class="text-left">{{$estudiante->apellidoEstudiante}}</td>
        <td class="text-left">{{$estudiante->cedulaEstudiante}}</td>
        <td class="text-left"> {{$estudiante->totalNota}}</td>
        <td class = "text-left">{{$estudiante->idElegido}}</td>
        <td class = "text-left">{{$estudiante->peso}}</td>
      </tr>
	
	@endforeach	
      
    </tbody>
  </table>
  {!! Form::open(array('url' => array('dssprimerescoltaciudad'),'method' => 'POST')) !!}
  <input type="hidden" name="notaRepetida" value ='{{$notaRepetida}}'>
  <p><button type="submit" class="btn btn-primary">Elegir porta estandarte de la ciudad</button></p>
  {!!Form::close()!!}
  
</div>
</div>
</div>
</section>

@endsection
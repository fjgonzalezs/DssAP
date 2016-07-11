@extends('master')
 
@section('contenido')

<section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">

       				{!! Form::open(array('url' => array('estudiante',$id),'method' => 'PATCH')) !!}
   <div class="form-group">
    <p for="nombre" class="text-left" ><strong> Nombre</strong></p>
    <input type="text" name='nombre' class="form-control"  placeholder="Nombre" value = '{{$estudiante->nombreEstudiante}}'>
  </div>

   <div class="form-group">
    <p for="apellido" class="text-left"><strong>Apellido</strong></p>
    <input type="text" name='apellido' class="form-control"  placeholder="Apellido" value = '{{$estudiante->apellidoEstudiante}}'>
  </div>

   <div class="form-group">
    <p for="cedula" class="text-left" ><strong>cedula</strong></p>
    <input type="text" name='cedula' class="form-control"  placeholder="Cedula" value = '{{$estudiante->cedulaEstudiante}}'>
  </div>

   <div class="form-group">
    <p for="email" class="text-left"><strong>email</strong></p>
    <input type="text" name='email' class="form-control"  placeholder="email" value = '{{$estudiante->emailEstudiante}}'>
  </div>

   <div class="form-group">
    <p for="telefono" class="text-left"> <strong>telefono</strong> </p>
    <input type="text" name='telefono' class="form-control"  placeholder="telefono" value = '{{$estudiante->telefonoEstudiante}}'>
  </div>

   <div class="form-group">
    <p for="domicilio" class="text-left"><strong>domicilio</strong> </p>
    <input type="text" name='domicilio' class="form-control"  placeholder="domicilio" value = '{{$estudiante->domicilioEstudiante}}'>
  </div>
  

  <p><button type="submit" class="btn btn-primary">Actualizar</button></p>
  {!!Form::close()!!}         
   
                </div>
            </div>
        </div>
    </section>


@endsection
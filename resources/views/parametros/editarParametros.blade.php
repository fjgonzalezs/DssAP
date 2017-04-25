@extends('master')
 
@section('contenido')

<section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">

                <h3>{{$nombreActitud->nombreActitud}}</h3>

       				{!! Form::open(array('action' => array('parametrosController@editar',$id),'method' => 'PATCH')) !!}

        <div class="form-group">
        <input type="hidden" name = 'idActitud' value = '{{$nombreActitud->idActitud}}'>
    <p for='totalActitud' class="text-left" ><strong>Total actitud</strong></p>
    <input type="text" name='totalActitud0' class="form-control"  placeholder='total actitud' value = '{{$totalActitud}}' disabled>
    <input type="hidden" name ='totalActitud' value='{{$totalActitud}}'>
  </div>

   
      @foreach($parametros as $parametro)
      
      <div class="form-group">
    <p for='{{$parametro->nombreLocalidad}}' class="text-left" ><strong>{{$parametro->nombreLocalidad}}</strong></p>
    <input type="text" name='localidad{{$parametro->idLocalidad}}' class="form-control"  placeholder='{{$parametro->nombreLocalidad}}' value = '{{$parametro->pesoLocalidad}}'>
  </div>


      @endforeach


   
  

  <p><button type="submit" class="btn btn-primary">Actualizar</button></p>
  {!!Form::close()!!}         
   
                </div>
            </div>
        </div>
    </section>


@endsection
@extends('master')
 
@section('contenido')

<section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
				
{!! Form::open(array('url' => array('actitud/calculoTotal'))) !!}
			   <table class="table table-striped">
    <thead>
      <tr>
        <th>Parametros parametros</th>
        <th>Valores</th>
        
      </tr>
    </thead>
    <tbody>

    	@foreach($parametros as $parametro)
	<tr>
        <td class ="text-left">{{$parametro->nombreActitud}}</td>
        <td class ="text-left"> <input type="text" name='actitud{{$parametro->idActitud}}' value = '{{$parametro->totalActitud}}'></td>
        
      </tr>
	
	@endforeach	
      
    </tbody>
  </table>

  <p><button type="submit" class="btn btn-primary">Actualizar</button></p>

    {!!Form::close()!!}
   
                </div>
            </div>
        </div>
    </section>


@endsection


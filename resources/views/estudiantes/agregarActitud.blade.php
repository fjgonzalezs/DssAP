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

    	
	<tr>
        <td class="text-left">{{$estudiante->nombreEstudiante}}</td>
        <td class="text-left">{{$estudiante->apellidoEstudiante}}</td>
        <td class="text-left">{{$estudiante->cedulaEstudiante}}</td>
        <td class="text-left"> {{$estudiante->totalNota}}</td>
        <td class = "text-left">{{$estudiante->idElegido}}</td>
        <td class = "text-left">{{$estudiante->peso}}</td>
      </tr>
	
	
      
    </tbody>
  </table>
        	</div>
        </div>
            <div class="row">
                <div class="col-lg-12">
				
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         Agregar actividad cientifica
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        
  
   {!! Form::open(array('action' => array('parametrosController@agregarActitud',$id),'method' => 'POST')) !!}
    <div class="form-group">
    <input type="hidden" name='idActitud' value ='1'>
      <label for="sel1">Elija su mayor participacion en esta actividad:</label>
      <select  name ="nlocalidad" class="form-control" id="sel1">
        <option>País</option>
        <option>Provincia</option>
        <option>Ciudad</option>
        <option>Establecimiento educativo</option>
        <option>Ninguna</option>
      </select>
      <br>
      <p><button type="submit" class="btn btn-primary">Actualizar</button></p>
     
    </div>
  {!! Form::close() !!}

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         Agregar actividad cultural
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
       
   {!! Form::open(array('action' => array('parametrosController@agregarActitud',$id),'method' => 'POST')) !!}
    <div class="form-group">
    <input type="hidden" name='idActitud' value ='2'>
      <label for="sel1">Elija su mayor participacion en esta actividad:</label>
      <select  name ="nlocalidad" class="form-control" id="sel1">
        <option>País</option>
        <option>Provincia</option>
        <option>Ciudad</option>
        <option>Establecimiento educativo</option>
        <option>Ninguna</option>
      </select>
      <br>
      <p><button type="submit" class="btn btn-primary">Actualizar</button></p>
     
    </div>
  {!! Form::close() !!}
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Agregar actividad artistica
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
       
   {!! Form::open(array('action' => array('parametrosController@agregarActitud',$id),'method' => 'POST')) !!}
    <div class="form-group">
    <input type="hidden" name='idActitud' value ='3'>
      <label for="sel1">Elija su mayor participacion en esta actividad:</label>
      <select  name ="nlocalidad" class="form-control" id="sel1">
        <option>País</option>
        <option>Provincia</option>
        <option>Ciudad</option>
        <option>Establecimiento educativo</option>
        <option>Ninguna</option>
      </select>
      <br>
      <p><button type="submit" class="btn btn-primary">Actualizar</button></p>
     
    </div>
  {!! Form::close() !!}
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
         Agregar actividad deportiva
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
       
   {!! Form::open(array('action' => array('parametrosController@agregarActitud',$id),'method' => 'POST')) !!}
    <div class="form-group">
    <input type="hidden" name='idActitud' value ='4'>
      <label for="sel1">Elija su mayor participacion en esta actividad:</label>
      <select  name ="nlocalidad" class="form-control" id="sel1">
        <option>País</option>
        <option>Provincia</option>
        <option>Ciudad</option>
        <option>Establecimiento educativo</option>
        <option>Ninguna</option>
      </select>
      <br>
      <p><button type="submit" class="btn btn-primary">Actualizar</button></p>
     
    </div>
  {!! Form::close() !!}
      </div>
    </div>
  </div>

<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
         Agregar actividad social
        </a>
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
      
   {!! Form::open(array('action' => array('parametrosController@agregarActitud',$id),'method' => 'POST')) !!}
    <div class="form-group">
    <input type="hidden" name='idActitud' value ='5'>
      <label for="sel1">Elija su mayor participacion en esta actividad:</label>
      <select  name ="nlocalidad" class="form-control" id="sel1">
        <option>País</option>
        <option>Provincia</option>
        <option>Ciudad</option>
        <option>Establecimiento educativo</option>
        <option>Ninguna</option>
      </select>
      <br>
      <p><button type="submit" class="btn btn-primary">Actualizar</button></p>
     
    </div>
  {!! Form::close() !!}
      </div>
    </div>
  </div>





</div>

                
   
                </div>
            </div>
        </div>
    </section>


@endsection



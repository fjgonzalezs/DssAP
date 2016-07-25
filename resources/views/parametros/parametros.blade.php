@extends('master')
 
@section('contenido')

<section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
				

          <table class="table table-striped">
    <thead>
      <tr>
        <th>Edicion parametros</th>
        
      </tr>
    </thead>
    <tbody>

    	@foreach($parametros as $parametro)
	<tr>
        <td class ="text-left"><a href="{{url('parametros').'/'.$parametro->idActitud}}">{{$parametro->nombreActitud}}</a></td>
        
      </tr>
	
	@endforeach	
      
    </tbody>
  </table>

<?php
echo 'b\n';
?>
                
   
                </div>
            </div>
        </div>
    </section>


@endsection


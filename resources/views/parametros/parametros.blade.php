@extends('master')
 
@section('contenido')

<section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
				

          <table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre parametro</th>
        
      </tr>
    </thead>
    <tbody>

    	@foreach($parametros as $parametro)
	<tr>
        <td class="text-left">{{$parametro->nombreActitud}}</td>
        
      </tr>
	
	@endforeach	
      
    </tbody>
  </table>
                
   
                </div>
            </div>
        </div>
    </section>


@endsection


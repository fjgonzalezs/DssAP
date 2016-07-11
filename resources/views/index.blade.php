@extends('master')
 
@section('contenido')
  <!-- Intro Section -->
    <section id="intro" class="intro-section">
<div class="container">
    <div class="row">
      <div class="col-lg-12">
        
               <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{asset('/img/ecuador.jpg')}}" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="{{asset('/img/bandera.jpg')}}" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>        
      </div>
    </div>
</div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-default bootcards-media">
  <div class="panel-heading">
    <h3 class="panel-title">Mostrar estudiantes</h3>
  </div>
  
  <img src="{{asset('/img/mostrare.jpg')}}" alt="..." class="img-responsive"/>
  <div class="panel-footer">
    <div class="btn-group btn-group-justified">
      
      <div class="btn-group">
       <a href="{{url('MostrarEstudiantes')}}"><button class="btn btn-default">
          <i class="fa fa-envelope"></i>
          Ver
        </button></a> 
      </div>
    </div>
  </div>
</div>
                </div>


    <div class="col-lg-4">
                    <div class="panel panel-default bootcards-media">
  <div class="panel-heading">
    <h3 class="panel-title">Ingresar estudiantes</h3>
  </div>
  
  <img src="{{asset('/img/ingresar.jpeg')}}" alt="..." class="img-responsive"/>
  <div class="panel-footer">
    <div class="btn-group btn-group-justified">
      
      <div class="btn-group">
        <button class="btn btn-default">
          <i class="fa fa-envelope"></i>
          Ver
        </button>
      </div>
    </div>
  </div>
</div>
                </div> 


   <div class="col-lg-4">
                    <div class="panel panel-default bootcards-media">
  <div class="panel-heading">
    <h3 class="panel-title">Editar estudiantes</h3>
  </div>
  
  <img src="{{asset('/img/editar.jpg')}}" alt="..." class="img-responsive"  />
  <div class="panel-footer">
    <div class="btn-group btn-group-justified">
      
      <div class="btn-group">
        <a href="{{url('estudiante')}}"><button class="btn btn-default" >
          <i class="fa fa-envelope"></i>
          Ver
        </button></a>
      </div>
    </div>
  </div>
</div>
                </div>                          
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
         <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default bootcards-media">
  <div class="panel-heading">
    <h3 class="panel-title">Elegir Portaestandarte</h3>
  </div>
  
  <img src="{{asset('/img/portaestandarte.jpg')}}" alt="..." class="img-responsive"/>
  <div class="panel-footer">
    <div class="btn-group btn-group-justified">
      
      <div class="btn-group">
       <a href="{{url('elegirEstudiante')}}"><button class="btn btn-default">
          <i class="fa fa-envelope"></i>
          Ver
        </button></a> 
      </div>
    </div>
  </div>
</div>
                </div>


    <div class="col-lg-6">
                    <div class="panel panel-default bootcards-media">
  <div class="panel-heading">
    <h3 class="panel-title">Mostrar  Notas</h3>
  </div>
  
  <img src="{{asset('/img/notas.jpg')}}" alt="..." class="img-responsive"/>
  <div class="panel-footer">
    <div class="btn-group btn-group-justified">
      
      <div class="btn-group">
       <a href="{{url('MostrarNota')}}"><button class="btn btn-default">
          <i class="fa fa-envelope"></i>
          Ver
        </button></a> 
      </div>
    </div>
  </div>
</div>
                </div>                          
            </div>
        </div>
    </section>
    
 
    <!-- About Section -->
    <section id="parametros" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default bootcards-media">
  <div class="panel-heading">
    <h3 class="panel-title">Actitudes</h3>
  </div>
  
  <img src="{{asset('/img/actitudes.jpg')}}" alt="..." class="img-responsive"/>
  <div class="panel-footer">
    <div class="btn-group btn-group-justified">
      
      <div class="btn-group">
       <a href="{{url('MostrarEstudiantes')}}"><button class="btn btn-default">
          <i class="fa fa-envelope"></i>
          Ver
        </button></a> 
      </div>
    </div>
  </div>
</div>
                </div>


    <div class="col-lg-6">
                    <div class="panel panel-default bootcards-media">
  <div class="panel-heading">
    <h3 class="panel-title">Localidades</h3>
  </div>
  
  <img src="{{asset('/img/localidades.jpg')}}" alt="..." class="img-responsive"/>
  <div class="panel-footer">
    <div class="btn-group btn-group-justified">
      
      <div class="btn-group">
        <button class="btn btn-default">
          <i class="fa fa-envelope"></i>
          Ver
        </button>
      </div>
    </div>
  </div>
</div>
                </div>                 
            </div>
        </div>
    </section>
  @endsection
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Resultados de Admisión</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">


  </head>

  <body>

    <div class="container">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h3>MODULO DE RESULTADOS</h3>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Concurso de Admisión</h3>
            </div>
            <div class="panel-body">
              <a href="{{ route('resultados.cepre') }}" class="btn btn-info"> Resultados</a>
            </div>
          </div>
        </div><!--span-->
        <div class="col-md-4">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Cepre UNI</h3>
            </div>
            <div class="panel-body">
            <a href="{{ route('resultados.cepre') }}" class="btn btn-info"> Resultados</a>
            </div>
          </div>
        </div><!--span-->
        <div class="col-md-4">
          <div class="panel panel-warning">
            <div class="panel-heading">
              <h3 class="panel-title">Simulacro</h3>
            </div>
            <div class="panel-body">
              <a href="{{ route('resultados.cepre') }}" class="btn btn-info"> Resultados</a>
            </div>
          </div>
        </div><!--span-->
      </div><!--row-->
      <div class="row">
        <div class="col-md-4">
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h3 class="panel-title">Ingreso Directo Escolar</h3>
            </div>
            <div class="panel-body">
              <a href="{{ route('resultados.cepre') }}" class="btn btn-info"> Resultados</a>
            </div>
          </div>
        </div><!--span-->
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h3 class="panel-title">Activar</h3>
            </div>
            <div class="panel-body">
            {!! Alert::render() !!}
              <a href="{{ route('resultados.activar',1) }}" class="btn btn-info"> Activar</a>
              <a href="{{ route('resultados.activar',0) }}" class="btn btn-danger"> Desactivar</a>
            </div>
          </div>
        </div><!--span-->
      </div><!--row-->

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
  </body>
</html>

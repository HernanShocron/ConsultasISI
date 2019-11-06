@extends('principal')

@section('title', 'Consultas - Admin')

@section('estilos')
<link href="{{asset('css/calendario.css')}}" rel="stylesheet">
@endsection





@section('navegacion')

<li class="nav-item">
  <a class="nav-link" href="{{ route('adminHome') }}">Ver consultas</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{ route('adminABMC') }}">Realizar ABMC</a>
</li>
<li class="nav-item active">
  <a class="nav-link" href="{{ route('adminListado') }}">Listado</a>
</li>      
<li class="nav-item">
  <a class="nav-link" href="#">Bloquear consulta</a>
</li>




<!--
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ir a...
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Ver consultas</a>
        <a class="dropdown-item" href="#">Realizar ABMC</a>
        <a class="dropdown-item" href="#">Listado</a>
        <a class="dropdown-item" href="#">Bloquear consulta</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    -->











@endsection

@section('lateral')
<div class="dropdown-divider"></div>
<h2>
  <i class="far fa-calendar-alt"></i> Calendario
  <button class="navbar-toggler btnFiltro" data-toggle="collapse" data-target="#filtros" aria-controls="filtros" aria-expanded="true" aria-label="Toggle navigation">
    <h2><i class="fas fa-angle-down"></i></h2>
  </button> 
</h2>
<div class="collapse" id="filtros">
  <h5>Seleccione un dia</h5>
  <form action="" method="POST">
    <div class="form-group">
      <input class="form-control" type="date" name="fecha"><br>
      <input type="submit" class="btn btn-info">
    </div>
  </form>
</div>
@endsection

@section('cuerpo')
<div class="dropdown-divider"></div>
  <h2 style="text-align: center">Consultas<!-- para el día  --></h2>
<div class="dropdown-divider"></div>
<div class="table-responsive">
  <table class="table table-hover table-light tabla" style="width:100%">
    <thead class="thead-dark">
      <tr>
        <th>Profesor</th>
        <th>Materia</th>
        <th>Horario</th>
        <th>Aula</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Juan Pérez</td>
        <td>Materia</td>
        <td>13:30 Hs.</td>
        <td>510</td>   
      </tr>  
      <tr>
          <td>Juan Pérez</td>
          <td>Materia</td>
          <td>13:30 Hs.</td>
          <td>510</td>  
      </tr>
    </tbody>
  </table>
</div>
@endsection
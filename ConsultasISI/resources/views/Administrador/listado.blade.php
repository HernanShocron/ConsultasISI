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
  <h5>Seleccione un dia</h5>


  <div class="calendar">
    <div class="calendar-info">
      <div class="calendar-prev" id="prev-month"><i class="fas fa-angle-left"></i></div>
      <div class="calendar-month" id="month">Noviembre</div>
      <div class="calendar-year" id="year">2019</div>
      <div class="calendar-next" id="next-month"><i class="fas fa-angle-right"></i></div>
    </div>
    <div class="calendar-week">
      <div class="calendar-day calendar-item">Lun</div>
      <div class="calendar-day calendar-item">Mar</div>
      <div class="calendar-day calendar-item">Mié</div>  
      <div class="calendar-day calendar-item">Jue</div>
      <div class="calendar-day calendar-item">Vie</div>
      <div class="calendar-day calendar-item">Sáb</div>
      <div class="calendar-day calendar-item">Dom</div>
    </div>

    <div class="calendar-dates" id="dates"></div>
  </div>

<!--
<i class="fas fa-arrow-circle-left"></i>
<i class="fas fa-arrow-circle-right"></i>
<i class="fas fa-arrow-alt-circle-left"></i>
<i class="fas fa-arrow-alt-circle-right"></i>
<i class="far fa-arrow-alt-circle-left"></i>
<i class="far fa-arrow-alt-circle-right"></i>
<i class="fas fa-angle-left"></i>
<i class="fas fa-angle-right"></i>
<i class="fas fa-arrow-left"></i>
<i class="fas fa-arrow-right"></i>
-->


      @endsection

@section('cuerpo')
<div class="dropdown-divider"></div>
  <h2 style="text-align: center">Consultas para el día 03-11-2019</h2>
<div class="dropdown-divider"></div>
<!--
<form>
  <div class="form-group">
    <select class="filtro custom-select-sm" name="Año">
      <option selected>Año de Materia</option>
      <option>1º</option>
      <option>2º</option>
      <option>3º</option>
      <option>4º</option>
      <option>5º</option>
    </select>
    <select class="filtro custom-select-sm" name="Materia">
      <option selected>Nombre de Materia</option>
    </select>
    <select class="filtro custom-select-sm" name="Día">
      <option selected>Día de Consulta</option>
      <option>Lunes</option>
      <option>Martes</option>
      <option>Miercoles</option>
      <option>Jueves</option>
      <option>Viernes</option>
    </select>  
  </div>
</form>



<div class="dropdown-divider"></div>
<h2>
  <i class="fas fa-filter"></i> Filtrar
  <button class="navbar-toggler btnFiltro" data-toggle="collapse" data-target="#filtros" aria-controls="filtros" aria-expanded="true" aria-label="Toggle navigation">
    <h2><i class="fas fa-angle-down"></i></h2>
  </button> 
</h2>
<div class="dropdown-divider"></div>
<div class="collapse" id="filtros">
  
</div>

-->


<div class="table-responsive">
  <table class="table table-hover table-light tabla" style="width:100%">
    <thead class="thead-dark">
      <tr>
        <th>Alumno</th>
        <th>Materia</th>
        <th>Profesor</th>
        <th>Horario</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>email@dominio.com.ar</td>
        <td>Materia</td>
        <td>Juan Pérez</td>
        <td>13:30 Hs.</td>   
      </tr>  
      <tr>
          <td>email@dominio.com.ar</td>
          <td>Materia</td>
          <td>Juan Pérez</td>
          <td>13:30 Hs.</td>  
      </tr>
    </tbody>
  </table>
</div>
@endsection
@extends('principal')

@section('title', 'Consultas - Alumnos')

@section('estilos')
<link href="{{asset('css/alumnos2.css')}}" rel="stylesheet">  
@endsection

@section('navegacion')
<li class="nav-item active">
  <a class="nav-link" href="{{ route('alumnoConsultas') }}">Mis consultas</a>
</li>   
<li class="nav-item">
  <a class="nav-link" href="{{ route('alumnoInscribir') }}">Realizar consulta</a>
</li>
@endsection

@section('lateral')
<div class="dropdown-divider"></div>
<h2>
  <i class="fas fa-filter"></i> Filtrar
  <button class="navbar-toggler btnFiltro" data-toggle="collapse" data-target="#filtros" aria-controls="filtros" aria-expanded="true" aria-label="Toggle navigation">
    <h2><i class="fas fa-angle-down"></i></h2>
  </button> 
</h2>
<div class="dropdown-divider"></div>
<div class="collapse" id="filtros">
  <div>
    <div class="custom-control custom-control-inline custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="customCheck1">
      <label class="custom-control-label" for="customCheck1">Estado: Confirmado</label>
    </div>
    <div class="custom-control custom-control-inline custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="customCheck2">
      <label class="custom-control-label" for="customCheck2">Estado: Pendiente</label>
    </div>
  </div>
  <div>
    <div class="custom-control custom-control-inline custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="customCheck3">
      <label class="custom-control-label" for="customCheck3">Fecha: Vigente</label>
    </div>
    <div class="custom-control custom-control-inline custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="customCheck4">
      <label class="custom-control-label" for="customCheck4">Fecha: Vencido</label>
    </div>
  </div>      
</div>
@endsection

@section('cuerpo')
<div class="table-responsive">
  <table class="table table-hover table-light tabla" style="width:100%">
    <thead class="thead-dark">
      <tr>
        <th style="width:33%">Consulta</th>
        <th style="width:33%">Estado</th>
        <th style="width:34%">Foto</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <p>
            <b>Materia: </b>Nombre materia<br>  
            <b>Profesor: </b>Juan Pérez<br>
            <b>Contacto: </b>email@dominio.com.ar
          </p>
          <p>
            <b>Día: </b>28-10-2019<br>
            <b>Horario: </b>13:30 Hs.<br>                        
            <b>Aula: </b>520<br>
          </p>
        </td>
        <td>
          <p>Pendiente</p>
          <p><a href="#" class="btn btn-danger">
              <i class="fas fa-times"></i> Cancelar
            </a>
          </p>    
          <i class="far fa-clock"></i> 20 horas restantes
        </td>
        <td>
          <img class="img-thumbnail rounded" src="img/Koala.jpg" alt="Foto perfil" width="43%" height="auto">    
        </td>       
      </tr>  
      <tr>
        <td>
          <p>
            <b>Materia: </b>Nombre materia<br>  
            <b>Profesor: </b>Juan Pérez<br>
            <b>Contacto: </b>email@dominio.com.ar
          </p>
          <p>
            <b>Día: </b>28-10-2019<br>
            <b>Horario: </b>13:30 Hs.<br>                        
            <b>Aula: </b>520<br>
          </p>
        </td>
        <td>
          <p>Confirmado</p>
          <p><a href="#" class="btn btn-danger disabled">
              <i class="fas fa-times"></i> Cancelar
             </a>
          </p>
          <i class="fas fa-exclamation-circle"></i> No se puede cancelar
        </td>
        <td>
          <img class="img-thumbnail rounded" src="img/Koala.jpg" alt="Foto perfil" width="43%" height="auto">   
        </td>  
      </tr>
    </tbody>
  </table>
</div>
@endsection
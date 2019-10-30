@extends('principal')

@section('title', 'Consultas - Alumnos')

@section('estilos')
<link href="{{asset('css/alumnos1.css')}}" rel="stylesheet">
@endsection

@section('navegacion')
<li class="nav-item active">
  <a class="nav-link" href="{{ route('alumno') }}">Realizar consulta</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{ route('alumno-consultas') }}">Mis consultas</a>
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
@endsection

@section('cuerpo')
<div class="table-responsive">
  <table class="table table-hover tabla">
    <thead>
      <tr>
        <th>Profesor</th>
        <th>Día</th>
        <th>Horario</th>
        <th class="visible">Aula</th>
        <th class="visible">Contacto</th>
        <th>Cupos</th>
      </tr>
    </thead>
    <tbody>
      <tr data-toggle="collapse" data-target="#acordeon1">
        <td>Juan Pérez</td>
        <td>Jueves</td>                            
        <td>13:30 Hs.</td>
        <td class="visible">520</td>
        <td class="visible">email@dominio.com.ar</td>
        <td>3/8</td>
      </tr>
      <tr class="collapse info" id="acordeon1">                                    
        <td colspan="4">
          <div id="info">
            <b>Aula: </b>520<br>
            <b>Contacto: </b>email@dominio.com.ar 
            <button class="btn btn-primary mx-auto d-block ocultar">INSCRIBIR</button>
          </div>
                    <img class="img-thumbnail rounded float-right ocultar" src="img/Koala.jpg" alt="Foto perfil" width="40%" height="auto">                                     
                </td>
            </tr>    
            <tr data-toggle="collapse" data-target="#acordeon2">
                <td>Juan Pérez</td>
                <td>Jueves</td>                            
                <td>13:30 Hs.</td>
                <td class="visible">520</td>
                <td class="visible">email@dominio.com.ar</td>
                <td>3/8</td>
            </tr>
            <tr class="collapse info" id="acordeon2">                                    
                <td colspan="4">
                    <div id="info">
                        <b>Aula: </b>520<br>
                        <b>Contacto: </b>email@dominio.com.ar 
                        <button class="btn btn-primary mx-auto d-block ocultar">INSCRIBIR</button>
                    </div>
                    <img class="img-thumbnail rounded float-right ocultar" src="img/Koala.jpg" alt="Foto perfil" width="40%" height="auto">                                     
                </td>
            </tr>    
        </tbody>
        </table>
        <div id="contenedor1">
            <img src="img/Koala.jpg" alt="Foto perfil" width="100%" height="auto" id="img1">
            <button class="btn btn-primary d-none d-md-table-cell">INSCRIBIR</button>
        </div>
</div>
@endsection
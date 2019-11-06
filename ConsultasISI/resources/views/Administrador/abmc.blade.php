@extends('principal')

@section('navegacion')

<li class="nav-item">
  <a class="nav-link" href="{{ route('adminHome') }}">Ver consultas</a>
</li>
<li class="nav-item active">
  <a class="nav-link" href="{{ route('adminABMC') }}">Realizar ABMC</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{ route('adminListado') }}">Listado</a>
</li>      
<li class="nav-item">
  <a class="nav-link" href="#">Bloquear consulta</a>
</li>
@endsection

@section('cuerpo')
<div class="table-responsive">
  <table class="table table-hover table-light tabla" style="width:100%">
    <thead class="thead-dark">
      <tr>
        <th style="width:33%">Tabla</th>
        <th style="width:33%">Opciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Usuarios</td>
        <td>
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary">Alta</button>
            <button type="button" class="btn btn-secondary">Baja</button>
            <button type="button" class="btn btn-secondary">Modificación</button>
            <button type="button" class="btn btn-secondary">Consulta</button>
          </div>    
        </td>       
      </tr>  
      <tr>
        <td>Materias</td>
        <td>
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary">Alta</button>
            <button type="button" class="btn btn-secondary">Baja</button>
            <button type="button" class="btn btn-secondary">Modificación</button>
            <button type="button" class="btn btn-secondary">Consulta</button>
          </div>    
        </td>       
      </tr>
      <tr>
        <td>Roles</td>
        <td>
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary">Alta</button>
            <button type="button" class="btn btn-secondary">Baja</button>
            <button type="button" class="btn btn-secondary">Modificación</button>
            <button type="button" class="btn btn-secondary">Consulta</button>
          </div>    
        </td>       
      </tr>
      <tr>
        <td>Consultas</td>
        <td>
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary">Alta</button>
            <button type="button" class="btn btn-secondary">Baja</button>
            <button type="button" class="btn btn-secondary">Modificación</button>
            <button type="button" class="btn btn-secondary">Consulta</button>
          </div>    
        </td>       
      </tr>
      <tr>
        <td>Estados</td>
        <td>
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary">Alta</button>
            <button type="button" class="btn btn-secondary">Baja</button>
            <button type="button" class="btn btn-secondary">Modificación</button>
            <button type="button" class="btn btn-secondary">Consulta</button>
          </div>    
        </td>       
      </tr>
    </tbody>
  </table>
</div>
@endsection
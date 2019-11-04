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
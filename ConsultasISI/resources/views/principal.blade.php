<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minumun-scale=1.0" />
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/principal.css')}}" rel="stylesheet">
    <!-- Calendar -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
   
    @yield('estilos')    
    <script src="{{asset('js/all.min.js')}}"></script>
    <title>@yield('title')</title>
  </head>
  <body>
    <div class="principal">
      <div class="row fila">
        <header class="col-12 col-sm-12 col-md-12 col-lg-12 cabecera">
          <h1>UTN Facultad Regional Rosario</h1>
          <h2>Sistema de Consultas - ISI</h2>
          <nav class="navbar navbar-expand-md navbar-expand-sm navbar-toggleable-sm navbar-toggleable-md bg-dark navbar-dark">
            <button class="navbar-toggler navbar-toggler-left" type="button" data-toggle="collapse" data-target="#enlaces" aria-controls="enlaces" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <img src="img/LogoUTN2.png" alt="Logo UTN" width="auto" height="40">
            <div class="collapse navbar-collapse" id="enlaces">
              <ul class="navbar-nav mr-auto">
                @yield('navegacion')
              </ul>
              <div class="dropdown-divider ocultar"></div>
              <div>                        
              <div class="usuario"><i class="far fa-envelope"></i> <!--{ auth()->user()->email }--></div>
                <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                  <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                </a>
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </div>
            </div>  
          </nav>
        </header>
      </div>
      <div class="row fila">
        <aside class="col-12 col-sm-4 col-md-3 col-lg-2 selectores">
          @yield('lateral')
        </aside>
        <section class="col-12 col-sm-8 col-md-9 col-lg-10 cuerpo">
          @yield('cuerpo')
        </section>
      </div>    
      <div class="row fila">
        <footer class="col-12 col-sm-12 col-md-12 col-lg-12 pie">
          <p>
            El footer
          </p>
        </footer>
      </div>
    </div>
    
    



    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>



    <!-- Calendar-->
    <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
  </body>
</html>



<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>BankSync</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Estilos -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/buttons.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="wrapper d-flex align-items-stretch">
    <!-- Barra Lateral -->
    <nav id="sidebar">
      <!-- Botão de Toggle do Menu -->
      <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
          <i class="fa fa-bars"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>
      </div>

      <!-- Logo e Links do Menu -->
      <h1><a href="/" class="logo">BankSync<br> Ewerton Luiz</a></h1>
      <ul class="list-unstyled components mb-5">
        <li class="{{ request()->routeIs('/') ? 'active' : '' }}">
          <a href="{{ route('index') }}"><span class="fa fa-home mr-3"></span> Inicio</a>
        </li>
         <li class="{{ request()->routeIs('financeiro') ? 'active' : '' }}">
        <a href="{{ route('financeiro') }}"><span class="fa fa-line-chart mr-3"></span> Financeiro</a>
    </li>
        <li class="{{ request()->routeIs('receitas') ? 'active' : '' }}">
          <a href="{{ route('receitas') }}"><span class="fa fa-check"></span> &nbsp Receitas</a>
        </li>
        <li class="{{ request()->routeIs('despesas') ? 'active' : '' }}">
          <a href="{{ route('despesas') }}"><span class="fa fa-exclamation-circle"></span>&nbsp &nbsp Despesas</a>
        </li>
        <li class="{{ request()->routeIs('relatorio') ? 'active' : '' }}">
          <a href="{{ route('relatorio') }}"><span class="fa fa-sticky-note mr-3"></span> Relatorio</a>
        </li>
        <li class="{{ request()->routeIs('configuracao') ? 'active' : '' }}">
          <a href="{{ route('configuracao') }}"><span class="fa fa-cog"></span>&nbsp &nbsp Conta</a>
        </li>
      </ul>
      
      <!-- Informações do Sistema -->
      <div class="absoluteee">
        <p class="m-0">Financial System</p>
        <p class="m-0">ver: 1.0</p>
        <br>
        <p class="m-0">Desenvolvido por:</p>
        <p>Soninhos da FATEC</p>
      </div>
    </nav>
    
    <!-- Conteúdo Principal -->
    <div id="content" class="p-4 p-md-5 pt-5">
      @yield('conteudo')
    </div>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/popper.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>

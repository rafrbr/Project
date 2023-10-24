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
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
            <h1><a href="{{ route('welcome') }}" class="logo">BankSync<br> {{ auth()->user()->name }}</a></h1>

            <ul class="list-unstyled components mb-5">
                <li class="{{ request()->routeIs('financeiro.index') ? 'active' : '' }}">
                    <a href="{{ route('financeiro.index') }}"><span class="fa fa-line-chart mr-3"></span> Financeiro</a>
                </li>
                <li class="{{ request()->routeIs('receitas.index') ? 'active' : '' }}">
                    <a href="{{ route('receitas.index') }}"><span class="fa fa-check"></span> &nbsp Receitas</a>
                </li>
                <li class="{{ request()->routeIs('despesas.index') ? 'active' : '' }}">
                    <a href="{{ route('despesas.index') }}"><span class="fa fa-exclamation-circle"></span>&nbsp &nbsp Despesas</a>
                </li>
                <li class="{{ request()->routeIs('financeiro.configuracao') ? 'active' : '' }}">
                    <a href="{{ route('financeiro.configuracao') }}"><span class="fa fa-cog"></span>&nbsp &nbsp Conta</a>
                </li>
                <li class="nav-item"> <!-- Adicione a classe "nav-item" para a marcação do botão Sair -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link text-danger" style="text-decoration: none;">
                            <i class="fa fa-sign-out"></i> Sair
                        </button>
                    </form>
                </li>
            </ul>

            <!-- Informações do Sistema -->
            <div class="absoluteee">
                <p class="m-0">BankSync</p>
                <p class="m-0">Versão: 1.3</p>
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

    @stack('scripts')

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
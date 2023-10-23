<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css"> <!-- Incluindo o arquivo CSS de estilo personalizado -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css"> <!-- Incluindo o Bootstrap CSS -->
</head>

<body>
    <!-- Barra de navegação -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/images/BankSync.png" alt="Logo" width="50" class="rounded-circle">
                BanKSync
            </a>
            <!-- Botão para mostrar o menu em telas menores -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/#contact">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Acessar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo da página -->
    <div class="page">
        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-100">
                <div class="col-md-6">
                    <!-- Cartão de login -->
                    <div class="card custom-card">
                        <div class="card-body">
                            <h1 class="card-title text-center">Login</h1>
                            <p class="text-center">Digite os seus dados de acesso no campo abaixo.</p>

                            <!-- Formulário de login -->
                            <form method="POST" class="formLogin">
                                <div class="form-group">
                                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" class="form-control custom-input" autofocus="true" required />
                                </div>

                                <div class="form-group">
                                    <input type="password" id="password" name="password" placeholder="Digite sua senha" class="form-control custom-input" required />
                                </div>

                                <a href="/esqueci" class="custom-link">Esqueci minha senha</a>
                                <a href="/criar_conta" class="custom-link">Criar Conta</a>

                                <button type="submit" class="btn btn-custom btn-block">Acessar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Incluindo os scripts JavaScript do Bootstrap e do jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/login.css"> <!-- Seu arquivo de estilo -->
    <link rel="stylesheet" href="/css/criar_conta.css"> <!-- Seu arquivo de estilo -->

</head>

<body>
    <!-- Incluindo o navbar do home.php -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="/images/BankSync.png" alt="Logo" width="50" class="rounded-circle">
                BanKSync
            </a>
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

    <div class="page">
        <div class="form-login-container">
            <h1>Criar Conta</h1>
            <form method="post" action="process.php">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" id="name" name="name" placeholder="Seu Nome" required>
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Seu E-mail" required>
                </div>

                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" placeholder="Sua Senha" required>
                </div>

                <button class="btn" type="submit">Criar Conta</button>
            </form>
            <p><a href="/login" class="btn-back">Já tem uma conta? Faça login aqui</a></p>
        </div>
    </div>
</body>

</html>
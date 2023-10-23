<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueci a Senha - BanKSync</title>
    <!-- Inclua os estilos CSS do Bootstrap e CSS personalizado -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/esqueci.css">
</head>

<body>
    <!-- Barra de navegação -->
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
                        <a class="nav-link" href="/">Início</a>
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

    <section id="forgot-password" class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="display-4 text-center">Esqueci Minha Senha</h2>
                            <p class="text-center">Digite seu e-mail abaixo para redefinir sua senha.</p>
                            <form>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
                                </div>
                                <br>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Redefinir Senha</button>
                                </div>
                                
                            </form>
                            <div class="text-center mt-3">
                                <a href="/login" class="custom-link">Voltar para o Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts JavaScript (jQuery e Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Script JavaScript personalizado -->
    <script src="/js/index.js"></script>
</body>

</html>
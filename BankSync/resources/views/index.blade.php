<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BankSync - Cash on Hand</title>
    <!-- Inclua os estilos CSS do Bootstrap e CSS personalizado -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/css/index.css">
</head>

<body>
    <!-- Barra de navegação -->
    <!-- Barra de navegação com classes personalizadas -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">
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
                        <a class="nav-link" href="#contact">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Acessar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="about" class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="display-4">Sobre a BanKSync</h2>
                    <p class="lead">A BanKSync é mais do que uma plataforma financeira, somos seu parceiro de confiança para a jornada financeira.</p>
                    <p>Nossa história começou há uma década, quando um grupo de visionários decidiu tornar a gestão financeira pessoal mais acessível e eficaz. Desde então, temos ajudado milhões de pessoas a conquistar seus objetivos financeiros.</p>
                    <p>Na BanKSync, acreditamos que o sucesso financeiro é alcançado com conhecimento e ferramentas adequadas. Nosso compromisso é fornecer uma plataforma que coloca você no controle de suas finanças, seja qual for o seu objetivo.</p>
                </div>
                <div class="col-lg-6">
                    <img src="images/BankSync-semFundo.png" alt="Sobre a BanKSync">
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de Serviços -->
    <section id="services" class="py-5">
        <div class="container">
            <h2 class="text-center">Nossos Serviços</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-card">
                        <h3>Serviço de Gerenciamento Financeiro</h3>
                        <ul>
                            <li>Gerenciamento de orçamento pessoal.</li><br>
                            <li>Crie orçamentos personalizados para diferentes categorias de despesas.</li><br>
                            <li>Acompanhe seu progresso em relação ao orçamento para evitar gastos excessivos.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <h3>Serviço de Análise de Despesas e Receitas</h3>
                        <ul>
                            <li>Monitorize suas entradas de dinheiro de forma fácil e organizada.</li><br>
                            <li>Registre todas as fontes de renda para uma visão clara do seu dinheiro.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <h3>Relatórios financeiros personalizados</h3>
                        <ul>
                            <li>Tenha acesso a relatórios detalhados que mostram o panorama completo de suas finanças.</li><br>
                            <li>Visualize tendências, padrões e áreas de melhoria para uma gestão financeira eficaz.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de Contato -->
    <section id="contact" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center">Entre em Contato Conosco</h2>
            <p class="text-center">Estamos aqui para ajudar. Envie-nos uma mensagem.</p>
            <div class="row">
                <div class="col-lg-6">
                    <form>
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" placeholder="Seu Nome">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" placeholder="Seu E-mail">
                        </div>
                        <div class="form-group">
                            <label for="message">Mensagem</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Sua Mensagem"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                    </form>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h3>Nossas Informações de Contato</h3>
                        <p><i class="fas fa-envelope"></i> info@bansync.com</p>
                        <p><i class="fas fa-phone"></i> (13) 9999-9999</p>
                        <p><i class="fas fa-map-marker-alt"></i> FATEC Praia Grande - Praça 19 de Janeiro - Boqueirão, Praia Grande</p>
                        <h3>Localização</h3>
                        <!-- Adicione aqui o código de incorporação do Google Map -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.770826223106!2d-46.27448518554846!3d-24.00520298449212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce0917e601a887%3A0xfbb5ac947d2170aa!2sPra%C3%A7a%2019%20de%20Janeiro%2C%20144%20-%20Boqueir%C3%A3o%2C%20Praia%20Grande%20-%20SP%2C%2011700-100%2C%20Brasil!5e0!3m2!1spt-BR!2sbr!4v1631935652977!5m2!1spt-BR!2sbr" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4 custom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>Links Rápidos</h4>
                    <ul class="list-unstyled">
                        <li><a href="#services" class="text-white">Nossos Serviços</a></li>
                        <li><a href="#contact" class="text-white">Entre em Contato</a></li>
                        <li><a href="/login" class="text-white">Acesse sua Conta</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Contate-nos</h4>
                    <p><i class="fas fa-envelope"></i> info@bansync.com</p>
                    <p><i class="fas fa-phone"></i> (13) 9999-9999</p>
                    <p><i class="fas fa-map-marker-alt"></i> FATEC Praia Grande - Praça 19 de Janeiro - Boqueirão, Praia Grande</p>
                </div>
                <div class="col-md-4">
                    <h4>Redes Sociais</h4>
                    <div class="social-icons">
                        <a href="https://github.com/rafrbr/Project" class="text-white"><i class="fab fa-github"></i>Github</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts JavaScript (jQuery e Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Script JavaScript personalizado -->
    <script src="/js/index.js"></script>
</body>

</html>
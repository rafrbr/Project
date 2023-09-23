<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>
    <link rel="stylesheet" href="main.css"> <!-- Use o nome correto do seu arquivo CSS aqui -->
</head>
<body>
    <div class="page">
        <div class="formLogin">
            <h1>Criar Conta</h1>
            <form method="post" action="process.php"> <!-- Redireciona para o arquivo de processamento "process.php" -->
                <label for="username">Digite o email:</label>
                <input type="text" id="username" name="username" placeholder="Seu Email" required>
                
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" placeholder="Sua senha" required>
                
                <button class="btn" type="submit">Criar Conta</button>
            </form>
            <p><a href="login.html" class="btn">Já tem uma conta? Faça login aqui</a></p>
        </div>
    </div>
</body>
</html>

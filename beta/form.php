<!DOCTYPE html> <!-- Declaração do tipo de documento -->
<html lang="en"> <!-- Início do elemento HTML com atributo de idioma "en" (inglês) -->
<head>
    <meta charset="UTF-8"> <!-- Definição da codificação de caracteres para UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Configuração da viewport para dispositivos móveis -->
    <title>Calculadora de Despesas e Receitas</title> <!-- Título da página -->
    <link rel="stylesheet" href="styles.css"> <!-- Inclusão do arquivo de estilo CSS chamado "styles.css" -->
    <link rel="stylesheet" href="main.css"> <!-- Inclusão do arquivo de estilo CSS chamado "main.css" -->
</head>
<body>
<a href="login.html" class="btn">Login</a> <!-- Link "Login" com classe "btn" que redireciona para a página "login.html" -->
    <h1>Calculadora de Despesas e Receitas</h1> <!-- Título principal da página -->
    <form action="process.php" method="post"> <!-- Início do formulário com método POST e ação "process.php" -->
        <label for="tipo">Tipo:</label> <!-- Rótulo para o campo "tipo" -->
        <select name="tipo" id="tipo"> <!-- Campo de seleção "tipo" com opções de "Receita" e "Despesa" -->
            <option value="receita">Receita</option> <!-- Opção "Receita" -->
            <option value="despesa">Despesa</option> <!-- Opção "Despesa" -->
        </select>

        <label for="como-recebeu">Como recebeu o dinheiro:</label> <!-- Rótulo para o campo "como-recebeu" -->
        <select name="como-recebeu" id="como-recebeu"> <!-- Campo de seleção "como-recebeu" com várias opções -->
            <option value="pix">Pix</option> <!-- Opção "Pix" -->
            <option value="dinheiro">Dinheiro</option> <!-- Opção "Dinheiro" -->
            <option value="cartao-credito">Cartão de Crédito</option> <!-- Opção "Cartão de Crédito" -->
            <option value="cartao-debito">Cartão de Débito</option> <!-- Opção "Cartão de Débito" -->
            <option value="check">Check</option> <!-- Opção "Check" -->
        </select>

        <label for="valor">Valor:</label> <!-- Rótulo para o campo "valor" -->
        <input type="number" name="valor" id="valor" step="0.01" required> <!-- Campo de entrada de número "valor" com atributos adicionais -->

        <label for="meta">Definir Meta:</label> <!-- Rótulo para o campo "meta" -->
        <input type="number" name="meta" id="meta" step="0.01" required> <!-- Campo de entrada de número "meta" com atributos adicionais -->
  
    </form>
        <label for="consulta"></label> <!-- Rótulo vazio -->
		<button class="btn" type="submit" id="criar-conta-button">SALVAR</button> <!-- Botão "SALVAR" com classe "btn" -->
		<a href="consulta.php" class="btn">Consultar</a> <!-- Link "Consultar" com classe "btn" que redireciona para a página "consulta.php" -->
		<button class="btn" type="submit" name="consulta-submit">Consultar Fundo de emergência</button> <!-- Botão "Consultar Fundo de emergência" com classe "btn" -->
   
</body>
</html>

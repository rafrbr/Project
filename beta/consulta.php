<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Despesas e Receitas</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1>Calculadora de Despesas e Receitas</h1>
    <form action="process.php" method="post">
	<a href="form.php" class="btn" type="submit">Cadastrar Consulta</a>


    </form>

    <h2>Registro de Movimentações</h2>
    <table>
        <tr>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Categoria</th>
        </tr>
        <?php
            // Verificar qual botão de consulta foi clicado
            if(isset($_POST['consulta-despesa'])){
                // Filtrar e exibir apenas as despesas
                $csvFile = fopen("movimentacoes.csv", "r");
                while (($data = fgetcsv($csvFile, 1000, ",")) !== false) {
                    if($data[0] === "despesa"){
                        echo "<tr><td>{$data[0]}</td><td>{$data[1]}</td><td>{$data[2]}</td></tr>";
                    }
                }
                fclose($csvFile);
            } elseif(isset($_POST['consulta-receita'])){
                // Filtrar e exibir apenas as receitas
                $csvFile = fopen("movimentacoes.csv", "r");
                while (($data = fgetcsv($csvFile, 1000, ",")) !== false) {
                    if($data[0] === "receita"){
                        echo "<tr><td>{$data[0]}</td><td>{$data[1]}</td><td>{$data[2]}</td></tr>";
                    }
                }
                fclose($csvFile);
            } else {
                // Exibir todas as entradas por padrão
                $csvFile = fopen("movimentacoes.csv", "r");
                while (($data = fgetcsv($csvFile, 1000, ",")) !== false) {
                    echo "<tr><td>{$data[0]}</td><td>{$data[1]}</td><td>{$data[2]}</td></tr>";
                }
                fclose($csvFile);
            }
        ?>
    </table>
</body>
</html>

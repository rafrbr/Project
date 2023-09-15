<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Despesas e Receitas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Calculadora de Despesas e Receitas</h1>
    <form action="process.php" method="post">
        <label for="tipo">Tipo:</label>
        <select name="tipo" id="tipo">
            <option value="receita">Receita</option>
            <option value="despesa">Despesa</option>
        </select>
        <label for="valor">Valor:</label>
        <input type="number" name="valor" id="valor" step="0.01" required>
        <label for="categoria">Categoria:</label>
        <input type="text" name="categoria" id="categoria" required>
        <button type="submit">Salvar</button>
    </form>
    <h2>Registro de Movimentações</h2>
    <table>
        <tr>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Categoria</th>
        </tr>
        <?php
            // Exibir as entradas do arquivo CSV
            $csvFile = fopen("movimentacoes.csv", "r");
            while (($data = fgetcsv($csvFile, 1000, ",")) !== false) {
                echo "<tr><td>{$data[0]}</td><td>{$data[1]}</td><td>{$data[2]}</td></tr>";
            }
            fclose($csvFile);
        ?>
    </table>
</body>
</html>

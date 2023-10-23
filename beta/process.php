<?php
// Verifica se o tipo, valor e categoria foram enviados pelo formulário
if (isset($_POST['tipo']) && isset($_POST['valor']) && isset($_POST['categoria'])) {
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $categoria = $_POST['categoria'];
    
    // Abre o arquivo CSV para escrita
    $csvFile = fopen("movimentacoes.csv", "a");

    // Escreve os dados no arquivo CSV
    fputcsv($csvFile, [$tipo, $valor, $categoria]);

    // Fecha o arquivo CSV
    fclose($csvFile);
}

// Redireciona de volta para a página inicial
header("Location: consulta.php");
?>


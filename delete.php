<?php

// Verifica se o parâmetro 'id' foi passado na URL
if (!empty($_GET['id'])) {
    // Inclui o arquivo de configuração (presumo que tenha as configurações de conexão)
    include_once('config.php');

    // Obtém o valor do parâmetro 'id' da URL
    $id = $_GET['id'];

    // Constrói a consulta SQL para selecionar dados com base no 'id'
    $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";

    // Executa a consulta SQL
    $result = $conexao->query($sqlSelect);

    // Verifica se há resultados
    if ($result->num_rows > 0) {
        // Constrói a consulta SQL para excluir dados com base no 'id'
        $sqlDelete = "DELETE FROM usuarios WHERE id=$id";

        // Executa a consulta SQL de exclusão
        $resultDelete = $conexao->query($sqlDelete);
    }
}

// Redireciona para a página 'sistema.php' após o processamento
header('Location: sistema.php');
exit(); // Termina a execução do script após o redirecionamento

?>

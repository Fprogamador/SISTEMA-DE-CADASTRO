<?php
// Inclui o arquivo de configuração do banco de dados
include_once('config.php');

// Verifica se o formulário de atualização foi enviado
if(isset($_POST['update']))
{
    // Obtém os dados do formulário
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $data_nascimento = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    // Constrói a consulta SQL de atualização
    $sqlUpdate = "UPDATE usuarios SET 
                    nome = '$nome', 
                    senha = '$senha', 
                    email = '$email', 
                    telefone = '$telefone', 
                    genero = '$genero', 
                    data_nascimento = '$data_nascimento', 
                    cidade = '$cidade', 
                    estado = '$estado', 
                    endereco = '$endereco'
                    WHERE id='$id'";

    // Executa a consulta SQL de atualização
    if ($conexao->query($sqlUpdate) === TRUE) {
        // Se a atualização for bem-sucedida, exibe uma mensagem
        echo "Registro atualizado com sucesso";
    } else {
        // Se ocorrer um erro na atualização, exibe uma mensagem de erro
        echo "Erro ao atualizar registro: " . $conexao->error;
    }
}

// Redireciona para a página 'sistema.php' após a atualização (ou em caso de erro)
header('Location: sistema.php');
?>

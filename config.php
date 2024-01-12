<?php

// Configurações de conexão com o banco de dados
$dbHost = 'localhost';  // Nome do host do banco de dados (pode variar dependendo do ambiente)
$dbUsername = 'root';    // Nome de usuário do banco de dados
$dbPassword = '';        // Senha do banco de dados
$dbName = 'formulario1'; // Nome do banco de dados

// Criar uma nova instância de conexão MySQLi
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Verificar se houve algum erro na conexão
if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}


?>

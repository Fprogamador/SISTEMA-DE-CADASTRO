<?php
    // Inicia a sessão (se ainda não estiver iniciada)
    session_start();

    // Remove as variáveis de sessão relacionadas ao email e senha
    unset($_SESSION['email']);
    unset($_SESSION['senha']);

    // Redireciona para a página de login após o logout
    header("Location: login.php");
?>

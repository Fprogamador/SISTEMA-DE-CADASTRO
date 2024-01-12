<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];


        // Preparar a consulta
        $sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
        $stmt = $conexao->prepare($sql);

        // Vincular os parâmetros
        $stmt->bind_param("ss", $email, $senha);

        // Executar a consulta
        $stmt->execute();

        // Obter resultados
        $result = $stmt->get_result();

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }
    // Fechar o statement
        $stmt->close();
?>,













<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: blueviolet;  /* Cor de fundo do body */
            opacity: 1;
            margin: 0;  /* Remova a margem padrão para evitar espaços extras */
        }
        div {
            background-color: dodgerblue;  /* Cor de fundo do formulário */
            opacity: 0.9;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
            width: 300px;  /* Adicione uma largura fixa ao formulário */
            text-align: center;  /* Centralize o texto no formulário */
        }
        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            width: 100%;  /* Faça os inputs ocuparem 100% da largura do formulário */
            margin-bottom: 15px;  /* Adicione margem inferior aos inputs para espaçamento */
        }
        .inputSubmit {
            background-color: dodgerblue;
            border: 15px white;
            border-radius: 15px;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        .inputSubmit:hover {
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="home.php">Voltar</a> <!-- Link para a página home.php -->
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST"> <!-- Formulário de login -->
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha" placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>

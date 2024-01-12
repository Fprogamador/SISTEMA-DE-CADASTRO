<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: blueviolet;
            opacity: 1;
            text-align: center;
            color: white;
        }

        .box {
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 15px;
            width: 364px;
            font-size: 14px;
        }

        a {
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 15px;
            padding: 25px;
        }

        a:hover {
            background-color: dodgerblue;
        }

        /* Estilo para os botões Entrar e Criar nova conta */
        .entrar {
            border: none;
            background: none;
        }

        .criar-conta {
            background-color: rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <!-- Título da Página -->
    <h1>Página de Login</h1>

    <!-- Caixa de Opções -->
    <div class="box">
        <!-- Botão de Entrar -->
        <a href="login.php" class="entrar">Entrar</a>

        <!-- Botão de Criar nova conta -->
        <a href="formulario.php" class="criar-conta">Criar nova conta</a>
    </div>
</body>

</html>

<?php require_once "functions.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login e Senha</title>
</head>
<body>
    <?php login($conecta); ?>
    <div class="form">
    <form method="post">
        <div class="aviso">
            <?php login($conecta); ?>
        </div>
        <input type="email" name="email" placeholder="Seu email" required>
        <input type="password" name="senha" placeholder="Sua senha" required>
        <button name="login">Acessar</button>
    </form>
    </div>
</body>
</html>
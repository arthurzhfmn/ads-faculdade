<?php require_once "functions.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="form">
        <form method="post">
            <div class="warning">
                <?php login($conexao); ?>
            </div>
            <input type="email" name="email" placeholder="Seu email" required>
            <input type="password" name="senha" placeholder="Sua senha" required>
            <button name="login" type="submit">Acessar</button>
        </form>
    </div>
</body>
</html>
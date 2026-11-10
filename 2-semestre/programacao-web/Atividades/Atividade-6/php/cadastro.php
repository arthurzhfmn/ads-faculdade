<?php require_once "functions.php";
insertUser($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nome" placeholder="Seu nome" required>
        <input type="email" name="email" placeholder="Seu email" required>
        <input type="password" name="senha" placeholder="Sua senha" required>
        <input type="password" name="validate_senha" placeholder="Repita sua senha" required>

        <button type="submit" name="cadastrar">Cadastrar</button>
    </form>
</body>
</html>
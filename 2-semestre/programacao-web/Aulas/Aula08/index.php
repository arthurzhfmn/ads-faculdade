<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login&Senha</title>
    <style>
        input{display:block; padding: 8px; margin-bottom: 5px;}
    </style>
</head>
<body>
    <form action="functions.php" method="post">
        <input type="text" name='usuario' placeholder='Nome de usuário'>
        <input type="email" name='email' placeholder='Email' required>
        <input type="password" name='senha' placeholder='Sua senha' required>
        <button name='logar'>Acessar</button>
    </form>
</body>
</html>
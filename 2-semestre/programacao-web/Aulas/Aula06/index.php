<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com HTML e PHP</title>
    <style>
        input{display: block; margin-bottom: 8px; padding: 8px 5px;}
    </style>
</head>
<body>
    <!-- method get/post (n mostra os dados na URL) -->
    <form action="" method="post">
        <input type="text" name="nome" placeholder="Digite seu nome">
        <input type="email" name="email" placeholder="seuemail@email.com">
        <input type="number" name="idade" placeholder="Digite sua idade">
        <input type="submit" name="enviar">
    </form>
</body>
</html>
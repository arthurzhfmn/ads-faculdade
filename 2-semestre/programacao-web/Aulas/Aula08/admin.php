<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo ao admin do site</title>
</head>
<body>
    <?php 
    if (isset($_SESSION['ativa'])) : ?>

    <h1>Bem vindo, <?php echo $_SESSION['usuario']; ?> ao painel administrativo do site!</h1>
    <h2>Você está logado com o email: <?php echo $_SESSION['email']; ?></h2>
    <a href="logout.php">Fazer Logout</a>

     <?php
        else :
            echo "Você não tem acesso à esta página";
        endif; ?> <!-- fechando o if da linha 12 -->
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante João Protagonista</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Topo do site -->
     <!-- require para todo o sistema -->
     <?php require 'layout/topo.php'; ?>
    <section class="banner">
        <div class="infos">
            <h2>Conheça nossas</h2>
            <h1>Receitas Especiais</h1>
            <p>Venha conhecer nossos pratos com receitas exclusivas vindas direto da Ilha das Cobras e dos Gatos localizados na Malásia</p>
        </div>
    </section>

   <main>
        <h1>Quem Somos</h1>
        <p>Texto sobre a nossa empresa, Conteúdo exclusivo dessa página</p>
    </main>
    
    <section class="pratos">
        <div class="container">
            <div class="row">
                <div class="imagem"><img src="images/comida.jpg" alt="Comida"></div>
                <h3>Receita 1</h3>
            </div>
            <div class="row">
                <div class="imagem"><img src="images/comida.jpg" alt="Comida"></div>
                <h3>Receita 2</h3>
            </div>
            <div class="row">
                <div class="imagem"><img src="images/comida.jpg" alt="Comida"></div>
                <h3>Receita 3</h3>
            </div>
            <div class="row">
                <div class="imagem"><img src="images/comida.jpg" alt="Comida"></div>
                <h3>Receita 4</h3>
            </div>
        </div>
    </section>

    <footer class="rodape">
        <?php include "layout/rodape.php"; ?>
    </footer>
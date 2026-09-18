<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo BTU</title>
    <style>
        .m2{display: block; width: 250px; margin: 10px 0; padding: 10px;}
    </style>
</head>
<body>
    <form action="" method="post">
        <input class="m2"type="number" name="largura" placeholder="Insira a largura (em metros)">
        <input class="m2" type="number" name="comprimento" placeholder="Insira o comprimento (em metros)">
        <input type="radio" id="residencial" name="ambiente" value="residencial">
        <label for="residencial">Residencial</label><br>
        <input type="radio" id="comercial" name="ambiente" value="comercial">
        <label for="comercial">Comercial</label>
    </form>
</body>
</html>
<?php

 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo BTU</title>
    <style>
        .m2{display: block; width: 250px; margin: 10px 0; padding: 10px;}
        .erro{color: red; font-size: 20px; font-weight: bold;}
        .infos{font-size: 20px;}
    </style>
</head>
<body>
    <h1>Cálculo de BTUs - Programação Web</h1>
    <form action="" method="post">
        <input class="m2"type="number" name="largura" placeholder="Insira a largura (em metros)" required>
        <input class="m2" type="number" name="comprimento" placeholder="Insira o comprimento (em metros)" required>
        <input type="radio" id="residencial" name="ambiente" value="residencial">
        <label for="residencial">Residencial</label><br>
        <input type="radio" id="comercial" name="ambiente" value="comercial">
        <label for="comercial">Comercial</label><br><br>
        <input type="submit" name="enviar">
    </form>
</body>
</html>
<?php
if (isset($_POST['enviar'])){
    $erros = [];
    $largura = filter_input(INPUT_POST, 'largura', FILTER_SANITIZE_NUMBER_INT);
    $comprimento = filter_input(INPUT_POST, 'comprimento', FILTER_SANITIZE_NUMBER_INT);
    $ambiente = filter_input(INPUT_POST, 'ambiente', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    if (empty($largura) || $largura<=0){
        $erros[] = 'Preencha a largura corretamente (números positivos)';
    }

    if (empty($comprimento) || $comprimento<=0){
        $erros[] = 'Preencha o comprimento corretamente (números positivos)';
    }

    if($ambiente !== 'residencial' && $ambiente !=='comercial'){
        $erros[] = 'Selecione um ambiente válido';
    }

    if (empty($erros)){
        $area = $largura * $comprimento;

        if ($ambiente == 'residencial'){
            $btu = match (true) {
                $area <= 9 => 7000,
                $area <= 12 => 7000,
                $area <= 15 => 9000,
                $area <= 20 => 12000,
                $area <= 25 => 15000,
                $area <= 30 => 18000,
                $area <= 35 => 21000,
                $area <= 40 => 24000,
                $area <= 45 => 27000,
                $area <= 50 => 30000,
                $area <= 60 => 36000,
                $area <= 70 => 42000,
                default => null
            };
        };  #fechamento if residencial

        if ($ambiente == 'comercial'){
            $btu = match(true){
                $area <= 9 => 7000,
                $area <= 12 => 9000,
                $area <= 15 => 12000,
                $area <= 20 => 16000,
                $area <= 25 => 20000,
                $area <= 30 => 24000,
                $area <= 35 => 28000,
                $area <= 40 => 32000,
                $area <= 45 => 36000,
                $area <= 50 => 40000,
                $area <= 60 => 48000,
                $area <= 70 => 56000,
                default => null
            };
        }; # fechamento if comercial

        echo "<h2>Resultados: </h2>";
        echo "<p class='infos'>A área do ambiente é de ". $area ."m²</p>";
        echo "<p class='infos'>Ar condicionado de ". $btu ."BTUs</p>";
    } #fechamento if erros 
    else{
        foreach($erros as $erro){
            echo "<p class='erro'>$erro</p>";
        }
    }
} # fechamento do if geral 
 ?>
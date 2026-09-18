<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ucwords $ ucfirst</title>
    <style>.textos{display:block; margin-bottom: 8px; width:250px; padding: 8px 5px;}</style>
</head>
<body>
    <form action="" method="post">
        <input class="textos" type="text" name="nome" placeholder="Digite seu primeiro nome">
        <input class="textos" type="text" name="sobrenome" placeholder="Digite seu sobrenome completo">
        <input class="textos" type="text" name="filme_fav" placeholder="Filme favorito">
        <input type="submit" name="enviar">
    </form>
</body>
</html>
<?php 

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$filme_fav = filter_input(INPUT_POST, 'filme_fav', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if(isset($_POST['enviar'])){
    echo "<h2>Confira seus dados: </h2>";
    echo "<p>Nome: ".ucfirst($nome) ."</p>";
    echo "<p>Sobrenome: " .ucwords($sobrenome) ."</p>";
    echo "Filme favorito: " .ucwords($filme_fav);
}
?>
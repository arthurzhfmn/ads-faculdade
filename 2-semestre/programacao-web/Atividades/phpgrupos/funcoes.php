<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ucwords & ucfirst</title>
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
    echo "<p>Sobrenome(ucwords): " .ucwords($sobrenome) ."</p>";
    echo "<p>Sobrenome(ucfirst): " .ucfirst($sobrenome) ."</p>";
    echo "Filme favorito: " .ucwords($filme_fav);
}


############################################
//trim
//str_pad
//str_repeat



//TRIM
//REMOVE ESPACOS EM BRANCOS NO FINAL E NO INICIO DE UMA STRING, REMOVE TAMBEM CARACTERES ESPECIAIS COMO \n, \r, \t, \0, \x0B
//EXEMPLO 1 :
echo "<br><br><br><br><br>";
$text = "   Olá Mundo!   <br>";
$res = trim($text);
echo $res;



//EXEMPLO 2 :

$text2 = "xOlá Mundo!xx";
$res2 = trim($text2, "x");
echo $res2;



//STR_PAD
//ADICIONA CARACTERES EM UMA STRING, PODE SER ADICIONADO NO INICIO, NO FINAL OU NOS DOIS LADOS DA STRING

//EXEMPLOS :

$str = "Hello World";
echo str_pad($str,20,"x",STR_PAD_BOTH). "<br>"; //ADICIONA X NOS DOIS LADOS DA STRING
echo str_pad($str,20,"x",STR_PAD_LEFT). "<br>"; //ADICIONA X NO INICIO DA STRING
echo str_pad($str,20,"x",STR_PAD_RIGHT). "<br>"; //ADICIONA X NO FINAL DA STRING



//STR_REPEAT
//REPETE UMA STRING N VEZES

//EXEMPLO  :
$str = "Hello World! ";
echo str_repeat($str, 3). "<br>"; //REPETE A STRING 3 VEZES

#############################################################
echo "<br><br><br><br><br>";
//! str_replace procura a primeira string citada, depois informa por qual texto ela vai ser substituida e no fim pega a string original de referencia

//! 1° Exemplo básico

echo str_replace("world","Peter","Hello world!"); 

//! 2° Exemplo com array

$texto = "Eu gosto de maçã e banana"; 

echo "<br>";

$resultado = str_replace(
            [
                "maçã", "banana"
            ],
            [
                "laranja", "uva"
            ],
            $texto  
);
echo $resultado;

echo "<br>";

//! 3° Exemplo excluir caracteres

$cpf = "123.123.123-67";

$cpflimpo = str_replace(
    [".", "-"],
    "",
    $cpf
);

echo $cpflimpo;


echo "<br><br><br>";
//! strtolower - converte os caracteres de uma string para minusculo.

//! 1° Exemplo

$nome = "FLAVIO";
echo strtolower($nome);

echo "<br>";

//! 2° Exemplo

$frase = "PHP É MUITO LEGAL";

echo strtolower($frase);

echo "<br><br><br>";
//! strtoupper converte todos caracteres para maiusculo

//! 1° Exemplo

$texto = "flavio";

echo strtoupper ($texto);

echo "<br>";

//! 2° Exemplo

$nome = "flavio mendes crispim";

echo strtoupper ($nome);

?>
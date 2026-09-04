<?php

$aluno = "Ronaldo"; // String
$idade = 18; // Int
$altura = 1.80; // Float
$matriculado = true; // Boolean

echo "Olá $aluno, Bem vindo as aulas de PHP<br>";
echo "Teste de quebrar a linha<br>";
echo "<h1>Título PHP</h1>";

//Soma
$x = 10;
$y = 5;

$soma = $x + $y;
echo "Soma dos números = $soma";

//Concatenar strings
$nome = "Arthur ";
$nome .= "Hoffmann";

echo "<h2>$nome</h2>";

//Constantes
define("CURSO", "Programação com PHP");
echo CURSO;

//Versão moderna de declarar constantes
const TESTE = "Novo";
echo "<br>".TESTE;
?>
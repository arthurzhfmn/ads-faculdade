<?php
echo "Boa aula!";

// Array simples
$lanches = array("pastel", "pizza", "hamburguer", "hot dog", "xis", "churrasquinho");
echo $lanches[3];
echo "<br>Hoje pela manhã, comi $lanches[0], $lanches[2] e $lanches[5]";

echo "<hr>";
print_r($lanches);

// Vale a partir do php 5.6
$bebidas = ["vodka", "fanta uva", "suco", "água", "whisky"];
echo "<hr>";
print_r($bebidas);
echo "<h1> $bebidas[4]</h1>";

// Array associativo (Dicionário do Python)
$aluno = [
    "nome" => "Arthur",
    "idade" => 21,
    "curso" => ["ADS", "Moda"]
];
echo "<hr>";
print_r($aluno);
echo "<h2>$aluno[nome] está com $aluno[idade] anos e está matriculado no curso de  " .$aluno["curso"][0] . "</h2>";

// Array Multidimensional
$funcionarios = [
    [
        "nome" => "Ricardo",
        "setor" => "Administrativo",
        "email" => "ricardo@email.com"
    ],

    [
        "nome" => "Gustavo",
        "setor" => "Financeiro",
        "email" => "roberto@email.com"
    ],

    [
        "nome" => "Ana",
        "setor" => ["Marketing", "T.I"],
        "email" => "ana@email.com"
    ]
];

echo "<hr>";
echo "<pre>";
print_r($funcionarios);
echo "</pre>";
echo $funcionarios[2]["setor"][0] . " e ". $funcionarios[2]["setor"][1];
echo "<hr>";

// No php, usamos o "." para concatenar strings
echo "<p>A funcionária ". $funcionarios[2]['nome'] . " possui o email ". $funcionarios[2]['email'] . " e atua nos setores de " . $funcionarios[2]["setor"][0] . " e ". $funcionarios[2]["setor"][1] . "</p>";

// Comandos de repetição (loops)
/*
    - Índice => De onde começa (o ponto de partida)
    - Teste lógico => Lógica para que o comando continue repetindo
    - Incremento => É o que ocorre com o índice a cada passagem do loop
*/

$bebidas = ["vodka", "fanta uva", "suco", "água", "whisky", "café"];

$conta = count($bebidas);

for ($i = 0; $i < 10; $i++) { 
    echo "<p>$i</p>";
}

for($i = 0; $i < $conta; $i++) {
    echo $bebidas[$i] . "<br>";
}

?>
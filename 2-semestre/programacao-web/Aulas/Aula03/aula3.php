<?php
/* Comandos de repetição (loopings)
    -Índice = de onde começa a repetição. (ponto de partida)
    -Teste lógico = lógica para que o comando continue repetindo.
    -Incremento = É o que ocorre com o índice a cada repetição. */
$i = 1;
while ($i <= 10) {
    echo "<h3>$i</h3>";
    $i++;
}

$filmes = ["Missão impossível", " Um sonho de Liberdade", "Matrix", "Mid90", "Top Gun"];
$j = 0;
while($j < 5){
    $n = $j + 1;
    echo "$n - $filmes[$j] <br>";
    $j++;
}

echo "<hr>";

$i = 10;
while($i > 0){
    echo "$i -";
    $i--;
}

echo "<hr>";
$j = count($filmes) - 1;    //Pega o ultimo índice do array, nesse caso o [4]
while($j >= 0){
    echo $j + 1 ." - $filmes[$j] <br>";
    $j--;
}

echo "<hr>";
echo "<h3> Foreach (Ideal para arrays)</h3>";
// Foreach - Ideal para arrays
foreach ($filmes as $key => $filme) { // Cada elemento do array "filmes" vai se chamar "filme"
    $key++;
    echo "<p>$key - $filme</p>";
}

// Array associativo
$alunos = [
    [
        "nome" => "Arthur",
        "matricula" => "266341",
        "idade" => 18
    ],
    [
        "nome" => "Ana Júlia",
        "matricula" => "123514",
        "idade" => 19
    ],
    [
        "nome" => "Lucas",
        "matricula" => "546824",
        "idade" => 20
    ]
];
echo "<pre>";
print_r ($alunos);
echo "</pre>";

echo "<hr>";
echo $alunos[2]['idade'];
echo "<br>"; 

for($i = 0; $i < count($alunos); $i++){
    echo $alunos[$i]['nome'] ."<br>";
}

echo "<h2>Mostrando dados com Foreach</h2>";
foreach($alunos as $aluno){
    echo "O aluno $aluno[nome] de matrícula $aluno[matricula] possui $aluno[idade] anos.";
    echo "<br>";
}
?>
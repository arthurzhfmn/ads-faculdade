<?php

$alunos = [
    ["Arthur", "ADS", 10.0],
    ["João", "ADS", 8.0],
    ["Maria", "Ciencia de Dados", 7.5],
    ["Pedro", "Engenharia de Software", 9.0],
    ["Ana", "Produção Multimidia", 8.5]
];

foreach ($alunos as $aluno) {
    echo "O aluno $aluno[0] do curso $aluno[1] tirou nota $aluno[2].<br>";
}

?>
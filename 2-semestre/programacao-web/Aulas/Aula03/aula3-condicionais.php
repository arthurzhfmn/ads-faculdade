<?php
// Comandos condicionais
$idade = 25;
if ($idade >= 18){
    echo "<p>Entrada autorizada!</p>";
}else{
    echo "<p>Entrada somente para maiores de 18 anos.</p>";
}

$aluno = "Ricardo";

if($aluno == "Ricardo" or $aluno == "Rômulo"){
    echo "<p>Passar na coordenação</p>";
}else{
    echo "<p>Continue em sala de aula</p>";
}

$login = "admin";
$senha = 1702;

if($login == 'admin' and $senha == 1401){
    echo "<p>Login autorizado</p>";
}else{
    echo "<p>Login ou senha inválidos, por favor digite novamente.</p>";
}

$nota1 = 3;
$nota2 = 8;
$nota3 = 10;
$media = ($nota1 + $nota2 + $nota3) /3;
echo ($media);

if($media >= 7){
    echo "<p>O aluno está <strong>APROVADO</strong> com média $media.</p>"
}else{
    echo "<p>O aluno está <strong>REPROVADO</strong> com média $media.</p>"
}

?>
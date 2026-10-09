<?php
$server = "localhost";
$userDb = "root";
$passDb = "";
$nameDb = "qualquer_nome";
$conecta = mysqli_connect($server, $userDb, $passDb, $nameDb);

function buscar($conecta){
    $sql = "SELECT * FROM usuarios ORDER BY nome"; // Seleciona tudo (*) da tabela "usuarios"
    $action = mysqli_query($conecta, $sql);
    $dados = mysqli_fetch_all($action, MYSQLI_ASSOC);
    return $dados;
}

function insertUser($conecta){
    if (isset($_POST['cadastrar'])){
        $nome = mysqli_real_escape_string($conecta, $_POST['nome']);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $erros = [];

        if(empty($nome) or empty($email) or empty($senha)){
            echo "Preencha os campos corretamente.";
        }else{
            $sql = "INSERT INTO usuarios (nome, email, senha, data) VALUES ('$nome', '$email', '$senha', NOW())";
            $action = mysqli_query($conecta, $sql);
            if ($action){
                echo "Usuário inserido com sucesso!";
            }else{
                echo "Erro ao inserir.";
            }
        }
    }
}
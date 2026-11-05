<?php
$server = "localhost";
$userDb = "root";
$passDb = "";
$nameDb = "mercado";
$conexaoDb = mysqli_connect($server, $userDb, $passDb, $nameDb);

function login($conexaoDb){
    if(isset($_POST['login'])){
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = $_POST['senha'];
        if(!empty($email) and !empty($senha)){
			$sql = "SELECT * FROM usuarios WHERE email = '$email' ";
			$action = mysqli_query($conexaoDb, $sql);
			$retorno = mysqli_fetch_assoc($action);
			if(!empty($retorno['email']) and password_verify($senha, $retorno['senha'])){
				session_start();
				$_SESSION['email'] = $retorno['email'];
				$_SESSION['nome'] = $retorno['nome'];
				$_SESSION['ativa'] = true;
				header("location: usuarios.php"); // MUDAR DEPOIS
			}else{
				echo "Usuário ou senha incorretos!";
			}
		}else{
			echo "Usuário ou senha inválidos";
		}
    }
}

function buscarUsuario($conexaoDb){
    $sql = "SELECT * FROM usuarios ORDER BY nome";
    $action = mysqli_query($conexaoDb, $sql);
    $dados = mysqli_fetch_all($action, MYSQLI_ASSOC);
    return $dados;
}
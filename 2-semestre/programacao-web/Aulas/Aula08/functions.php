<?php 
$email_acesso = "admin@gmail.com";
$senha_acesso = "admin123";

if (isset($_POST['logar'])){
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $senha = $_POST['senha'];
    if (!empty($senha) and !empty($email)){
        if($email_acesso == $email and $senha_acesso == $senha){
            session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['email'] = $email;
            $_SESSION['ativa'] = true;

            echo "<a href='admin.php'>Acessar Admin</a>";
        }else{
            echo "Email ou senha incorretos.";
        }

    }else{
        echo "Email ou senha inválidos!";
    }
}
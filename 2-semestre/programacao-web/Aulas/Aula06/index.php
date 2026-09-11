<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com HTML e PHP</title>
    <style>
        input{display: block; margin-bottom: 8px; padding: 8px 5px;}
    </style>
</head>
<body>
    <!-- method get/post (n mostra os dados na URL) -->
    <form action="" method="post">
        <input type="text" name="nome" placeholder="Digite seu nome" required>
        <input type="email" name="email" placeholder="seuemail@email.com">
        <input type="number" name="idade" placeholder="Digite sua idade" value="18">
        <input type="submit" name="enviar">
    </form>
</body>
</html>

<?php
    // No php, os dados enviados via post são recuperados pela var $_POST
    if (isset($_POST['enviar'])) {
        //Validando campos no backend
        $erros = [];
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

        if (strlen(trim($nome)) <= 3) { //trim() retira os espaços em branco de uma string
            $erros[] = "Preencha seu nome completo";
        }

        if(empty($email)){
            $erros[] = "Preencha seu email corretamente";
        }

        if($idade >=18 && $idade <=100){
            $erros[] = "Cadastro somente para maiores de 18 anos";
        }

        if(empty($erros)) {
            // Continuar o envio do formulário
            echo "<h2>Confira seus dados: </h2>";
            echo "Nome: $nome  <br>";
            echo "Email: $email  <br>";
            echo "Idade: $idade  ";           
        }else{
            foreach ($erros as $erro){
                echo "$erro <br>";
            }
        }
    }

?>
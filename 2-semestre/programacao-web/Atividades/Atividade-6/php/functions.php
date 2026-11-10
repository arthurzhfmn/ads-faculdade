<?php
$server = 'localhost';
$userDb = 'root';
$passDb = "";
$nameDb = "sistema_produtos";
$conexao = mysqli_connect($server, $userDb, $passDb, $nameDb);

function login($conexao){
    if(isset($_POST['login'])){
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = $_POST['senha'];
        if(!empty($email) and !empty($senha)) {
            $sql = "SELECT * FROM usuarios WHERE email = '$email' ";
            $action = mysqli_query($conexao, $sql);
			$retorno = mysqli_fetch_assoc($action);
            if(!empty($retorno['email']) and password_verify($senha, $retorno['senha'])){
                session_start();
                $_SESSION['email'] = $retorno['email'];
				$_SESSION['nome'] = $retorno['nome'];
				$_SESSION['ativa'] = true;
                $_SESSION['nivel'] = $retorno['nivel'];

                if ($_SESSION['nivel'] === 'admin') {
                    header("Location: admin.php"); 
                } else {
                    header("Location: index.php");
                exit();}

            }else{
                echo "Usuário ou senha incorretos!";
            }
        }else{
            echo "Usuário ou senha inválidos!";
        }
    }
}

// Funções de produtos
function buscarCategorias($conexao) {
    $sql = "SELECT * FROM categorias ORDER BY nome ASC";
    $action = mysqli_query($conexao, $sql);
    return mysqli_fetch_all($action, MYSQLI_ASSOC);
}

function buscarProdutos($conexao) {
    $sql = "SELECT p.*, c.nome AS nome_categoria 
            FROM produtos p 
            INNER JOIN categorias c ON p.id_categoria = c.id_categoria 
            ORDER BY p.id_produto DESC";
    $action = mysqli_query($conexao, $sql);
    return mysqli_fetch_all($action, MYSQLI_ASSOC);
}

function insertProduto($conexao) {
    if (isset($_POST['cadastrar_produto'])) {
        $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
        $descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
        $preco = str_replace(',', '.', $_POST['preco']); 
        $id_categoria = filter_input(INPUT_POST, 'id_categoria', FILTER_VALIDATE_INT);

        if (empty($nome) || empty($preco) || empty($id_categoria)) {
            echo "<div class='alert alert-warning'>Preencha os campos obrigatórios (Nome, Preço e Categoria).</div>";
        } else {
            $sql = "INSERT INTO produtos (nome, descricao, preco, id_categoria, data) 
                    VALUES ('$nome', '$descricao', '$preco', '$id_categoria', CURDATE())";
            
            $action = mysqli_query($conexao, $sql);
            
            if ($action) {
                header("Location: admin.php");
                exit();
            } else {
                echo "<div class='alert alert-danger'>Erro ao inserir produto.</div>";
            }
        }
    }
}
function buscarProdutoPorId($conexao, $id) {
    $id = filter_var($id, FILTER_VALIDATE_INT);
    $sql = "SELECT * FROM produtos WHERE id_produto = $id";
    $action = mysqli_query($conexao, $sql);
    return mysqli_fetch_assoc($action);
}

function updateProduto($conexao) {
    if (isset($_POST['atualizar_produto'])) {
        $id_produto = filter_input(INPUT_POST, 'id_produto', FILTER_VALIDATE_INT);
        $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
        $descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
        $preco = str_replace(',', '.', $_POST['preco']); 
        $id_categoria = filter_input(INPUT_POST, 'id_categoria', FILTER_VALIDATE_INT);

        if (empty($nome) || empty($preco) || empty($id_categoria)) {
            echo "<div class='alert alert-warning'>Preencha os campos obrigatórios.</div>";
        } else {
            $sql = "UPDATE produtos 
                    SET nome = '$nome', descricao = '$descricao', preco = '$preco', id_categoria = '$id_categoria' 
                    WHERE id_produto = $id_produto";
            
            $action = mysqli_query($conexao, $sql);
            
            if ($action) {
                header("Location: admin.php");
                exit();
            } else {
                echo "<div class='alert alert-danger'>Erro ao atualizar produto.</div>";
            }
        }
    }
}

function deleteProduto($conexao, $id) {
    $id = filter_var($id, FILTER_VALIDATE_INT);
    
    if (!empty($id)) {
        $sql = "DELETE FROM produtos WHERE id_produto = $id";
        $action = mysqli_query($conexao, $sql);
        
        if ($action) {
            header("Location: admin.php");
            exit();
        } else {
            echo "<script>alert('Erro ao deletar produto!'); window.location.href='admin.php';</script>";
        }
    }
}

// Funções de usuário
function insertUser($conexao){
    if (isset($_POST['cadastrar'])){
        $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $erros = [];

        if(empty($nome) or empty($email) or empty($senha)){
            echo "Preencha os campos corretamente.";
        }else{
            $sql = "INSERT INTO usuarios (nome, email, senha, data) VALUES ('$nome', '$email', '$senha', NOW())";
            $action = mysqli_query($conexao, $sql);
            if ($action){
                echo "Usuário inserido com sucesso!";
            }else{
                echo "Erro ao inserir.";
            }
        }
    }
}
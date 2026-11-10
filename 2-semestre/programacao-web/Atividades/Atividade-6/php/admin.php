<?php 
session_start(); 
require_once "functions.php"; 

if (!isset($_SESSION['ativa']) || $_SESSION['nivel'] !== 'admin') {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <!-- Link CDN Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="row align-items-center mb-4"> 
            <div class="col-md-8">
                <h1>Página do Administrador</h1>
                <h2 class="h5 text-muted">Você está logado com o email <?php echo $_SESSION['email']; ?></h2>
            </div>
            <div class="col-md-4 text-end">
                <a href="logout.php" class="btn btn-danger">Sair do Sistema</a>
            </div>
        </div>
        
        <hr>

        <div class="row mb-3 mt-4">
            <div class="col d-flex justify-content-between align-items-center">
                <h2>Produtos Cadastrados</h2>
                <a href="produto_formulario.php" class="btn btn-primary">Inserir Novo Produto</a>
            </div>
        </div>

        <div class="row">
            <table class="table table-striped table-hover table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome do Produto</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Categoria</th>
                        <th>Data</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $produtos = buscarProdutos($conexao);
                    foreach ($produtos as $produto) : 
                    ?>
                        <tr>
                            <td><?php echo $produto['id_produto']; ?></td>
                            <td><?php echo $produto['nome']; ?></td>
                            <td><?php echo $produto['descricao']; ?></td>
                            <td>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></td>
                            
                            <td><?php echo $produto['nome_categoria']; ?></td>
                            
                            <td>
                                <?php 
                                    $data = date_create($produto['data']);
                                    echo date_format($data, "d/m/Y");
                                ?>
                            </td>
                            
                            <td>
                                <a href="produto_formulario.php?id=<?php echo $produto['id_produto']; ?>" class="btn btn-sm btn-secondary">Editar</a>
                                <a href="produto_deletar.php?id=<?php echo $produto['id_produto']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja deletar?');">Deletar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
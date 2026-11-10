<?php
session_start();
require_once "functions.php";

if (!isset($_SESSION['ativa']) || $_SESSION['nivel'] !== 'admin') {
    header("Location: index.php");
    exit();
}

// Escuta os envios do formulário (só uma delas vai rodar dependendo do botão clicado)
insertProduto($conexao);
updateProduto($conexao);

$categorias = buscarCategorias($conexao);

// Lógica de "Modo Edição" vs "Modo Cadastro"
$produto = null;
if (isset($_GET['id'])) {
    // Se tem ID na URL, estamos editando
    $produto = buscarProdutoPorId($conexao, $_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php echo $produto ? 'Editar Produto' : 'Cadastrar Produto'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2><?php echo $produto ? 'Editar Produto' : 'Cadastrar Novo Produto'; ?></h2>
                <hr>
                
                <form action="" method="POST">
                    
                    <!-- Campo Oculto para enviar o ID no caso de Edição -->
                    <?php if ($produto): ?>
                        <input type="hidden" name="id_produto" value="<?php echo $produto['id_produto']; ?>">
                    <?php endif; ?>
                    
                    <div class="mb-3">
                        <label class="form-label">Nome do Produto</label>
                        <input type="text" name="nome" class="form-control" required 
                               value="<?php echo $produto ? $produto['nome'] : ''; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descrição</label>
                        <textarea name="descricao" class="form-control" rows="3"><?php echo $produto ? $produto['descricao'] : ''; ?></textarea>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Preço (R$)</label>
                            <input type="text" name="preco" class="form-control" placeholder="00.00" required 
                                   value="<?php echo $produto ? $produto['preco'] : ''; ?>">
                        </div>
                        
                        <div class="col-md-6">
                            <label class="form-label">Categoria</label>
                            <select name="id_categoria" class="form-select" required>
                                <option value="">Selecione uma categoria...</option>
                                <?php foreach ($categorias as $cat): ?>
                                    <option value="<?php echo $cat['id_categoria']; ?>" 
                                        <?php echo ($produto && $produto['id_categoria'] == $cat['id_categoria']) ? 'selected' : ''; ?>>
                                        <?php echo $cat['nome']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <?php if ($produto): ?>
                        <button type="submit" name="atualizar_produto" class="btn btn-warning">Atualizar Produto</button>
                    <?php else: ?>
                        <button type="submit" name="cadastrar_produto" class="btn btn-success">Salvar Produto</button>
                    <?php endif; ?>
                    
                    <a href="admin.php" class="btn btn-secondary">Cancelar</a>
                </form>

            </div>
        </div>
    </div>
</body>
</html>
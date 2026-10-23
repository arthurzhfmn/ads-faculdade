<?php require_once "functions.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar Usuário</title>
</head>
<body>
	<?php 
		$id = $_GET['id'];
		$usuario = buscaId($conecta, $id); 
	?>
	<h1>Editando o usuário <?php echo $usuario['nome']; ?></h1>

	<form method="post">
		<input type="hidden" name="id" value="<?php echo $usuario['id']; ?>" required>
		<input type="text" name="nome" value="<?php echo $usuario['nome']; ?>" required>
		<input type="email" name="email" value="<?php echo $usuario['email']; ?>" required>
		<input type="password" name="senha" placeholder="*********">
		<input type="date" name="data" value="<?php echo $usuario['data']; ?>" required>
		
		<button name="atualizar">Atualizar</button>
	</form>
	<?php updateUser($conecta, $id); ?>
</body>
</html>
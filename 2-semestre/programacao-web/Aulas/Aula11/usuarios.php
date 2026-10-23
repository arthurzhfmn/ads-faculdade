<?php require_once "functions.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lista de usuários</title>
	<style type="text/css">
		table{
			border-collapse: collapse;
			font-size: 24px;
			margin-top: 25px;
		}
		thead{
			background: #333;
			color: #fff;
		}
		td, th{
			padding: 5px;
		}
		tr{
			border-bottom: solid 1px #333;
		}
	</style>
</head>
<body>
	<h1>Lista de Usuários</h1>
	<h2> <?php insertUser($conecta); ?> </h2>
	<form method="post">
		<input type="text" name="nome" required placeholder="Seu Nome">
		<input type="email" name="email" required placeholder="Seu E-mail">
		<input type="password" name="senha" required placeholder="Crie uma senha">
		<input type="submit" name="cadastrar" value="Cadastrar">
	</form>

	<table >
		<thead>
			<tr>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Data cadastro</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
	<?php $usuarios = buscar($conecta);		
		foreach ($usuarios as $usuario) : ?>
			<tr>
				<td><?php echo $usuario['nome']; ?></td>
				<td><?php echo $usuario['email']; ?></td>
				<td><?php 
						$data = date_create($usuario['data']);
						echo date_format($data, "d/m/Y");
					?>
				</td>
				<td>
					<a href="deletar.php?id=<?php echo $usuario['id'] ?>&nome=<?php echo $usuario['nome'] ?>">
						Excluir
					</a> - 
					<a href="editar.php?id=<?php echo $usuario['id'] ?>">
						Editar
					</a>

				</td>
			</tr>
	<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>
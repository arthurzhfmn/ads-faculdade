<?php require_once "functions.php"; ?> <!-- Inclui o arquivo functions.php neste arquivo -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuários</title>
    <style type="text/css">
        table{
            border-collapse: collapse;
            font-size: 24px;
        }
        thead{
            background: darkcyan;
        }
        td, th{
            padding: 5px;
        }

        input{
            display: block;
            margin: 25px;
            padding: 15px;
            font-size: 15px;
        }

    </style>
</head>
<body>
    <h1>Lista de usuários</h1>
    <h2> <?php insertUser($conecta) ?> </h2>
    <form method="post">
        <input type="text" name="nome" required placeholder="Digite seu nome">
        <input type="email" name="email" required placeholder="Digite seu email">
        <input type="password" name="senha" required placeholder="Crie sua senha">
        <input type="submit" name="cadastrar" value="cadastrar">
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Data Cadastro</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $usuarios = buscar($conecta);
                foreach ($usuarios as $usuario) : ?>
                    <tr>
                        <td><?php echo $usuario['nome']; ?></td>
                        <td><?php echo $usuario['email']; ?></td>
                        <td><?php
                                $data = date_create($usuario['data']);
                                echo date_format($data, "d/m/y")
                            ?>
                        </td>
                    </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
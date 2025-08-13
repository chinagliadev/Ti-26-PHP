<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Aula 02 - PHP</title>
</head>
<?php

$dsn = 'mysql:dbname=db_cadastro;host=127.0.0.1';
$usuario = 'root';
$senha = '';

$conexaoBanco = new PDO($dsn, $usuario, $senha);

$scriptConsulta = 'SELECT * FROM tb_usuario';

$resultadoConsulta = $conexaoBanco->query($scriptConsulta)->fetchAll();

?>


<body class="bg-light">
    <main class="conteudo-principal container d-flex justify-content-center align-items-center">
        <section class="formulario bg-white p-4">
            <h1 class="fs-2 text-center">Tabela de usuario</h1>
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-dark text-center">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Ações</th>
                        </tr>
                    <tbody class="text-center">
                        <?php foreach($resultadoConsulta as $linha){?>
                        <tr>
                            <th scope="row"><?= $linha['id']?></th>
                            <td><?= $linha['nome']?></td>
                            <td><?= $linha['telefone']?></td>
                            <td><?= $linha['usuario']?></td>
                            <td>
                                <button class="btn btn-primary btn-sm">Abrir</button>
                                <button class="btn btn-warning btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Excluir</button>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>

</html>
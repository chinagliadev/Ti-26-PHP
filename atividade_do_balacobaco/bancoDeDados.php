<?php

function conexaoBanco(): PDO
{
    $dsn = "mysql:dbname=db_gerenciador_sala;host=127.0.0.1";
    $usuario = "root";
    $senha = "";

    $conn = new PDO($dsn, $usuario, $senha);

    return $conn;
}

function inserirUsuario($nome, $email)
{
    $conn = conexaoBanco();
    $sql = "INSERT INTO pessoas (nome, email) VALUES (:nome, :email)";
    $conn->prepare($sql)->execute([
        ':nome' => $nome,
        ':email' => $email
    ]);
}

if (isset($_POST['txtNome']) && isset($_POST['txtEmail'])) {
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];

    if (!empty($nome) && !empty($email)) {
        inserirUsuario($nome, $email);
    }

    header("Location:bancoDeDados.php");
}

function listarUsuarios($tb_name = 'pessoas', $filtro=''): array
{
    $conn = conexaoBanco();

    if(!empty($filtro)){
        $sql = "SELECT * FROM $tb_name WHERE nome LIKE :filtro";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['
            :filtro' => "%$filtro%"
        ]);
        $dados = $stmt->fetchAll();
    }


    $scriptSQL = "SELECT * FROM $tb_name";

    $dados = $conn->query($scriptSQL)->fetchAll();

    return $dados;
}

$nomeBuscado = $_GET['txtPesquisar'];



$resultadoLista = listarUsuarios('pessoas', $nomeBuscado);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Dados Funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-light">
    <main class="container w-100 mt-5">
        <div class="row gap-4">
            <div class="col-12 d-flex justify-content-center">
                <div class="formulario bg-white shadow p-4 w-100" style="max-width: 500px;">
                    <h2 class="text-center mb-3">Inserir dados no banco</h2>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="txtNome" class="form-label">Nome da pessoa</label>
                            <input type="text" class="form-control" id="txtNome" name="txtNome" required>
                        </div>
                        <div class="mb-3">
                            <label for="txtEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="txtEmail" name="txtEmail" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Inserir</button>
                    </form>
                </div>
            </div>
            <div class="col-12 mb-4">

                <form action="" method="GET"></form>
                <div class="mb-3 d-flex gap-2">
                    <input type="text" class="form-control" name="txtPesquisar" id="txtPesquisar" placeholder="Buscar por nome ou email...">
                    <button type="submit" class="btn btn-primary btn-sm">Buscar</button>
                </div>

                <table class="table table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($resultadoLista as $linhas) { ?>
                            <tr>
                                <td><?= $linhas['nome'] ?></td>
                                <td><?= $linhas['email'] ?></td>
                                <td>
                                    <button class="btn btn-danger btn-sm">Excluir</button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</body>


</html>
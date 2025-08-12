<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Aula 02 - PHP</title>
</head>

<body class="bg-light">
    <?php
        $nomeFormulario = $_POST['txtNome'];
        $telefoneForm = $_POST['txtTelefone'];
        $usuarioForm = $_POST['txtUsuario'];
        $senhaForm = $_POST['txtSenha'];
        $senhaConfirmarForm = $_POST['txtConfirmarSenha'];

    ?>
    <main class="conteudo-principal container d-flex justify-content-center align-items-center">
        <section class="formulario d-flex flex-column justify-content-center bg-white p-4">
            <h1 class="fs-2 text-center mb-3">Impressão</h1>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <h3 class="fs-6 text-dark">Nome</h3>
                    <span class="text-dark-emphasis fs-5"><?= $nomeFormulario ?></span>
                </div>
                <div class="col-md-6">
                    <h3 class="fs-6 text-dark">Telefone</h3>
                    <span class="text-dark-emphasis fs-5"><?= $telefoneForm ?></span>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <h3 class="fs-6 text-dark">Usuário</h3>
                    <span class="text-dark-emphasis fs-5"><?= $usuarioForm ?></span>
                </div>
                <div class="col-md-6">
                    <h3 class="fs-6 text-dark">Senha</h3>
                    <span class="text-dark-emphasis fs-5"><?= $senhaForm ?></span>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <h3 class="fs-6 text-dark">Confirmar Senha</h3>
                    <span class="text-dark-emphasis fs-5"><?=$senhaConfirmarForm?></span>
                </div>
            </div>

            <div class="grouo-btn d-flex justify-content-end">
                <button class="btn btn-primary">Enviar</button>
            </div>
        </section>
    </main>
</body>

</html>
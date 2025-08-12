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
    <main class="conteudo-principal container d-flex justify-content-center align-items-center">
        <section class="formulario bg-white p-4">
            <h1 class="fs-2 text-center">Formulario</h1>
            <form action="./impressao.php" method="POST">
                <div class="mb-3">
                    <label for="txtNome" class="form-label">Nome</label>
                    <input name="txtNome" type="text" class="form-control" id="txtNome" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="txtTelefone" class="form-label">Telefone</label>
                    <input name="txtTelefone" type="numeber" class="form-control" id="txtTelefone" placeholder="(xx) xxxxx-xxxx">
                </div>
                <div class="mb-3">
                    <label for="txtUsuario" class="form-label">Usuario</label>
                    <input name="txtUsuario" type="text" class="form-control" id="txtUsuario" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="txtSenha" class="form-label">Senha</label>
                    <input name="txtSenha" type="password" class="form-control" id="txtSenha" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="txtConfirmarSenha" class="form-label">Confirmar Senha</label>
                    <input name="txtConfirmarSenha" type="password" class="form-control" id="txtConfirmarSenha" placeholder="">
                </div>
                <div class="group-button d-flex justify-content-end">
                    <button class="btn btn-primary" type="submit">Enviar</button>
                </div>
            </form>
        </section>
    </main>
</body>

</html>
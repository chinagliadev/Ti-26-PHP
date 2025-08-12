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
                        <tr>
                            <th scope="row">1</th>
                            <td>Victor</td>
                            <td>199983455</td>
                            <td>_victor</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Abrir</button>
                                <button class="btn btn-warning btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Excluir</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Ana Silva</td>
                            <td>11987654321</td>
                            <td>ana_silva</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Abrir</button>
                                <button class="btn btn-warning btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Excluir</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Lucas Souza</td>
                            <td>21999887766</td>
                            <td>lucas_s</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Abrir</button>
                                <button class="btn btn-warning btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Excluir</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Mariana Costa</td>
                            <td>31999112233</td>
                            <td>maricosta</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Abrir</button>
                                <button class="btn btn-warning btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Excluir</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Carlos Mendes</td>
                            <td>41998765432</td>
                            <td>cmendes</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Abrir</button>
                                <button class="btn btn-warning btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Excluir</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Beatriz Lima</td>
                            <td>51991234567</td>
                            <td>bia_lima</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Abrir</button>
                                <button class="btn btn-warning btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Excluir</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>

</html>
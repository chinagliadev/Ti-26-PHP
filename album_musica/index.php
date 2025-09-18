<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album de musicas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-light">

    <header class="bg-white">
        <h1 class="text-center fw-bold p-2">Album de musicas</h1>
    </header>

    <main class="container d-flex justify-content-center w-100">
        <section class="bg-white w-100 p-3" style="max-width: 500px;">
            <form action="./upload.php">
                <div class="mb-2">
                    <label for="txtAlbum" class="label-control">Nome do albumn</label>
                    <input type="text" id="txtAlbum" name="txtAlbum" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="txtMusica" class="label-control">Nome da musica</label>
                    <input type="text" id="txtMusica" name="txtMusica" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="txtArquivoMusica" class="label-control">Arquivo musica</label>
                    <input type="file" id="txtArquivo" name="txtArquivo" accept="audio/*" class="form-control">
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-success w-100">Cadastrar musica</button>
                </div>
            </form>
        </section>
    </main>

</body>

</html>
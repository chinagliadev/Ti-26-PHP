<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "db_album";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha ao conectar com o banco de dados");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_FILES["txtArquivo"]) && $_FILES["txtArquivo"]["erro"] == 0) {

        $nome_albumn = $conexao->real_escape_string($_POST['txtAlbum']);
        $nome_musica = $conexao->real_escape_string($_POST['txtMusica']);
        $arquivo_tmp = $_FILES['txtArquivo']['tmp_name'];
        $nome_original = $_FILES['txtArquivo']['name'];

        $extensao = pathinfo($nome_original, PATHINFO_EXTENSION);

        $novo_nome = uniqid() . "." . $extensao;

        $caminho_upload = './uploads' . $novo_nome;

        if (move_uploaded_file($arquivo_tmp, $caminho_upload)) {
            $sql = "INSERT INTO fotos (nome_albumn, nome_musica, localizacao)
            VALUES ('$nome_albumn', '$nome_musica', '$caminho_upload', '$arquivo_tmp')";

            if($conexao->query($sql) == TRUE){
                echo "<h1>Musica no album {$nome_albumn} cadastrada com sucesso !</h1>";
                echo "<p>Nome da musica :{$nome_musica}</p>";
                echo "<p>Nome do arquivo :{$novo_nome}</p>";
            }else{
                echo "erro ao salvar foto";
            }
        }
    } else {
        echo "nenhum arquivo encontrado";
    }
}

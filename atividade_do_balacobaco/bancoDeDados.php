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
    $dados = $conn->prepare($sql)->execute([
        ':nome' => $nome,
        ':email' => $email
    ]);

    if($dados){
        echo "<h1>Dados inseridos com sucesso !</h1>";
    }else{
        echo "<h1>Dados não inseridos !</h1>";
    }

}

// var_dump(inserirUsuario('Paulo', 'victor@email.com'));


function listarUsuarios($tb_name = 'pessoas'): array
{
    $conn = conexaoBanco();

    $scriptSQL = "SELECT * FROM $tb_name";

    $dados = $conn->query($scriptSQL)->fetchAll();

    return $dados;
}

$resultadoLista = listarUsuarios();
// var_dump($resultadoLista);

function pesquisar($id = 0, $tb_name='pessoas') : array{
    $conn = conexaoBanco();
    $scriptSQL = "SELECT * FROM $tb_name WHERE id = $id";

    $dados = $conn->query($scriptSQL)->fetchAll();
    return $dados;
}

var_dump(pesquisar(6));

function deletarUsuario($id, $tb_name = 'pessoas'): bool {
    $conn = conexaoBanco();
    $script = "DELETE FROM $tb_name WHERE id = :id";
    $ok = $conn->prepare($script)->execute([":id" => $id]);

    return $ok;
}

// Exemplo
if (deletarUsuario(10)) {
    echo "<h1>Usuário excluído com sucesso</h1>";
} else {
    echo "<h1>Erro ao excluir usuário</h1>";
}

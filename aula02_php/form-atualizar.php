<?php
echo '<h2>Form atualizar</h2>';
$id = $_POST['txtId'];
$nome = $_POST['txtNome'];
$telefone = $_POST['txtTelefone'];
$usuario = $_POST['txtUsuario'];
$senha = $_POST['txtSenha'];
$confirmarSenha = $_POST['txtConfirmarSenha'];

if ($senha != $confirmarSenha) {
    header("location:index.php?erro=sim&formAtualizar=sim&id=$id");
} else {

    $dsn = 'mysql:dbname=db_cadastro;host=127.0.0.1';
    $usuario = 'root';
    $senha = '';

    $conn = new PDO($dsn, $usuario, $senha);

    $scriptUpdate = "UPDATE tb_cadastro 
    SET nome = :nome, 
        telefone = :telefone, 
        usuario = :usuario,
        senha = :senha
    WHERE id = $id";

    $dadosUpdate = $conn->prepare($scriptUpdate);

    $dadosUpdate->execute([
        ":nome" => $nome,
        ":telefone" => $telefone,
        ":usuario" => $usuario,
        ":senha" => $senha
    ]);

    header('location:tabela.php');
}

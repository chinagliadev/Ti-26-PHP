<?php
echo '<h1>form-delete.php</h1>';

$id = $_GET['idDelete'];

$dsn = 'mysql:dbname=db_cadastro;host=127.0.0.1';
$usuario = 'root';
$senha = '';

$conn = new PDO($dsn, $usuario, $senha);

$scriptDelete = 'DELETE FROM tb_cadastro WHERE id = :id';
$scriptPreparado = $conn->prepare($scriptDelete);

$scriptPreparado->execute([
    ':id' => $id
]);

if($scriptPreparado->rowCount() > 0){
    echo '<h2>Registro apagado com sucesso !</h2>';
    header('location:tabela.php');
}else{
    echo '<h2>Algo deu errado entre em contato com o @vitinho!</h2>';
}
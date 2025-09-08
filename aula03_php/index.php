<!-- Funções em PHP -->
<?php
require './config.php';

echo "<h1>AULA03.INDEX.PHP</h1>";

function calcularNumero($num1, $num2)
{
    $resultado = $num1 + $num2;
    echo "A soma de {$num1} + {$num1} = {$resultado}";
}

calcularNumero(10, 20);

function consultarTabelas($tabela = 'tb_turma', $conn2) : string //Deixar o parametro como default 
{
    if (empty($conn2) || $conn2 == "") {
        echo "Irmao passa a conexao do banco ai";
        return false;
    }

    $script = 'SELECT * FROM ' . $tabela;

    $resultado = $conn2->query($script)->fetch();

    echo "<pre>";
    var_dump($resultado);

    return 'banco consultado com sucesso !';
}

function conexao()
{
    $dsn = 'mysql:dbname=db_gerenciador_sala;host=127.0.0.1';
    $usuario = 'root';
    $senha = '';

    return new PDO($dsn, $usuario, $senha);
}

$conn = conexao();

consultarTabelas('tb_docente', conexao());
consultarTabelas('tb_reserva_sala', conexao());
consultarTabelas('tb_sala', conexao());

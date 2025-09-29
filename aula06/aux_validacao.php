<?php

echo "<h1>AUX_VALIDACAO.PHP</h1>";

function fnValidarNomeCompleto(string $nome): bool
{

    if(!ctype_space($nome)){
        echo "<h2>Nome não esta completo</h2>";
        return false;
    }

    $validando_caracteres = '/[^a-zA-Z0-9]+/';

    //validando se NÃO é uma string
    if (!is_string($nome)) {
        echo 'não é string';
        return false;
    }

    //se é numerico
    if (is_numeric($nome)) {
        echo 'ele é um numero';
    }

    //se ele tem digito e letra
    if (ctype_digit($nome)) {
        echo 'ele tem numeros aqui tbm';
    }

    if (preg_match($validando_caracteres, $nome)) {
        echo "<h2>Nome possui caracter especial !</h2>";
    } else {
        echo "<h2>Nome não possui caracter especial !</h2>";
    }

    return true;
}

function fnValidarIdade($idade): bool
{
    // Verifica se é numérico
    if (!is_numeric($idade)) {
        echo "<h2>Idade não é um número</h2>";
        return false;
    }

    // Converte para inteiro
    $idade = (int) $idade;

    // Verifica se é negativo
    if ($idade < 0) {
        echo "<h2>Idade menor que 0</h2>";
        return false;
    }

    // Verifica se é menor de 18
    if ($idade < 18) {
        echo "<h2>Não é permitido tirar carta</h2>";
        return false;
    }

    return true;
}

function fnValidarDataNascimento($data): bool
{
    $dataNascimento = new DateTime($data, new DateTimeZone('America/Sao_Paulo'));
    $agora = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));

    echo "<pre>";
    echo "Data atual: " . $agora->format('Y-m-d') . "\n";
    echo "Data nascimento: " . $dataNascimento->format('Y-m-d') . "\n";

    if ($dataNascimento > $agora) {
        echo "<h3>Data de Nascimento Inválida: Não é permitido cadastrar datas posteriores à data atual</h3>";
        return false;
    }

    echo "<h1>Data de nascimento válida</h1>";
    return true;
}

//??validando se o arquivo foi chamado atraves do method post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    var_dump($_POST);

    /** Validar se é um nome
     * ?? Não pode contar caracter especial.
     * ?? Não pode estar vazio
     * ?? Não pode ser numero
     * ?? 
     */

    fnValidarDataNascimento($_POST['data_nasc']);
    fnValidarNomeCompleto($_POST['nome']);
    fnValidarIdade($_POST['idade']);
}
//*Impedir que pessoas abram o arquivo diretamente sem passar pelo dos method GET e POST */
if ($_SERVER['REQUEST_METHOD'] != 'POST' && empty($_GET)) {
    header('location:./');
}

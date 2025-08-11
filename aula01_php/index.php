<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-body-tertiary">
    <header class="container">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid d-flex justify-content-center align-items-center">
                <div class="navbar-brand d-flex align-items-center">
                    <img src="./logo-php.png" alt="Logo" width="100" height="100" class="d-inline-block align-text-top me-2">
                    <p class="fs-2">Aula 01 de PHP</p>
                </div>
            </div>
        </nav>
    </header>

    <section class="container d-flex flex-column gap-4">
        <div class="exercicio">
            <h2>Exercicio 1</h2>
            <p class="fs-4">Escreva um programa que verifique se um número fornecido pelo usuário é positivo, negativo ou zero.</p>

            <?php
            $numero = 0;

            if ($numero > 0) {
                echo "<p class='fs-5'><strong>Resposta: </strong>Número {$numero} positivo!</p>";
            } else if ($numero < 0) {
                echo "<p class='fs-5'><strong>Resposta: </strong>Número {$numero} negativo!</p>";
            } else {
                echo "<p class='fs-5'><strong>Resposta: </strong>Número {$numero} igual a zero!</p>";
            }

            ?>
        </div>

        <div class="exercicio">
            <h2>Exercicio 2</h2>
            <p class="fs-4">Crie um programa que leia a idade de uma pessoa e informe se ela é maior de idade (18 anos ou mais) ou menor de idade.</p>

            <?php
            $idade = 5;

            if ($idade >= 18) {
                echo "<p class='fs-5'><strong>Resposta: </strong>Maior de idade ({$idade} anos)</p>";
            } else {
                echo "<p class='fs-5'><strong>Resposta: </strong>Menor de idade ({$idade} anos)</p>";
            }
            ?>

        </div>

        <div class="exercicio">
            <h2>Exercicio 3</h2>
            <p class="fs-4">Escreva um programa que verifique se um número fornecido pelo usuário é par ou ímpar.</p>

            <?php
            $numero = 7;

            if ($numero % 2 == 0) {
                echo "<p class='fs-5'><strong>Resposta: </strong>Numero {$numero} é par!</p>";
            } else {
                echo "<p class='fs-5'><strong>Resposta: </strong>Numero {$numero} é impar!</p>";
            }
            ?>
        </div>

        <div class="exercicio">
            <h2>Exercicio 4</h2>
            <p class="fs-4">Imprima os números de 1 a 10 utilizando um laço de repetição.</p>

            <ul class="list-unstyled">
                <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<li>{$i}</li>";
                }
                ?>
            </ul>

        </div>

        <div class="exercicio">
            <h2>Exercicio 5</h2>
            <p class="fs-4">Imprima todos os números pares de 1 a 20 utilizando um laço de repetição.</p>

            <ul class="list-unstyled">
                <?php
                for ($i = 0; $i <= 20; $i++) {
                    if ($i % 2 == 0) {
                        echo "<li>{$i}</li>";
                    }
                }
                ?>
            </ul>

        </div>

        <div class="exercicio">
            <h2>Exercicio 6</h2>
            <p class="fs-4">Calcule a soma de todos os números de 1 a 100 utilizando um laço de repetição. (5050)</p>

            <?php
            $soma = 0;

            for ($i = 0; $i <= 100; $i++) {
                $soma = $i + $soma;
            }

            echo "<p class='fs-5'><strong>Resposta: </strong>Soma {$soma}</p>";
            ?>
        </div>

        <div class="exercicio">
            <h2>Exercicio 7</h2>
            <p class="fs-4">Escreva um programa que verifique se uma letra fornecida pelo usuário é uma vogal ou uma consoante.</p>

            <?php

            $letra = "z";
            $vogais = ["a", "e", "i", "o", "u"];

            if (in_array("{$letra}", $vogais)) {
                echo "<p class='fs-5'><strong>Resposta: </strong>Vogal, {$letra}</p>";
            } else {
                echo "<p class='fs-5'><strong>Resposta: </strong>Consoante, {$letra}</p>";
            }
            ?>
        </div>

        <div class="exercicio">
            <h2>Exercicio 8</h2>
            <p class="fs-4">Escreva um programa que leia um mês do ano e informe quantos dias ele tem.</p>

            <?php
            $mes = 6;

            $meses = [
                ["Janeiro", 31],
                ["Fevereiro", 28],
                ["Março", 31],
                ["Abril", 30],
                ["Maio", 31],
                ["Junho", 30],
                ["Julho", 31],
                ["Agosto", 31],
                ["Setembro", 30],
                ["Outubro", 31],
                ["Novembro", 30],
                ["Dezembro", 31]
            ];

            $indice = $mes - 1;

            $nomeMes = $meses[$indice][0];
            $dias = $meses[$indice][1];

            echo "<p class='fs-4'>O mês de {$nomeMes} tem {$dias} dias.</p>";

            ?>

        </div>

        <div class="exercicio">
            <h2>Exercicio 9</h2>
            <p class="fs-4">
                Escreva um programa que leia o salário de um funcionário e aplique um aumento de acordo com a seguinte regra:
                salários menores que R$1000 recebem 20% de aumento, entre R$1000 e R$2000 recebem 15%, e acima de R$2000 recebem 10%.
            </p>

            <?php
            $salario = 1000;
            $aumento = 0;
            $salarioComAumento = 0;

            if ($salario < 1000) {
                $aumento = $salario * 0.20;
                $salarioComAumento = $salario + $aumento;
                echo "<p class='fs-4'>Salário inicial: {$salario}. Aumento aplicado: 20% ({$aumento}). Novo salário: {$salarioComAumento}.</p>";
            } else if ($salario >= 1000 && $salario < 2000) {
                $aumento = $salario * 0.15;
                $salarioComAumento = $salario + $aumento;
                echo "<p class='fs-4'>Salário inicial: {$salario}. Aumento aplicado: 15% ({$aumento}). Novo salário: {$salarioComAumento}.</p>";
            } else {
                $aumento = $salario * 0.10;
                $salarioComAumento = $salario + $aumento;
                echo "<p class='fs-4'>Salário inicial: {$salario}. Aumento aplicado: 10% ({$aumento}). Novo salário: {$salarioComAumento}.</p>";
            }
            ?>
        </div>

        <div class="exercicio">
            <h2>Exercicio 11</h2>
            <p class="fs-4">
                Imprima os primeiros 10 números da sequência de Fibonacci utilizando um laço de repetição.
            </p>

            <?php
            $numA = 1;
            $numB = 0;
            $i = 0;
            $qtdTermos = 10;

            while ($i < $qtdTermos) {
                echo $numA . " ";
                $num = $numA + $numB;
                $numB = $numA;
                $numA = $num;
                $i++;
            }
            ?>
        </div>

        <div class="exercicio">
            <h2>Exercicio 12</h2>
            <p class="fs-4">
                Inverter uma String, implemente um programa que inverte uma String fornecida pelo usuário utilizando um laço de repetição.
            </p>

            <?php
            $string = "Victor";
            $tamanho = strlen($string);
            $invertida = "";

            for ($i = $tamanho - 1; $i >= 0; $i--) {
                $invertida .= $string[$i];
            }

            echo "<p class='fs-4'><strong>String: </strong>{$string}</p>";
            echo "<p class='fs-4'><strong>String invertida: </strong>{$invertida}</p>";

            ?>
        </div>
    </section>
</body>

</html>
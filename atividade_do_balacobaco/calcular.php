<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercícios PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">

        <h1 class="mb-4">Calcular com PHP</h1>

        <div class="card mb-3">
            <div class="card-header bg-dark text-white"><strong>Somar</strong></div>
            <div class="card-body">
                <?php
                function somar($numero1, $numero2)
                {
                    $resultado = $numero1 + $numero2;
                    echo "{$numero1} + {$numero2} = {$resultado}";
                }
                somar(25, 25);
                ?>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header bg-dark text-white"><strong>Par ou Ímpar</strong></div>
            <div class="card-body">
                <?php
                function parOuImpar($numero): string
                {
                    return ($numero % 2 == 0) ? 'Par' : 'Ímpar';
                }
                $numero = 2;
                echo "Número {$numero}: " . parOuImpar($numero);
                ?>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header bg-dark text-white"><strong>Maior Número</strong></div>
            <div class="card-body">
                <?php
                function maiorNumero($numero1, $numero2, $numero3): int
                {
                    return max($numero1, $numero2, $numero3);
                }
                echo "Maior número: " . maiorNumero(4, 2, 1);
                ?>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header bg-dark text-white"><strong>Média</strong></div>
            <div class="card-body">
                <?php
                function calcularMedia(array $numeros)
                {
                    $soma = array_sum($numeros);
                    $quantNumeros = count($numeros);
                    $media = $soma / $quantNumeros;
                    echo "Média: " . number_format($media, 2, ',', '.');
                }

                $numeros = [5, 5, 5, 5, 5];
                calcularMedia($numeros);
                ?>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header bg-dark text-white"><strong>Tabuada</strong></div>
            <div class="card-body">
                <?php
                function tabuada($numero)
                {
                    for ($i = 0; $i <= 10; $i++) {
                        $resultado = $i * $numero;
                        echo "{$numero} x {$i} = {$resultado}<br>";
                    }
                }

                tabuada(8);
                ?>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header bg-dark text-white"><strong>Cotação de Moeda</strong></div>
            <div class="card-body">
                <?php
                const DOLAR = 5.90;

                function converterDolar($reais)
                {
                    $resultadoDolar = $reais / DOLAR;
                    return number_format($resultadoDolar, 2, ',', '.');
                }

                $valorEmReais = 100; // você pode mudar esse valor
                echo "R$ {$valorEmReais} equivalem a US$ " . converterDolar($valorEmReais);
                ?>
            </div>
        </div>

    </div>

</body>

</html>

<?php
//17. Escreva uma função que receba, o nome de um funcionario e o valor de seu salario e aplique um aumento de acordo com a seguinte regra: salários menores que R$1000 recebem 20% de aumento, entre R$1000 e R$2000 recebem 15%, e acima de R$2000 recebem 10%.

function aumentoFuncionario($nome, $salario){
    $aumento = 0;
    $salarioComAumento = 0;
    if($salario < 1000){
        $aumento = $salario * 0.20;
        $salarioComAumento = $aumento + $salario;
    }else if($salario > 1000 && $salario < 2000){
        $aumento = $salario * 0.15;
        $salarioComAumento = $aumento + $salario;
    }else if($salario > 2000){
         $aumento = $salario * 0.10;
        $salarioComAumento = $aumento + $salario;
    }

    echo "funcionario: ". $nome ."\nsalario ". $salarioComAumento;
}
aumentoFuncionario('Victor', 1900);


// 18. Crie uma função que verifique se uma letra é vogal ou consoante.
function vogal ($letra = ""){
    $letraMinuscula = strtolower($letra);
 
    if($letraMinuscula == "a" || $letraMinuscula == "e" || $letraMinuscula == "i" || $letraMinuscula == "o" || $letraMinuscula == "u"){
        $texto = "A letra escolhida é uma vogal";
    }else{
        $texto = "A letra escolhida é uma consoante";
    }
 
    echo $texto;
}


// 19. Crie uma função que receba um array de números e retorne um novo array contendo apenas os números pares.

function paresArray($array=[]){

    $arrayPares = [];

    foreach($array as $linhas){
        if($linhas % 2 == 0){
            $arrayPares[] = $linhas;
        }
    }

    var_dump($arrayPares);
}
paresArray([1,66, 4,633,77456,234,14345]);

// 20. Crie uma função que receba um array de números e retorne o segundo maior número do array.

function segundoMaiorNumero($array = []) {
    sort($array); 
    $penultimoElemento = $array[count($array) - 2];
    echo $penultimoElemento;
}


segundoMaiorNumero([1, 55, 23, 1234, 5, 99,32]);

// 21. Crie uma função que receba um array de strings e retorne um novo array contendo apenas as strings que começam com uma vogal.

function stringVogais($array=[]){
    $arrayPalavras = [];

    foreach($array as $palavra){

        if(str_starts_with($palavra, 'a') || str_starts_with($palavra, 'e') || str_starts_with($palavra, 'i') || str_starts_with($palavra, 'o') || str_starts_with($palavra, 'u')){
            $arrayPalavras[] = $palavra;
        }

    }

    var_dump($arrayPalavras);

}

stringVogais(['abacaxi', 'uva', 'rua', 'uretra']);


// 22. Faça uma função que retorne o cubo de um número.
function numeroAoCubo($numero){
    
    $cubo = $numero**3;
    echo $cubo;
}
numeroAoCubo(3);


// 23. Faça uma função que retorne a raiz quadrada de um número.
function raizQuadrada($numero){
    $valor = sqrt($numero);
    echo $valor;
}

raizQuadrada(9);

?>
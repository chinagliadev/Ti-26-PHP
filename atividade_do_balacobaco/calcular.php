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
            function somar($numero1, $numero2){
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
            function parOuImpar($numero): string {
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
            function maiorNumero($numero1, $numero2, $numero3): int {
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
            function calcularMedia(array $numeros){
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
            function tabuada($numero){
                for($i = 0; $i <= 10; $i++){
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

            function converterDolar($reais){
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

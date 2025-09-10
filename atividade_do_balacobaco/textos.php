<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Funções PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-5">Textos em PHP</h1>

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                Inverter String
            </div>
            <div class="card-body">
                <?php
                function inverterString($palavra): string
                {
                    return strrev($palavra);
                }

                $palavra = "victor chinaglia";
                $palavraInvertida = inverterString($palavra);
                ?>
                <p><strong>Original:</strong> <?= $palavra ?></p>
                <p><strong>Invertida:</strong> <?= $palavraInvertida ?></p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                Contar Vogais
            </div>
            <div class="card-body">
                <?php
                function contarVogais($texto): int
                {
                    $quantVogais = 0;
                    $texto = strtolower($texto);
                    $vogais = ['a', 'e', 'i', 'o', 'u'];

                    for ($i = 0; $i < strlen($texto); $i++) {
                        if (in_array($texto[$i], $vogais)) {
                            $quantVogais++;
                        }
                    }

                    return $quantVogais;
                }

                $palavraVogais = "Balacobaco";
                $vogais = contarVogais($palavraVogais);
                ?>
                <p><strong>Palavra:</strong> <?= $palavraVogais ?></p>
                <p><strong>Quantidade de vogais:</strong> <?= $vogais ?></p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-dark text-white">
                Gerador de Senha
            </div>
            <div class="card-body">
                <?php
                function geradorSenha($tamanhoSenha): string
                {
                    $caracteres = 'abcdefghijklmnopqrstuvwxyz0123456789';
                    return substr(str_shuffle($caracteres), 0, $tamanhoSenha);
                }

                $senha = geradorSenha(10);
                ?>
                <p><strong>Senha gerada: </strong> <?= $senha ?></p>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header bg-warning text-white">
                Gerador de Senha
            </div>
            <div class="card-body">
                <?php
                function formatarCpf($cpf): string
                {
                    return preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "\$1.\$2.\$3-\$4", $cpf);
                }

                $cpf = 34509998889; //cpf sem formatar

                $cpf = formatarCpf($cpf);
                ?>
                <p><strong>CPF Formatado: </strong> <?= $cpf ?></p>
            </div>
        </div>
    </div>

</body>

</html>
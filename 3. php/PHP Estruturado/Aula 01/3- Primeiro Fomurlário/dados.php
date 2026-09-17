<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f5f2;
            color: #4a4a4a;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .resultado-box {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            width: 320px;
            text-align: center;
        }

        .imc-valor {
            font-size: 24px;
            font-weight: bold;
            margin: 10px 0;
            display: block;
        }

        /* RESULTADOS */
        .abaixo-peso {
            color: #d97706;
        }

        .peso-normal {
            color: #059669;
        }

        .acima-peso {
            color: #dc2626;
        }

        .obesidade {
            color: #991b1b;
        }

        .mensagem-status {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        .voltar {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #004d00;
            font-size: 14px;
        }

        .voltar:hover {
            color: #00b300;
        }
    </style>
</head>
<body>

    <div class="resultado-box">

        <?php

            //$nome = $_GET['nome'];
            //$peso = $_GET['peso'];
            //$altura = $_GET['altura'];

            $nome = $_POST['nome'];
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];

            if ($altura > 0) {
                $imc = $peso / ($altura * $altura);
                $imc = round($imc, 2);
            } else {
                $imc = 0;
            }

            echo "Olá, <strong>{$nome}</strong>!<br>";
            echo "Seu IMC é de: <span class='imc-valor'>{$imc}</span>";

            if ($imc < 18.5) {
                $classe = 'abaixo-peso';
                $mensagem = 'Você está abaixo do peso!';
            } else if ($imc >= 18.5 && $imc < 25) {
                $classe = 'peso-normal';
                $mensagem = 'Você está com peso normal!';
            } else if ($imc >= 25 && $imc < 30) {
                $classe = 'acima-peso';
                $mensagem = 'Você está acima do peso!';
            } else {
                $classe = 'obesidade';
                $mensagem = 'Você está em um quadro de Obesidade!';
            }

            // MENSAGEM DE FEEDBACK
            echo "<span class='mensagem-status {$classe}'>{$mensagem}</span>";
        ?>

        <br>

        <a href="index.php" class="voltar">Voltar</a>
        
    </div>

</body>
</html>
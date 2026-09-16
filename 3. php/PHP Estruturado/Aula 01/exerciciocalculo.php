<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do triangulo com PHP</title>
</head>
<body>

    <?php
    /*
    $base = $_GET['base'];
    $altura = $_GET['altura'];
    
    $area = ($base * $altura) / 2;
    
    echo "A base do triângulo é: " . $base . "<br>";
    echo "A altura do triângulo é: " . $altura . "<br>";
    echo "A área do triângulo é: " . $area;
    */
    $valorOriginal = $_GET['a'];

    $acrescimo = $valorOriginal * 0.10;
    $valorFinal = $valorOriginal + $acrescimo;

    echo "Valor original é de R$ {$valorOriginal}.";
    echo '<br>';
    echo "O valor dos 10% é de R$ {$acrescimo}.";
    echo '<br>';
    echo "O valor final ficou R$ {$valorFinal}.";
    ?>
    
</body>
</html>
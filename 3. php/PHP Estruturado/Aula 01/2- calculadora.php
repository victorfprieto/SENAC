<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora com PHP</title>
</head>
<body>

    <?php 

    $peso = $_GET['peso'];
    $altura = $_GET['altura'];
    $imc = $peso / ($altura * $altura);

    if ($imc < 18.5) {
        echo 'Você está abaixo do peso!';
    } else if ($imc == 18.5 || $imc < 24.9) {
        echo 'Você está com peso normal!';
    } else if ($imc == 25 || $imc < 29.9) {
        echo 'Você está acima do peso!';
    } else {
        echo 'Você está em um quadro de Obesidade!';
    }

    ?>
    
</body>
</html>
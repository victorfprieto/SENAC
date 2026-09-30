<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pares Consecutivos</title>
</head>
<body>
 
    <h1>Problema "pares_consecutivos":</h1>
 
    <?php
    $numeros = [];
 
    if (isset($_POST['num'])) {
        $numeros = $_POST['num'];
    }
 
    $terminou = false;
    $idx = 0;
 
    echo '<form method="post">';
 
    while ($idx < count($numeros)) {
        $x = $numeros[$idx];
        echo 'Digite um numero inteiro: ';
        echo '<input type="number" name="num[]" value="' . $x . '" readonly><br>';
 
        if ($x == 0) {
            $terminou = true;
        } else {
            // Se for ímpar, pega o próximo par
            if ($x % 2 != 0) {
                $x = $x + 1;
            }
 
            $soma = $x + ($x + 2) + ($x + 4) + ($x + 6) + ($x + 8);
            echo 'SOMA = ' . $soma . '<br>';
        }
 
        $idx++;
    }
 
    if ($terminou == false) {
        echo 'Digite um numero inteiro: ';
        echo '<input type="number" name="num[]" required autofocus> ';
        echo '<input type="submit" value="Enviar">';
        echo '</form>';
    } else {
        echo '</form><br>';
        echo '<form method="post">';
        echo '<input type="submit" value="Reiniciar">';
        echo '</form>';
    }
    ?>
 
</body>
</html>
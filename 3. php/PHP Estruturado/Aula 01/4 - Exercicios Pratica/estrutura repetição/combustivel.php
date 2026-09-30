<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Combustível</title>
</head>
<body>
 
    <h1>Problema "combustivel":</h1>
 
    <?php
    $codigos = [];
 
    if (isset($_POST['codigo'])) {
        $codigos = $_POST['codigo'];
    }
 
    $alcool = 0;
    $gasolina = 0;
    $diesel = 0;
    $terminou = false;
    $idx = 0;
 
    echo '<form method="post">';
 
    while ($idx < count($codigos)) {
        $cod = $codigos[$idx];
        echo 'Informe um codigo (1- Alcool, 2- Gasolina, 3- Diesel) ou 4 para parar: ';
        echo '<input type="number" name="codigo[]" value="' . $cod . '" readonly><br>';
 
        if ($cod == 1) {
            $alcool++;
        } else if ($cod == 2) {
            $gasolina++;
        } else if ($cod == 3) {
            $diesel++;
        } else if ($cod == 4) {
            $terminou = true;
        }
 
        $idx++;
    }
 
    if ($terminou == false) {
        echo 'Informe um codigo (1- Alcool, 2- Gasolina, 3- Diesel) ou 4 para parar: ';
        echo '<input type="number" name="codigo[]" required autofocus> ';
        echo '<input type="submit" value="Enviar">';
        echo '</form>';
    } else {
        echo '</form><br>';
        echo 'MUITO OBRIGADO<br>';
        echo 'Alcool: ' . $alcool . '<br>';
        echo 'Gasolina: ' . $gasolina . '<br>';
        echo 'Diesel: ' . $diesel . '<br><br>';
 
        echo '<form method="post">';
        echo '<input type="submit" value="Reiniciar">';
        echo '</form>';
    }
    ?>
 
</body>
</html>
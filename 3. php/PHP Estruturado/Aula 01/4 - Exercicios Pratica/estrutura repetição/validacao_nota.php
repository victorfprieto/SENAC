<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Validação de Nota</title>
</head>
<body>
 
    <h1>Problema "validacao_de_nota":</h1>
 
    <?php
    $notas = [];
 
    if (isset($_POST['nota'])) {
        $notas = $_POST['nota'];
    }
 
    $notasValidas = [];
    $idx = 0;
 
    echo '<form method="post">';
 
    while ($idx < count($notas)) {
        $val = $notas[$idx];
 
        if (count($notasValidas) == 0) {
            echo 'Digite a primeira nota: ';
        } else {
            echo 'Digite a segunda nota: ';
        }
 
        echo '<input type="text" name="nota[]" value="' . $val . '" readonly><br>';
 
        if ($val >= 0 && $val <= 10) {
            $notasValidas[] = $val;
        } else {
            echo 'Valor invalido! Tente novamente:<br>';
        }
 
        $idx++;
    }
 
    if (count($notasValidas) < 2) {
        if (count($notasValidas) == 0) {
            echo 'Digite a primeira nota: ';
        } else {
            echo 'Digite a segunda nota: ';
        }
 
        echo '<input type="text" name="nota[]" required autofocus> ';
        echo '<input type="submit" value="Enviar">';
        echo '</form>';
    } else {
        echo '</form><br>';
        $media = ($notasValidas[0] + $notasValidas[1]) / 2;
        echo 'MEDIA = ' . number_format($media, 2, '.', '') . '<br><br>';
 
        echo '<form method="post">';
        echo '<input type="submit" value="Reiniciar">';
        echo '</form>';
    }
    ?>
 
</body>
</html>
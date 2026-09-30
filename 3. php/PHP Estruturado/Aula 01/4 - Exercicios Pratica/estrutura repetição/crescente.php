<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crescente</title>
</head>
<body>

    <h1>Problema "crescente":</h1>

        <?php
        
        $xs = [];
        $ys = [];
 
        // VALORES DO FORM
        if (isset($_POST['x'])) {
            $xs = $_POST['x'];
            $ys = $_POST['y'];
        }
 
        $texto = 'Digite dois numeros:';
        $terminou = false;
        $idx = 0;
 
        echo '<form method="post">';
 
        // PAR + RESULTADO
        while ($idx < count($xs)) {
            echo $texto . '</br>';
            echo 'X: <input type="number" name="x[]" value="' . $xs[$idx] . '" readonly> ';
            echo 'Y: <input type="number" name="y[]" value="' . $ys[$idx] . '" readonly></br>';
 
            if ($xs[$idx] == $ys[$idx]) {
                $terminou = true;
            } else if ($xs[$idx] < $ys[$idx]) {
                echo 'CRESCENTE!</br>';
            } else {
                echo 'DECRESCENTE!</br>';
            }
 
            $texto = 'Digite outros dois numeros:';
            $idx++;
        }

        if ($terminou == false) {
            echo $texto . '</br>';
            echo 'X: <input type="number" name="x[]" required autofocus> ';
            echo 'Y: <input type="number" name="y[]" required> ';
            echo '<input type="submit" value="Enviar">';
            echo '</form>';
        } else {
            echo '</form>';
            echo '</br>Fim: foram digitados dois valores iguais.</br></br>';
 
            // RESET
            echo '<form method="post">';
            echo '<input type="submit" value="Reiniciar">';
            echo '</form>';
        }
    ?>


    
</body>
</html>
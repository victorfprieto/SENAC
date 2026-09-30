<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Idade</title>
</head>
<body>

    <h1>Problema "media_idade":</h1>

    <?php
        
        $idades = [];
 
        if (isset($_POST['idade']))
        {
            $idades = $_POST['idade'];
        }
 
        $soma = 0;
        $quantidade = 0;
        $terminou = false;
        $idx = 0;
 
        if (isset($_POST['acao']) and $_POST['acao'] == 'Calcular')
        {
            $terminou = true;
        }
 
        echo 'Digite as idades:</br>';
        echo '<form method="post">';
 
        while ($idx < count($idades))
        {
            if ($idades[$idx] != '')
            {
                echo '<input type="number" name="idade[]" value="' . $idades[$idx] . '" readonly></br>';
 
                if ($idades[$idx] < 0)
                {
                    // TERMINA SE DIGITAR NÚMERO NEGATIVO
                    $terminou = true;
                }
                else
                {
                    $soma = $soma + $idades[$idx];
                    $quantidade++;
                }
            }
 
            $idx++;
        }
 
        if ($terminou == false)
        {
            echo '<input type="number" name="idade[]" required autofocus> ';
            echo '<input type="submit" name="acao" value="Adicionar"><br> ';
            echo '<br>';
            echo '<input type="submit" name="acao" value="Calcular" formnovalidate>';
            echo '</form>';
        }
        else
        {
            echo '</form>';
 
            if ($quantidade == 0)
            {
                echo 'IMPOSSIVEL CALCULAR';
            }
            else
            {
                $media = $soma / $quantidade;
                echo 'MEDIA = ' . round($media, 2);
            }
 
            echo '</br></br>';
 
            // RESET
            echo '<form method="post">';
            echo '<input type="submit" value="Reiniciar">';
            echo '</form>';
        }
    ?>


    
</body>
</html>
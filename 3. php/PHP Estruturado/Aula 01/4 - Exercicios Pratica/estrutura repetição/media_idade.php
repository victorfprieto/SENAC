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
        // Array que guarda as idades ja digitadas
        $idades = [];
 
        // Se o formulario foi enviado, pega as idades que chegaram
        if (isset($_POST['idade']))
        {
            $idades = $_POST['idade'];
        }
 
        $soma = 0;
        $quantidade = 0;
        $terminou = false;
        $idx = 0;
 
        // Se clicou no botao Calcular, termina
        if (isset($_POST['acao']) and $_POST['acao'] == 'Calcular')
        {
            $terminou = true;
        }
 
        echo 'Digite as idades:</br>';
        echo '<form method="post">';
 
        // Percorre todas as idades ja digitadas
        while ($idx < count($idades))
        {
            // Ignora campo vazio
            if ($idades[$idx] != '')
            {
                echo '<input type="number" name="idade[]" value="' . $idades[$idx] . '" readonly></br>';
 
                if ($idades[$idx] < 0)
                {
                    // Idade negativa: termina (ela nao entra nos calculos)
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
 
        // Se ainda nao terminou, cria um novo campo e os botoes
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
 
            // Botao que envia o formulario vazio: a pagina recomeca do zero
            echo '<form method="post">';
            echo '<input type="submit" value="Reiniciar">';
            echo '</form>';
        }
    ?>


    
</body>
</html>
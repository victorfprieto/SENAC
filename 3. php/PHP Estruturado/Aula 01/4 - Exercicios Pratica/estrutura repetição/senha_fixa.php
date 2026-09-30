<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senha fixa</title>
</head>
<body>

    <h1>Problema "senha_fixa":</h1>

    <?php
        // GUARDANDO AS SENHAS
        $senhas = [];
 
        if (isset($_POST['senha']))
        {
            $senhas = $_POST['senha'];
        }
 
        $texto = 'Digite a senha: ';
        $acertou = false;
        $idx = 0;
 
        echo '<form method="post">';
 
        while ($idx < count($senhas))
        {
            echo $texto;
            echo '<input type="number" name="senha[]" value="' . $senhas[$idx] . '" readonly></br>';
 
            if ($senhas[$idx] == 2002)
            {
                $acertou = true;
            }
            else
            {
                $texto = 'Senha Invalida! Tente novamente: ';
            }
 
            $idx++;
        }
 
        // FEEDBACK DE SENHA ERRADA
        if ($acertou == false)
        {
            echo $texto;
            echo '<input type="number" name="senha[]" required autofocus> ';
            echo '<input type="submit" value="Enviar">';
            echo '</form>';
        }
        else
        {
            echo '</form>';
            echo 'Acesso permitido!</br></br>';
 
            // RESET DA PÁGINA
            echo '<form method="post">';
            echo '<input type="submit" value="Reiniciar">';
            echo '</form>';
        }
    ?>

    
</body>
</html>
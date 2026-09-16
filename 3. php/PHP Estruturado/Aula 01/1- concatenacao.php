<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenação</title>
</head>
<body>

    <?php

        $nome = 'Victor';
        $idade = '31';
        $profissao = 'Programador';

        //Concatenação:
        /* Opção 1: */
        $fichaCompleta = '<strong>Nome:</strong> ' . $nome . ' - <strong>Idade:</strong> ' . $idade . ' - <strong>Profissão:</strong> ' . $profissao . '.';
        echo 'Opção 1: ' . $fichaCompleta;
        echo '<hr>';

        /* Opção 2: */
        $fichaCompleta = "<strong>Nome:</strong> $nome - ";
        $fichaCompleta .= "<strong>Idade:</strong> $idade - ";
        $fichaCompleta .= "<strong>Profissão:</strong> $profissao.";
        echo 'Opção 2: ' . $fichaCompleta . '<hr>';

        /* Opção 3:  */
        $fichaCompleta = "Meu nome é {$nome}, tenho {$idade} anos e sou {$profissao}.";
        echo 'Opção 3: ' . $fichaCompleta . '<hr>';

        /* Opção 4: */
        echo "Opção 4: Meu <strong>nome</strong> é {$nome}, tenho {$idade} anos e sou {$profissao}.";

    ?>
    
</body>
</html>
<?php 

    if(isset($_GET['jogo'])){
        $jogo = $_GET['jogo'];
    } else {    
        $jogo = null;
    }

    function wow($jogo){
        echo "<span>World of Warcraft</span>";
        echo "<br>";
        echo "<br>";
        echo "World of Warcraft é um jogo on-line do gênero MMORPG, desenvolvido e distribuído pela produtora Blizzard Entertainment e lançado em 2004. O jogo se passa no mundo fantástico de Azeroth, introduzido no primeiro jogo da série, Warcraft: Orcs & Humans, lançado em 1994.";
        echo "<br>";
    };

    function ow($jogo){
        echo "<span>Overwatch</span>";
        echo "<br>";
        echo "<br>";
        echo "Overwatch é um jogo eletrônico multijogador de tiro em primeira pessoa desenvolvido e publicado pela Blizzard Entertainment. Foi lançado em 24 de maio de 2016 para Microsoft Windows, PlayStation 4 e Xbox One e em 15 de outubro de 2019 para Nintendo Switch.";
        echo "<br>";
    }

    function diablo($jogo){
        echo "<span>Diablo</span>";
        echo "<br>";
        echo "<br>";
        echo "Diablo é uma série de jogos eletrônicos de RPG de ação e dungeon crawl desenvolvidos pela Blizzard North e, a partir de 2005, pela Blizzard Entertainment. A série é composta por quatro jogos principais: Diablo, Diablo II, Diablo III e Diablo IV.";
        echo "<br>";
    }

    function ssbu($jogo){
        echo "<span>Super Smash Bros Ultimate</span>";
        echo "<br>";
        echo "<br>";
        echo "Super Smash Bros. Ultimate, chamado no Japão de Super Smash Bros. Special, é um jogo eletrônico de luta, desenvolvido pela Bandai Namco Studios e Sora Ltd. e publicado pela Nintendo. É o quinto jogo da série Super Smash Bros., sucedendo Super Smash Bros. for Nintendo 3DS & Wii U.";
        echo "<br>";
    }

    function re2($jogo){
        echo "<span>Resident Evil 2</span>";
        echo "<br>";
        echo "<br>";
        echo "Resident Evil 2 é um jogo eletrônico de survival horror de 2019 desenvolvido e publicado pela Capcom. Uma recriação de Resident Evil 2, foi lançado para PlayStation 4, Windows e Xbox One em janeiro de 2019 e para Amazon Luna, PlayStation 5, Xbox Series X/S e Nintendo Switch em 2022.";
        echo "<br>";
    }

    function silenth($jogo){
        echo "<span>Silent Hill 2</span>";
        echo "<br>";
        echo "<br>";
        echo "Silent Hill 2 é um jogo eletrônico de terror de sobrevivência desenvolvido pela Team Silent da Konami Computer Entertainment Tokyo e publicado pela Konami.";
        echo "<br>";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🎮 Jogos</title>

    <!-- FONTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <form action="exercicio.php" method="GET">

        <div class="container">

            <div class="jogo">

                <h1>Selecione um jogo:</h1>

                <select name="jogo" id="">
                    <option value=""></option>
                    <option value="wow">World of Warcraft</option>
                    <option value="ow">Overwatch</option>
                    <option value="diablo">Diablo</option>
                    <option value="ssbu">Super Smash Bros Ultimate</option>
                    <option value="silenth">Silent Hill</option>
                </select>

                <button class="botao" type="submit">Pronto</button>

                <div class="resposta">

                    <?php
                    
                        if ($jogo != null){
                            isset($jogo) ? $jogo($jogo) : wow("Selecione um jogo");
                        }

                    ?>

                    <?php
                    if($jogo == null)  {
                        echo "";
                    } else
                        echo "<img src= img/{$jogo}.jpg "
                    ?>

                </div>

            </div>

        </div>

    </form>
    
</body>
</html>
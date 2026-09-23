<?php 
    if(isset($_GET['jogo']) && !empty($_GET['jogo'])){
        $jogo = $_GET['jogo'];
    } else {    
        $jogo = null;
    }

    $classeFundo = ($jogo != null) ? "bg-$jogo" : "";

    function wow($jogo){
        echo "<span>World of Warcraft</span><br><br>";
        echo "World of Warcraft é um jogo on-line do gênero MMORPG, desenvolvido e distribuído pela produtora Blizzard Entertainment e lançado em 2004. O jogo se passa no mundo fantástico de Azeroth, introduzido no primeiro jogo da série, Warcraft: Orcs & Humans, lançado em 1994.";
    }

    function ow($jogo){
        echo "<span>Overwatch</span><br><br>";
        echo "Overwatch é um jogo eletrônico multijogador de tiro em primeira pessoa desenvolvido e publicado pela Blizzard Entertainment. Foi lançado em 24 de maio de 2016 para Microsoft Windows, PlayStation 4 e Xbox One e em 15 de outubro de 2019 para Nintendo Switch.";
    }

    function diablo($jogo){
        echo "<span>Diablo</span><br><br>";
        echo "Diablo é uma série de jogos eletrônicos de RPG de ação e dungeon crawl desenvolvidos pela Blizzard North e, a partir de 2005, pela Blizzard Entertainment. A série é composta por quatro jogos principais: Diablo, Diablo II, Diablo III e Diablo IV.";
    }

    function ssbu($jogo){
        echo "<span>Super Smash Bros Ultimate</span><br><br>";
        echo "Super Smash Bros. Ultimate, chamado no Japão de Super Smash Bros. Special, é um jogo eletrônico de luta, desenvolvido pela Bandai Namco Studios e Sora Ltd. e publicado pela Nintendo. É o quinto jogo da série Super Smash Bros., sucedendo Super Smash Bros. for Nintendo 3DS & Wii U.";
    }

    function re2($jogo){
        echo "<span>Resident Evil 2</span><br><br>";
        echo "Resident Evil 2 é um jogo eletrônico de survival horror de 2019 desenvolvido e publicado pela Capcom. Uma recriação de Resident Evil 2, foi lançado para PlayStation 4, Windows e Xbox One em janeiro de 2019 e para Amazon Luna, PlayStation 5, Xbox Series X/S e Nintendo Switch em 2022.";
    }

    function silenth($jogo){
        echo "<span>Silent Hill 2</span><br><br>";
        echo "Silent Hill 2 é um jogo eletrônico de terror de sobrevivência desenvolvido pela Team Silent da Konami Computer Entertainment Tokyo e publicado pela Konami.";
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
<body class="<?php echo $classeFundo; ?>">

    <form action="exercicio.php" method="GET">
        <div class="container">
            <div class="jogo">
                <h1>Selecione um jogo:</h1>

                <select name="jogo">
                    <option value=""></option>
                    <option value="wow" <?php echo ($jogo == 'wow') ? 'selected' : ''; ?>>World of Warcraft</option>
                    <option value="ow" <?php echo ($jogo == 'ow') ? 'selected' : ''; ?>>Overwatch</option>
                    <option value="diablo" <?php echo ($jogo == 'diablo') ? 'selected' : ''; ?>>Diablo</option>
                    <option value="ssbu" <?php echo ($jogo == 'ssbu') ? 'selected' : ''; ?>>Super Smash Bros Ultimate</option>
                    <option value="re2" <?php echo ($jogo == 're2') ? 'selected' : ''; ?>>Resident Evil 2</option>
                    <option value="silenth" <?php echo ($jogo == 'silenth') ? 'selected' : ''; ?>>Silent Hill 2</option>
                </select>

                <button class="botao" type="submit">Pronto</button>

                <div class="resposta">
                    <?php
                        if ($jogo != null && function_exists($jogo)){
                            $jogo($jogo);
                        }
                    ?>

                    <?php
                        if($jogo != null) {
                            echo "<img src=\"img/{$jogo}.jpg\" alt=\"Imagem do jogo\">";
                        }
                    ?>
                </div>
            </div>
        </div>
    </form>
    
</body>
</html>
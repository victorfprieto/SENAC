<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>
<body>
 
    <h1>Problema "tabuada":</h1>
 
    <form method="post">
        Deseja a tabuada para qual valor?
        <input type="number" name="n" value="<?php echo isset($_POST['n']) ? $_POST['n'] : ''; ?>" required>
        <input type="submit" value="Gerar">
    </form>
 
    <br>
 
    <?php
    if (isset($_POST['n'])) {
        $n = $_POST['n'];
 
        for ($i = 1; $i <= 10; $i++) {
            $res = $n * $i;
            echo $n . ' x ' . $i . ' = ' . $res . '<br>';
        }
    }
    ?>
 
</body>
</html>
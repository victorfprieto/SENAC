<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f5f2; /* Bege bem suave */
            color: #4a4a4a;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
            font-weight: bold;
        }

        .campo {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #e1dbd5;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
            background-color: #faf8f6;
        }

        .campo:focus {
            outline: none;
            border-color: #00b300;
        }

        .enviar {
            width: 100%;
            padding: 12px;
            background-color: #004d00;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        .enviar:hover {
            background-color: #00b300;
        }
    </style>

</head>
<body>

    <form action="dados.php" method="POST">

        <label for="nome">Nome:</label>
        <input class="campo" name="nome" id="nome" type="text" placeholder="ex: Victor"></input>

        <label for="peso">Peso:</label>
        <input class="campo" name="peso" id="peso" type="number" placeholder="75.0" step="0.10"></input>

        <label for="altura">Altura:</label>
        <input class="campo" name="altura" id="altura" type="number" placeholder="1.75" step="0.01"></input>

        <button class="enviar" type="submit">Calcular</button>

    </form>
    
</body>
</html>
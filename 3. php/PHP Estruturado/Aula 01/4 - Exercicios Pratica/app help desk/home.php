<?php 
    require_once "validador_acesso.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Help Desk - Home</title>
</head>
<body>

    <nav class="nav-bar navbar-dark bg-dark">
        <a href="#" class="navbar-brand">
            <img src="img\help-desk-logo.png" alt="Logo Help Desk">
        </a>
        <h1>App Help Desk</h1>

        <ul class="navbar-nav">
            <li class="item">
                <a href="#" class="nav-link">Sair</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        
        <div class="row">

            <div class="card-home">

                <div class="card">

                    <div class="card-header">
                        Menu
                    </div>

                    <div class="card-body">

                        <div class="row">

                            <div class="col-6 d-flex justify-content-center">

                                <a href="abrir_chamado.php">
                                    <img src="img\abrir-chamado.png" alt="Imagem de abrir chamado">
                                </a>

                            </div>

                            <div class="col-6 d-flex justify-content-center">

                                <a href="consultar_chamado.php">
                                    <img src="img\consultar-chamado.png" alt="Imagem de consultar chamado">
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    
</body>
</html>
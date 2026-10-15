<?php 
    require_once "validador_acesso.php";

    $chamados = [];

    $arquivo = fopen('../../../../../../app_help_desk_sec/registros.hd', 'r');  

    while(!feof($arquivo)){
        $registro = fgets($arquivo);
        $chamados[] = $registro;
    }

    fclose($arquivo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Help Desk - Consultar Chamado</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
            color: #334155;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        nav {
            background-color: #ffffff;
            border-bottom: 1px solid #e2e8f0;
            padding: 16px 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .nav-brand {
            display: flex;
            align-items: center;
            gap: 20px;
            text-decoration: none;
        }

        nav img {
            height: 32px;
            width: auto;
        }

        nav h1 {
            font-family: 'Inter', sans-serif;
            font-size: 17px;
            font-weight: 600;
            color: #1e293b;
        }

        .nav-brand-group {
            display: flex;
            align-items: center;
        }

        .navbar-nav {
            list-style: none;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-link {
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
            font-weight: 500;
            color: #64748b;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 6px;
            transition: all 0.2s ease;
        }

        .nav-link:hover {
            color: #3333cc;
            background-color: #f1f5f9;
        }

        .container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .row {
            width: 100%;
            max-width: 600px;
        }

        .card-consultar-chamado {
            width: 100%;
        }

        .card {
            background-color: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            margin-bottom: 16px;
        }

        .card-header {
            background-color: #ffffff;
            text-align: center;
            font-size: 1.25rem;
            font-weight: 600;
            color: #1e293b;
            padding: 24px 24px 16px 24px;
            border-bottom: 1px solid #f1f5f9;
        }

        .card-body {
            padding: 32px 24px;
        }

        .ticket-card {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 16px;
        }

        .ticket-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 6px;
        }

        .ticket-user {
            color: #3333cc;
            font-size: 0.85rem;
            font-weight: bolder;
            margin-bottom: 4px;
        }

        .ticket-category {
            font-size: 0.9rem;
            font-weight: 500;
            color: #64748b;
            margin-bottom: 12px;
        }

        .ticket-text {
            font-size: 0.95rem;
            color: #334155;
            line-height: 1.5;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 12px 16px;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: 500;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .btn-warning {
            background-color: #e2e8f0;
            color: #334155;
        }

        .btn-warning:hover {
            background-color: #cbd5e1;
        }
    </style>

</head>
<body>

    <nav>
        <div class="nav-brand-group">
            <a href="home.php" class="nav-brand">
                <img src="img/help-desk-logo.png" alt="Logo Help Desk">
            </a>
            <h1>App Help Desk</h1>
        </div>

        <ul class="navbar-nav">
            <li class="item" style="color: #3333cc; font-size: 0.95rem; font-weight: 500;">
                Bem-vindo, <strong><?php echo $_SESSION['nome']; ?></strong>!
            </li>
            <li class="item">
                <a href="logoff.php" class="nav-link">Sair</a>
            </li>
        </ul>
    </nav>

    <div class="container">    
        <div class="row">
            <div class="card-consultar-chamado">
                <div class="card">
                    <div class="card-header">
                        Consulta de chamado
                    </div>
                    
                    <div class="card-body">
                        
                        <?php foreach($chamados as $chamado){ ?>

                            <?php 
                                $chamado_dados = explode('|', $chamado);  

                                if(count($chamado_dados) < 6){
                                    continue; 
                                }
                            
                                if($_SESSION['perfil'] === 'user'){
                                    if($chamado_dados[0] != $_SESSION['id'] ){
                                        continue; 
                                    }
                                }
                            ?>

                            <div class="ticket-card">
                                <h5 class="ticket-title"><?php echo $chamado_dados[3]; ?></h5>
                                <div class="ticket-user">Usuário: <?php echo $chamado_dados[2]; ?></div>
                                <div class="ticket-category">Categoria: <?php echo $chamado_dados[4]; ?></div>
                                <p class="ticket-text"><?php echo $chamado_dados[5]; ?></p>
                            </div>

                        <?php } ?>
                        
                        <div style="margin-top: 24px;">
                            <a class="btn btn-warning" href="home.php">Voltar</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
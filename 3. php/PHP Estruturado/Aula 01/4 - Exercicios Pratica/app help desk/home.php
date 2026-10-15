<?php 
    require_once "validador_acesso.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Help Desk - Home</title>

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

        .card-home {
            width: 100%;
        }

        .card {
            background-color: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
            overflow: hidden;
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

        .card-body .row {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 32px;
            max-width: 100%;
        }

        .card-body .row div {
            text-align: center;
        }

        .card-body img {
            width: 80px;
            height: auto;
            transition: transform 0.2s ease, opacity 0.2s ease;
            opacity: 0.85;
        }

        .card-body img:hover {
            transform: translateY(-4px);
            opacity: 1;
        }
    </style>

</head>
<body>

    <nav>
        <div class="nav-brand-group">
            <a href="#" class="nav-brand">
                <img src="img/help-desk-logo.png" alt="Logo Help Desk">
            </a>
            <h1>App Help Desk</h1>
        </div>

        <ul class="navbar-nav" style="display: flex; align-items: center; gap: 20px;">
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
            <div class="card-home">
                <div class="card">
                    <div class="card-header">
                        Menu
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div>
                                <a href="abrir_chamado.php">
                                    <img src="img/abrir-chamado.png" alt="Imagem de abrir chamado">
                                </a>
                            </div>
                            <div>
                                <a href="consultar_chamado.php">
                                    <img src="img/consultar-chamado.png" alt="Imagem de consultar chamado">
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
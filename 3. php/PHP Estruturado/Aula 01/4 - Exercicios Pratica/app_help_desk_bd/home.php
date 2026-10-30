<?php 
    require_once "validador_acesso.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cemitério Memorial - Menu Principal</title>

    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #181c24;
            color: #94a3b8;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        nav {
            background-color: #222733;
            border-bottom: 1px solid #323846;
            padding: 16px 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .nav-brand {
            display: flex;
            align-items: center;
            gap: 15px;
            text-decoration: none;
        }

        nav img {
            height: 36px;
            width: auto;
        }

        nav h1 {
            font-family: 'Cinzel', serif;
            font-size: 18px;
            letter-spacing: 1px;
            font-weight: 600;
            color: #e2dfd2;
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
            color: #94a3b8;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 6px;
            transition: all 0.2s ease;
        }

        .nav-link:hover {
            color: #e2dfd2;
            background-color: #323846;
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
            background-color: #222733;
            border: 1px solid #323846;
            border-radius: 12px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.7);
            overflow: hidden;
        }

        .card-header {
            background-color: #222733;
            text-align: center;
            font-family: 'Cinzel', serif;
            font-size: 1.25rem;
            font-weight: 600;
            color: #e2dfd2;
            padding: 24px 24px 16px 24px;
            border-bottom: 1px solid #323846;
        }

        .card-body {
            padding: 40px 24px;
        }

        .card-body .row {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 48px;
            max-width: 100%;
        }

        .card-body .row div {
            text-align: center;
        }

        .card-body img {
            width: 72px;
            height: auto;
            transition: transform 0.2s ease, opacity 0.2s ease;
            opacity: 0.85;
            filter: drop-shadow(0 4px 6px rgba(0,0,0,0.5));
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
                <img src="img/help-desk-logo-cemiterio.png" alt="Logo Cemitério">
            </a>
            <h1>Cemitério Memorial</h1>
        </div>

        <ul class="navbar-nav" style="display: flex; align-items: center; gap: 20px;">
            <li class="item" style="color: #e2dfd2; font-size: 0.95rem; font-weight: 500;">
                Bem-vindo, <strong><?php echo $_SESSION['nome']; ?></strong>
            </li>
            <li class="item">
                <a href="logoff.php" class="nav-link">Encerrar Sessão</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">
            <div class="card-home">
                <div class="card">
                    <div class="card-header">
                        Painel de Serviços e Zeladoria
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div>
                                <a href="abrir_chamado.php" title="Abrir Solicitação">
                                    <img src="img/abrir-chamado.png" alt="Ícone Registrar Solicitação">
                                </a>
                                <p style="margin-top: 10px; font-size: 0.85rem; color: #94a3b8;">Nova Solicitação</p>
                            </div>
                            <div>
                                <a href="consultar_chamado.php" title="Consultar Chamados">
                                    <img src="img/consultar-chamado.png" alt="Ícone Consultar Solicitações">
                                </a>
                                <p style="margin-top: 10px; font-size: 0.85rem; color: #94a3b8;">Consultar Registros</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php 
    require_once "validador_acesso.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cemitério Memorial - Abrir Solicitação</title>

    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #14171f;
            color: #94a3b8;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        nav {
            background-color: #1c212c;
            border-bottom: 1px solid #2b3342;
            padding: 16px 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .nav-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        nav img {
            height: 42px;
            width: auto;
        }

        nav h1 {
            font-family: 'Cinzel', serif;
            font-size: 18px;
            letter-spacing: 1px;
            font-weight: 600;
            margin-left: 8px;
            color: #d4af37;
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
            color: #94a3b8;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 6px;
            transition: all 0.2s ease;
        }

        .nav-link:hover {
            color: #d4af37;
            background-color: #2b3342;
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

        .card {
            background-color: #1c212c;
            border: 1px solid #2b3342;
            border-radius: 12px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.7);
            overflow: hidden;
        }

        .card-header {
            background-color: #1c212c;
            text-align: center;
            font-family: 'Cinzel', serif;
            font-size: 1.25rem;
            font-weight: 600;
            color: #d4af37;
            padding: 24px;
            border-bottom: 1px solid #2b3342;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        .card-header img {
            height: 75px;
            width: auto;
        }

        .card-body {
            padding: 32px 24px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        .form-group label {
            display: block;
            font-size: 0.9rem;
            font-weight: 500;
            color: #94a3b8;
            margin-bottom: 6px;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            font-size: 0.95rem;
            font-family: 'Inter', sans-serif;
            color: #f1f5f9;
            background-color: #14171f;
            border: 1px solid #323c50;
            border-radius: 8px;
            outline: none;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            background-color: #1c212c;
            border-color: #d4af37;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }

        .actions-row {
            display: flex;
            gap: 16px;
            margin-top: 24px;
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
            background-color: #2b3342;
            color: #e2e8f0;
        }

        .btn-warning:hover {
            background-color: #3b455c;
        }

        .btn-info {
            background-color: #3b455c;
            color: #ffffff;
        }

        .btn-info:hover {
            background-color: #4b556f;
        }
    </style>
</head>
<body>

    <nav>
        <div class="nav-brand-group">
            <a href="home.php" class="nav-brand">
                <img src="img/help-desk-logo.png" alt="Logo Cemitério">
            </a>
            <h1>Cemitério Memorial</h1>
        </div>

        <ul class="navbar-nav">
            <li class="item" style="color: #e2e8f0; font-size: 0.95rem; font-weight: 500;">
                Bem-vindo, <strong><?php echo $_SESSION['nome']; ?></strong>[cite: 1]
            </li>
            <li class="item">
                <a href="logoff.php" class="nav-link">Sair</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <img src="img/help-desk-logo.png" alt="Logo Cemitério">
                    <span>Abertura de Solicitação</span>
                    <?php if (isset($_GET['cadastro']) && $_GET['cadastro'] === 'efetuado') { ?>
                        <script>
                            alert('Solicitação cadastrada com sucesso!');
                        </script>
                    <?php } ?>
                </div>
                
                <div class="card-body">
                    <form action="registra_chamado.php" method="POST">
                        
                        <div class="form-group">
                            <label>Título da Ocorrência</label>
                            <input name="titulo" type="text" class="form-control" placeholder="Ex: Infiltração na lápide / Limpeza" required>
                        </div>

                        <div class="form-group">
                            <label>Categoria do Serviço</label>
                            <select name="categoria" class="form-control">
                                <option>Manutenção de Jazigo</option>
                                <option>Serviços Sepulgrais (Coveiro)</option>
                                <option>Jardinagem e Limpeza</option>
                                <option>Taxas e Documentação</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Descrição e Localização (Quadra / Lote)</label>
                            <textarea name="descricao" class="form-control" placeholder="Informe a quadra, o lote e descreva a solicitação..." required></textarea>
                        </div>

                        <div class="actions-row">
                            <div style="flex: 1;">
                                <a class="btn btn-warning" href="home.php">Voltar</a>
                            </div>
                            <div style="flex: 1;">
                                <button class="btn btn-info" type="submit">Registrar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
<?php 
require_once "validador_acesso.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Help Desk - Abrir Chamado</title>

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

        .card-abrir-chamado {
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

        .form-group {
            margin-bottom: 16px;
        }

        .form-group label {
            display: block;
            font-size: 0.9rem;
            font-weight: 500;
            color: #475569;
            margin-bottom: 6px;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            font-size: 0.95rem;
            font-family: 'Inter', sans-serif;
            color: #1e293b;
            background-color: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            outline: none;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            background-color: #ffffff;
            border-color: #3333cc;
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
            background-color: #e2e8f0;
            color: #334155;
        }

        .btn-warning:hover {
            background-color: #cbd5e1;
        }

        .btn-info {
            background-color: #3333cc;
            color: #ffffff;
        }

        .btn-info:hover {
            background-color: #4747d1;
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
            <div class="card-abrir-chamado">
                <div class="card">
                    <div class="card-header">
                        Abertura de chamado
                        <?php if (isset($_GET['cadastro']) && $_GET['cadastro'] === 'efetuado') { ?>
                            <script>
                                alert('Chamado cadastrado com sucesso!');
                            </script>
                        <?php } ?>
                    </div>
                    
                    <div class="card-body">
                        <form action="registra_chamado.php" method="POST">
                            
                            <div class="form-group">
                                <label>Título</label>
                                <input name="titulo" type="text" class="form-control" placeholder="Título do chamado" required>
                            </div>

                            <div class="form-group">
                                <label>Categoria</label>
                                <select name="categoria" class="form-control">
                                    <option>Hardware</option>
                                    <option>Software</option>
                                    <option>Rede</option>
                                    <option>Outros</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Descrição</label>
                                <textarea name="descricao" class="form-control" placeholder="Descreva o problema..." required></textarea>
                            </div>

                            <div class="actions-row">
                                <div style="flex: 1;">
                                    <a class="btn btn-warning" href="home.php">Voltar</a>
                                </div>
                                <div style="flex: 1;">
                                    <button class="btn btn-info" type="submit">Abrir</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cemitério Memorial - Login</title>

    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: #181c24; /* Tom cinza-ardósia escuro da logo */
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
        }

        nav a {
            display: flex;
            align-items: center;
            gap: 15px;
            text-decoration: none;
        }

        nav a img {
            height: 36px;
            width: auto;
        }

        nav h1 {
            font-family: 'Cinzel', serif;
            font-size: 18px;
            letter-spacing: 1px;
            font-weight: 600;
            color: #e2dfd2; /* Tom creme/marfim inspirado na lua da logo */
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
            max-width: 400px;
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
            font-size: 1.2rem;
            font-weight: 600;
            color: #e2dfd2;
            padding: 28px 24px 18px 24px;
            border-bottom: 1px solid #323846;
        }

        span {
            color: #e2dfd2;
        }

        .card-body {
            padding: 28px;
        }

        .form-group {
            margin-bottom: 16px;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            font-size: 0.95rem;
            font-family: 'Inter', sans-serif;
            color: #f1f5f9;
            background-color: #181c24;
            border: 1px solid #384152;
            border-radius: 8px;
            outline: none;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            background-color: #222733;
            border-color: #e2dfd2;
        }

        .form-control::placeholder {
            color: #64748b;
        }

        .text-danger {
            background-color: rgba(239, 68, 68, 0.1);
            color: #f87171;
            font-size: 0.875rem;
            padding: 10px 14px;
            border-radius: 6px;
            margin-bottom: 16px;
            border: 1px solid rgba(239, 68, 68, 0.2);
        }

        .btn {
            display: block;
            width: 100%;
            padding: 12px 16px;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            font-weight: 500;
            text-align: center;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .btn-info {
            background-color: #384152;
            color: #e2dfd2;
        }

        .btn-info:hover {
            background-color: #475266;
        }
    </style>
</head>
<body>

    <nav>
        <a href="#">
            <img src="img/help-desk-logo-cemiterio.png" alt="Logo Cemitério">
        </a>
        <h1>Cemitério Memorial — Portal</h1>
    </nav>

    <div class="container">
        <div class="row">
            <div class="card-login">
                <div class="card">
                    <div class="card-header">
                        Acesso ao <span>Memorial</span>
                    </div>
                    <div class="card-body">
                        
                        <form action="valida_login.php" method="POST">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="E-mail de acesso" required>
                            </div>
                            <div class="form-group">
                                <input name="senha" type="password" class="form-control" placeholder="Senha" required>
                            </div>

                            <?php if (isset($_GET['login']) && $_GET['login'] === 'erro') { ?>
                                <div class="text-danger">Credenciais inválidas no registro!</div>
                            <?php } ?>

                            <?php if (isset($_GET['login']) && $_GET['login'] === 'erro2') { ?>
                                <div class="text-danger">Identificação necessária para prosseguir.</div>
                            <?php } ?>

                            <button class="btn btn-lg btn-info btn-block" type="submit">Entrar no Sistema</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
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
            background-color: #14171f;
            color: #94a3b8;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
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
            font-size: 1.2rem;
            font-weight: 600;
            color: #d4af37;
            padding: 28px 24px 22px 24px;
            border-bottom: 1px solid #2b3342;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        .card-header h1 {
            font-family: 'Cinzel', serif;
            font-size: 20px;
            letter-spacing: 1px;
            font-weight: 600;
            color: #d4af37;
        }

        .card-header img {
            height: 120px;
            width: auto;
        }

        span {
            color: #e2e8f0;
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
            background-color: #2b3342;
            color: #f1f5f9;
        }

        .btn-info:hover {
            background-color: #3b455c;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <img src="img/help-desk-logo.png" alt="Logo Cemitério">
                    <h1>Acesso ao <span>Memorialis</span></h1>
                </div>
                <div class="card-body">
                    <form action="/app_help_desk_bd_sec/valida_login.php" method="POST">
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

                        <button class="btn btn-info" type="submit">Entrar no Sistema</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

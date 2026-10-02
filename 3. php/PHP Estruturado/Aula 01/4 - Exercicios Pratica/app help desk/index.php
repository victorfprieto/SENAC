<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Help Desk - Login</title>

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
        }

        nav a img {
            height: 32px;
            width: auto;
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
            padding: 24px;
        }

        .form-group {
            margin-bottom: 16px;
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

        .form-control::placeholder {
            color: #94a3b8;
        }

        .text-danger {
            background-color: #fef2f2;
            color: #dc2626;
            font-size: 0.875rem;
            padding: 10px 14px;
            border-radius: 6px;
            margin-bottom: 16px;
            border: 1px solid #fee2e2;
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
            transition: background-color 0.2s ease, box-shadow 0.2s ease;
        }

        .btn-info {
            background-color: #3333cc;
            color: #ffffff;
        }

        .btn-info:hover {
            background-color: #4747d1;
        }

        .btn-info:active {
            background-color: #3333cc;
        }

    </style>

</head>
<body>

    <!-- Logo Help Desk -->
    <nav>
        <a href="">
            <img src="#" alt="Logo Help Desk">
        </a>
    </nav>

    <!-- Login -->
    <div class="container">

        <div class="row">

            <div class="card-login">

                <div class="card">

                    <div class="card-header">
                        Login
                    </div>

                    <div class="card-body">

                        <form action="" method="GET">

                            <div class="form-group">

                                <input name="email" type="email" class="form-control" placeholder="E-mail">

                            </div>

                            <div class="form-group">

                                <input name="senha" type="password" class="form-control" placeholder="Senha">

                            </div>

                            <?php 
                            
                            if (isset($_GET['login']) && $_GET['login'] === 'erro') { ?>
                                <div class="text-danger">Usuário ou senha inválido(s)!</div>
                            <?php } ?>

                            <?php 
                            
                            if (isset($_GET['login']) && $_GET['login'] === 'erro2') { ?>
                                <div class="text-danger">Você precisa fazer o login antes!</div>
                            <?php } ?>

                            <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cemitério Memorial - Cadastro</title>

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

        .nav-brand-group {
            display: flex;
            align-items: center;
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
            max-width: 420px;
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
            padding: 24px;
            border-bottom: 1px solid #2b3342;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .card-header h2 {
            font-family: 'Cinzel', serif;
            font-size: 20px;
            letter-spacing: 1px;
            font-weight: 600;
            color: #d4af37;
        }

        .card-header p {
            font-family: 'Inter', sans-serif;
            font-size: 0.85rem;
            font-weight: 400;
            color: #94a3b8;
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

        select.form-control {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23d4af37' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 14px center;
            background-size: 16px;
            padding-right: 40px;
        }

        select.form-control option {
            background-color: #1c212c;
            color: #f1f5f9;
        }

        .text-danger {
            background-color: rgba(239, 68, 68, 0.1);
            color: #f87171;
            font-size: 0.875rem;
            padding: 10px 14px;
            border-radius: 6px;
            margin-top: 12px;
            margin-bottom: 16px;
            border: 1px solid rgba(239, 68, 68, 0.2);
            text-align: center;
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
            margin-top: 8px;
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

    <nav>
        <div class="nav-brand-group">
            <a href="index.php" class="nav-brand">
                <img src="img/help-desk-logo.png" alt="Logo Cemitério">
            </a>
            <h1>Cemitério Memorial</h1>
        </div>

        <ul class="navbar-nav">
            <li class="item">
                <a href="index.php" class="nav-link">Voltar ao Login</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h2>Novo Registro</h2>
                    <p>Preencha os dados para solicitar acesso ao Memorialis</p>
                </div>
                <div class="card-body">
                    <form action="valida_cadastro.php" method="POST">
                        <div class="form-group">
                            <input name="nome" type="text" class="form-control" placeholder="Nome Completo" required autofocus>
                        </div>              
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="E-mail institucional" required>
                        </div>
                        <div class="form-group">
                            <input name="senha" type="password" class="form-control" placeholder="Senha" required>
                        </div>
                        <div class="form-group">
                            <select name="perfil" class="form-control" required>
                                <option value="">-- Selecione o Perfil --</option>
                                <option value="Usuario">Usuário</option>
                                <option value="Tecnico">Técnico</option>
                                <option value="Administrador">Administrador</option>
                            </select>

                            <?php // VALIDA SE O USUÁRIO JÁ NÃO ESTAVA CADASTRADO
                                if(isset($_GET['email']) && $_GET['email'] === 'erro') { ?>
                                    <div class="text-danger">E-mail já cadastrado no sistema!</div>
                            <?php } ?>

                            <?php // VALIDA SE O PERFIL É VÁLIDO
                                if(isset($_GET['validaperfil']) && $_GET['validaperfil'] === 'erro') { ?>
                                    <div class="text-danger">Obrigatório selecionar um perfil válido!</div>
                            <?php } ?>

                            <?php // ALERTA DE SUCESSO OU ERRO NO CADASTRO
                                if(isset($_GET['usuario']) && $_GET['usuario'] === 'sucesso') { ?>
                                    <script>alert('Usuário cadastrado com sucesso!');</script>
                            <?php } else if(isset($_GET['usuario']) && $_GET['usuario'] != 'sucesso') { ?>
                                    <script>alert('Erro ao inserir usuário no banco, contate o administrador!');</script> 
                            <?php } ?>
                        </div>

                        <button class="btn btn-info" type="submit">Salvar Cadastro</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
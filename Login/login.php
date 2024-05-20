<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Clínica Médica</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h1>Login</h1>
            <form action="logar.php" method="POST">
                <div class="textbox">
                    <input type="text" placeholder="Usuário" name="username" required >
                </div>
                <div class="textbox">
                    <input type="password" placeholder="Senha" name="password" required>
                </div>
                <button type="submit" class="btn">Entrar</button>
            </form>
        </div>
    </div>
</body>
</html>

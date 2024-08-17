<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PsyHelp - Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
     <!-- Principal -->
    <div class="container">
        <img src="images/logo.png" alt="Logotipo" class="logo">
        <form class="login-form">
            <div class="input-group">
                <label for="email" class="label">E-mail</label>
                <input type="email" id="email" placeholder="Digite seu e-mail" required>
            </div>
            <div class="input-group">
                <label for="password" class="label">Senha</label>
                <input type="password" id="password" placeholder="Digite sua senha" required>
            </div>
            <a href="#" class="forgot-password">Esqueci minha senha</a>
            <button type="submit">Entrar</button>
            <a href="#" class="signup">Quero me cadastrar</a>
            
            <!-- Botões de acesso social -->
            <div class="social-login">
                <button class="social-button google">
                    <img src="images/google-logo.png" alt="Google Logo" class="social-icon">
                    Acessar com o Google
                </button>
                <button class="social-button facebook">
                    <img src="images/facebook-logo.png" alt="Facebook Logo" class="social-icon">
                    Acessar com Facebook
                </button>
                <a href="#" class="professional-login">Fazer login como <strong>Profissional</strong></a>
            </div>
        </form>
    </div>
</body>
</html>

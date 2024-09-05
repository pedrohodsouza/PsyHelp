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
<style>
    /* Estilos gerais */
body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background: linear-gradient(180deg, #6582fd, #4a63d1); 
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    width: 100%;
    max-width: 400px;
    padding: 20px;
    background: transparent; 
    border: none; 
    box-shadow: none; 
    text-align: center;
}

.logo {
    width: 120px;
    margin-bottom: 20px;
}

.login-form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.input-group {
    width: 100%;
    margin-bottom: 20px;
    position: relative;
}

input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: none; 
    border-bottom: 2px solid #C0C0C0; 
    background: transparent; 
    box-sizing: border-box;
    font-size: 1em;
    outline: none; 
    color: #ffffff; 
    text-align: center; 
}

input[type="email"]::placeholder,
input[type="password"]::placeholder {
    color: #ffffff; 
}

input[type="email"]:focus,
input[type="password"]:focus {
    border-bottom-color: #6582fd; 
}

.input-group input[type="password"] {
    margin-bottom: 5px; 
}

/* CSS para os labels */
.label {
    display: block;
    color: #ffffff; 
    font-size: 0.9em;
    margin-bottom: 5px; 
    text-align: left; 
    width: 100%; 
}

.forgot-password {
    display: block;
    margin-top: -15px; 
    margin-bottom: 20px; 
    color: #ffffff; 
    text-decoration: none;
    font-size: 0.9em;
    text-align: right; 
    width: 100%; 
}

.forgot-password:hover {
    text-decoration: underline;
}

button {
    width: 100%; 
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: rgba(255, 255, 255, 0.7); 
    color: #6582fd; 
    font-size: 1em;
    cursor: pointer;
    transition: background-color 0.3s;
    box-sizing: border-box; 
}

button:hover {
    background-color: rgba(255, 255, 255, 0.9); 
}

.signup {
    display: block;
    margin-top: 10px; 
    color: #ffffff; 
    text-decoration: none;
    font-size: 0.9em;
}

/* Botões sociais */
.social-login {
    margin-top: 30px; 
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.social-button {
    width: 100%;
    max-width: 400px; 
    padding: 10px;
    border: none;
    border-radius: 4px;
    background-color: rgba(255, 255, 255, 0.7); 
    color: #6582fd; 
    font-size: 1em;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-color 0.3s;
    box-sizing: border-box; 
    margin-bottom: 15px; 
}

.social-button img {
    width: 20px; 
    height: 20px;
    margin-right: 10px; 
}

.social-button.google {
    background-color: rgba(255, 255, 255, 0.7);
}

.social-button.facebook {
    background-color: rgba(255, 255, 255, 0.7); 
}

.social-button:hover {
    background-color: rgba(255, 255, 255, 0.9); 
}

/* Texto para login profissional */
.professional-login {
    display: block;
    margin-top: 30px; 
    color: #ffffff; 
    text-decoration: none;
    font-size: 0.9em;
    text-align: center; 
}

.professional-login strong {
    font-weight: bold; 
}

</style>
</html>

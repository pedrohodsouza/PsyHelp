<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="header">
        <img src="images/menu.png" alt="Menu" class="icon">
        <img src="images/psyhelp.png" alt="Logotipo" class="logo">
        <img src="images/chat.png" alt="Mensagens" class="icon">
    </div>

    <!-- Novo contêiner para agrupar as seções -->
    <div class="content-wrapper">
        <div class="options-container">
            <div class="option">
                <img src="images/profissionais.png" alt="Profissionais" class="option-icon">
                <span>Profissionais</span>
            </div>
            <div class="option">
                <img src="images/dicas.png" alt="Dicas de Saúde" class="option-icon">
                <span>Dicas de Saúde</span>
            </div>
            <div class="option">
                <img src="images/receitas.png" alt="Receitas Farmacêuticas" class="option-icon">
                <span>Receitas Farmacêuticas</span>
            </div>
            <div class="option">
                <img src="images/agendamento.png" alt="Agendamento de Sessões" class="option-icon">
                <span>Agendamento de Sessões</span>
            </div>
        </div>

        <!-- procedures-section fica abaixo da options-container -->
        <div class="procedures-section">
            <img src="images/procedimentos.png" alt="Procedimentos" class="procedures-icon">
            <span class="procedures-text">Cadastro de Procedimentos e atendimento a Saúde Mental</span>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="footer-option">
            <img src="images/explorar.png" alt="Explorar" class="footer-icon">
            <span>Explorar</span>
        </div>
        <div class="footer-option">
            <img src="images/mapa.png" alt="Mapa" class="footer-icon">
            <span>Mapa</span>
        </div>
        <div class="footer-option">
            <img src="images/usuario.png" alt="Usuário" class="footer-icon">
            <span>Usuário</span>
        </div>
    </div>
</body>
</html>
<style>
/* Estilos do footer */
.footer {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: rgba(255, 255, 255, 0.7); 
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.2);
}

.footer-option {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

.footer-option img.footer-icon {
    width: 30px;
    height: 30px;
    margin-bottom: 5px;
}

.footer-option span {
    font-size: 0.8em;
    color: #6582fd;
}

/* Ajustes de margem para os ícones do footer */
.footer .footer-option:nth-child(2) {
    margin-left: -10px; /* Ajusta a posição do ícone do meio */
}

.footer .footer-option:nth-child(3) {
    margin-right: 30px; /* Ajusta a posição do ícone da direita */
}
    
</style>
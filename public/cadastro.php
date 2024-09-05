<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="./css/cadastro.css">
</head>
<body>
    <div class="content-wrapper">
        <!-- Logotipo no topo -->
        <header class="header">
            <img src="images/logo.png" alt="Logotipo" class="logo">
        </header>

        <!-- Formulário de Cadastro -->
        <div class="cadastro-container">
            <form class="cadastro-form">
                <div class="input-group">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome completo">
                </div>
                
                <div class="input-group">
                    <label for="nascimento">Data de Nascimento:</label>
                    <input type="date" id="nascimento" name="nascimento">
                </div>
                
                <div class="input-group">
                    <label for="tipo-cadastro">Tipo de Cadastro:</label>
                    <select id="tipo-cadastro" name="tipo-cadastro">
                        <option value="paciente">Paciente</option>
                        <option value="psicologo">Psicólogo</option>
                    </select>
                </div>
                
                <div class="input-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF">
                </div>
                
                <div class="input-group">
                    <label for="crm">Nº CRM/CIP:</label>
                    <input type="text" id="crm" name="crm" placeholder="Digite seu CRM/CIP">
                </div>
                
                <div class="input-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail">
                </div>

                <div class="input-group">
                    <label for="cep">CEP:</label>
                    <input type="text" id="cep" name="cep" placeholder="Digite seu CEP">
                </div>

                <div class="input-group">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" placeholder="Digite seu telefone">
                </div>

                <div class="input-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" placeholder="Digite seu endereço">
                </div>

                <div class="input-group">
                    <label for="cidade">Cidade:</label>
                    <input type="text" id="cidade" name="cidade" placeholder="Digite sua cidade">
                </div>

                <div class="input-group">
                    <label for="bairro">Bairro:</label>
                    <input type="text" id="bairro" name="bairro" placeholder="Digite seu bairro">
                </div>

                <div class="input-group">
                    <label for="numero">Número:</label>
                    <input type="text" id="numero" name="numero" placeholder="Digite o número da casa">
                </div>

                <div class="input-group">
                    <label for="complemento">Complemento:</label>
                    <input type="text" id="complemento" name="complemento" placeholder="Digite o complemento">
                </div>

                <!-- Botões de ação -->
                <div class="button-group">
                    <button type="button" class="btn novo-cadastro">Novo Cadastro</button>
                    <button type="button" class="btn alterar">Alterar</button>
                    <button type="submit" class="btn confirmar">Confirmar</button>
                    <button type="button" class="btn deletar">Deletar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

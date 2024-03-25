<?php
if(isset($_POST["submit"])) {
    include_once('config.php');

    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $cpf = $_POST['cpf'];
    $nomesocial = $_POST['nomesocial'];
    $datanasc = $_POST['datanasc'];
    $nomemae = $_POST['nomemae'];
    $cartaosus = $_POST['sus'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $telemergencia = $_POST['telemergencia'];
    $nomeemergencia = $_POST['nomeemergencia'];
    $endereco = $_POST['endereço'];
    $escolaridade = $_POST['escolaridade'];
    $coren = $_POST['coren'];
    $dataAtendimento = $_POST['dataatendimento'];
    $alergias = $_POST['alergias'];
    $sintomas = $_POST['sintomas'];
    $atendimento = $_POST['atendimento'];
    $diagnostico = $_POST['diagnostico'];
    $receituario = $_POST['receituario'];
    $posatendimento = $_POST['posatendimento'];

    $resultado1 = mysqli_query($conexcao, "INSERT INTO pacientes(nome, sexo, cpf, nomesocial, DataNascimento, NomedaMãe, cartãosus, Email, Telefone, TelefoneEmergencial, NomeEmergencial, Endereço, Escolaridade) 
    VALUES('$nome', '$sexo', '$cpf', '$nomesocial', '$datanasc', '$nomemae', '$cartaosus', '$email', '$telefone', '$telemergencia', '$nomeemergencia', '$endereco', '$escolaridade')");

    $resultado2 = mysqli_query($conexcao, "INSERT INTO atendimento(`Registro Coren`, DataAtendimento, Alergias, sintomas, Atendimento, diagnostico, receituario, PosAtendimento) 
    VALUES('$coren', '$dataAtendimento', '$alergias', '$sintomas', '$atendimento', '$diagnostico', '$receituario', '$posatendimento')");
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prontuário</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <!-- <nav>
        <a href="">
            <img class="icon "src="https://img.icons8.com/ios-glyphs/30/medical-doctor.png" alt="medical-doctor"/>
        </a>
        <a href="">
            <img class="icon" src="https://img.icons8.com/material-rounded/24/clipboard.png" alt="clipboard"/>
        </a>
    </nav> -->
    <main>
        <h1 id="titulo">Prontuário</h1>
        <form action="prontuario.php" method="post" name="prontuario" id="prontuario">
            <div class="main">
                <h1>Informações Pessoais</h1>
                <div class="container dois-um">
                    <label for="nome" class="dois-terços">
                        <p>Nome Completo</p>
                        <input type="text" name="nome" id="nome">
                    </label>
                    
                    <label for="sexo" class="um-terço">
                        <p>Sexo</p>
                        <select name="sexo" id="sexo">
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="indefinido">Indefinido</option>
                        </select>
                    </label>

                    <label for="nome-social" class="dois-terços">
                        <p>Nome Social (se aplicável)</p>
                        <input type="text" name="nomesocial" id="nome-social">
                    </label>
                </div>
    
                <div class="container metade">
                    <label for="cpf" class="metade">
                        <p>CPF</p>
                        <input type="number" name="cpf" id="cpf">
                    </label>
        
                    <label for="nascimento" class="metade">
                        <p>Data de nascimento</p>
                        <input type="date" name="datanasc" id="nascimento">
                    </label>
            
                    <label for="nome-mae" class="metade">
                        <p>Nome da Mãe</p>
                        <input type="text" name="nomemae" id="nome-mae">
                    </label>

                    <label for="cartao-sus" class="metade">
                        <p>Número do Cartão do SUS</p>
                        <input type="number" name="sus" id="cartão-sus">
                    </label>

                    <label for="email" class="metade">
                        <p>Endereço de E-mail</p>
                        <input type="email" name="email" id="email">
                    </label>
            
                    <label for="telefone" class="metade">
                        <p>Telefone</p>
                        
                        <input type="tel" name="telefone" id="telefone">
                    </label>
            
                    <label for="telefone-emergencia" class="metade">
                        <p>Telefone de Emergência</p>
                        
                        <input type="tel" name="telemergencia" id="telefone-emergencia">
                    </label>
            
                    <label for="nome-emergencia" class="metade">
                        <p>Contato de Emergência</p>
                        
                        <input type="text" name="nomeemergencia" id="nome-emergencia">
                    </label>
                </div>
    
                <div class="container">
                    <label for="endereço" class="dois-terços">
                        <p>Endereço Completo</p>
                        <input type="text" name="endereço" id="endereço">
                    </label>
        
                    <label for="escolaridade" class="um-terço">
                        <p>Nível de Escolaridade</p>
                        <input type="text" name="escolaridade" id="escolaridade">
                    </label>
                </div>
            </div>
    
            <div class="main fundo">
                <h1>Atendimento</h1>
                <div class="container metade">
                    <label for="crm" class="metade">
                        <p>Registro no Coren</p>
                        <input type="text" name="coren" id="coren">
                    </label>
                    <label for="data" class="metade">
                        <p>Data do Atendimento</p>
                        <input type="date" name="dataatendimento" id="data">
                    </label>
                </div>
                <div class="container metade">
                          
                    <label for="alergias" >
                        <p>Alergias Conhecidas</p>
                        <input type="text" name="alergias" id="alergias">
                    </label>
                </div>
                
                <label for="sintomas">
                    <p>Sintomas Apresentados</p>
                    <textarea name="sintomas" id="sintomas" rows="3"></textarea>
                </label>
    
                <div class="container metade">
                    <label for="atendimento" class="metade">
                        <p>Descrição do Atendimento</p>
                        <textarea name="atendimento" id="atendimento" rows="15"></textarea>
                    </label>
        
                    <label for="possivel-diagnostico" class="metade">
                        <p>Hipótese Diagnóstica</p>
                        <textarea name="diagnostico" id="possivel-diagnostico" rows="15"></textarea>
                    </label>
                </div>
                
    
                <div class="container metade">
                    <label for="receituario" class="metade">
                        <p>Prescrição Médica</p>
                        <textarea name="receituario" id="receituario" rows="15"></textarea>
                    </label>
        
                    <label for="pos-atendimento" class="metade">
                        <p>Instruções Pós-Atendimento</p>
                        <textarea name="posatendimento" id="pos-atendimento" rows="15"></textarea>
                    </label>
                </div>
                    <input type="submit" name="submit" id="submit">
            </div>
        </form>
    </main>
    
</body>
</html>

<?php
if(isset($_POST["submit"]))
{



include_once('config.php');

$nome = $_POST['nome'];
$sexo = $_POST['genero'];
$cpf = $_POST['cpf'];
$datanasc = $_POST['nascimento'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$telemergencia = $_POST['telefone-emergencia'];
$nomeemergencia = $_POST['nome-emergencia'];
$endereço = $_POST['endereço'];
$escolaridade = $_POST['escolaridade'];
$necessidades = $_POST['necessidades'];
$alergias = $_POST['alergias'];
$sintomas = $_POST['sintomas'];
$atendimento = $_POST['atendimento'];
$diagnostico = $_POST['diagnostico'];
$receituario = $_POST['receituario'];
$posatendimento = $_POST['pos-atendimento'];

$resultado = mysqli_query($conexcao, "INSERT INTO pacientes(nome, sexo, cpf, DataNascimento, Email, Telefone, TelefoneEmergencial, NomeEmergencial, Endereço, Escolaridade) 
VALUES('$nome', '$sexo', '$cpf', '$datanasc', '$email', '$telefone', '$telemergencia', '$nomeemergencia', '$endereço', '$escolaridade')");

$resultado = mysqli_query($conexcao, "INSERT INTO atendimento(NecessidadesEspeciais, Alergias,  sintomas, Atendimento, diagnostico, receituario, PosAtendimento) 
VALUES('$necessidades', '$alergias', '$sintomas', '$atendimento', '$diagnostico', '$receituario', '$posatendimento')");




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
    <main>
        <h1 id="titulo">Prontuário</h1>
        <form action="backend.php" method="post" name="prontuario" id="prontuario">
            <div class="main">
                <h1>Informações Pessoais</h1>
                <div class="container dois-um">
                    <label for="nome" class="dois-terços">
                        <p>Nome</p>
                        <input type="text" name="nome" id="nome">
                    </label>
                    
                    <label for="sexo" class="um-terço">
                        <p>Sexo</p>
                        <select name="genero" id="sexo">
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                        </select>
                    </label>
                </div>
    
                <div class="container metade">
                    <label for="cpf" class="metade">
                        <p>CPF</p>
                        <input type="number" name="cpf" id="cpf">
                    </label>
        
                    <label for="nascimento" class="metade">
                        <p>Data de nascimento</p>
                        <input type="date" name="nascimento" id="nascimento">
                    </label>
            
        
                    <label for="email" class="metade">
                        <p>E-mail</p>
                        <input type="email" name="email" id="email">
                    </label>
            
                    <label for="telefone" class="metade">
                        <p>Telefone</p>
                        
                        <input type="tel" name="telefone" id="telefone">
                    </label>
            
                    <label for="telefone-emergencia" class="metade">
                        <p>Telefone emergencial</p>
                        
                        <input type="tel" name="telefone-emergencia" id="telefone-emergencia">
                    </label>
            
                    <label for="nome-emergencia" class="metade">
                        <p>Nome (emergencial)</p>
                        
                        <input type="text" name="nome-emergencia" id="nome-emergencia">
                    </label>
                </div>
    
                <div class="container">
                    <label for="endereço" class="dois-terços">
                        <p>Endereço</p>
                        <input type="text" name="endereço" id="endereço">
                    </label>
        
                    <label for="escolaridade" class="um-terço">
                        <p>Escolaridade</p>
                        <input type="text" name="escolaridade" id="escolaridade">
                    </label>
                </div>
            </div>
    
            <div class="main fundo">
                <h1>Atendimento</h1>
                <div class="container metade">
                    <label for="necessidades" class="metade">
                        <p>Necessidades Especiais</p>
                        <input type="text" name="necessidades" id="necessidades">
                    </label>
        
                    <label for="alergias" class="metade">
                        <p>Alergias</p>
                        <input type="text" name="alergias" id="alergias">
                    </label>
                </div>
                
                <label for="sintomas">
                    <p>Sintomas</p>
                    <textarea name="sintomas" id="sintomas" rows="3"></textarea>
                </label>
    
                <div class="container metade">
                    <label for="atendimento" class="metade">
                        <p>Atendimento</p>
                        <textarea name="atendimento" id="atendimento" rows="15"></textarea>
                    </label>
        
                    <label for="diagnostico" class="metade">
                        <p>Diagnóstico</p>
                        <textarea name="diagnostico" id="diagnostico" rows="15"></textarea>
                    </label>
                </div>
                
    
                <div class="container metade">
                    <label for="receituario" class="metade">
                        <p>Receituário</p>
                        <textarea name="receituario" id="receituario" rows="15"></textarea>
                    </label>
        
                    <label for="pos-atendimento" class="metade">
                        <p>Pós-Atendimento</p>
                        <textarea name="pos-atendimento" id="pos-atendimento" rows="15"></textarea>
                    </label>
                </div>
            </div>
        </form>
    </main>
</body>
</html>
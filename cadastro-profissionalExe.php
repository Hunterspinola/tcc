<?php
include('includes/conexao.php');

// Obter dados do formulário
$nome = $_POST['primeironome'];
$sobrenome = $_POST['sobrenome'];
$nome_user = $_POST['usuario'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];
$confirmasenha = $_POST['confirmasenha'];
$profissional = $_POST['profissional'];
$ramo = $_POST['ramo'];

// Verificar se as senhas coincidem
if ($senha !== $confirmasenha) {
    die("As senhas não coincidem.");
}

// Exibir dados (opcional para depuração)
echo "<h1>Dados do Profissional</h1>";
echo "Nome: $nome<br>";
echo "Sobrenome: $sobrenome<br>";
echo "Usuário: $usuario<br>";
echo "Celular: $celular<br>";
echo "Email: $email<br>";
echo "CPF: $cpf<br>";
echo "Senha: $senha<br>";
echo "Confirmação da Senha: $confirmasenha<br>";
echo "É profissional: $profissional<br>";
echo "Ramo: $ramo<br>";

// Prepara a query SQL usando prepared statements
$sql = "INSERT INTO Usuario (nome, sobrenome, nome_user, celular, email, cpf, senha, profissional, ramo) 
        VALUES ('".$nome."', '".$sobrenome."', '".$nome_user."', '".$celular."', '".$email."', '".$cpf."', '".$senha."', '".$profissional."', '".$ramo."')";

$result = mysqli_query($con, $sql);

if ($result) {
    echo "<h2>Dados cadastrados com sucesso!</h2>";
} else {
    echo "<h2>Erro ao cadastrar</h2>";
    echo "<p class='error-message'>".mysqli_error($con)."</p>";
}
?>
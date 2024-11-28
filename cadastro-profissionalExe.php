<?php
include('includes/conexao.php');

// Obter dados do formulário
$primeironome = $_POST['primeironome'];
$sobrenome = $_POST['sobrenome'];
$usuario = $_POST['usuario'];
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
echo "Nome: $primeironome<br>";
echo "Sobrenome: $sobrenome<br>";
echo "Usuário: $usuario<br>";
echo "Celular: $celular<br>";
echo "Email: $email<br>";
echo "CPF: $cpf<br>";
echo "Senha: $senha<br>";
echo "Confirmação da Senha: $confirmasenha<br>";
echo "É profissional: $profissional";
echo "Ramo: $ramo<br>";

// Prepara a query SQL usando prepared statements
$sql = "INSERT INTO Profissional (primeironome, sobrenome, usuario, celular, email, cpf, senha, profissinal, ramo)";
$sql .= "VALUES ('".$primeironome"', '".$sobrenome"', '".$usuario"', '".$celular"', '".$email"', '".$cpf"', '".$senha"', ".$profissional", '".$ramo"')";

$result = mysqli_query($con, $sql);

if ($result) {
    echo "<h2>Dados cadastrados com sucesso!</h2>";
} else {
    echo "<h2>Erro ao cadastrar</h2>";
    echo "<p class='error-message'>".mysqli_error($con)."</p>";
}
?>
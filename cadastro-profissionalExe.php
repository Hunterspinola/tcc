<?php
include('includes/conexao.php');

// Obter dados do formulário
$primeironome = $_POST['primeironome'];
$sobrenome = $_POST['sobrenome'];
$usuario = $_POST['usuario'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$cnpj = $_POST['cnpj'];
$senha = $_POST['senha'];
$confirmasenha = $_POST['confirmasenha'];
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
echo "CNPJ: $cnpj<br>";
echo "Senha: $senha<br>";
echo "Confirmação da Senha: $confirmasenha<br>";
echo "Ramo: $ramo<br>";

// Prepara a query SQL usando prepared statements
$sql = "INSERT INTO Profissional (primeironome, sobrenome, usuario, celular, email, cnpj, senha, ramo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $con->prepare($sql);
if ($stmt === false) {
    die("Erro na preparação da query: " . $con->error);
}

// Associa os parâmetros e executa a query
$stmt->bind_param('ssssssss', $primeironome, $sobrenome, $usuario, $celular, $email, $cnpj, $senha, $ramo);

if ($stmt->execute()) {
    echo "<h2>Dados cadastrados com sucesso!</h2>";
} else {
    echo "<h2>Erro ao cadastrar!</h2>";
    echo "<p class='error-message'>". $stmt->error ."</p>";
}
// Fecha a conexão com o banco de dados
$stmt->close();
$con->close();
//header("Location: index.php");
?>
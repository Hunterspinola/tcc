<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Agama";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Variáveis para armazenar os dados do formulário
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Consulta ao banco de dados para verificar se o usuário existe
$query = "SELECT * FROM Profissional WHERE usuario = '$usuario' AND senha = '$senha'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Se o usuário existe, inicia a sessão e redireciona para a página de dashboard
    session_start();
    $_SESSION['usuario'] = $usuario;
    header('Location: dashboard.php');
    exit;
} else {
    // Se o usuário não existe, exibe uma mensagem de erro
    echo "Usuário ou senha inválidos";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
<?php
include('includes/conexao.php');

$nome_user = $_POST['usuario'];
$senha = $_POST['senha'];

// Verifica se os dados foram passados corretamente
if (empty($nome_user) || empty($senha)) {
    echo "<h1>Usuário ou senha não informados!</h1>";
    exit;
}

// Prepara a consulta SQL
$sql = "SELECT * FROM usuario WHERE user_name = '$nome_user'";

// Executa a consulta SQL e verifica se ocorreu algum erro
$result = mysqli_query($con, $sql);

if (!$result) {
    // Se a consulta falhou, exibe o erro
    die('Erro na consulta SQL: ' . mysqli_error($con));
}

// Verifica se encontrou o usuário
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    
    // Verifica a senha
    if ($row['senha'] == $senha) {
        include('includes/iniciaSessao.php');
        $_SESSION['login'] = $row;
        header('Location: index.php'); // Redireciona para a página inicial
        exit;
    } else {
        echo "<h1>Senha inválida! Tente novamente</h1>";
        header('Location: login.html');
    }
} else {
    echo "<h1>Usuário não encontrado</h1>";
    header('Location: login.html');
}
?>
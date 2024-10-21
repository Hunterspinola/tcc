<?php
include('includes/conexao.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Verificar na tabela Profissional
$sql_profissional = "SELECT * FROM Profissional WHERE usuario = '$usuario'";
$result_profissional = mysqli_query($con, $sql_profissional);

if (mysqli_num_rows($result_profissional) > 0) {
    $row = mysqli_fetch_array($result_profissional);
    if (password_verify($senha, $row['senha'])) { // Usando password_verify para segurança
        include('includes/inicia_sessao.php');
        $_SESSION['login'] = $row;
        header('Location: index.php'); // volta para a página inicial
        exit();
    } else {
        echo "<h1>Senha inválida!</h1>";
        header('Location: login.html'); // retorna à página de login
        exit();
    }
} else {
    // Verificar na tabela Cliente
    $sql_cliente = "SELECT * FROM Cliente WHERE nome_user = '$usuario'";
    $result_cliente = mysqli_query($con, $sql_cliente);
    
    if (mysqli_num_rows($result_cliente) > 0) {
        $row = mysqli_fetch_array($result_cliente);
        if (password_verify($senha, $row['senha_cliente'])) { // Usando password_verify para segurança
            include('includes/inicia_sessao.php');
            $_SESSION['login'] = $row;
            header('Location: index.php'); // volta para a página inicial
            exit();
        } else {
            echo "<h1>Senha inválida!</h1>";
            header('Location: login.html'); // retorna à página de login
            exit();
        }
    } else {
        echo "<h1>Usuário não encontrado</h1>";
    }
}
?>
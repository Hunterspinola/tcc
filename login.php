<?php
include('includes/conexao.php');
session_start(); // Iniciar a sessão

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Verificar na tabela Profissional
$sql_profissional = "SELECT * FROM Profissional WHERE usuario = ?";
$stmt_profissional = $con->prepare($sql_profissional);
$stmt_profissional->bind_param("s", $usuario);
$stmt_profissional->execute();
$result_profissional = $stmt_profissional->get_result();

if ($result_profissional->num_rows > 0) {
    $row = $result_profissional->fetch_assoc();
    if (password_verify($senha, $row['senha'])) {
        $_SESSION['login'] = $row;
        header('Location: index.php');
        exit();
    } else {
        echo "<h1>Senha inválida!</h1>";
        header('Location: login.html');
        exit();
    }
} else {
    // Verificar na tabela Cliente
    $sql_cliente = "SELECT * FROM Cliente WHERE nome_user = ?";
    $stmt_cliente = $con->prepare($sql_cliente);
    $stmt_cliente->bind_param("s", $usuario);
    $stmt_cliente->execute();
    $result_cliente = $stmt_cliente->get_result();
    
    if ($result_cliente->num_rows > 0) {
        $row = $result_cliente->fetch_assoc();
        if (password_verify($senha, $row['senha_cliente'])) {
            $_SESSION['login'] = $row;
            header('Location: index.php');
            exit();
        } else {
            echo "<h1>Senha inválida!</h1>";
            header('Location: login.html');
            exit();
        }
    } else {
        echo "<h1>Usuário não encontrado</h1>";
    }
}
?>
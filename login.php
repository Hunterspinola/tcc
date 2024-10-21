<?php
    include('includes/conexao.php');
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM Profissional WHERE usuario = 'usuario'";
    $result = mysqli_query($con, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        if($row['senha'] == $senha) {
            include('includes/inicia_sessao.php');
            $_SESSION['login'] = $row;
            header('Location: index.html'); // volta para a página inicial
        } else {
            echo "<h1>Senha inválida seu burro! Sua senha é ""</h1>";
            header('Location: login.php'); // retorna à página de login
        }
    } else {
        echo "<h1>Usuário não encontrado</h1>";
    }
?>
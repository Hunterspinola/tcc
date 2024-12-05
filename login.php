<?php
    include('includes/conexao.php');
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE user_name = '$usuario'";
    $result = mysqli_query($con, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        if($row['senha'] == $senha) {
            include('includes/iniciaSessao.php');
            $_SESSION['login'] = $row;
            header('Location: index.php'); // volta para a página inicial
        } else {
            echo "<h1>Senha inválida!</h1>";
        }
    } else {
        echo "<h1>Usuário não encontrado</h1>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Exe.css">
    <title>Login</title>
</head>
<body>
    <!--------------------------------INICIO MENU-------------------->
    <header>
      <input type="checkbox" name="" id="risquinhos">
        <label for="risquinhos" class="fas fa-bars"></label>
        <a href="#" class="logo">AGAMA<span>.</span></a>

      <nav class="navbar">
        <a href="index.php">voltar</a>
      </nav>
      
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="login.html" class="fas fa-user"></a>
      </div>
    </header>
    <!-- -----------------------------------------------------------FIM MENU---------------------------------------------------------------------------- -->
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
</body>
</html>

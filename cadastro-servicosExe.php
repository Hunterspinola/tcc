<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro-servicosExe.css">
    <title>Resultado</title>
</head>
<body>
    <!--------------------------------INICIO MENU-------------------->
    <header>
      <input type="checkbox" name="" id="risquinhos">
        <label for="risquinhos" class="fas fa-bars"></label>
        <a href="#" class="logo">AGAMA<span>.</span></a>

      <nav class="navbar">
        <a href="cadastro-servicos.php">voltar</a>
      </nav>
      
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="login.html" class="fas fa-user"></a>
      </div>
    </header>
    <!-- -----------------------------------------------------------FIM MENU---------------------------------------------------------------------------- -->
<section>
    <div class="title">Status do cadastro</div>
        <div class="principal">
       
            <?php
            include('./includes/conexao.php');
            //UPLOAD FOTO
            $nome_foto = "";
            if(file_exists($_FILES['foto']['tmp_name'])){
            $pasta_destino = 'fotos/';
            $extensao = strtolower(substr($_FILES['foto']['name'],-4));
            $nome_foto = $pasta_destino . date('Ymd-His').$extensao;
            move_uploaded_file($_FILES['foto']['tmp_name'],$nome_foto);
            }
            //FIM UPLOAD

            $titulo = $_POST['titulo'];
            $texto = $_POST['texto'];
            $telefone = $_POST['telefone'];
            echo "<h1>Dados do serviço</h1>";
            echo "<h3>titulo: $titulo</h3></br>";
            echo "<h3>texto: $texto</h3></br>";
            echo "<h3>telefone: $telefone</h3></br>";
            
            $sql = "INSERT INTO Servico (titulo, texto, telefone, foto)";
            $sql .= " VALUES('$titulo', '$texto', '$telefone', '$nome_foto')";
            echo $sql;
            // Executa comando no banco de dados
            $result =  mysqli_query($con, $sql);
            if ($result) {
                echo "<h2>Dados cadastrados com sucesso!</h2>";
            } else {
                echo "<h2>Erro ao cadastrar!</h2>";
                echo mysqli_error($con);
            }
            ?>
            
        </div>
    </section>
   
</body>

</html>
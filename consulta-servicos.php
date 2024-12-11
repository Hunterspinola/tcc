<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="consulta-servicos.css">
    <title>Consultar Serviços</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css ">

</head>
<body>
     <!--------------------------------INICIO MENU-------------------->
     <header>
     
      <input type="checkbox" name="" id="risquinhos">
        <label for="risquinhos" class="fas fa-bars"></label>
        <a href="index.php" class="logo">AGAMA<span>.</span></a>
       
        <h1 class="cs" >Consulta de Serviços</h1>
        <nav class="navbar">
        <a href="index.php">voltar</a>
      </nav>
      
      <div class="icons">

        <a href="login.html" class="fas fa-user"></a>
      </div>
    </header>
    <!-- ----------------------FIM MENU----------------------------------->
        
    <nav class="navBar">
        <div class="container">
        <form method="GET" action="./includes/busca.php">
            <input type="text" name="query" id="txtBusca" placeholder="Digite sua pesquisa...">
            <input type="submit" id="btnBusca" value="Buscar">
        </form>
        </div>
      </nav>
<section>
        <div class="consulta">
            <?php
            session_start();
            $id_usuario = $_SESSION['login']['id'];
            include('includes/conexao.php');
            $sql ="SELECT ser.id_servico id, ser.id id_usuario,  
                    ser.titulo, ser.texto, ser.telefone, ser.cidade , foto,  usu.nome
                   FROM servico ser
                   left join usuario usu on usu.id = ser.id";
            $result = mysqli_query($con, $sql);
            ?>
           
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nome do profissional</th>
                        <th>Serviço oferecido</th>
                        <th>Descrição do serviço</th>
                        <th>Cidade</th>
                        <th>Telefone para contato</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                    while ($row = mysqli_fetch_array($result)) {
                        
                        echo "<tr>";
                        if($row['foto'] == ""){
                            echo"<td></td>";
                        }
                        else{
                            echo"<td><img src='".$row['foto']."' width='80' height='100'/></td>";
                        }  
                        echo "<td>" . $row['nome'] . "</td>";
                        echo "<td>" . $row['titulo'] . "</td>";
                        echo "<td>" . $row['texto'] . "</td>";
                        echo "<td>" . $row['cidade'] . "</td>";
                        echo "<td>" . $row['telefone'] . "</td>";
                        if($id_usuario == $row['id_usuario'] ){
                        echo "<td><a href='deleta-servico.php?id=" . $row['id'] . "'>Deletar</a></td>";
                        }else{
                            echo "<td></td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>
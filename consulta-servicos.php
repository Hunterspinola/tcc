<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="consulta-servicos.css">
    <title>Consultar Serviços</title>
</head>
<body>
     <!--------------------------------INICIO MENU-------------------->
     <header>
      <input type="checkbox" name="" id="risquinhos">
        <label for="risquinhos" class="fas fa-bars"></label>
        <a href="index.php" class="logo">AGAMA<span>.</span></a>
        <h1 class="cs" >Consulta de Serviços</h1>
      
        <nav class="navbar">
        <a href="pagprincipal.html">Pesquisar</a>
      </nav>
      
      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="login.html" class="fas fa-user"></a>
      </div>
    </header>
    <!-- ----------------------FIM MENU----------------------------------->
        
<section>
        <div class="consulta">
            <?php
            include('./includes/conexao.php');
            $sql ="SELECT ser.id, ser.titulo, ser.texto, ser.telefone , foto FROM servico ser";
            $result = mysqli_query($con, $sql);
            ?>
           
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Serviço</th>
                        <th>Descrição</th>
                        <th>Telefone</th>
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
                        echo "<td>" . $row['titulo'] . "</td>";
                        echo "<td>" . $row['texto'] . "</td>";
                        echo "<td>" . $row['telefone'] . "</td>";
                       
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>
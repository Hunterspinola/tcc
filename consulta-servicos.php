<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section>
        <div class="principal flex inverter_column">
            <?php
            include('./includes/conexao.php');
            $sql ="SELECT ser.id, ser.titulo, ser.texto, ser.telefone , foto FROM servico ser";
            $result = mysqli_query($con, $sql);
            ?>
            <h1>Consulta de Serviços</h1>
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
<?php
include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM servico WHERE id_servico = $id";
    $result = mysqli_query($con, $sql);
    if ($result)
        echo "<h2>Dados deletados!</h2>";
        else {
        echo "<h2>Erro ao deletar!</h2>";
        echo "<h2>" . mysqli_error($con) . "</h2>";
        }
?>
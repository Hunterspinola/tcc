<?php
    //Informações do banco
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'Agama';
    $port     = 3306; //ou 3306, no caso do meu pc
    //Conecta com o banco
    $con = mysqli_connect($hostname, $username, $password, $database, $port);
    //Verifica a conexão
    if (mysqli_connect_error())
    {
        printf("Erro de conexão: %s", mysqli_connect_error());
        exit();
    }
?>
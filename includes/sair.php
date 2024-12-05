<?php
    include('iniciaSessao.php');
    //limpa variáveis de sessão
    session_unset();
    //destroi a sessão
    session_destroy();
    //volta para a página inicial
    header('Location: ../index.php');
?>
<?php
    if(session_status() != PHP_SESSION_ACTIVE)
    {
        // 60 minutos de inatividade pelo usuário fará com que a sessão se encerre
        session_cache_expire(60);
        session_start();
    }
?>
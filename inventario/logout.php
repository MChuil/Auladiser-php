<?php 
    //Eliminar TODAS las sesiones
    session_start();
    session_destroy();

    //Redireccionar a index
    header('Location:index.php');
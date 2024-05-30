<?php 
    session_start();
    // borrar TODAS las variables de sesion
    // unset($_SESSION['correo']);
    // unset($_SESSION['usuario']);
    // unset($_SESSION['tipoUser']);
    session_destroy();

    //redirigir a el index.php
    header('Location: index.php');
?>
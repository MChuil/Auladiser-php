<?php
    session_start();
    require_once 'settings/conexion.php';

    //Validar que venga los datos
    if(empty($_POST['email']) || empty($_POST['password'])){
        $_SESSION['error'] = "Datos incompletos...";
        header('Location: index.php');
        return;
    }
    $email = $_POST['email'];
    $password = $_POST['password'];
    //conectarme a la DB
    $conect = conexion();
    //Consulta por el correo
    $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $query = $conect->query($sql);
    $user = mysqli_fetch_array($query);
    //si no se encontro el correo
    if(!$user){
        $_SESSION['error'] = "Correo y/o contraseña incorrecta...";
        header('Location: index.php');
        return;
    }
    
    //validar la contraseña
    if(!password_verify($password, $user['password'])){
        $_SESSION['error'] = "Correo y/o contraseña incorrecta...";
        header('Location: index.php');
        return;
    }

    //Crear variables de sesión
    $_SESSION['user'] = $user['name'];
    $_SESSION['rol'] = $user['rol'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['isLogged'] = true;
    
    //Dar acceso
    header('Location:dashboard.php');
<?php 
    session_start();
    if($_POST['correo'] == '' || $_POST['clave'] == ''){
        $_SESSION['error'] = "Datos incompletos...";
        //redireccionar
        header("Location: index.php");
        return;
    }
    $email = $_POST['correo'];
    $pass = $_POST['clave'];

    //validar que las credenciales sean correctas
    if($email == 'developer.chuil@gmail.com' && $pass== '123456'){
        //creación de variables de sesión
        $_SESSION['correo'] = $email;
        $_SESSION['usuario'] = 'Miguel Chuil Mártinez';
        $_SESSION['tipoUser'] = 'Administrador';
        $_SESSION['login'] = true;
        //redireccionar
        header("Location: admin.php");
    }else{
        $_SESSION['error'] = "Correo y/o contraseña incorrecta...";
        //redireccionar
        header("Location: index.php");
    }
?>
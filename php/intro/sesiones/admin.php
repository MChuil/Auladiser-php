<?php 
    session_start();
    //validar si el usuario inicio sesion    
    if(!isset($_SESSION['login'])){
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Panel de Administración</h1>
    </header>
    <main>
        <h3>Area protegida</h3>

        <p>
            Bienvenido, <?php echo $_SESSION['usuario']; ?>
            <br>
            Tipo de usuario: <?php echo $_SESSION['tipoUser']; ?>
            <br>
            Correo: <?php echo $_SESSION['correo']; ?>
        </p>

        <p>
            <a href="salir.php" class="text-danger">Cerrar sesión</a>
        </p>
    </main>
</body>
</html>
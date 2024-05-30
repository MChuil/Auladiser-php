<?php 
    session_start();
    //para borrar una variable de session: unset($_SESSION['nombre']);

    //verificar si una variable existe: isset($variable), esto devuelve un booleano(true/false)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Sistema PHP</h1>
    <main>
        <?php 
            if(isset($_SESSION['error'])){ //si existe la variable de sesión
                echo $_SESSION['error']; //imprime
                unset($_SESSION['error']); //borra 
            }
        ?>
        <form action="process.php" method="post">
            <div>
                <label for="">Email</label>
                <input type="email" name="correo" placeholder="Ingresa tu correo">
            </div>
            <div>
                <label for="">Contraseña</label>
                <input type="password" name="clave" placeholder="Ingresa tu contraseña">
            </div>
            <button type="submit">Iniciar sesión</button>
        </form>
    </main>
</body>
</html>
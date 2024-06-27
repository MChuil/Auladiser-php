<?php
    session_start();
    require_once "settings/db.php";

    if(empty($_POST['name']) || empty($_POST['priority'])){ //si no vienen los datos completos
        $_SESSION['error'] = "Datos incompletos...";
        header('Location: index.php');
        return;
    }
    //pasamos los valores a variables
    $name = $_POST['name'];
    $priority = $_POST['priority'];
    $date = date('Y-m-d');
    $status = 'Pendiente';
    //insertar en la base de datos
    try {
        $conexion = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);
        $sql = "INSERT INTO tasks (name, priority, date, status) VALUES ('$name', '$priority', '$date', '$status')";
        $response = $conexion->query($sql); //true o false
        if($response == true){
            $_SESSION['msj'] = "Datos insertados correctamente...";
        }else{
            $_SESSION['error'] = "No se pudo agregar la información, intente nuevamente...";
        }
        header('Location: index.php');
    } catch (\Throwable $th) {
        echo "Error de conexion. " . $th->getMessage();
        die;
    }
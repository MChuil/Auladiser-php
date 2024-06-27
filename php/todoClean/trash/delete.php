<?php 
    session_start();
    require_once "settings/db.php";
    if(empty($_GET['id'])){
        header('Location: index.php');
        return;
    }
    try {
        $id = $_GET['id'];
        $conexion = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);
        $sql = "DELETE FROM tasks WHERE id = $id";
        $response = $conexion->query($sql); //true o false
        if($response == true){
            $_SESSION['msj'] = "Datos eliminados correctamente...";
        }else{
            $_SESSION['error'] = "No se pudo eliminar la información, intente nuevamente...";
        }
        header('Location: index.php');
    } catch (\Throwable $th) {
        echo "Error de conexion. " . $th->getMessage();
        die;
    }


    






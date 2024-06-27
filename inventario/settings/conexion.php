<?php 
    require_once 'config.php';
    
    function conexion(){
        try {
            $conexion = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);
            return $conexion;
        } catch (\Throwable $th) {
            echo "Error de conexion. " . $th->getMessage();
            die;
        }
    }
<?php 
    session_start();
    require_once "settings/db.php";

    function conexion(){
        try {
            $conexion = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);
            return $conexion;
        } catch (\Throwable $th) {
            echo "Error de conexion. " . $th->getMessage();
            die;
        }
    }

    function selectAll($conexion){
        return $conexion->query("SELECT * FROM tasks");
    }

    function create($conexion, $name, $priority){
    //     $date = date('Y-m-d');
    //     $status = 'Pendiente';
    //     $sql = "INSERT INTO tasks (name, priority, date, status) VALUES ('$name', '$priority', '$date', '$status')";
    //     return $conexion->query($sql); //true o false
    }


    function update(){

    }


    function delete(){
        
    }
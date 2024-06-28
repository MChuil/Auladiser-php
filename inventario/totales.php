<?php 

    require_once 'settings/conexion.php';

    function totales(){
        $conexion = conexion();
        //consultas
        $queryInventory = $conexion->query("SELECT COUNT(id) AS total FROM inventory");
        $queryUser = $conexion->query("SELECT COUNT(id) AS total FROM users");

        //sacamos la información de cada consulta
        $inventory = mysqli_fetch_array($queryInventory);
        $user = mysqli_fetch_array($queryUser);

        $total = ['inventorys' => $inventory['total'], 'users' => $user['total']];
        return $total;
    }

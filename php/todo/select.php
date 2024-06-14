<?php 
    //1. incluir el archivo de configuracion
    require_once "settings/db.php";

    //2. Manejar posibles errores
    try {
        //3.Crear la conexion a la base de datos
        $conexion = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);  //Retorna la conexión
        echo "Conexion exitosa...";
        echo "<hr>";
        //consultar TODO el contenido de mi tabla de tareas (tasks)
        // $sql = "SELECT * FROM tasks";  //instrucción sql
        // $response = $conexion->query($sql); //Retorna resultado

        //$data = mysqli_fetch_all($response);  //obtengo TODOS los datos encontrados en la variable data
        
        // mysqli_fecth_array - devuelve la información como array y como array asociativo de 1 en 1
        // mysqli_fecth_assoc - devuelve la información como array asociativo de 1 en 1

        //mostrar la información de forma legible
        // echo "<ul>";
        // while($row = mysqli_fetch_array($response)){  //ciclo para leer cada fila del resultado
        //     echo "<li>" .$row['name'] . "</li>"; 
        // }
        // echo "</ul>";

        listAll($conexion);

        //4. Cerrar conexion
        mysqli_close($conexion);
    } catch (\Throwable $th) {
        echo "Error: " . $th->getMessage();
    }


    function listAll($conexion){
        // $sql = "SELECT * FROM tasks";  //instrucción sql
        $sql = "SELECT * FROM tasks WHERE priority = 'Media'";
        $response = $conexion->query($sql); //Retorna resultado
        echo "<ul>";
        while($row = mysqli_fetch_array($response)){  //ciclo para leer cada fila del resultado
            echo "<li>" .$row['name'] . "</li>"; 
        }
        echo "</ul>";
    }

    /**
     *      CRUD
     *      
     *      Create
     *          Sintaxis:
     *              INSERT INTO <nombre de la tabla> (campos) VALUES (valores)
     *      
     * 
     *      Read (select) [consultas]
     *          Sintaxis:
     *              SELECT <los campos de la tabla que se necesitan> FROM <nombre de la tabla>
     * 
     *              SELECT <los campos de la tabla que se necesitan> FROM <nombre de la tabla> WHERE <condicion>
     * 
     *      Update
     *          Sintaxis:
     *             UPDATE  <nombre de la tabla> SET columna=valor, columna=valor WHERE <condicion>
     * 
     * 
     *      Delete
     *          Sintaxis:
     *              DELETE FROM <nombre de la tabla> WHERE <condicion>
     * 
     */
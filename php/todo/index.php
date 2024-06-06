<?php 
    /**
     *  MySQLi solo para bases de datos MySQL
     * 
     *  PDO
     *      Mysql
     *      Sql Server
     *      Postgres
     * 
     */
    
    /**
     *  conexion a base de datos MySQL
     * 
     *  Sintaxis:
     *      $variable = mysqli_connect(servidor, usuario, password, basededatos);
     * 
     *  
     */

    /**
     *      Los include se usan para incluir script NO criticos para el funcionamiento
     *      include
     *      include_once
     * 
     *      Los required se usan para incluir script criticos para el funcionamiento
     *      require
     *      require_once
     * 
     */
    require_once "config.php";
    
    try{
        $conexion = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);
        echo "Conexion a la base de datos exitosa...";
        mysqli_close($conexion); //cierra la conexion
    }catch(Throwable $th){
        echo "Error de conexion a la base de datos, " . $th->getMessage();
    }

    /**
     * 
     *      Manejo de errores
     * 
     *      Estructura try...catch
     * 
     *      Sintaxis:
     *          try{
     *                 codigo...
     *                  ...
     *                  ...
     *                  ...
     *          }catch(tipo $variable){ 
     *                 lo que voy a hacer cuando haya error
     *          }
     * 
     */

    // try{
    //     $number = 89;
    //     $division = $number /0;
    //     echo "El resultado de la división es: $division";
    // }catch(Throwable $e){
    //     echo "Error: " . $e->getMessage();
    // }



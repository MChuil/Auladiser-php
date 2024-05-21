<?php 

    date_default_timezone_set('Europe/Rome');
    /**
     *  Funciones
     * 
     *  Tareas pre-programadas
     * 
     */

    // $saludo = "Hola de desde PHP...";

    // echo strlen($saludo);

    $password = "ab1234567894";

    if(strlen($password)<8){
        echo "La contraseña debe tener minimo 8 caracteres";
    }


    echo "<br>";
    
    // remplazar texto
    $mensaje = "Este es un mensaje creado por yo, para tu...";
    $nuevoMensaje = str_replace("yo", "Miguel Chuil", $mensaje);
    $mensajeFinal =    str_replace("tu", "Andrea", $nuevoMensaje);
    echo $mensajeFinal;
    
    echo "<br>";
    
    //repetir string
    echo str_repeat('_',100);
    
    echo "<br>";
    
    //Redondear numeros
    
    $calificacion = 5.3;
    
    echo "Promedio: " . round($calificacion); //6
    
    //Generar numeros aleatorios
    echo "<br>";
    echo rand();
    echo "<br>";
    echo rand(1,100);
    
    echo "<br>";
    //Fechas y horas
    echo date('d-m-Y H:i:s'); //año

    echo "<br>";
    echo "<br>";
    echo "<br>";
    
    
    $mensaje = "Este es mi mensaje";
    
    echo strtoupper($mensaje); //convierte a mayusculas
    echo "<br>";
    echo strtolower($mensaje); //convierte a minusculas
    echo "<br>";

    /**
     *  Funciones personalizadas
     * 
     *      Sintaxis:
     *          function nombreDeLaFunction(){
     *                  código....         
     *                  código....         
     *                  código....         
     *                  código....         
     *          }
     * 
     * 
     *          nombreDeLaFunction();  //aqui se llama a la función
     */

    function saludar(){
        echo "Hola mundo cruel...";
    }

    saludar();

?>
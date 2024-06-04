<?php 

    $days = ['Lunes', 'Martes', 'Miercoles'];

    //agregar elementos al final del array
    array_push($days, 'Jueves', 'Viernes', 'Sabado');

    //agregar elementos al principo del array
    array_unshift($days, 'Domingo');

    // echo json_encode($days);
    echo "<hr>";
    
    $numbers = [9,6,2,10,1,4,7,3,6];
    
    //contar los elementos del array
    echo "El array 'numbers' tiene " . count($numbers) . ' elementos.';
    
    echo "<hr>";
    //buscar un elemento dentro del array
    $search = array_search(6, $numbers); //retorna el indice del primer valor encontrado o falso cuando no encuentra
    echo "Valor encontrado en la posición: $search";
    
    echo "<hr>";
    //Ordenar un array
    asort($numbers);
    print_r($numbers);
    echo "<hr>";
    arsort($numbers);
    print_r($numbers);


    echo "<hr>";
    $words = ['c' => 'cuidado', 'a' => 'ahora', 'd' => 'despues', 'b' => 'bien'];
    asort($words);
    print_r($words);
    echo "<hr>";
    arsort($words);
    print_r($words);
    
    echo "<hr>";
    //eliminar valores duplicados
    
    $months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Febrero', 'Mayo', 'Junio', 'Abril'];
    $newMonths = array_unique($months); //devuelve un nuevo array SIN duplicados
    echo 'Array original | ';
    print_r($months);
    echo "<hr>";
    echo "Nuevo array, sin duplicados: ";
    print_r($newMonths);

    /**
     *      Recorrer arrays
     *  Existe un bucle que permite recorrer TODOS los elementos de un array
     *  Sintaxis:
     *      foreach($array as $key => $value){
     *              codigo
     *      }
     * 
     *      foreach($array as $value){
     *          codigo
     *      }
     */

    echo "<hr>";
    foreach($newMonths as $value){
        echo "Mes: $value <br>";
    }
    
    echo "<hr>";
    foreach($words as $word){
        echo "Palabra: $word <br>";
    }

?>
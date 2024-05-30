<?php 
    /**
     *  Arrays (arreglos, matrices)
     * 
     *  Un array es una colección de datos, puede ser una colección de números,
     *  cadenas, objetos, etc.
     * 
     *  A diferencia de la variable, el array puede almacenar varios valores. 
     * 
     *      Existen dos tipos de arrays:
     *      - Indexados
     *      - Asociativos
     * 
     *  Los indexados son aquellos que tienen un índice numérico, es decir, cada valor
     *  tiene un número que lo identifica, iniciando en la posición 0.
     * 
     *  Ejemplo: 
     *      $miPrimerArray = array(9, 6, 8, 12, 45, 36, 78);
     *      echo $miPrimerArray[5];
     * 
     *  Los asociativos son aquellos que tienen un índice alfanumérico, es decir, cada valor 
     *  tiene una clave que lo identifica. La clave siempre se escribe entre comillas simples o dobles.
     *  Ejemplo:
     *      $miPrimerAsociativo = array('clave' => 'valor', 'clave' => 'valor', 'clave' => valor);
     *                              array('name' => 'Juan', 'lastname' => 'Pérez', 'age' => 25, 'casado' => true);
     *      echo $miPrimerAsociativo['age'];  // 25
     *      echo $miPrimerAsociativo['name'];  // Juan
     */
    
    // Crear un array indexado
    $numeros = array(6, 8, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30);
    echo $numeros[1];
    echo "<hr>";
    
    //imprimir un arreglo completo
    print_r($numeros);
    echo "<hr>";
    var_dump($numeros);
    
    echo "<hr>";
    $dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
    var_dump($dias);
    
    echo "<hr>";
    $hibrido = [1, 2, 3.1416, 'Hola', 'Mundo', 4, true, 6];
    var_dump($hibrido);
    echo "<hr>";
    
    $multi = array( array('A', 'B', 'C'), array(4, 5, 6), array('Juan', 'Luis', 'Pedro'));
    // $multi = [ ['A', 'B', 'C'], [4, 5, 6], ['Juan', 'Luis', 'Pedro'] ];
    echo $multi[2][1];

?>
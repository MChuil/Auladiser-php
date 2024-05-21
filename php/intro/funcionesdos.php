<?php 

    /**
     *  Funciones con parametros (argumentos)
     * 
     *  Son aquellas que reciben valores para realizar una tarea
     * 
     */

     //Funcion SIN parametros
    function bienvenida(){
        echo "Bienvenido a mi sitio web";
    } 

    bienvenida();

    echo "<br>";

    function bienvenidaPersonalizado($x){
        echo "Bienvenido(a) $x, a mi sitio web";
    }

    bienvenidaPersonalizado('Juan Camaney');
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    /**
     *      crear 4 funciones para realizar operaciones basicas
     *          - suma
     *          - restar
     *          - dividir
     *          - multiplicar
     *          
     * 
     */

    function suma($number1, $number2){
        echo $number1 + $number2;
    }

    suma(458,98); //460

    $number1 = 102;

    function restar($number1, $number2){
        echo $number1 - $number2;
    }

    function multiplicacion($number1, $number2){
        echo $number1 * $number2;
    }

    function division($number1, $number2){
        if($number2 == 0){
            echo "Error, no se pude dividir entre cero...";
            return;
        }
        echo "Resultado ($number1 entre $number2): " .  $number1 / $number2;
    }

    echo "<br>";
    //ejecutar
    division(25,9); //89/0

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    // argumentos opcionales (valores por defecto)
    function sum($number1, $number2 =0){
        echo $number1 + $number2;
    }

    sum(99);


    /**
     *      Crear una nueva función llamada 'menu', la cual debe recibir 3 argumentos
     *      el primer argumento es para seleccionar las operacion a realizar, donde:
     *          1 = suma
     *          2 = resta
     *          3 = multiplicación
     *          4 = división
     *      Los otros dos argumentos son para realizar la operación seleccionada
     * 
     *      La llamada a la función deberia ser algo asi:
     *          menu(1,56,4);
     *  
     * 
     * 
     */

     echo "<br>";
     echo "<br>";
     echo "<br>";
     echo "<br>";
    function menu($option, $number1, $number2){
        
        if($option == 1){
            suma($number1, $number2);
        }else if($option == 2){
            restar($number1, $number2);
        }else if($option == 3){
            multiplicacion($number1, $number2);
        }else if($option == 4){
            division($number1, $number2);
        }else{
            echo "Error, opción invalida...";
        }
    }


    menu(2, 48, 28);

    echo "<br>";
    echo "<br>";
    echo "<br>";

    /**
     * 
     *      Crear una función que me genere un numero aleatorio
     *      dentro de un rango dado si es que se indica, si no
     *      serian  sin rango
     * 
     *      ejemplo:
     *          numeroAleatorio()
     */


    function numeroAleatorio($init = 0, $end = 0){
        if($init == 0 && $end == 0){
            echo rand();
        }else{
            //validar que el inicio no se mayor que el final
            if($init > $end){
                echo "El rango esta mal configurado... ";
                return;
            }
            echo rand($init, $end);
        }
    }

    echo "Aleatorio: " . numeroAleatorio();

?>
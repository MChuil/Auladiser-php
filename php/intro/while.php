<?php 

    /**
     *      Estructura repetitiva 'While'
     *      Las estructuras repetitivas permiten ejecutar una seccion de código una 'N'
     *      cantidad de veces; esto puede ser útil  para procesar grandes cantidades de datos
     *      o realizar una tarea especifica varias veces.
     * 
     * 
     *      sintaxis
     *      while(condicion){
     *          código...
     *          código...
     *          código...
     *          código...
     *          código...
     *          
     * 
     *          acumulador o decrementador
     *      }
     * 
     *      CUIDADO: Si no se pone un acumulador o decrementador, se estaría creando un ciclo infinito
     * 
     */


        $x = 1;

        while($x <= 10){ //el ciclo se detiene cuando la condición es falsa
            echo $x;
            // $x = $x+1;
            // $x += 1;
            $x++;
        }






        
        echo "<hr>";
        //cuenta regresiva
        $segundos = 0;
        while($segundos > 0){
            echo $segundos;
            // $segundos = $segundos - 1;
            // $segundos -= 1;
            $segundos--;
        }

?>